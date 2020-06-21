<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\support\facades\view;
class ProductController extends Controller
{
    public function index()
    {
        return view ('index');
    }
    public function create()
    {
        return view('create');
    }
    public function edit()
    {
        return view ('edit');

    }
    public function delete()
    {
        return view('delete');
    }
    

}
