<?php
// initialize page globals
require_once('includes/config-books.inc.php');
require_once('includes/Author.class.php');
// class name for hiding a <div>
$GLOBALS['updateStatus'] = 'hide';
// the message to be displayed after saving
$GLOBALS['saveMessage'] = '';

try {
  // set up the PDO connection to database
  $pdo = new PDO(DBCONNECTION,DBUSER,DBPASS);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // perform the algorithm and return populated Author object
  $author = processAuthorFormInfo($pdo);

  // change form Submit button text based on author object
  if ( $author->isNew() ) {
    $buttonText = 'Add';
  }
  else {
    $buttonText = 'Edit';
  }
}
catch (PDOException $e) {
  die( $e->getMessage() );
}
//...
?>
<!DOCTYPE html>
<html>
<head lang="en">
  .. .
<form class="form-horizontal" method="post" action="authorForm.php">
  <fieldset>
  <legend>Author Form</legend>
  <input type="hidden" name="id" value="<?php echo $author->id ?>" />
  <label>First Name</label>
  <input type="text" name="firstname"
       placeholder="Enter first name"
       value="  <?php echo $author->firstName; ?>">
  <label>Last Name</label>
  <input type="text" name="lastname"
       placeholder="Enter last name"
       value="<?php echo $author->lastName; ?>">
  <label>Institution</label>
  <input type="text" name="institution"
       placeholder="Enter Institution"
       value="<?php echo $author->institution; ?>">
   <button type="submit" >
   <?php echo $buttonText; ?>
   </button>
  </fieldset>
</form>

<div class="alert alert-info <?php echo $GLOBALS['updateStatus']; ?>">
<p> <?php echo $GLOBALS['saveMessage']; ?> author</p>
</div>