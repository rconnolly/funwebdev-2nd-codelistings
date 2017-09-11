// use static method of Artist class to find a specific artist
$artist = Artist::findByKey($id);
echo $artist->LastName . ', ' . $artist->FirstName;
//...
// make a change to domain object
$artist->LastName = 'Picasso';
// then tell domain object to update itself
$artist->update();
