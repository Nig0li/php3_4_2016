<?php

namespace App\Commands;


use App\Components\Memory;
use T4\Console\Command;

class Hello
    extends Command
{
    public function actionWorld()
    {
        $memory = memory_get_usage();
        $this->writeLn('Memory: ' . $memory);

        $mass = range(1, 1000000);

        $memory = memory_get_usage();
        $this->writeLn('Memory: ' . $memory);

        //PHP7 - 26,55 Mbyte
    }

    public function actionMemory()
    {
        $start = memory_get_usage();

        $x = 0;
        $count = 1000000;
        while ($x < $count) {
            $x++;
            $obj = 'obj' . $x;
            $$obj = new Memory();
            $$obj->value = rand();
            $$obj->self = $$obj;

            if (0 == $x % 500) {
                $memory = memory_get_usage();
                $this->writeLn('Memory: ' . $start);
                $this->writeLn('Memory ' . $x . ': ' . ($memory - $start));
                $this->writeLn('Result ' . $x . ': ' . (($memory - $start) / $x));
            }
        }

        /*
         * Потребление памяти первые 500 итераций - 56400 байт.
         * Среднее число памяти на создание 1 объекта - 112,8 байт.
         *
         * Следующие 500 итераций - 108720 байт.
         * Среднее число памяти на создание 1 объекта - 108,72 байта.
         *
         * В последующих блоках в 500 итераций, среднее число памяти на создание 1 объекта,
         * то повышается, то понимажается.
         *
         * Объяснение - думаю, это связано с очищением памяти.
         * Когда в таблице символов, накопилось много имен.
         */

    }
}