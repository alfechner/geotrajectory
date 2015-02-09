<?php

namespace Alf\Trajectory\Coordinate;

abstract class Coordinate {

    const UNIT_DMS = 'dms';
    const UNIT_DECIMAL = 'decimal';

    protected $unit;
    protected $value;

    function __construct($value, $unit = self::UNIT_DECIMAL)
    {
        $this->unit = $unit;
        $this->value = $value;

        $this->init();
    }

    abstract public function getDms();

    abstract public function getDecimal();

}