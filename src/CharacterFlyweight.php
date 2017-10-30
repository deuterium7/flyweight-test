<?php

namespace AlexanderZabornyi\FlyweightTest;

class CharacterFlyweight implements FlyweightInterface
{
    private $name;

    /**
     * CharacterFlyweight constructor.
     *
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Отрендерить символ по шрифту
     *
     * @param string $font
     *
     * @return string
     */
    public function render(string $font): string
    {
        return sprintf(
            'Character %s with font %s',
            $this->name,
            $font
        );
    }
}