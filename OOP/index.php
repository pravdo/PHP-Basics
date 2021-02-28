<?php

// What is class and instance
require_once "Person.php";
require_once "Student.php";

$student = new Student("Tim", "Paul", '1234');
echo '<pre>';
var_dump($student);
echo '</pre>';

/*
$p = new Person('Brad', 'Trav'); // instance
$p->setAge(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();

$p2 = new Person('John', 'Smith'); // instance
echo '<pre>';
var_dump($p2);
echo '</pre>';
echo Person::$counter;


echo $p -> name.'<br>';
*/
// Create Person class in Person.php

// Create instance of Person

// Using setter and getter