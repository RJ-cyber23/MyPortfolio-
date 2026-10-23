<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AboutMeController extends AbstractController{

    #[Route('/about', name: 'About')]
    public function aboutMe(): Response{
        return $this->render('AboutMe.html');
    }

}

?>