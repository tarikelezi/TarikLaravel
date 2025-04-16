<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('blog.home',['username'=>'<h1>Tarikk</h1>']);
    }

    public function create() {
        return view('blog.about',['url'=>'<script>alert("Hello Laravel")</script>']);
    }
}
