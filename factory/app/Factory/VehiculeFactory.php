<?php
namespace App\Factory;
use App\Entity\Bicycle;
use App\Entity\Car;
use App\Entity\Truck;
use App\Entity\Vehicule;

class VehiculeFactory {
    public static function createVehicule($type, $costPerKm, $fuelType) {
        switch ($type) {
            case 'bicycle':
                return new Bicycle($costPerKm, $fuelType);
            case 'car':
                return new Car($costPerKm, $fuelType);
            case 'truck':
                return new Truck($costPerKm, $fuelType);
            default:
                throw new \Exception('Unknown vehicule type');
        }
    }

    public static function getVehiculeWithDistanceAndWeight($distance, $weight) {
        if ($distance < 20 && $weight < 20) {
            return new Bicycle(0.1, 'muscle');
        } elseif ($weight > 200) {
            return new Truck(2, 'diesel');
        } else {
            return new Car(0.5, 'gasoline');
        }
    }
}