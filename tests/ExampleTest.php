<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testAddingTwoPlusTwoResultInFour(){
        $this->assertEquals(4, 2 + 2);
    }

}  