<?php

namespace AlexanderZabornyi\FlyweightTest\Tests;

use AlexanderZabornyi\FlyweightTest\FlyweightFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private $characters = ['a', 'b', 'c', 'd', 'e', 'f', 'g'];
    private $fonts = ['Arial', 'Times New Roman'];

    public function testFlyweight()
    {
        $factory = new FlyweightFactory();

        foreach ($this->characters as $char) {
            foreach ($this->fonts as $font) {
                $flyweight = $factory->get($char);
                $rendered = $flyweight->render($font);

                $this->assertEquals(
                    sprintf('Character %s with font %s', $char, $font),
                    $rendered
                );
            }
        }

        // для каждого отдельного символа должен быть создан только ОДИН объект
        $this->assertCount(count($this->characters), $factory);
    }
}