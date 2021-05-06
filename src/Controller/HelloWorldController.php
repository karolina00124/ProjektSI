<?php
/**
 * Hello World controller.
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
//tworzy sie automatycznie po dodaniu response funkcji

/**
 * Class HelloWorldController.
 */
//klasa nazywa sie tak jak plik, ktory ja zawiera!!!
class HelloWorldController
{
    /**
     * Index action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     */
    public function index(): Response  //funkcja iindex zwraca odp = Symfony\Component\HttpFoundation
    {
        return new Response('Hello World!');
    }
}