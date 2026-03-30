<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // 🔹 Show all posts
    public function index()
    {
        return "This is INDEX page (all posts)";
    }

    // 🔹 Show create form
    public function create()
    {
        return "This is CREATE page (add new post)";
    }

    // 🔹 Store data
    public function store(Request $request)
    {
        return "Post stored successfully";
    }

    // 🔹 Show single post
    public function show(string $id)
    {
        return "Showing post with ID: " . $id;
    }

    // 🔹 Show edit form
    public function edit(string $id)
    {
        return "Edit page for post ID: " . $id;
    }

    // 🔹 Update post
    public function update(Request $request, string $id)
    {
        return "Updated post with ID: " . $id;
    }

    // 🔹 Delete post
    public function destroy(string $id)
    {
        return "Deleted post with ID: " . $id;
    }
}