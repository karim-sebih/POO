<?php

class Point{
    public int $x;
    public int $y;

public function __construct($x, $y){
    $this->x=$x;
    $this->y=$y;
    }

    public function afficherLesPoints(){
        echo "coordonnées des points (" . $this->x. ",  " . $this->y . ")". "<br>";
    }

        public function afficherx(){
        echo "AfficherX = " . $this->x."<br>";
    } 
    
    public function affichery(){
        echo "AfficherY = " . $this->y."<br>";
    }

    public function changerx($newvalueX){
        //echo "ChangerX = " . $this->x."<br>";
        return $this->x = $newvalueX;
    }

    public function changery($newvalueY){
        // echo "ChangerY = " . $this->y."<br>";
        return $this->y = $newvalueY;
    }


}

$point = new Point(4, 2);
echo $point->afficherLesPoints();

echo $point->afficherx();

echo $point->affichery();

echo $point->changerx(5);

echo $point->changery(3);
