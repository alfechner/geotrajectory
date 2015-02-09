<?php

namespace Alf\Trajectory\Point\Collection;

use Alf\Trajectory\Point\GpsPoint;

class PointCollection {

    protected $points = array();

    public function addPoint(GpsPoint $point) {
        $this->points[] = $point;
    }

    public function getTrajectory()
    {
        // clustering
    }

}