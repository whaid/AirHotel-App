<?php
/**
 * This file is a part of AirHotel-App
 *
 * UserFixtures.php*
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as [$username, $email, $password, $roles])
        {
            $user= new User();
            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($this->passwordEncoder->encodePassword($user, $password));
            $user->setRoles($roles);

            $manager->persist($user);
        }

        $manager->flush();
    }

    private function getData(): array
    {
        return [
            ['Romaric Allegrini', 'romaric.allegrini@campus-igs-toulouse.fr', 'romaric', ['']],
            ['Aurélien Dardant', 'aurelien.dardant@campus-igs-toulouse.fr', 'aurelien', ['']],
            ['Vincent Claveau', 'vincent.claveau@campus-igs-toulouse.fr', 'vincent', ['']],
            ['Whaid Cremery', 'whaid.cremery@campus-igs-toulouse.fr', 'whaid', ['']],
            ['Gaëtan De Saint Denis', 'gaetan.desaintdenis@campus-igs-toulouse.fr', 'gaetan', ['']],
            ['Alexis Jeanne', 'alexis.jeanne@campus-igs-toulouse.fr', 'alexis', ['']],
        ];
    }
}