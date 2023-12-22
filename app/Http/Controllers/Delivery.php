<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Delivery extends Controller
{
    private $weight, $cost, $volume=[];

        public function setWeight($weight)
        {
            $this->weight= $weight*50;
            return $this;
        }

        public function getWeight()
        {

            return $this->weight;
        }

    public function setCost($cost)
    {
        $this->cost=$cost;
        return $this;
    }

    public function getCost()
    {
        return $this->cost;
    }

    public function setVolume(...$volume)
    {
        $volume=(array_product($volume)/1000)*50;
        $this->volume=$volume;
        return $this;
    }
    public function getVolume()

    {
        return $this->volume;
    }
    public function calculation()
    {

        $this->setWeight(8)->setVolume(20,20,20)->setCost(50);

        //Дальше у нас проверка того
        if (($this->weight >= $this->volume) && ($this->weight >= $this->cost)) {
            echo "Стоимость доставки по весу ";
            return  round(($this->getWeight()),2);
        }
        elseif (($this->volume > $this->weight) && ($this->volume > $this->cost)){
            echo "Стоимость доставки по объему ";
            return   round(($this->getVolume()),2);

        } elseif (($this->cost > $this->weight) && ($this->cost > $this->volume)){
            echo "Минимальная стоимость доставки ";
            return $this->getCost();
        }
        else{
            echo "Минимальная стоимость доставки ";
            return $this->getCost();
        }


    }

}
