<?php
// include the classes
include 'Artist.class.php';
include 'Art.class.php';
include 'Painting.class.php';
include 'Sculpture.class.php';
include 'ArtPrint.class.php';

// instantiate some sample objects
$picasso = new Artist("Pablo","Picasso","Malaga","May 11,904","Apr 8, 1973");
$guernica = new Painting("1937",$picasso,"Guernica","Oil on canvas");
$stein = new Painting("1907",$picasso,"Portrait of Gertrude Stein","Oil on canvas");
$woman = new Sculpture("1909",$picasso,"Head of a Woman", 30.5); $bowl = new ArtPrint("1912",$picasso,"Still Life with Bowl and Fruit","Charcoal on paper", 25);
?>
<html>
<body>
<h1>Tester for Art Classes</h1>

<h2>Paintings</h2>
<p><em>Use the  __toString() methods </em></p>
<p><?php echo $guernica; ?></p>
<p><?php echo $stein; ?></p>

<p><em>Use the getter methods </em></p>
<?php
echo $guernica->getName() . ' by '. $guernica->getArtist()->getLastName();
?>

<h2>Sculptures</h2>
<p>  <?php echo $woman; ?></p>

<h2>Art Prints</h2>
<?php
echo 'Year: ' . $bowl->getYear() . '<br/>';
echo 'Artist: ';
echo $bowl->getArtist()->getFirstName() . ' ';
echo $bowl->getArtist()->getLastName() . ' (';
echo date_format( $bowl->getArtist()->getBirthDate() ,'d M Y') . ' - '; echo date_format( $bowl->getArtist()->getDeathDate() ,'d M Y');
echo ')<br/>';
echo 'Name: ' . $bowl->getName() . '<br/>';
echo 'Medium: ' . $bowl->getMedium() . '<br/>';
echo 'Print Number: ' . $bowl->getPrintNumber() . '<br/>';
?>
</body>
</html>
