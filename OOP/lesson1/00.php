<?php

function getFullName($lastName, $firstName)
{
    return $lastName. ' ' .$firstName;
}

$student = [
    'firstName' => 'Vasia',
    'lastName' => 'Pupkin',
    'birthDate' => '1190-01-12'
];
$student['firstName'] = 'Petya';
echo getFullName($student['lastName'],$student['firstName']) . PHP_EOL;