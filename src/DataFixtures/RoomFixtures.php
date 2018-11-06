<?php
/**
 * This file is a part of AirHotel-App
 *
 * ClientFixtures.php
 *
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\DataFixtures;

use App\Entity\Room;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class RoomFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as [$type])
        {
            $room = new Room();
            $room->setType($type);

            $manager->persist($room);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['Single'],
            ['Single'],
            ['Double'],
            ['Double'],
            ['Double'],
            ['Family'],
        ];
    }
}