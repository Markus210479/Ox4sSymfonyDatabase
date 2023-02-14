<?php

namespace App\Entity;

class Units
{
    public const CURRENCY = [
        "€" => true, "US$" => false, "£" => false, "¥" => false
    ];
    public const EINHEIT = [
        "St" => true, "Set" => false, "Satz" => false, "VE" => false, "VPE" => false, "psch" => false,
        "m" => false, "m2" => false, "km" => false, "W" => false, "kW" => false, "L" => false, "k.A." => false
    ];
    public const RABATT = [
        "%" => true, "k.A." => false
    ];
    public const METRISCH = [
        "mm" => true, "cm" => false, "m" => false, "k.A." => false
    ];
    public const TEMPERATUR = [
        "°C" => true, "°F" => false, "K" => false, "k.A." => false
    ];
    public const STATUS = [
        "A" => true, "B" => false, "C" => false
    ];
}
?>