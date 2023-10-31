<?php
class CarController
{
  private $cars = [];

  public function __construct()
  {
    $this->cars[] = new Car("2453", "Toyota", "Supra", 2023, "white");
    $this->cars[] = new Car("4687", "Toyota", "AE86", 1998, "black");
    $this->cars[] = new Car("1231", "Nissan", "Silvia S15", 1999, "red");
  }

  public function list()
  {
    // return all cars
    $listCars = $this->cars;
    require '../src/views/list.php';
  }

  public function show($id)
  {
    // return the car with this id
    $cars = array_filter($this->cars, fn ($car) => $car->id == $id);
    if (sizeof($cars) > 0) {
      $car = array_pop($cars);
      require '../src/views/show.php';
    } else echo "Car not found";
  }
}
