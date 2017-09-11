// Rethrowing an exception

try {
  // PHP code here
}
catch (Exception $e) {
  // do some application-specific exception handling here
  // ...
  // now rethrow exception
  throw $e;
}
