// Throwing an exception

function processArray($array)
{
  // make sure the passed parameter is an array with values
  if ( empty($array) ) {
    throw  new Exception('Array with values expected');
  }
  // process the array code
  // ...
}
