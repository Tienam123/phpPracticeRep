<?php

namespace lesson2\example3\demo11;

class Name
{
    public $name;
    public $surname;
}

class Phone
{
    public $code;
    public $number;
}

class Adress
{
    public $counry;
    public $region;
    public $city;
    public $street;
    public $house;
}

class Employee
{
    public $id;
    public $name;
    public $surname;
    public $address;
}

class StaffService
{
    public function recruitEmployee(Name $name, Phone $phone, Adress $address)
    {
        $employee          = new Employee();
        $employee->id      = $this->generateId();
        $employee->name    = $name;
        $employee->phone   = $phone;
        $employee->address = $address;
        return $employee;
    }


    private function generateId()
    {
        return rand(1000, 99999);
    }

    private function save(Employee $employee)
    {
        $file = __DIR__.'/data/employee_'.$employee['id'].'.php';
        file_put_contents($file, '<?php return '.var_export($employee, true).';');
    }

}


$service         = new StaffService();
$name            = new Name();
$phone           = new Phone();
$adress          = new Adress();
$name->name      = 'Vladyslav';
$name->surname   = 'Honchar';

$phone->code     = '+38';
$phone->number   = '0635262415';

$adress->country = 'Ukraine';
$adress->region  = 'Dnipropetrovska obl.';
$adress->city    = 'Novomoskovsk';
$adress->street  = 'Malinova';
$adress->house   = '50';

var_dump($service->recruitEmployee($name, $phone, $adress));

######################################################################################
