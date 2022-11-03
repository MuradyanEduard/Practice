<?php

abstract class Cars
{
    public $color;
    public $speed;
    public $transmission;
    public $year;

    public function __construct($color, $speed, $transmission, $year)
    {
        $this->color = $color;
        $this->speed = $speed;
        $this->transmission = $transmission;
        $this->year = $year;
    }

    abstract public function GetFullInfo();
}

class Mersedes extends Cars
{
    private $model;

    public function __construct($color, $speed, $transmission, $year, $model)
    {
        parent::__construct($color, $speed, $transmission, $year);
        $this->model = $model;
    }

    public function GetFullInfo()
    {
        return "Car Information: <b>Model:</b> " . $this->model . "<b> Color: </b>" . $this->color . " <b>Speed: </b>" . $this->speed . " <b>Transmission: </b>" . $this->transmission;
    }
}

class BMW extends Cars
{
    private $model;

    public function __construct($color, $speed, $transmission, $year, $model)
    {
        parent::__construct($color, $speed, $transmission, $year);
        $this->model = $model;
    }

    public function GetFullInfo()
    {
        return "Car Information: <b>Model:</b> " . $this->model . "<b> Color: </b>" . $this->color . " <b>Speed: </b>" . $this->speed . " <b>Transmission: </b>" . $this->transmission;
    }
}

class Audi extends Cars
{
    private $model;

    public function __construct($color, $speed, $transmission, $year, $model)
    {
        parent::__construct($color, $speed, $transmission, $year);
        $this->model = $model;
    }

    public function GetFullInfo()
    {
        return "Car Information: <b>Model:</b> " . $this->model . "<b> Color: </b>" . $this->color . " <b>Speed: </b>" . $this->speed . " <b>Transmission: </b>" . $this->transmission;
    }
}


$audi = new Audi("red", 240, "Automatic", 2010, "911");
$mersedes = new Mersedes("gray", 200, "Automatic", 2015, "cls");
$bmw = new BMW("black", 260, "Automatic", 2016, "x5");

echo $audi->GetFullInfo();
echo "<br>";
echo $mersedes->GetFullInfo();
echo "<br>";
echo $bmw->GetFullInfo();
echo "<br>";
