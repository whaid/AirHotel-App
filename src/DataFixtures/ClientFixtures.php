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

use App\Entity\Client;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as [$name, $address])
        {
            $client = new Client();
            $client->setName($name);
            $client->setAddress($address);

            $manager->persist($client);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['Romaric Allegrini', 'Colomiers'],
            ['Aurélien Dardant', 'Purpan'],
        ];
    }
}