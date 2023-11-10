<?php

// class Sport{
//     var $country;
//     var $club;
//     var $clubTrophies;
//     var $ticket_sold_perMatch;
//     var $sport_type;
//     var $number_of_games;
//     var $attendance_perMatch;
//     var $rank;
    



//     function sport_rank($ticket_sold_perMatch, $number_of_games){
//         return $this->rank = floatval($ticket_sold_perMatch) / floatval($number_of_games) * 100;
//     }  

// }

// class Basketball extends Sport {
//     var $playerName;
//     var $age;
//     var $country = "USA";
//     var $club;
//     var $personalAwards;
//     var $clubTrophies;
//     var $injury_crisis = false;
//     var $time_covered;
//     var $weight_kg;


//     function speed($distance, $time){
//         return $this->time_covered = intval($distance) / floatval($time);
//     }

//     function trophies_won(){
//         return $this->clubTrophies;
//     }


//     function calc_bmi($height_m, $weight_kg){
//         return $this->weight_kg = floatval($weight_kg) / floatval($height_m) ;
//     }

//     function playerProfile(){
//         return $this->playerName. "," . $this->age. ",".$this->country;
//     }

// }

// class Football extends Sport {
//     var $playerName;
//     var $age;
//     var $country;
//     var $club;
//     var $personalAwards;
//     var $clubTrophies;
//     var $injury_crisis = true;
//     var $weight_kg;
//     var $time_covered;

//     function trophies_won(){
//         return $this->clubTrophies;
//     }

//     function calc_bmi($height_m, $weight){
//         return $this->weight_kg = floatval($weight) / floatval($height_m) **2;
//     }

//     function playerProfile(){
//         return $this->playerName. ", " . $this->age. ", ".$this->club.",".$this->country;
//     }

//     function speed($distance, $time){
//         return $this->time_covered = floatval($distance) / floatval($time) . ", ";
//     }
// }

// $fans_1 = new Sport;
// $player_1 = new Basketball;
// $player_2 = new Football;
// $player_1 = new Football;
// $fans_2 = new Sport;


// //referencing the attributes/properties with the instances here and inserting a value.
// $fans_1->club= "Manchester united " . "<br>";
// $player_1->country="Player 1 country: " . "Spain " ;
// $player_1->age="Player 1 age: " . 29 ;
// $player_1->injury_crisis = false ;
// $player_1->clubTrophies =  " EPL" . ", " ." UCL";
// $player_1->club= "Real madrid " ;
// $player_1->playerName= "Player 1: " . " Hojlund ";

// //referencing the attributes/properties with the instances here and inserting a value.
// $fans_2->club= "Chelsea" . "<br>";
// $player_2->country="Player 2 country:  " . "France " ;
// $player_2->age="Player 2 age: " . 29 ;
// $player_2->injury_crisis = false ;
// $player_2->clubTrophies =  " Laliga " .",  ". " Europa " ;
// $player_2->club= "sevilla" ;
// $player_2->playerName= "Player 2:  " . " Bissaka   ";



// //i am outputing the methods here.
// echo $fans_1->sport_rank(1000000, 25) ." points" ."<br>";
// echo "player profiles: " . $player_1->playerProfile() ;
// echo ", " ."Trophies: " . $player_1->trophies_won()  ;
// echo ", " . "speed:  " . $player_1->speed(1.66, 50)  ;
// echo  "BMI:  " . $player_1->calc_bmi(4, 5) ;

// echo "<br>" . "<br>";

// echo $fans_2->sport_rank(250350, 70) ." points"  . "<br>";
// echo  "player profiles: " . $player_2->playerProfile() ;
// echo ", " ."Trophies: " . $player_2->trophies_won() ;
// echo ", " . "speed:  " . $player_2->speed(7, 3)  ;
// echo  "BMI:  " . $player_2->calc_bmi(1.79, 5)  ;




class Creatures {
    var $leg ;
    var $hands;
    var $hair;
    var $claw;
    var $wings = true;
    var $mating = "True";

    function procreation(){
        return $this->mating;
    }


}

class Human extends Creatures {
    var $leg = 2;
    var $hands = 2;
    var $hair = "thick";
    var $wings = false;

    function Walking(){
        return $this-> leg;
    }

    function feeding(){
        return $this->hands;
    }

    function a_claws(){
        return $this->claw = false;
    }

    function flying(){
        return $this->wings;
    }

}

class Animals extends Creatures {
    var $fur = "thick";
    var $tails = True;

    function Walking(){
        return $this->leg;
    }

    function feeding(){
        return $this->hands;
    }

    
}

class spiritBeings extends Human {
    var $leg = 2;
    var $hands = 2;
    var $hair = false;
    var $wings = true;
    var $eyes = 4;
    var $claw = "True";

    function Walking(){
        return !$this->leg;
    }

    function feeding(){
        return $this->hands;
    }
    function a_claws(){
        return $this->claw;
    }

    function procreation(){
        return !$this->mating;
    }
}

$dog = new Animals;
$dan = new Human;
$dragon = new spiritBeings;
$cat = new Animals;


$dog->leg = 4;
echo "dogs walks on " .  $dog->Walking() ." legs". "<br>";
echo "dan has dark " . $dan->hair= "  Thick" ."  hair". "<br>" ;
echo $dan->feeding() . "<br>";
echo $dog->feeding() . "<br>";
//i declare the instance var to output the object
echo $cat->hands = "No hands"."<br>";
echo "cats walks on " . $cat->leg = 4 ." legs"."<br>";
echo $dan->claw = "false" ."<br>";
echo $dragon->a_claws() ."<br>";







?>