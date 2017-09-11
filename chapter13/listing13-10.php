// Using polymorphism

$picasso = new Artist("Pablo","Picasso","Malaga","Oct 25, 1881",
                      "Apr 8, 1973");

// create the paintings
$guernica = new Painting("1937",$picasso,"Guernica","Oil on canvas"); $chicago = new Sculpture("1967",$picasso,"Chicago", 454);

// create an array of art
$works = array();
$works[0] = $guernica;
$works[1] = $chicago;
// to test polymorphism, loop through art array foreach ($works as $art)
{
  // the beauty of polymorphism:
  // the appropriate __toString() method will be called!
  echo $art;
}

// add works to artist ... any type of art class will work
$picasso->addWork($guernica); $picasso->addWork($chicago);
// do the same type of loop
foreach ($picasso->getWorks() as $art) {
  echo $art; // again polymorphism at work
}
