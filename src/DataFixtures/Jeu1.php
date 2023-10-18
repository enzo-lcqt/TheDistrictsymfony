<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Artist;
use App\Entity\Disc;

class Jeu1 extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        
$artist1 = new Artist();

$artist1->setArtistName("Mister V");
$artist1->setArtistUrl("https://qotsa.com/");

$manager->persist($artist1);

$artist2 = new Artist();

$artist2->setArtistName("Jack UZI");
$artist2->setArtistUrl("https://qotsa.com/");

$manager->persist($artist2);

$artist3 = new Artist();

$artist3->setArtistName("Damso");
$artist3->setArtistUrl("https://qotsa.com/");

$manager->persist($artist3);

$artist4 = new Artist();

$artist4->setArtistName("Nekfeu");
$artist4->setArtistUrl("https://qotsa.com/");

$manager->persist($artist4);

$artist5 = new Artist();

$artist5->setArtistName("Ninho");
$artist5->setArtistUrl("https://qotsa.com/");

$manager->persist($artist5);

$artist6 = new Artist();

$artist6->setArtistName("SCH");
$artist6->setArtistUrl("https://qotsa.com/");

$manager->persist($artist6);

$artist7 = new Artist();

$artist7->setArtistName("Tupac");
$artist7->setArtistUrl("https://qotsa.com/");

$manager->persist($artist7);

$artist8 = new Artist();

$artist8->setArtistName("Orelsan");
$artist8->setArtistUrl("https://qotsa.com/");

$manager->persist($artist8);

$artist9 = new Artist();

$artist9->setArtistName("Snoop Dog");
$artist9->setArtistUrl("https://qotsa.com/");

$manager->persist($artist9);

$artist10 = new Artist();

$artist10->setArtistName("Eminem");
$artist10->setArtistUrl("https://qotsa.com/");

$manager->persist($artist10);

$disc1 = new Disc();
$disc1->setDiscTitle("can i get some burger");
$disc1->setDiscYear("2016");
$disc1->setDiscPicture("https://cdn-www.konbini.com/files/2022/12/jones-burger-feat.jpg");
$disc1->setDiscLabel("Youtube");
$disc1->setDiscGenre("nul");
$disc1->setDiscPrice("1.00");

$manager->persist($disc1);

$disc2 = new Disc();
$disc2->setDiscTitle("jack de la tourette");
$disc2->setDiscYear("2016");
$disc2->setDiscPicture("https://i.ytimg.com/vi/B9cCx09KQAM/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDXgXhLzusRt2n8HOJfYc98-UBp1g");
$disc2->setDiscLabel("Youtube");
$disc2->setDiscGenre("excellent");
$disc2->setDiscPrice("100.00");

$manager->persist($disc2);

$disc3 = new Disc();
$disc3->setDiscTitle("amnésie");
$disc3->setDiscYear("2016");
$disc3->setDiscPicture("https://media-mcetv.ouest-france.fr/wp-content/uploads/2023/09/damso-ses-fans-choques-par-le-prix-de-son-vinyle-surprise-qalf-live-.jpeg");
$disc3->setDiscLabel("Youtube");
$disc3->setDiscGenre("excellent");
$disc3->setDiscPrice("150.00");

$manager->persist($disc3);

$disc4 = new Disc();
$disc4->setDiscTitle("On verra");
$disc4->setDiscYear("2016");
$disc4->setDiscPicture("https://i.ytimg.com/vi/YltjliK0ZeA/maxresdefault.jpg");
$disc4->setDiscLabel("Youtube");
$disc4->setDiscGenre("excellent");
$disc4->setDiscPrice("200.00");

$manager->persist($disc4);

$disc5 = new Disc();
$disc5->setDiscTitle("Jefe");
$disc5->setDiscYear("2016");
$disc5->setDiscPicture("https://decibelsprod.com/wp-content/uploads/2019/11/Decibels-Prod_artiste_thumbs_ninho.jpg");
$disc5->setDiscLabel("Youtube");
$disc5->setDiscGenre("excellent");
$disc5->setDiscPrice("250.00");

$manager->persist($disc5);

$disc6 = new Disc();
$disc6->setDiscTitle("fusil");
$disc6->setDiscYear("2016");
$disc6->setDiscPicture("https://media.gqmagazine.fr/photos/5de11593c6b0590008eb2782/master/pass/V_punchlines_SCH-m.jpg");
$disc6->setDiscLabel("Youtube");
$disc6->setDiscGenre("excellent");
$disc6->setDiscPrice("300.00");

$manager->persist($disc6);

$disc7 = new Disc();
$disc7->setDiscTitle("Hit 'Em Up");
$disc7->setDiscYear("1996");
$disc7->setDiscPicture("https://www.francetvinfo.fr/pictures/-xvA5Nj8DD3Zwg6pIYGgUZ8HVTg/1200x1200/2019/04/12/tupacsipa2ok.jpg");
$disc7->setDiscLabel("Youtube");
$disc7->setDiscGenre("excellent");
$disc7->setDiscPrice("350.00");

$manager->persist($disc7);

$disc8 = new Disc();
$disc8->setDiscTitle("GAYTOBOY");
$disc8->setDiscYear("1996");
$disc8->setDiscPicture("/home/enzo/Images/Captures d’écran/gaytoboy.JPG");
$disc8->setDiscLabel("Youtube");
$disc8->setDiscGenre("a chier");
$disc8->setDiscPrice("0.00");

$manager->persist($disc8);

$disc9 = new Disc();
$disc9->setDiscTitle("hold up");
$disc9->setDiscYear("1996");
$disc9->setDiscPicture("https://www.francetvinfo.fr/pictures/tAUXprT1iXD0mIPtOWGLv3FhOws/1500x843/2022/11/16/phpzfaVoZ.jpg");
$disc9->setDiscLabel("Youtube");
$disc9->setDiscGenre("bien");
$disc9->setDiscPrice("10.00");

$manager->persist($disc9);

$disc10 = new Disc();
$disc10->setDiscTitle("stan");
$disc10->setDiscYear("1996");
$disc10->setDiscPicture("https://generations.fr/media/news/emeinem-42962.jpg");
$disc10->setDiscLabel("Youtube");
$disc10->setDiscGenre("bien");
$disc10->setDiscPrice("11.00");

$manager->persist($disc10);

$disc1->setArtist($artist1);
$disc2->setArtist($artist2);
$disc3->setArtist($artist3);
$disc4->setArtist($artist4);
$disc5->setArtist($artist5);
$disc6->setArtist($artist6);
$disc7->setArtist($artist7);
$disc8->setArtist($artist8);
$disc9->setArtist($artist9);
$disc10->setArtist($artist10);

        $manager->flush();
        
    }
}
