<?php

namespace lesson2\example3\demo15;

class Name
{
    private $name;
    private $surname;

    public function __construct($name, $surname)
    {
        $this->name    = $name;
        $this->surname = $surname;
    }
    public function getFullName() {
        return $this->name . ' ' . $this->surname;
        
    }

}

class Phone
{
    private $code;
    private $number;

    public function __construct($code, $number)
    {
        $this->code   = $code;
        $this->number = $number;
    }
}

class Adress
{
    private $country;
    private $region;
    private $city;
    private $street;
    private $house;

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
    private $id;
    private $name;
    private $address;

    public function __construct($id, Name $name, Phone $phone, Adress $adress)
    {
        $this->id      = $id;
        $this->name    = $name;
        $this->phone   = $phone;
        $this->address = $adress;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName (Name $name) {
        $this->name = $name;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function getAdress()
    {
        return $this->adress;
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


$service  = new StaffService();
$employee = $service->recruitEmployee(
    new Name('Vladyslav', 'Honchar'),
    new Phone('+38', '0635262415'),
    new Adress('Ukraine', 'Dnipropetrovska obl.', 'Novomoskovsk', 'Malinova', '50')
);
var_dump($employee->getName()->getFullName());
$employee->setName(new Name('Ruslan','Honchar'));
var_dump($employee->getName()->getFullName());
######################################################################################
