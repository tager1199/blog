<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public $title;
    public $date;
    public $body;
    public $excerpt;
    public $slug;

    public function __contruct($title,$excerpt,$date,$body,$slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }
    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }
    public static function all()
    {
//        $posts = [];
//        $files = collect(File::files(resource_path("posts")));
//        foreach ($files as $file) {
//            $document = YamlFrontMatter::parseFile($file);
////        dd($document);
//            $posts[] = new Post(
//                $document->matter('title'),
//                $document->excerpt,
//                $document->date,
//                $document->body(),
//                $document->slug);
//            dd($posts);
//        }
//
//        return $posts;

        collect(File::files(resource_path('posts')))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            )
        ));
    }
}
