<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public
    function homepage(Environment $environment)
    {
        //Przykład używania serwisów

        $html = $environment->render('question/homepage.html.twig');
        return new Response($html);

        //return $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_question_show")
     */
    public
    function show($slug)
    {
        $answers =[
          'Make sure your cat is sitting..',
          'Honestly, i ike furry shoes better than..',
          'Maybe.. try saying the spell backwards'

        ];



        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-',' ',$slug)),
            'answers' => $answers,
        ]);
    }
}