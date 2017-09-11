// Painting class implementing an interface

interface Viewable {
   public function getSize();
   public function getPNG();
}

class Painting extends Art implements Viewable {
  // ...
   public function getPNG() {
      // return image data would go here
     // ...
    }
   public function getSize() {
      // return image size would go here
     // ...
   }
}
