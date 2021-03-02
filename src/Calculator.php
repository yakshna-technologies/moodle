<?php

final class Calculator {
    // add $amount to $base
    public static function add ($base, $amount) {
        return $base + $amount;
    }

    // subtract $amount from $base
    public static function subtract ($base, $amount) {
        return $base - $amount;
    }

    // multiply $base times $amount
    public static function multiply ($base, $amount) {
        return $base * $amount;
    }

    // divide $base by $amount
    public static function divide ($base, $amount) {
        return $base / $amount;
    }
}
