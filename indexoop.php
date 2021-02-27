<?php


// public


class Employee extends Person{

    static $employeeNumber = 100;

    const COMPANY_NAME = 'ACME';
    /**
     * Title of job
     * @var string Job Title
     */
    private $jobTitle;
    private $jobNumber;

    public static function getEmployeeNumber(){
        return self::$employeeNumber;
    }

    public function __construct($jobTitle, $firstName, $lastName, $gender = 'm')
    {
        $this->jobTitle = $jobTitle;
        //echo self::COMPANY_NAME;
        echo parent::EYE_COLOUR;
        parent::__construct($firstName, $lastName, $gender);
    }

    public function __set($name, $value){
        $this->$name = ucfirst($value);
    }

    public function __get($name){
        return $this->$name;
    }

    public function sayHello()
    {
        $message = "Hello my name is " . $this->firstName . " " . $this->lastName . " \n";
        $message .= " My job title is " . $this->jobTitle;
        return $message;
    }


}

class Person{

    const EYE_COLOUR = 'brown';
    public $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender = 'm')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }


    public function getGender()
    {
        return $this->gender;
    }
}
/**
$jane = new Employee('Backend Developer', 'Jane', 'Holman');
$jane->jobTitle = 'Tester';
$jane->jobNumber = 5;
echo Employee::COMPANY_NAME;
echo $jane->jobTitle;
echo "\n";
echo $jane->jobNumber;
echo "\n";
 * */
echo Employee::getEmployeeNumber();
echo "\n";
