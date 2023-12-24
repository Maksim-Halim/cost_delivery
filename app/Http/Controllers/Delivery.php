<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Delivery
{
    private $weight, $volume, $cost;

    public function __construct($weight=0, $volume=[] ,$cost=50)
    {
        $this->weight = $weight*50;
        $this->volume = array_product($volume)/1000*50;
        $this->cost = $cost;
       // $this->method=['Стоимость по весу ','Стоимость по объему ','Минимальная стоимость '];

    }
    
    public function getWeight()
    {
        return $this->weight;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function calculation()
    {
        //Дальше у нас проверка того
        if (($this->getWeight() >= ($this->getVolume())) && ($this->getWeight() >= $this->getCost())) {
            echo "Стоимость доставки по весу ";
            return $this->getWeight();
        }
        elseif (($this->getVolume() > $this->getWeight()) && ($this->getVolume() > $this->getCost())){
            echo "Стоимость доставки по объему ";

            return   $this->getVolume();

        } elseif (($this->cost > $this->weight) && ($this->cost > $this->volume)){
            echo "Минимальная стоимость доставки ";
            return $this->getCost();
        }
        else{
            echo "Минимальная стоимость доставки ";
            return $this->getCost(); //В случае если все стоимости одинаковые,
        }
    }

}
