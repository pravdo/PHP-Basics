<?php
class Person{
    public string $nane; // properties
    public string $surnname;
    private ?int $age; // ?int accepts null values
    public static int $counter = 0;

    public function __construct($name, $surnname)
    {
        echo $name.' ',$surnname;
        $this->name = $name;
        $this->surnname = $surnname;
        self::$counter++;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    public static function getCounter(){
        return self::$counter;
    }
}