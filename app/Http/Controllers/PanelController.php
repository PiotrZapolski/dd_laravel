<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PanelController extends Controller
{
    public function home()
    {
        $posts = Post::paginate(15);
        $fbStatus = false;
        $igStatus = true;


        return view(
            'panel.home',
            compact('posts', 'fbStatus', 'igStatus'),
        );
    }
}
