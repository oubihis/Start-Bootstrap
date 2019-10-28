<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Page;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
              // Post::all();
        $posts = Post::whereStatus('PUBLISHED')->orderBy('created_at')->paginate(6);
        return view('welcome', ['myposts' => $posts]);
    }

    public function show($slug)
    {
         
        $post = Post::whereSlug($slug)->first();
        return view('post', ['post' => $post]);
    }
    
    public function about()
    {
        $pages = Page::all();
        return view('about', ['mypages' => $pages]);
    }

}
