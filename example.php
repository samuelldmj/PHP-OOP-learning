<?php
//practise 3
//read the json string and find the phone code based on country
//then write all of the data as csv
echo '<pre>';
$json = '{
    "countries": [
      {
        "code": "+7 840",
        "name": "Abkhazia"
      },
      {
        "code": "+93",
        "name": "Afghanistan"
      },
      {
        "code": "+355",
        "name": "Albania"
      },
      {
        "code": "+213",
        "name": "Algeria"
      },
      {
        "code": "+1 684",
        "name": "American Samoa"
      },
      {
        "code": "+376",
        "name": "Andorra"
      },
      {
        "code": "+244",
        "name": "Angola"
      },
      {
        "code": "+1 264",
        "name": "Anguilla"
      },
      {
        "code": "+1 268",
        "name": "Antigua and Barbuda"
      },
      {
        "code": "+54",
        "name": "Argentina"
      },
      {
        "code": "+374",
        "name": "Armenia"
      },
      {
        "code": "+297",
        "name": "Aruba"
      },
      {
        "code": "+247",
        "name": "Ascension"
      },
      {
        "code": "+61",
        "name": "Australia"
      },
      {
        "code": "+672",
        "name": "Australian External Territories"
      },
      {
        "code": "+43",
        "name": "Austria"
      },
      {
        "code": "+994",
        "name": "Azerbaijan"
      },
      {
        "code": "+1 242",
        "name": "Bahamas"
      },
      {
        "code": "+973",
        "name": "Bahrain"
      },
      {
        "code": "+880",
        "name": "Bangladesh"
      },
      {
        "code": "+1 246",
        "name": "Barbados"
      },
      {
        "code": "+1 268",
        "name": "Barbuda"
      },
      {
        "code": "+375",
        "name": "Belarus"
      },
      {
        "code": "+32",
        "name": "Belgium"
      },
      {
        "code": "+501",
        "name": "Belize"
      },
      {
        "code": "+229",
        "name": "Benin"
      },
      {
        "code": "+1 441",
        "name": "Bermuda"
    }
        ]
      }';
    echo '</pre>';

//read the json string and find the phone code based on country
//then write all of the data as csv
$array = json_decode($json, true);
$data = $array['countries'];
print_r($data);













?>