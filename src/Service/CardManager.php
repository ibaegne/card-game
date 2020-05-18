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

    /**
     * CardManager constructor.
     * @param CardRepository $repository
     * @param ParameterBagInterface $params
     */
    public function __construct(CardRepository $repository, ParameterBagInterface $params)
    {
        $this->_repository = $repository;
        $this->_params = $params;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->_repository->findRandom($this->_params->get('max_result'));
    }

}
