<?php

class Box {
  public $name="box";
}

$box = new Box;

$box_reference = $box;

$box_clone = clone $box;

$box_modified = clone $box;
$box_modified->name = "changed box";

$another_box = new Box;


// == is casual and just checks if all property values are equal
echo 'Reference: ' . ($box == $box_reference ? 'T' : 'F') . '<br />';
echo 'Cloned: ' . ($box == $box_clone ? 'T' : 'F') . '<br />';
echo 'Modified: ' . ($box == $box_modified ? 'T' : 'F') . '<br />';
echo 'Another: ' . ($box == $another_box ? 'T' : 'F') . '<br />';

echo "<hr />";

// === is strict and checks if they reference the same object
echo 'Reference: ' . ($box === $box_reference ? 'T' : 'F') . '<br />';
echo 'Cloned: ' . ($box === $box_clone ? 'T' : 'F') . '<br />';
echo 'Modified: ' . ($box === $box_modified ? 'T' : 'F') . '<br />';
echo 'Another: ' . ($box === $another_box ? 'T' : 'F') . '<br />';

?>
