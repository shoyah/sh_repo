<?php

namespace App\Http\Controllers;

use App\Post;
 dev_basis02


 master
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
 dev_basis02
        return view('posts/index')->with(['posts' => $post->get()]);  
    }
}
?>

    return $post->get();
    }
}
 master
