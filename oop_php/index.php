<?php
// static properties



// //static methods
// class Greeting {
//     public static function welcome()
//     {
//         echo "Welcome to dev-sajjad.com again";
//     }
//     public function __construct()
//     {
//         self::welcome();
//     }
// }

// new Greeting();

// Greeting::welcome();

// class Domain {
//     public static function getDomain() 
//     {
//         return "dev-sajjad.me";
//     }
// }

// class PersonalDomain extends Domain {
//     public $websiteName;
//     public function __construct()
//     {
//         $this->websiteName = parent::getDomain();
//     }
// }

// $domain = new PersonalDomain();
// echo $domain->websiteName;



// //trait
// trait message1 {
//     private function msg()
//     {
//         echo "OOP is fun in private!";
//     }
// }

// class Welcome {
//     use message1;
//     public function msg2() 
//     {
//         $this->msg();
//     }
// }

// $welcome = new Welcome();
// $welcome->msg2();



// interface Animal {
//     public function makesound();
// }

// class Cat implements Animal {
//     public function makesound() 
//     {
//         echo 'Meow';
//     }
// }

// class Dog implements Animal {
//     public $color;
//     public function __construct($color)
//     {
//         $this->color = $color;
//     }
//     public function makesound() 
//     {
//         echo "Dog is Barking and it color is $this->color";
//     }
// }


// class Mouse implements Animal {
//     public function makesound() 
//     {
//         echo 'Squeak';
//     }
// }

// $cat = new Cat();
// $dog = new Dog('Red');
// $mouse = new Mouse();

// $animals = Array($cat, $dog, $mouse);

// foreach($animals as $animal) 
// {
//     echo $animal->makesound() . "<br/>";
// }



// //parent class
// abstract class Car {
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     abstract public function intro() : string;
// }

// // child class
// class Volvo extends Car {
//     public function intro() : string 
//     {
//         return "I am a $this->name user.";
//     }
// }

// class Toyota extends Car {
//     public function intro() : string 
//     {
//         return "I am a $this->name user.";
//     }
// }

// class BMW extends Car {
//     public function intro() : string 
//     {
//         return "I am a $this->name user.";
//     }
// }

// $volvo = new Volvo('Volvo');
// echo $volvo->intro() . "<br/>";

// $toyota = new Toyota('Toyota'); 
// echo $toyota->intro() . "<br/>";

// $bmw = new BMW('BMW');
// echo $bmw->intro() . "<br/>";







// class Goodbye {
//     const LEAVING_MESSAGE = 'Thanks for visiting us from outside.';
//     public function byebye() 
//     {
//         echo self::LEAVING_MESSAGE;
//     }
// }
// $message = new Goodbye();
// $message->byebye();



// Class Fruit {

// public $name;
// public $color;

// public function __construct($name, $color) 
// {
//     $this->name = $name;
//     $this->color = $color;
// }


// public function get_name() 
// {
//     return $this->name;
// }

// public function get_color() 
// {
//     return $this->color;
// }

// }

// class Strawberry extends Fruit {
//     public function message()
//     {
//         echo 'From child class';
//     }
// }

// $strawberry = new Strawberry('Strawberry', 'red');
// $strawberry->get_name() . '<br/>';
// $strawberry->get_color() . '<br/>';
// $strawberry->message();

// print_r( get_class_vars('User'));
// print_r( get_class_methods('User'));

// $apple = new Fruit('apple', 'red');
// $banana = new Fruit('banana', 'yellow');


// echo $apple->get_name() . '<br/>';
// echo $apple->get_color() . '<br/>'; 
// echo $banana->get_name() . '<br/>'; 
// echo $banana->get_color() . '<br/>'; 


// $firstObj->set_name('John');
// echo $firstObj->get_name();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in PHP</title>
</head>
<body>
    
</body>
</html>