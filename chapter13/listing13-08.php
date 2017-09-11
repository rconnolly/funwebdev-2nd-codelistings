/* The abstract class that contains functionality required by all
   types of Art */

abstract class Art {
  private $name;
  private $artist;
  private $yearCreated;
  
  function  __construct($year, $artist, $name) {
    $this->setYear($year);
    $this->setArtist($artist);
    $this->setName($name);
  }
  public function getYear() { return $this->yearCreated; }
  public function getArtist() { return $this->artist; }
  public function getName() { return $this->name; }
  
  public function setYear($year) {
    if (is_numeric($year))
      $this->yearCreated = $year;
  }
  public function setArtist($artist) {
    if ((is_object($artist)) && ($artist instanceof Artist))
      $this->artist = $artist;
  }
  public function setName($name) {
    $this->name = $name;
  }
  
  public function __toString() {
    $line = "Year:" . $this->getYear();
    $line .= ", Name: " .$this->getName();
    $line .= ", Artist: " . $this->getArtist()->getFirstName() . ' '; $line .= $this->getArtist()->getLastName();
    return $line;
  }
}

class Painting extends Art {
  private $medium;
  function __construct($year, $artist, $name, $medium) {
    parent::__construct($year, $artist, $name);
    $this->setMedium($medium);
  }
  public function getMedium() { return $this->medium; }
  public function setMedium($medium) {
    $this->medium = $medium;
  }
  public function __toString() {
    return parent::__toString() . ", Medium: " . $this->getMedium();
  }
}

class Sculpture extends Art {
  private $weight;
  function  __construct($year, $artist, $name, $weight) {
    parent::__construct($year, $artist, $name);
    $this->setWeight($weight);
  }
  public function getWeight() { return $this->weight; }
  public function setWeight($weight) {
    if (is_numeric($weight))
      $this->weight = $weight;
  }
  public function  __toString() {
    return parent::__toString() . ", Weight: " . $this->getWeight() ."kg";
  }
}

class ArtPrint extends Painting {
  private $printNumber;
  
  function __construct($year, $artist, $name, $medium, $printNumber) {
    parent::__construct($year, $artist, $name, $medium);
    $this->setPrintNumber($printNumber);
  }
  public function getPrintNumber() { return $this->printNumber; }
  public function setPrintNumber($printNumber) {
    if (is_numeric($printNumber))
      $this->printNumber = $printNumber;
  }
  public function  __toString() {
    return parent::__toString() . ", Print Number: ".$this->getPrintNumber();
  }
}