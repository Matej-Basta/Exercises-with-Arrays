<?php

// $cars_i_want = [];

// $cars_i_want[] = "Aston Martin";
// $cars_i_want[] = "Bugatti";
// $cars_i_want[] = "Ferrari";
// $cars_i_want[] = "Lamborghini";
// $cars_i_want[] = "Maserati";
// $cars_i_want[] = "Mercedes";
// $cars_i_want[] = "Porsche";
// $cars_i_want[] = "Skoda";

// echo "<ul>";

// foreach($cars_i_want as $car) {
//     echo "<li>{$car}</li>";
// }

// echo "</ul>";

// $car_prices = [
//     'Skoda Octavia' => 270000,
//     'Volkswagen Golf' => 170000,
//     'BMW X6' => 380000,
//     'Porsche 911' => 1150000
// ];

// echo "You have a Porsche for just {$car_prices["Porsche 911"]} CZK<br/>";

// foreach($car_prices as $car => $price) {
//     echo "The price of {$car} is {$price} CZK.<br/>";
// }

// $movies = [
//   'The Shawshank redemption',
//   'The Godfather',
//   'The Godfather II',
//   'Dark Knight', 
//   '12 angry men', 
//   'Schindler\'s list',
//   'Pulp fiction',
//   'Lord of the Rings: Return of the King',
//   'The good, the bad and the ugly',
//   'Fight club',
// ];

// $movies2 = $movies;

// echo "<ol>";

// foreach($movies as $key => $value) {
//     echo "{$key} is {$value}<br/>";
// }

// echo "<br/>";

// sort($movies);


// foreach($movies as $key => $value) {
//     echo "{$key} is {$value}<br/>";
// }

// echo "</ol>";


// $movie_names = [
//   'tt0468569' => 'Dark Knight', 
//   'tt0050083' => '12 angry men', 
//   'tt0108052' => 'Schindler\'s list',
//   'tt0110912' => 'Pulp fiction',
//   'tt0167260' => 'Lord of the Rings: Return of the King',
//   'tt0111161' => 'The Shawshank redemption',
//   'tt0071562' => 'The Godfather II',
//   'tt0060196' => 'The good, the bad and the ugly',
//   'tt0137523' => 'Fight club',
//   'tt0068646' => 'The Godfather',
// ];

// $movie_ratings = [
//   'tt0111161' => 9.2,
//   'tt0068646' => 9.2,
//   'tt0071562' => 9.0,
//   'tt0468569' => 8.9, 
//   'tt0050083' => 8.9, 
//   'tt0108052' => 8.9,
//   'tt0110912' => 8.9,
//   'tt0167260' => 8.9,
//   'tt0060196' => 8.9,
//   'tt0137523' => 8.8,
// ];

// echo "<ul>";

// arsort($movie_ratings);
 
// foreach($movie_ratings as $key => $rating) {
//     echo "<li>{$movie_names[$key]} - {$rating}</li>";
// }

// echo "</ul>";

// $movie = [];

// foreach($movie_ratings as $key => $rating) {
//     $movie[$key]["name"] = $movie_names[$key];
//     $movie[$key]["rating"] = $rating;
// }

// var_dump($movie);

// echo "<br/>";
// echo "<br/>";


// uasort($movie, function($a, $b) {
//     if ($a["rating"] < $b["rating"]) {
//         return -1;
//     } elseif($a["rating"] > $b["rating"]) {
//         return 1;
//     } elseif ($a["rating"] === $b["rating"]) {
        
//         if($a["name"] > $b["name"]) {
//             return 1;
//         } elseif($a["name"] < $b    ["name"]) {
//             return -1;
//         } elseif($a["name"] === $b["name"]) {
//             return 0;
//         }
//     };
// });

// var_dump($movie);


$messages = [
  'error' => [
    'Something went wrong',
    'Something went REALLY wrong',
    'There is no end to this!'
  ],
  'warning' => [
    'This is your first warning',
    'This is your final warning'
  ],
  'success' => [
    'Finally, something was successful.'
  ]
];

// echo "<div class='messages'>";
// foreach($messages as $key => $value) {

//     for($i = 0; $i < count($value); $i++) {
//         echo "<div class='message {$key}'>$value[$i]</div>";
//     }
// };
// echo "</div>";



function do_something_risky() {
  // pretend to do the risky stuff
 
  // return new messages
  return [
    'error' => [
      'I knew this would happen!',
      'This always happens.'
    ],
    'warning' => [
      'You should fix this before proceeding'
    ],
    'success' => []
  ];
}
 
// let's try it
$new_messages = do_something_risky();

// var_dump($new_messages["error"]);
// echo "<br/>";

foreach($messages as $key => $value) {
 
        $messages[$key] = array_merge($value, $new_messages[$key]);

        // var_dump($new_messages[$key]);
        // echo '::::::::::::::::::::::::::::';
        // var_dump($value);
        

        // array_merge($value, [1]);
  };

echo "<br/>";
  var_dump($messages);
  echo "<br/>";

foreach($messages as $key => $value){
  foreach($messages[$key] as $value) {
echo "<p>{$value}</p>";
  }
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
var_dump(parse_url("http://www.example.com?foo=bar"));
echo "<br/>";
echo "<br/>";
echo "<br/>";
$query_string = '?page=home&foo=bar';
parse_str($query_string, $data);
var_dump($data);
?>