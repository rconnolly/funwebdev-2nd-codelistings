abstract class TableDataGateway
{
  protected $dbAdapter;

  public function  __construct($dbAdapter)
  {
    if (is_null($dbAdapter) )
      throw new Exception("Database adapter is null");
    $this->dbAdapter = $dbAdapter;
  }
  //...
}
