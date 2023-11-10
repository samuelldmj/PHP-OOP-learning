<?php

// Example of extending parent's static method
// Add code before, after, or around
class Chef {

  public static function make_dinner() {
    echo "Cook food.<br />";
  }

}

class AmateurChef extends Chef {

  public static function make_dinner() {
    echo "Read recipe.<br />";
    parent::make_dinner();
    echo "Clean up mess.<br />";
  }

}

echo "Chef:<br />";
Chef::make_dinner();
echo "<br />";
echo "Amateur Chef:<br />";
AmateurChef::make_dinner();

echo "<hr />";

// Example of using parent's static method as a fallback
class Image {

  public static $resizing_enabled = true;

  public static function geometry() {
    echo "800x600";
  }
}

class ProfileImage extends Image {

  public static function geometry() {
    if(self::$resizing_enabled) {
      echo "100x100";
    } else {
      parent::geometry();
    }
  }
}

echo Image::geometry() . "<br />";
echo ProfileImage::geometry() . "<br />";

echo Image::$resizing_enabled = false;
echo ProfileImage::geometry() . "<br />";

?>
