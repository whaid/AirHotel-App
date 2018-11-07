<?php
/**
 * This file is a part of AirHotel-App
 *
 * RoomTypeFixtures.php
 *
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\DataFixtures;

use App\Entity\RoomType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RoomTypeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as [$name, $price])
        {
            $rt = new RoomType();
            $rt->setName($name);
            $rt->setPrice($price);

            $manager->persist($rt);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['Single', 60],
            ['Double', 70],
            ['Family', 85],
        ];
    }
}