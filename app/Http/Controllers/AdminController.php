<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home()
    {
         return view('admin.home.home');
    }


    public function manageCategory()
    {
         return view('admin.category.manage');
    }


    public function addCategory()
    {
        return view('admin.category.add-category');

    }


    public function newCategory(Request $request)
    {

    }


    public function editCategory($id)
    {

    }


    public function update(Request $request, $id)
    {

    }

    public function destroyCategory($id)
    {

    }
}
