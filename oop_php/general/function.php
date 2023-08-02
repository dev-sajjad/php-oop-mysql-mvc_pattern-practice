<?php
function sayHello($name = 'sam', $time = 'morning')
{
    echo "Good $time $name ";
}
sayHello('John', 'Evening');


function formatProduct($product)
{
    // echo "{$product['name']} costs {$product['price']} to buy <br/>";
    return  "{$product['name']} costs {$product['price']} to buy <br/>";
}
// $formatted = formatProduct(['name' => 'Lion', 'price' => 30]);
// echo $formatted;


// local variables

function myFunc()
{
    $price = 10;
    echo $price;
}

// myFunc();
// echo $price;

function myFuncTwo($age)
{
    echo $age;
}
// myFuncTwo(20);
// echo $age;

// global variables

$name = 'Robert';

// function sayHello() {
//     global $name;
//     $name = "Mario";
//     echo "Hello $name <br/>";
// }

// sayHello();
// echo $name

function sayBye(&$name)
{  // &$name is using as a reference to the $name
    $name = "Ruby";
    echo "Bye $name <br/>";
}

// sayBye($name);
// echo $name;
