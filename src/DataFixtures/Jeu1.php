<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
$artist1 = new Artist();

$artist1->setArtistName("Queens Of The Stone Age");
$artist1->setArtistUrl("https://qotsa.com/");


        $manager->flush();
        
    }
}
