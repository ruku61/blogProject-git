<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addBlog()
    {
        return view('admin.blog.add-blog');
    }


    public function manageBlog()
    {
        return view('admin.blog.manage-blog');
    }


    public function newBlog(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function editBlog($id)
    {
        return view('admin.blog.edit-blog');
    }


    public function updateBlog(Request $request, $id)
    {

    }


    public function destroyBlog($id)
    {

    }
}
