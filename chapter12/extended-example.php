<?php 

include 'book-data.inc.php'; 

// has the user selected a book to display?
if (isset($_GET['isbn'])) {
    $isbn = $_GET['isbn'];
    
    // ensure we have this isbn in our data
    if (! array_key_exists($isbn, $books)) {
        $isbn = $defaultISBN;
    }    
}
else {
    // if non selected, display first in list
    $isbn = $defaultISBN;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Chapter 12</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>

<header>
      <h1><span>CRM</span> Admin</h1>
      <nav><img src="images/menu.png" alt="mobile menu icon"></nav>
</header>
    
<main class="container">
	
    <div class="cards">

      <section class="card list">            
          <div class="card-content">
            <ul>
            <?php
              foreach ($books as $key => $value) {

                  echo '<li>'; 
                  echo '<a href="extended-example.php?isbn=' . $key . '">';
                  echo $value['title'];
                  echo '</a>';
                  echo '</li>';      
              }
            ?>                
            </ul>
          </div>          
      </section>

     
      <section  class="card">
 
          <figure>
            <img src="images/<?php echo $isbn; ?>.jpg" 
                 alt="<?php echo $books[$isbn]["title"]; ?>">
          </figure>
          <div class="card-content">
              <p><span>ISBN: </span><?php echo $isbn; ?></p>
              <p><span>Year: </span><?php echo $books[$isbn]["year"]; ?></p>
              <p><span>Pages: </span><?php echo $books[$isbn]["pages"]; ?></p>
              <p><?php echo $books[$isbn]["description"]; ?></p>
          </div>

      </section >         
      

    </div>	
	
</main>    
</body>
</html>