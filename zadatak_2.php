<?php

interface Verhicle {
    public function inspect();
}

interface VerhicleFactory {
    public function makeVerhicle(): verhicle;
}

class Car implements Verhicle {
    public function inspect()
    {
        echo 'Car';
    }
}

class Bike implements Verhicle{
    public function inspect()
    {
        echo 'Bike';
    }
}

class CarFactory implements VerhicleFactory {
    public function makeVerhicle(): Car {
        return new Car;
    }
}

class BikeFactory implements VerhicleFactory {
    public function makeVerhicle(): Bike {
        return new Bike;
    }
}

class InspectionService {
    private static $instance = null;
    public static $count;

    private function __construct() {
        
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new InspectionService();
        }
        return self::$instance;
    }

    public function inspectVehicle($vehicle) {
        $vehicle->inspect();
        self::$count ++;
    }
}

$verhicle = new CarFactory();
$car = $verhicle->makeVerhicle();
$verhicle1 = new BikeFactory();
$bike = $verhicle1->makeVerhicle();

InspectionService::getInstance()->inspectVehicle($car);
InspectionService::getInstance()->inspectVehicle($bike);
echo InspectionService::$count;
