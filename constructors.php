<?php

class Sofa {

  public static $instance_count = 0;

  // public $seats = 3;
  // public $arms = 2;

  //this call all the instances that was created
  // public function __construct($arg = []) {
  //   self::$instance_count++;
  //   $this->seats = $arg['seats'] ?? $this->seats;
  //   $this->arms = $arg['arms'] ?? $this->arms;
  // }
  
  

  // public function __destruct(){
  //   self::$instance_count--;
  // }


  //ANOTHER WAY to use the construct methods
  public function __construct(public int $seats, public int $arms){
  }

  public function sofa_type(){
    echo "this bed has  $this->seats seats and $this->arms arms" ;
  }


}

// class Couch extends Sofa {
//   var $arms = 0;
// }

// class Loveseat extends Sofa {
//   var $seats = 2;
// }

// // $sofa = new Sofa(['seat' => 3 , 'arms' => 2]);
// echo 'Sofa<br />';
// echo '- seats: ' . $sofa->seats . '<br />';
// echo '- arms: ' . $sofa->arms . '<br />';
// echo '<br />';

// // $couch = new Couch(['seat' => 4]);
// echo 'Couch<br />';
// echo '- seats: ' . $couch->seats . '<br />';
// echo '- arms: ' . $couch->arms . '<br />';
// echo '<br />';

// unset($sofa);
// // $loveseat = new Loveseat([ 'arms' => 0]);
// echo 'Loveseat<br />';
// echo '- seats: ' . $loveseat->seats . '<br />';
// echo '- arms: ' . $loveseat->arms . '<br />';
// echo '<br />';

// echo 'Instance count: ' . Sofa::$instance_count . '<br />';


$sofa = new Sofa(4, 3);
echo $sofa->sofa_type()















?>
