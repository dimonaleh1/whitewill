<?php

namespace App\Http\Controllers;

use App\Models\Posts;

class Post extends Controller
{
    public function index() {
        $Posts = Posts::paginate();

        foreach ($Posts as $Post) {
            dump($Post->toArray());
        }
    }
}
