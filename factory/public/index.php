<?php
require('../vendor/autoload.php');
use App\Factory\VehiculeFactory;

$car = VehiculeFactory::createVehicule('car', 0.5, 'gasoline');
$truck = VehiculeFactory::createVehicule('truck', 2, 'diesel');
$bicycle = VehiculeFactory::createVehicule('bicycle', 0.1, 'muscle');

echo $car->getCostPerKm() . "\n";
echo $truck->getCostPerKm() . "\n";
echo $bicycle->getCostPerKm() . "\n";

echo $car->getFuelType() . "\n";
echo $truck->getFuelType() . "\n";
echo $bicycle->getFuelType() . "\n";


# Essayer d'utiliser votre factory ici