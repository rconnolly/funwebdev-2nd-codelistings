<?php
class Author {
  public $id = "";
  public $firstName = "";
  public $lastName = "";
  public $institution = "";
  function __construct($id,$first,$last,$institute) {
    $this->id = $id;
    $this->firstName = $first;
    $this->lastName = $last;
    $this->institution = $institute;
  }
  // Returns true if this is a new author, false otherwise
  function isNew() {
    if (empty($this->id) )
      return true;
    else
      return false;
  }
}
?>
