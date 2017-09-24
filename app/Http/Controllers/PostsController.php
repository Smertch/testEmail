<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\TestTask;

class PostsController extends Controller
{
    public function index()
    {
        $posts = TestTask::all();
        return view('index', compact('posts'));
    }

    public function show()
    {
        $posts = TestTask::all();
        return view('testTask.show', compact('posts'));
    }

    public function create()
    {
        return view("testTask.create");
    }

    public function store()
    {
        $json = request()->all();
        $data = (array)json_decode($json['json']);
        if ($data) {
            TestTask::create($data);
        }
        return redirect('/show');

    }
}
