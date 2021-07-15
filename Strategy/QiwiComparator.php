<?php

namespace Strategy;

class QiwiComparator implements IComparator
{
    public function compare(int $pay)
    {
        echo 'Оплата QIWI';
    }
}
