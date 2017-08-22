<?php
/**
 * Created by PhpStorm.
 * User: Cesar Morales
 * Date: 08-20-17
 * Time: 08:35 AM
 */

namespace Vehicles;


class ToyCar extends VehicleBase {
    public function move(){
        echo $this->startEngine() . '<br>';
        echo 'Car: moving<br>';
    }

    public function startEngine()
    {
        throw new \Exception('Engine not found');
    }
}