<?php

namespace lesson2\example3\demo09;

class StaffService
{
    public function recruitEmployee(
        $firstName,
        $lastName,
        $phoneCode,
        $phoneNumber,
        $country,
        $region,
        $city,
        $street,
        $hose
    ) {
    //.....
    }
}


$service = new StaffService();
var_dump($service->recruitEmployee('Vasya','Pupkin',7,'92000000000','Russia','Lipetskaya obl','t.Pushjkinoi','ul.Lenina',1));
