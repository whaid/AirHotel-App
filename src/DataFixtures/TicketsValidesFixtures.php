<?php
/**
 * Created by PhpStorm.
 * User: Romaric
 * Date: 08/11/2018
 * Time: 11:50
 */

namespace App\DataFixtures;

use App\Entity\TicketsValides;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class TicketsValidesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as [$numero_ticket])
        {
            $rt = new TicketsValides();
            $rt->setNumeroTicket($numero_ticket);

            $manager->persist($rt);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['ABCDEFGH'],
            ['BCDEFGHI'],
            ['CDEFGHIJ'],
            ['DEFGHIJK'],
            ['EFGHIJKL'],
            ['FGHIJKLM'],
        ];
    }
}