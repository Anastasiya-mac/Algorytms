<?php

namespace Strategy;

class WebMoneyComparator implements IComparator
{
    public function compare(int $pay)
    {
        echo 'Оплата WebMoney';
    }
}