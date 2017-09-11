class ArtistTableGateway extends TableDataGateway
{
  //...
  protected function getSelectStatement()
  {
    return "SELECT ArtistID,FirstName,LastName,Nationality FROM
              Artists";
  }
  protected function getPrimaryKeyName() {
    return "AuthorID";
  }
}
class PaintingTableGateway extends TableDataGateway
{
  //...
  protected function getSelectStatement()
  {
    return "SELECT PaintingID,Title,Description, ... FROM Paintings";
  }
  protected function getPrimaryKeyName() {
    return "PaintingID";
  }
}
