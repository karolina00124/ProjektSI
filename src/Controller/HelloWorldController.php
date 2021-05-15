<?php
namespace App\Controller;

//use Symfony\Component\HttpFoundation\Request;// po dodaniu request
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;//tworzy sie automatycznie po dodaniu response funkcji
use Symfony\Component\Routing\Annotation\Route;//po dodaniu route ->ścieżka przez adnotacje

/**
 * Class HelloWorldController. //klasa nazywa sie tak jak plik, ktory ja zawiera!!!
 */


class HelloWorldController extends AbstractController
{
    //@param \Symfony\Component\HttpFoundation\Request $request HTTP request //zwracana zmienna

    //ROUTOWANIE W ADNOTACJACH
    //@Route(
    //   "/{name}",    //ścieżka w której określić możemy parametry, które mechanizm rutowania automatycznie pobiera
    //   methods={"GET"},  //metoda -> definujemy tablice
    //   name="hello_world_index",  //nazwa
    //  )


//RESPONSE-> odpowiedź

     //public function index(): Response
     //{
       //  return new Response('Hello World!');
    // }

//REQUEST -> z parametrem określonym w funkcji

     //public function index(Request $request): Response  //funkcja iindex zwraca odp = Symfony\Component\HttpFoundation
   //  {
      //   $name = $request->query->get('name', 'World');

        // return new Response('Hello '.$name.'!'); //po przekazaniu parametru get czyli w url http://localhost:8000/?name=Ann
    // }

//RESPONSE -> z parametrem określonym w mechanizmie routowania (dynamiczne parametry routowania)

  //  public function index(string $name): Response
   // {
       // return new Response('Hello '.$name.'!');
    //}

//RESPONSE -> z parametrem określonym w mechanizmie routowania i defoultem w funkcji
    //public function index(?string $name = null): Response
    //{
      //  $name = $name ?? 'World';

      //  return new Response('Hello '.$name.'!');
  //  }
    //parametr przkazujemy http://localhost:8000/ann

//RESPONSE -> z parametrem, defaultem i zakresem dozwolonych znaków określonym w mechanizmie routowania

    /**
     * Index action.
     *
     * @param string|null $name User input
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/{name}",
     *     methods={"GET"},
     *     name="hello-world_index",
     *     defaults={"name":"World"},
     *     requirements={"name": "[a-zA-Z]+"},
     * )
     */
    public function index(string $name): Response
    {
        //return new Response('Hello '.$name.'!');

        return $this->render(   //kozystamy z metody renderowania odziedziczonej po AbastractController
            'hello-world/index.html.twig',  //używamy szablonu twig
            ['name' => $name]
        );

    }
    //parametr przkazujemy http://localhost:8000/ann
}