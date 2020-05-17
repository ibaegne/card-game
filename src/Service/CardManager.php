<?php

namespace App\Service;

use App\Repository\CardRepository;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class CardManager
{
    /**
     * @var CardRepository
     */
    private $_repository;
    private $_params;

    public function __construct(CardRepository $repository, ParameterBagInterface $params)
    {
        $this->_repository = $repository;
        $this->_params = $params;
    }

    public function getResult()
    {
        return $this->_repository->findRandom($this->_params->get('max_result'));
    }

}
