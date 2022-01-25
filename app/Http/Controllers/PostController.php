<?php

namespace App\Http\Controllers;

use App\Post;
 dev_basis02


 master
use Illuminate\Http\Request;

class PostController extends Controller
{
 dev_basis02
   public function index(Post $post)
   {
    return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
   } 

    public function index(Post $post)
    {
 dev_basis02
        return view('posts/index')->with(['posts' => $post->get()]);  
    }
 master
}
?>

    return $post->get();
    }
}
 master
