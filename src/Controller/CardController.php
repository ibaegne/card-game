<?php


namespace App\Controller;

use App\Service\CardManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CardController extends AbstractController
{

    /**
     * @Route("/", name="card")
     *
     * @return Response
     */
    public function index()
    {
        return $this->render('card/index.html.twig');
    }

    /**
     * @Route("/resultat", name="card_run")
     * @param CardManager $cardManager
     * @return Response
     */
    public function run(CardManager $cardManager)
    {
        $cards = $cardManager->getResult();

        return $this->render('card/index.html.twig', [
            'cards' => $cards
        ]);
    }

}
