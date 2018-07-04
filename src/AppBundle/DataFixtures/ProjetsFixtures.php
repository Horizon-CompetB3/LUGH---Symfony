<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Projets;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ProjetsFixtures extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $i = 1;
        //Set test values in the table "Game" for 4 games
        while ($i <= 4) {
            $projets = new Projets();
            $projets->setName("Game n" . $i);
            /*banner*/
            $projets->setType("Type" . $i);
            $projets->setEntreprise("Entreprise n " . $i);
            $projets->setOrientation('Paysage' . $i);

            $projets->setTheme("Type" . $i);
            $projets->setBudget($i);
            $projets->setLargeur($i);
            $projets->setHauteur($i);
            $projets->setprofondeur($i);

            //Create a reference of $projets for other tables
            $this->setReference('projets' . $i, $projets);

            $projets->setDescription("Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sapien lorem, tristique ac egestas id, commodo non. " . $i);


            $manager->persist($projets);
            $i++;
        }
        $manager->flush();
    }

    //Get the order of this fixture
    public function getOrder()
    {
        return 1;
    }
}