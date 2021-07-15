<?php

namespace Strategy;

class Payments
{
    public function pay(IComparator $comparator, int $pay)
    {
        return $comparator->compare($pay);
    }
}
