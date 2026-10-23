<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WorkController extends AbstractController{

    #[Route('/work', name: 'Work')]
    public function Work(): Response{
        return $this->render('Work.html');;
    }
}
?>