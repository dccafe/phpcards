<?php
class Card {

  var $date;
  var $title;
  var $content;
  var $category;

  function __construct() {

    // Set obligatory attributes
    $this->date = date('d/m/Y - H:i');

    // Then use the apropriate constructor
    $a = func_get_args();
    $i = func_num_args(); 

    switch ($i) {
      case 0 : // Default Constructor
        break;
      case 1 : // Create a Card with title
        $this->setTitle($a[0]);
        break;
      case 2 : // Create a Card with title and contents
        $this->setTitle($a[0]);
        $this->setContent($a[1]);
        break;
    }
  }

  function setTitle($title) {
    $this->title = $title;
  }

  function setContent($content) {
    $this->content = $content;
  }

  function setCategory($category) {
    $this->category = $category;
  }

  public function __toString() {
    $card  = '<div class="card '     . $this->category . '">'    .
             '<div class="title"><h2>'. $this->title   . '</h2></div>' .
             '<div class="date">'    . $this->date    . '</div>' .
             '<div class="content">' . $this->content . '</div>' .
             '</div>';
    return $card;
  }

}

?>
