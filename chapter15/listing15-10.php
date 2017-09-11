<?php
/*
  Represents the results of a validation
*/
class ValidationResult
{
  private $value; // user input value to be validated
  private $cssClassName; // css class name for display
  private $errorMessage; // error message to be displayed
  private $isValid = true; // was the value valid

  // constructor
  public function __construct($cssClassName, $value, $errorMessage,
			      $isValid) {
    $this->cssClassName = $cssClassName;
    $this->value = $value;
    $this->errorMessage = $errorMessage;
    $this->isValid = $isValid;
  }
  
  // accessors
  public function getCssClassName() { return $this->cssClassName; }
  public function getValue() { return $this->value; }
public function getErrorMessage() { return $this->errorMessage; }
public function isValid() { return $this->isValid; }

/*
  Static method used to check a querystring parameter
  and return a ValidationResult
*/
static public function checkParameter($queryName, $pattern,
                                      $errMsg) {
   $error = "";
   $errClass = "";
   $value = "";
   $isValid = true;

   // first check if the parameter doesn't exist or is empty
   if (empty($_POST[$queryName])) {
      $error = $errMsg;
      $errClass = "error";
      $isValid = false;
   }
   else {
     // now compare it against a regular expression
     $value = $_POST[$queryName];
     
     if ( ! preg_match($pattern, $value) ) {
       $error = $errMsg;
       $errClass = "error";
       $isValid = false;
     }
   }
   return new ValidationResult($errClass, $value, $error, $isValid); }
}
?>