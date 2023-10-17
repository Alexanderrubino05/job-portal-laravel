<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    //Fetch posts
    public function fetchPosts() {
        if (auth()->check()) {
            $posts = Post::latest()->filter(request(['tag', 'search']))->get();

            return view('home', [
                'posts' => $posts
            ]);
        }    

        return redirect('/register');
    }

    //Create post
    public function createPost(Request $request) {
        $formFields = $request->validate([
            'title'=> 'required',
            'company'=> 'required',
            'location'=> 'required',
            'website'=> 'required',
            'email'=> ['required', 'email'],
            'tags'=> 'required',
            'description'=> 'required',
        ]);
        
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $formFields['user_id'] = auth()->id();
        
        Post::create($formFields);
        
        return redirect('/');
    }

    //Edit post
    public function editPost(Request $request, Post $post) {
        $formFields = $request->validate([
            'title'=> 'required',
            'company'=> 'required',
            'location'=> 'required',
            'website'=> 'required',
            'email'=> ['required', 'email'],
            'tags'=> 'required',
            'description'=> 'required',
        ]);
        
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        
        $post->update($formFields);

        return redirect('posts/'.$post->id);
    }

    //Show post
    public function showPost(Post $post) {                
        return view('show', [
            'post' => $post
        ]);
    }

    //Show edit post
    public function showEditPost(Post $post) {                
        return view('edit-job', [
            'post' => $post
        ]);
    }

    //Delete post
    public function delete(Post $post) {
        $post->delete();
        return redirect('/');
    }
}
