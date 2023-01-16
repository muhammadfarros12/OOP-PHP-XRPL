<?php
class Post {
  private $title;
  private $content;
  public function __construct(string $title, string $content) {
    $this->title = $title;
    $this->content = $content;
  }
  public function getTitle(): string {
    return $this -> title;
  }
  public function getContent(): string {
    return $this -> content;
  }
}

class StringMutator {
  public static function bold(string $word): string {
    return sprintf('<b>%s</b>', $word);
  }
}

class PostMutator {
  private $post;
  public function __construct(Post $post) {
    $this -> post = $post;
  }
  
  public function getBoldTitle(): string {
    return StringMutator::bold($this -> post -> getTitle());
  }
}

$post = new Post('Belajar OOP', 'Saya sedang belajar OOP PHP');
$mutator = new PostMutator($post);
echo $mutator -> getBoldTitle();
echo PHP_EOL;

