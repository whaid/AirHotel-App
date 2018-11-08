<?php
/**
 * This file is a part of AirHotel-App
 *
 * UserController.php*
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Twig\Environment;

/**
 * @Route("/user", name="user_")
 */
class UserController
{
    /**
     * @Route("/login", name="login")
     */
    public function login(AuthenticationUtils $helper, Environment $twig) : Response
    {
        return new Response($twig->render('User/login.html.twig', [
            'last_username' => $helper->getLastUsername(),
            'error' => $helper->getLastAuthenticationError(),
        ]));
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logout(): void
    {
        throw new \Exception('This should be never reached!');
    }
}