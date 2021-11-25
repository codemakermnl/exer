<?php
class Book {

  protected $isbn;
  private $title;
  private $author;

  public function __construct() {

  }

  public function create( $title, $author, $isbn ) {
    $this->set_title($title);
    $this->set_author($author);
    $this->set_isbn($isbn);
  }

  public function __destruct() {
    echo "The book isbn is {$this->isbn}, the title is {$this->title} and the author is {$this->author}<br>";
  }


  public function set_title($title) {
    $this->title = $title;
  }

  public function set_isbn($isbn) {
    $this->isbn = $isbn;
  }

  public function get_title() {
    return $this->title;
  }


  public function set_author($author) {
    $this->author = $author;
  }
  
  public function get_author() {
    return $this->author;
  }

  public function get_isbn() {
    return $this->isbn;
  }
}

class Animal {
  // used for instanceof example
}


$book1 = new Book();
$book1->set_isbn('123456789');
$book1->set_title('Remembrance of Things Past');
$book1->set_author('Marcel Proust');


$book2 = new Book();
$book2->create('The Stand', 'Stephen King', '9783741619991');


echo 'Is book1 an instance of Book: ' . ($book1 instanceof Book ? 'Yes' : 'No' ) . '<br>';
echo 'Is book2 an instance of Animal: ' . ($book1 instanceof Animal ? 'Yes' : 'No' ) . '<br>';

?>