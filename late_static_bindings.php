<?php

class Sofa {
  protected static $identity = 'Sofa class';

  public static function identity_test() {
    echo 'self: ' . self::$identity . "<br />";
    echo 'static: ' . static::$identity . "<br />";

    echo 'get_class: ' . get_class() . "<br />";
    echo 'get_called_class: ' . get_called_class() . "<br />";
  }

}

class Loveseat extends Sofa {
  protected static $identity = 'Loveseat class';
}

Sofa::identity_test();
echo "<hr>";
Loveseat::identity_test();

?>
