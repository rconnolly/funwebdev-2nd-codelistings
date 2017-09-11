class Artist
{
  // properties for the class
  private $id;
  private $firstName;
  private $lastName;
  private $nationality;
  private $yearOfBirth;
  private $yearOfDeath;
  
  // example getter and setter with validation
  public function getLastName() {
    return $this->lastName;
  }
  public function setLastName($value) {
    if (!is_string($value) || strlen($value) < 2 ||
	strlen($value) > 255) {
      throw new InvalidArgumentException(" The last name is
                                              invalid.");
    }
    $this->lastName = $value;
  }
   // etc. ... getters and setters for other five properties

  // other behaviors
  public function getFullName($commaDelimited)  {
    if ($commaDelimited)
      return $this->lastName . ', ' . $this->firstName;
    else
      return $this->firstName . ' ' . $this->lastName;
  }
  public function getLifeSpan() {
    return $this->yearOfDeath - $this->yearOfBirth;
  }
}
