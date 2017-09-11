<?php
function processAuthorFormInfo($pdo) {

  // first let us see if there is any query string information
  // . . . if not return empty author object
  if (! isThereQueryStringInfo() ) {
    return new Author("","","","");
  }
  
  // are we editing an existing author . . .
  if ( areEditingExisting() ) {
    // since request method is GET, then this is either request for
    // inserting new or a request to edit if id attribute

    // NOTE: we are assuming ID in query string is ok
    // (should actually test it in real site)
    $which = $_GET['which'];
    
    // retrieve data from database
    return retrieveAuthor($pdo, $which);
  }
  // . . . or are we saving an author
  if ( areSaving() ) {
    // if here then saving a record

    // we are going to use the existence of an ID querystring to
    // determine whether we should be inserting or updating

    $id = "";
    if ( isset($_POST['id']) ) {
      $id = $_POST['id'];
    }
    $author = saveAuthor( $pdo, $id, $_POST['firstname'],
			  $_POST['lastname'], $_POST['institution'] );
    return $author;
  }
}
?>
