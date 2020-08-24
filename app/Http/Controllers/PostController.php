<?php

namespace App\Http\Controllers;

use App\Post;
use App\Postmeta;
use App\Repository\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $req)
    {
        $query = Post::with('metadata');
        // dd( get_class_methods($query));
        // dd($query);
        $posts = $query->get();
        // $posts = Post::all();
        // $posts = PostRepository::all();
        
        echo '<ol>';
        foreach($posts as $post) {
            echo '<li>';
                echo "<p>{$post->title}</p>";
                echo '<ol>';

                foreach($post->metadata as $key => $value) {
                    // dd($post->metadata);
                    echo "<li>{$key}: {$value}</li>";
                    $post->setMeta("thumbnail", '/google.png');

                    $post->setMeta("version", 1);
                    // echo "<li>{$postmeta->meta_key}: {$postmeta->meta_value}</li>";
                }
                // $post->title = $post->title . " | epic";
                // $post->save();
                $post->setMeta("rating", 4);
                echo '</ol>';
            echo '</li>';
        }
        echo '</ol>';

        print_r($post->metadata);
    }
}
