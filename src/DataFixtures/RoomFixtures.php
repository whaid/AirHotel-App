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
        foreach ($this->getData() as [$type, $price, $state, $smokingAllowed, $animalAllowed, $handicappedAccess])
        {
            $room = new Room();
            $room->setType($type);
            $room->setPrice($price);
            $room->setState($state);
            $room->setSmokingAllowed($smokingAllowed);
            $room->setAnimalAllowed($animalAllowed);
            $room->setHandicappedAccess($handicappedAccess);

            $manager->persist($room);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['Single', 80, 'dispo', true, true, false],
            ['Single', 90, 'dispo', true, true, true],
            ['Double', 130, 'dispo', false, false, false],
            ['Double', 135, 'dispo', true, true, true],
            ['Double', 135, 'dispo', true, true, true],
            ['Family', 200, 'dispo', true, true, true],
        ];
    }
}