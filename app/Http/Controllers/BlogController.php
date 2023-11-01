<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tags::all();
        $categories = BlogCategory::all();
        $query = BlogPost::query();

        // Filter by title
        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }

        // Sorting
        $orderBy = 'created_at';
        $direction = in_array($request->input('direction'), ['asc', 'desc']) ? $request->input('direction') : 'asc';
        $query->orderBy($orderBy, $direction);

        // Pagination
        $perPage = $request->input('per_page', 10);
        $results = $query->paginate($perPage);

        return view('blog.index_admin', [
            'results' => $results,
            'page_name' => 'Master Blog',
            'tags' => $tags,
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        // Validate the request data
        $validator =  $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'array',
            'tags.*' => 'exists:tags,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust the image validation rules
        ]);

        try {
            // Handle image upload
            $imagePath = null;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = 'uploads/'; // Adjust the storage path as needed
                $image->storeAs($imagePath, $imageName);
            }

            // Create a new blog post
            $post = new BlogPost();
            $post->title = $request->input('title');
            $post->category_id = $request->input('category_id');
            $post->content = $request->input('content');
            $post->views = 0;
            $post->image = $imagePath; // Save the image path to the database
            $save = $post->save();

            // Attach tags to the blog post
            if ($request->has('tags')) {
                $thissis = $post->tags()->sync($request->input('tags'));
            }

            // return response()->json(['message' => 'Berhasil Membuat Blog']);
            return redirect()->back()->with('message', 'Berhasil Membuat Blog');
        } catch (\Exception $e) {
            // return response()->json(['message' => 'Gagal Membuat Blog']);
            return redirect()->back()->with('error', 'Gagal Membuat Blog');
        }
    }

    public function store_tags(Request $request)
    {
        try {
            Tags::create(['name' => $request->name]);
            return redirect()->back()->with('message', 'Berhasil Membuat Tag');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Membuat Tag');
        }
    }
    public function store_category(Request $request)
    {
        try {
            BlogCategory::create(['name' => $request->name]);
            return redirect()->back()->with('message', 'Berhasil Membuat Category');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal Membuat Category');
        }
    }

    public function show_user($slug)
    {
        $blogPost = BlogPost::where('slug', $slug)->firstOrFail();
        $blogPost->increment('views'); // Increment view count

        return view('blog.show', compact('blogPost'));
    }
}
