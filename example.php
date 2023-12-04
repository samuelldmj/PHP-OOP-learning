<?php
//practise 3
//read the json string and find the phone code based on country
//then write all of the data as csv
// echo '<pre>';
// $json = '{
//     "countries": [
//       {
//         "code": "+7 840",
//         "Abkhazia"
//       },
//       {
//         "code": "+93",
//         "Afghanistan"
//       },
//       {
//         "code": "+355",
//         "Albania"
//       },
//       {
//         "code": "+213",
//         "Algeria"
//       },
//       {
//         "code": "+1 684",
//         "American Samoa"
//       },
//       {
//         "code": "+376",
//         "Andorra"
//       },
//       {
//         "code": "+244",
//         "Angola"
//       },
//       {
//         "code": "+1 264",
//         "Anguilla"
//       },
//       {
//         "code": "+1 268",
//         "Antigua and Barbuda"
//       },
//       {
//         "code": "+54",
//         "Argentina"
//       },
//       {
//         "code": "+374",
//         "Armenia"
//       },
//       {
//         "code": "+297",
//         "Aruba"
//       },
//       {
//         "code": "+247",
//         "Ascension"
//       },
//       {
//         "code": "+61",
//         "Australia"
//       },
//       {
//         "code": "+672",
//         "Australian External Territories"
//       },
//       {
//         "code": "+43",
//         "Austria"
//       },
//       {
//         "code": "+994",
//         "Azerbaijan"
//       },
//       {
//         "code": "+1 242",
//         "Bahamas"
//       },
//       {
//         "code": "+973",
//         "Bahrain"
//       },
//       {
//         "code": "+880",
//         "Bangladesh"
//       },
//       {
//         "code": "+1 246",
//         "Barbados"
//       },
//       {
//         "code": "+1 268",
//         "Barbuda"
//       },
//       {
//         "code": "+375",
//         "Belarus"
//       },
//       {
//         "code": "+32",
//         "Belgium"
//       },
//       {
//         "code": "+501",
//         "Belize"
//       },
//       {
//         "code": "+229",
//         "Benin"
//       },
//       {
//         "code": "+1 441",
//         "Bermuda"
//     }
//         ]
//       }';
//     echo '</pre>';

//read the json string and find the phone code based on country
//then write all of the data as csv
// $array = json_decode($json, false);
// $data = $array['countries'];
// print_r($data);

//this func below when you want to access json files from a file, insert the json file path as argument into the func
// $JSON = file_get_contents($json);
// $jsonIterator = new RecursiveIteratorIterator(
//     new RecursiveArrayIterator(json_decode($json, TRUE)),
//     RecursiveIteratorIterator::SELF_FIRST);


// foreach ($jsonIterator as $key => $val) {
//     if(!is_array($val)) {
//     print $key."    : ".$val . "<br/>";
//     }
// }



// ==============================================================================================

// ==============================================================================================

//practise 3
//read the json string and find the phone code based on country
//then write all of the data as csv
echo '<pre>';
$json =  
      '{
        "Abkhazia": "+7 840",
        "Afghanistan": "+93",
        "Albania": "+355",
        "Algeria": "+213",
        "American Samoa": "+1 684",
        "Andorra": "+376"
      }';

echo '</pre>';

// $query = "Algeria";

$countries = json_decode($json, associative: true);
// //to access each element as a key-vlaue array
// foreach($countries as $country => $phone ){
//   if( $country == $query){
//     echo $phone;  
//   }  
// }

// reading to csv files
$file = fopen("./example.csv", "w");
fputcsv($file, ["country", "phone"]);
foreach($countries as $country => $phone ) {
  fputcsv($file, [$country, $phone]);
}
fclose($file); 
      







?>