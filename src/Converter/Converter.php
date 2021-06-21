<?php

declare(strict_types=1);

namespace Nevadskiy\Money\Converter;

use Nevadskiy\Money\Models\Currency;
use Nevadskiy\Money\Money;

interface Converter
{
    /**
     * Set the default currency of the converter.
     */
    public function setDefaultCurrency(Currency $currency): void;

    /**
     * Convert the given money according to the given currency.
     */
    public function convert(Money $money, Currency $currency): Money;
}
