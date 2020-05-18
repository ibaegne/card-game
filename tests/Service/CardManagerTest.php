<?php

namespace App\Tests\Service;

use App\Repository\CardRepository;
use App\Service\CardManager;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class CardManagerTest extends TestCase
{
    public const DATA = [
        ["color" => "Pique", "value" => "Valet"],
        ["color" => "Carreaux", "value" => "10"],
        ["color" => "Coeur", "value" => "10"],
        ["color" => "Pique", "value" => "Roi"],
        ["color" => "Coeur", "value" => "9"],
        ["color" => "Trèfle", "value" => "Roi"],
        ["color" => "Coeur", "value" => "AS"],
        ["color" => "Coeur", "value" => "Dame"],
        ["color" => "Carreaux", "value" => "Roi"],
        ["color" => "Carreaux", "value" => "6"],
    ];

    /**
     * @test
     */
    public function get_ten_result_should_work()
    {
        $repository = $this->createMock(CardRepository::class);
        $repository->expects($this->once())
            ->method('findRandom')
            ->willReturn(self::DATA)
            ;

        $parameterBagInterface = $this->createMock(ParameterBagInterface::class);
        $parameterBagInterface->expects($this->once())
            ->method('get')
            ->willReturn(10);


        $manager = new CardManager($repository, $parameterBagInterface);

        $manager->getResult();
    }
}
