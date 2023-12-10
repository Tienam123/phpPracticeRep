<?php

namespace lesson2\example3\demo10;

class StaffService
{
    public function recruitEmployee($name, $phone, $adress)
    {
        $empoloyee = [
            'id'     => rand(10000, 999999),
            'name'   => $name,
            'phone'  => $phone,
            'adress' => $adress
        ]
    }

    private function save($employee)
    {
        $file = __DIR__.'/data/employee_'.$employee['id'].'.php';
        file_put_contents($file, '<?php return '.var_export($empoloyee, true).';')
    }
}


$service = new StaffService();
var_dump($service->recruitEmployee('Vasya', 'Pupkin', 7, '92000000000', 'Russia', 'Lipetskaya obl', 't.Pushjkinoi',
    'ul.Lenina', 1));
######################################################################################
$name   = [
    'first' => 'Vasya',
    'last'  => 'Pupkin',
];
$phone  = [
    'code'   => '+38',
    'number' => '0635262416'
];
$adress = [
    'country' => 'Russia',
    'oblast'  => 'Lipetskaya',
    'town'    => 'Pushkino',
    'street'  => 'Lenina',
    'house'   => 1
]
$service->recruitEmployee($name, $phone, $adress);