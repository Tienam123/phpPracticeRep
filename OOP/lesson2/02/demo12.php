<?php

namespace lesson2\example3\demo12;

class Name
{
    public $name;
    public $surname;

    public function __construct($name, $surname)
    {
        $this->name    = $name;
        $this->surname = $surname;
    }
}

class Phone
{
    public $code;
    public $number;

    public function __construct($code, $number)
    {
        $this->code   = $code;
        $this->number = $number;
    }
}

class Adress
{
    public $country;
    public $region;
    public $city;
    public $street;
    public $house;

    public function __construct($country, $region, $city, $street, $house)
    {
        $this->country = $country;
        $this->region  = $region;
        $this->city    = $city;
        $this->street  = $street;
        $this->house   = $house;
    }
}

class Employee
{
    public $id;
    public $name;
    public $address;

    public function __construct($id, Name $name, Phone $phone, Adress $adress)
    {
        $this->id      = $id;
        $this->name    = $name;
        $this->phone   = $phone;
        $this->address = $adress;
    }
}

class StaffService
{
    public function recruitEmployee(Name $name, Phone $phone, Adress $address)
    {
        $employee = new Employee($this->generateId(), $name, $phone, $address);

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


$service = new StaffService();
var_dump($service->recruitEmployee(
    new Name('Vladyslav', 'Honchar'),
    new Phone('+38', '0635262415'),
    new Adress('Ukraine', 'Dnipropetrovska obl.', 'Novomoskovsk', 'Malinova', '50')
));



######################################################################################
