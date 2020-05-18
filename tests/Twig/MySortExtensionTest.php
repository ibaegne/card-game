<?php


namespace App\Tests\Twig;

use App\Twig\MySortExtension;
use PHPUnit\Framework\TestCase;

class MySortExtensionTest extends TestCase
{
    public const DATA = ['10' => 'co_10', '9' => 'co_9', '1' => 'co_as', '12' => 'co_dame'];

    /**
     * @test
     */
    public function sort_should_work()
    {
        $response  = ['1' => 'co_as', '9' => 'co_9', '10' => 'co_10', '12' => 'co_dame'];

        $sort = new MySortExtension();

        $result = $sort->mysortData(self::DATA);

        $this->assertEquals($response, $result);
    }

}
