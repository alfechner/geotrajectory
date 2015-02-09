<?php

namespace Alf\Trajectory\Point;

class GpsPointCollection {

    protected $points = array();

    public function addPoint(StayPoint $point) {
        $this->point[] = $point;
    }

}