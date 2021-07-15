<?php

namespace Strategy;

class YandexComparator implements IComparator
{
    public function compare(int $pay)
    {
        echo 'Оплата Yandex';
    }
}