<?php
namespace App\Controller;

use App\Form\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route(path: '/')]
final class HomepageController extends AbstractController
{
    public function __invoke(): Response
    {
        $form = $this->createForm(TestType::class);
        return $this->render('test.html.twig', ['form' => $form->createView()]);
    }
}