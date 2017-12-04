<?php 

class Post 
{
    public $title;  

    public $published;

    public $author;

    public function __construct($title, $published, $author)
    {
        $this->title = $title;

        $this->published = $published; 

        $this->author = $author;

    }
}

$posts = [
    new Post('First post', true, 'ML'),
    new Post('Second post', false, 'ED'),
    new Post('Third post', true, 'JP'),
    new Post('Fourth post', false, 'VB')
];

$unpublished = array_filter($posts, function($post) {
    //filter through and do not return posts that have been published
    return ! $post->published;
});

// $modified = array_map(function ($post) {
//     $post->description = '';

//     return $post;
// }, $posts);

$titles = array_column($posts, 'title');

$posts = array_map(function ($post) {
    return (array) $post;
}, $posts);

$authors = array_column($posts, 'author');

var_dump($authors);
