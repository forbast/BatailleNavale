<?php

class Grille
{

    private $grille;

    /**
     * Grille constructor.
     * @param $grille
     */

    public function __construct($width)
    {
        if($width <= 0 || $width > 64){
            $this->grille = null;
            return;
        }

        for($i = 0; $i < $width; $i++ )
        {
            for($j = 0; $j < $width; $j++ )
            {
                $laGrille[$i][$j] = 1;
            }
        }
        $this->grille = $laGrille;
    }

    /**
     * @return mixed
     */
    public function getGrille()
    {
        return $this->grille;
    }


    public function getDataInGrille($x, $y)
    {
        if($x < 0  || $y < 0){
            return null;
        }

        return $this->getGrille()[$x][$y];

    }

}