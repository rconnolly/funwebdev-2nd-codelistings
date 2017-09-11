// Class definition modified with static members

class Artist {
  public static $artistCount = 0;
  public $firstName;
  public $lastName;
  public $birthDate;
  public $birthCity;
  public $deathDate;
  
  function __construct($firstName, $lastName, $city, $birth,
		       $death=null) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
    $this->birthCity = $city;
    $this->birthDate = $birth;
    $this->deathDate = $death;
    self::$artistCount++;
  }
}
