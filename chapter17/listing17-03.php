<?php
/*
  An example of a Factory Method design pattern. This one is
  responsible for instantiating the appropriate data adapter
*/
class DatabaseAdapterFactory {
  /*
    Notice that this creation method is static. The $type parameter 
    is used to specify which adapter to instantiate
  */
  public static function create($type, $connectionValues) {
    $adapter = "DatabaseAdapter" . $type;
    if ( class_exists($adapter) ) {
      return new $adapter($connectionValues);
    }
    else {
      throw new Exception("Data Adapter type does not exist");
    }
  }
}
?>
