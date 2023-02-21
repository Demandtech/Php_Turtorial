<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
 //Protperties are attibutes that belong to class
 //Public = can be accessed from anywhere
 //Private= can only be access from class
 //Protected = can only be access from inside class and by ihering classess
 public $name;
 public  $email;
 public  $password;

 //A constructor is a method that runs when an object is created
 public function __construct($name, $email, $password)
 {
  $this-> name = $name;
  $this-> email = $email;
  $this-> password = $password;
 }

 //Method is a function that belong to a class
 function set_name($name){
  $this->name = $name;
 }
 function get_name(){
  return $this->name;
 }
}

//Instiate a use object

$user1 = new User('Brad', 'demandwork@gmail.com', '123456');
$user2 = new User('Rasheed', 'demandwork', 'dmeand');

//echo $user1->name;
//echo $user2->password;


//Inheritance

class Employee extends User {
 public function __construct($name, $email, $password, $title)
 {
  parent::__construct($name, $email, $password);
  $this->title = $title;
 }
 public function get_title(){
  return $this->title;
 }
}

$employee1 = new Employee('Sara', 'sara@yahoo.com', 'password', 'Manager');

echo $employee1->get_title();