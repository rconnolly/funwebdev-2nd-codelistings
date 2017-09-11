function getSearchFor()
{
   $value = "";
   if (isset($_GET[SEARCHBOX])) {
      $value = $_GET[SEARCHBOX];
   }
   return $value;
}
