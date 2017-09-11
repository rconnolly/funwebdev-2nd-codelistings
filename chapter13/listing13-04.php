// Method definition

class Artist {
  // ...
  public function outputAsTable() {
    $table = "<table>";
    $table .= "<tr><th colspan='2'>";
    $table .= $this->firstName . " " . $this->lastName;
    $table .= "</th></tr>";
    $table .= "<tr><td>Birth:</td>";
    $table .= "<td>" . $this->birthDate;
    $table .= "(" . $this->birthCity . ")</td></tr>";
    $table .= "<tr><td>Death:</td>";
    $table .= "<td>" . $this->deathDate . "</td></tr>";
    $table .= "</table>";
    return $table;
  }
}
