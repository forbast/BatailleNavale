<?php

/**
 * Created by PhpStorm.
 * User: Bastien
 * Date: 05/04/2017
 * Time: 15:23
 */
declare(strict_types=1);
use PHPUnit\Framework\TestCase;

include '/class/Grille.php';


final class GrilleTest extends \PHPUnit\Framework\TestCase
{
    public function testTaille4Grille()
    {
        $grille = new Grille(4);
        $grille = $grille->getGrille();

        $this->assertTrue($grille == array(array(1, 1, 1, 1), array(1, 1, 1, 1), array(1, 1, 1, 1), array(1, 1, 1, 1)));
    }

    public function testTaille5Grille()
    {
        $grille = new Grille(5);
        $grille = $grille->getGrille();

        $this->assertTrue($grille == array(array(1, 1, 1, 1,1), array(1, 1, 1, 1,1), array(1, 1, 1, 1,1), array(1, 1, 1, 1,1), array(1, 1, 1, 1,1)));
    }


    public function testWrongParam()
    {
        $grille = new Grille(-1);
        $grille = $grille->getGrille();

        $this->assertTrue($grille == null);
    }


    public function testBigGrille()
    {
        $grille = new Grille(100); //Max 64
        $grille = $grille->getGrille();

        $this->assertTrue($grille == null);
    }

    public function testRecupDataGrille()
    {
        $grille = new Grille(4);
        $dataInGrille = $grille->getDataInGrille(1,1);

        $this->assertTrue($dataInGrille == 1);
    }

    public function testRecupDataGrilleWithWrongData()
    {
        $grille = new Grille(4);
        $dataInGrille = $grille->getDataInGrille(-1,1);

        $this->assertTrue($dataInGrille == null);
    }
}


