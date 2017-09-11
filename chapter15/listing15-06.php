// Custom exception handler

function my_exception_handler($exception) {
  
  // put together a detailed exception message
  $msg = "<p>Exception Number " . $exception->getCode();
  $msg .= $exception->getMessage() . " occurred on line ";
  $msg .= "<strong>" . $exception->getLine() . "</strong>";
  $msg .= " and in the file: ";
  $msg .= "<strong>" . $exception->getFile() . "</strong> </p>";
  
  // email error message to someone who cares about such things
  error_log($msg, 1, 'support@domain.com',
            'From: reporting@domain.com');
  
  // if exception serious then stop execution and say something
  if ($exception->getCode() !== E_NOTICE) {
    die("Sorry the system is down for maintenance. Please try again soon");
  }
}
