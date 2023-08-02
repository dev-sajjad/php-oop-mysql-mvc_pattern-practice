<?php 
  // indexed array
  $peopleOne = ['Sam', 'John', 'George'];
//   echo $peopleOne[1];

  $peopleTwo = array('John', 'George' );
//   echo $peopleTwo[1];

$ages = [23, 28, 30, 31, 32];
// print_r($ages);

$ages[2] = 29;
// print_r($ages)

//insert into array
$ages[] = 50;
// print_r($ages)

array_push($ages, 60);
// print_r($ages);

$peopleThree = array_merge($peopleOne, $peopleTwo);
// print_r($peopleThree);

// count array elements
// echo count($ages);


// associative array (key and value pairs)

$colorOne = ['Nicola' => 'black', 'Rachel' => 'red',];
// echo $colorOne['Karim'];
// print_r($colorOne);

$colorOne['Mario'] = 'pink';
// print_r($colorOne);

$colorTwo = array('Sam' => 'yellow', 'John' => 'green',);
// print_r($colorTwo);

$colorThree = array_merge($colorOne, $colorTwo);
// print_r($colorThree);


// multi-dimensional array
$blogs = [
    ['mario party', 'mario', 'lorem', 30],
    ['mario kart cheats', 'toad', 'lorem', 30],
    ['Little boy in the forest', 'sam', 'lorem, 25']
];

// print_r($blogs[1][1]);

$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
    ['title' => 'mario kart cheats', 'author' => 'toad', 'content' =>  'lorem', 'likes' => 30],
    ['title' => 'Little boy in the forest', 'author' =>  'sam', 'content' => 'lorem', 'likes' =>  25]
];

// echo $blogs[0]['author'];
// echo '<br>';
// echo count($blogs);

$blogs[] = ['title' => 'Don\'t know anything', 'author' => 'sam', 'content' => 'lorem', 'likes' => 20];
// print_r($blogs);

$popped = array_pop($blogs);
print_r($popped);
