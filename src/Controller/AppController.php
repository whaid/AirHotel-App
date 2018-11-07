<?php
/**
 * This file is a part of AirHotel-App
 *
 * AppController.php
 *
 * @author      Vincent CLAVEAU <vinc.claveau@gmail.com>
 * @copyright   2018 Vincent CLAVEAU
 * @date        06/11/2018
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * @Route("/", name="app_")
 */
class AppController
{
    /**
     * @Route("/", name="index")
     */
    public function index(Environment $twig)
    {
        return new Response($twig->render('App/index.html.twig'));
    }

    /**
 	* @Route("/connexion", name="connexion")
 	*/
    public function test(Environment $twig)
    {
        return new Response($twig->render('App/connexion.html.twig'));
    }
}