<?php

namespace AlexanderZabornyi\FlyweightTest;

class FlyweightFactory implements \Countable
{
    private $pool = [];

    /**
     * Получить символ
     *
     * @param string $name
     *
     * @return CharacterFlyweight
     */
    public function get(string $name): CharacterFlyweight
    {
        if (! isset($this->pool[$name])) {
            $this->pool[$name] = new CharacterFlyweight($name);
        }

        return $this->pool[$name];
    }

    /**
     * Общее число символов в пуле
     *
     * @return int
     */
    public function count(): int
    {
        return count($this->pool);
    }
}