<?php

namespace App\Controller;

use App\Service\Greeting;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BlogController extends AbstractController
{
    /**
     *@var Greeting 
     */ 
    private $greet;
    
    
    public function __construct(Greeting $greet)
    {
       $this->greet = $greet;
    }

    /**
     * @Route("/blog", name="blog.index")
     */
    public function index(Request $request)
    {
        return $this->render("base.html.twig", [
            "message" => $this->greet->greet($request->get("name"))
        ]);
    }
  
}
