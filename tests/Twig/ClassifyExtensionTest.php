<?php

namespace App\Tests\Twig;

use App\Twig\ClassifyExtension;
use PHPUnit\Framework\TestCase;

class ClassifyExtensionTest extends TestCase
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
    public function classify_should_work()
    {
        $response = [
            'pi' => ['11' => 'pi_valet', '13' => 'pi_roi'],
            'ca' => ['10' => 'ca_10', '13' => 'ca_roi', '6' => 'ca_6'],
            'co' => ['10' => 'co_10', '9' => 'co_9', '1' => 'co_as', '12' => 'co_dame'],
            'tr' => ['13' => 'tr_roi'],
        ];

        $classify = new ClassifyExtension();

        $result = $classify->classifyData(self::DATA);

        $this->assertEquals($response, $result);
    }

}
