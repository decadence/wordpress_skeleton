<?php

class HelpersTest extends BaseTest
{
    public function testRemember()
    {
        $key = "test";
        $value = 10;

        $cache = remember($key, 10, function () use ($value) {
            return $value;
        });

        // проверяем, что возвращено значение функции
        $this->assertSame($cache, $value);

        // проверяем, что в кеше то, что положили
        $this->assertSame(wp_cache_get($key), $cache);
    }
}
