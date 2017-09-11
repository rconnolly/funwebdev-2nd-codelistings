class Artist  extends DomainObject
{
  static function getFieldNames() {
    return array('ArtistID','FirstName','LastName','Nationality',
		 'YearOfBirth', 'YearOfDeath','Details','ArtistLink');
  }
  
  public function  __construct(array $data)  {
    parent::__construct($data);
  }
  
  // implement any setters that need input checking/validation

  public function setLastName($value) {
    if (!is_string($value) || strlen($value) < 2 ||
        strlen($value) > 255) {
      throw new InvalidArgumentException(" The last name is invalid.");
    }
    $this->lastName = $value;
  }
  
  // implement any other behavior needed by this domain object
}
