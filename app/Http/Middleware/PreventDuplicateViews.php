<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventDuplicateViews
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $postId = $request->route('post'); // Adjust this to get the post ID from the request.

        if (!$request->session()->has('viewed_post_' . $postId)) {
            $request->session()->put('viewed_post_' . $postId, now());
            return $next($request);
        }

        return redirect()->route('blog.show', ['post' => $postId]);
    }
}
