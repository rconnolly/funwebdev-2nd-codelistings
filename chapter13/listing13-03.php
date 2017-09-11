// A constructor added to the class definition

class Artist {
  // variables from previous listing still go here // ...
  function  __construct($firstName, $lastName, $city, $birth,
			$death=null) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->birthCity = $city;
    $this->birthDate = $birth;
    $this->deathDate = $death;
  }
}
