<?php

namespace App\DataFixtures;

use App\Entity\Card;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @var ObjectManager
     */
    private $_em;

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        $this->_em = $manager;

        $this->cardBuilder('Carreaux');
        $this->cardBuilder('Coeur');
        $this->cardBuilder('Pique');
        $this->cardBuilder('Trèfle');

        $this->_em->flush();
    }

    /**
     * @param string $color
     */
    private function  cardBuilder(string $color): void
    {
        foreach ($this->initValues() as $value) {
            $card = new Card();

            $card->setColor($color);
            $card->setValue($value);

            $this->_em->persist($card);
        }
    }

    /**
     * @return array
     */
    private function initValues(): array
    {
        return array_merge(range(2, 10), ['AS', 'Valet', 'Dame', 'Roi']);
    }
}
