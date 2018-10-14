<?php

namespace App\Controller;

;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class WelcomeController extends AbstractController
{
    /**
     * @Route("/", name="welcome")
     */
    public function index()
    {
        return $this->render('welcome/index.html.twig');
    }

    /**
     * @Route("/hello/{name}",
     *      name="hello_page",
     * requirements={"name" = "[A-Za-z]+"}
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response;
     */
    public function helloPage (Request $request)
    {

        $name = $request->query->get('name', 'kelvin');
        return $this->render('hello_page.html.twig',
            [
                'some_variable' => 'I am the passed value',
                'name' => $name
            ]
            );
    }
}
