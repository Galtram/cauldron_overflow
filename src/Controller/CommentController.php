<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @Route ("/comments/{id}/vote/{direction<up|down>}", methods="POST")
     */
    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        //todo use id to querry database

        if ($direction === 'up') {
            $logger->info('Voiting up!');
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
            $logger->info('Voiting down!');
        }
        return $this->json(['votes' => $currentVoteCount]);
    }


}