$DOM = new DOMDocument();
$DOM->loadHTML($HTMLDOCUMENT);

$aTags = $DOM->getElementsByTagName("a");
foreach($aTags as $link){
  echo $link->getAttribute("href")." - ".$link->nodeValue."<br>";
}
