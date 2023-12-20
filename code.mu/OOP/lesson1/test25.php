<?php

namespace lesson1\example25;

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class EmployeesCollection
{
    private $employees = []; // массив работников, по умолчанию пустой

    // Получаем всех работников в виде массива:
    public function get()
    {
        return $this->employees;
    }

    // Подсчитываем количество хранимых работников:
    public function count()
    {
        return count($this->employees);
    }


    // Добавляем нового работника:
    public function add($employee)
    {
        $this->employees[] = $employee; // $employee - объект класса Employee
    }

    public function getTotalSalary()
    {
        $sum = 0;
        // Перебираем работников циклом:
        foreach ($this->employees as $employee) {
            $sum += $employee->getSalary(); // получаем з/п работника через метод getSalary()
        }

        return $sum;
    }
}

$employeesCollection = new EmployeesCollection;
$employeesCollection->add(new Employee('John', 100));
$employeesCollection->add(new Employee('Eric', 200));
$employeesCollection->add(new Employee('Kyle', 500));
var_dump($employeesCollection->getTotalSalary());
var_dump($employeesCollection);
echo '=================================';

class Product
{
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getQuantity()
    {
        return $this->quantity;
    }
    public function getCost()
    {
        return $this->price*$this->quantity;
    }
}
class Cart
{
    private $products = [];

    public function add(Product $product)
    {
        $this->products[] = $product;
    }
    public function remove($string)
    {
        foreach ($this->products as $key => $product) {
            if (strtolower($product->getName()) === strtolower($string)) {
                array_splice($this->products,1,$key);
            }
        }
    }
    public function getTotalCost()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getCost();

        }
        return $total;
    }
    public function getTotalQuantity()
    {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->getQuantity();
        }
        return $total;
    }
    public function getAvgPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getCost();
        }
        return round($totalPrice/count($this->products),2);
    }
}


$cart = new Cart();
$cart->add(new Product('Iphone',2000,2));
$cart->add(new Product('Samsung',5000,3));
$cart->add(new Product('Xiaomi',1000,4));
var_dump($cart);
echo "=======================================================";
var_dump($cart->getAvgPrice());
var_dump($cart->getTotalQuantity());
var_dump($cart->getTotalCost());
















