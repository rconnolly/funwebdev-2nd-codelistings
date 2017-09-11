// Playable interface and multiple interface implementations

interface Playable {
  public function getLength();
  public function getMedia();
}

class Music extends Art implements Playable {
  // ...
  public function getMedia() {
    // returns the music
    // ...
  }
  public function getLength() {
    // return the length of the music
  }
}

class Movie extends Painting implements Playable, Viewable {
  // ...
  public function getMedia() {
    // return the movie
    // ...
  }
  public function getLength() {
    // return the length of the movie
    // ...
  }
  public function getPNG() {
    // return image data
    // ...
  }
  public function getSize() {
    // return image size would go here
    // ...
  }
}
