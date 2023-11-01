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
        $request->validate([
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
                $imagePath = 'uploads/' . $imageName; // Adjust the storage path as needed
                Storage::putFileAs('public', $image, $imagePath);
            }

            // Create a new blog post
            $post = new BlogPost();
            $post->title = $request->input('title');
            $post->category_id = $request->input('category_id');
            $post->content = $request->input('content');
            $post->image = $imagePath; // Save the image path to the database
            $post->sluggy(); // Automatically generates the slug
            $post->save();

            // Attach tags to the blog post
            if ($request->has('tags')) {
                $post->tags()->sync($request->input('tags'));
            }

            return response()->json(['message' => 'Blog Post created successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Failed to create a blog post.']);
        }
    }
}
