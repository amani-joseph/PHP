<?php

// What is class and instance
class Person{
    public $name;
    public $title;
    public $age;
    public $city;

    public static $counter = 0;


    public function __construct($name, $title, $age,$city)
    {
        $this->name = $name;
        $this->title = $title;
        $this->age = $age; 
        $this->city = $city; 
        self::$counter++;
        // echo $name.' is a '.$title.' based in '.$city;
    }
    public static function getCounter()
    {
        return self::$counter;
    }

}

$amani = new Person('amani','software engineer', 24, 'nairobi');
$joe = new Person('joe','software dev', 25, 'Sydney');
$tim = new Person('tim','sound engineer', 24, 'London');
$tash = new Person('tash','civil engineer', 24, 'Kigali');

// $joe->name = 'Joe Amani';
// $joe->title = 'Software Engineer';
// $joe->age = 24;
// $joe->city = 'Nairobi';

echo '<pre>';
// var_dump($joe);
var_dump($amani);
var_dump($joe);
var_dump($tim);
var_dump($tash);
echo Person::$counter.'<br>';
echo Person::getCounter();
echo '</pre>';

// Create Person class in Person.php

// Create instance of Person

// Using setter and getter