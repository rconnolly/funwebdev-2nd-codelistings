class Crawler {
  private $URLList;
  private $nextIndex;
  function  __construct(){
    $this->nextIndex=0;
    $this->URLList = array("http://SEEDWEBSITE/");
  }
  private function getNextURLToCrawl(){
    return $this->URLList[$this->nextIndex++];
  }
  private function printSummary(){
    echo count($this->URLList)." links. Index:".
      $this->nextIndex."<br>";
    foreach($this->URLList as $link){
      echo $link."<br>";
    }
  }
  // THIS CAN BE CALLED FROM LOOP OR CRON
  public function doIteration(){
    $url = $self->getNextURLToCrawl();
    // Do note crawl if not allowed
    if (robotsDisallow($url))
      return;
    echo "Crawling ".$url."<br>";
    //this function finds the <a> links
    scrapeHyperlinks($url);
    $self->printSummary();
  }
}
