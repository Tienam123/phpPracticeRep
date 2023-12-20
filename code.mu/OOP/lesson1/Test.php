<?php
namespace lesson1\example1;
class User
{
    private $name;
    private $surname;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getFullName()
    {
        return $this->getName() . $this->getSurname();
    }
}

class Worker extends User
{

   private $birthday;
   public function __construct($name, $surname,$date)
   {
       parent::__construct($name, $surname);
       if (preg_match('#^[\d]{4}-[\d]{2}-[\d]{2}$#',$date)) {
        self::calculateAge($date);
       } else {
           return 'Дату нужно ввести в формате'. 'Год'.'-'.'Месяц'.'-'.'Дата';
       }
   }
   public function getAge()
   {
       return $this->birthday;
   }
   private function calculateAge($date)
   {
       $age =date('Y') - date('Y',strtotime($date)) ;
       $mdBirth = date('md',strtotime($date));
       $mdCurr = date('md');
       if ($mdBirth < $mdCurr){
           $this->birthday = $age;
       } else {
           $age--;
           $this->birthday=$age;
       }
   }
}
$user = new Worker('Vladyslav','Honchar','1990-10-25');

class Employee extends Worker
{
    private $salary;
    public function __construct($name, $surname, $date,$salary)
    {
        $this->salary = $salary;
        parent::__construct($name, $surname, $date);
    }
}
$employee = new Employee('Leonid','Honchar','1993-11-11',5000);
var_dump($employee);