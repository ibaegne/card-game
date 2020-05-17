<?php


namespace App\Controller;

use App\Service\CardManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class CardController extends AbstractController
{

    /**
     * @Route("/", name="card")
     */
    public function index()
    {
        return $this->render('card/index.html.twig', [
            'cards' => null
        ]);
    }

    /**
     * @Route("/resultat", name="card_run")
     * @param CardManager $cardManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function run(CardManager $cardManager)
    {
        $cards = $cardManager->getResult();

        return $this->render('card/index.html.twig', [
            'cards' => $cards
        ]);
    }

}
