<?php

namespace Alf\Trajectory\Point;

class Place extends GpsPoint {

    protected $points;

    public function addPoint(GpsPoint $point)
    {
        $this->points[] = $point;
    }

    public function getLatitude()
    {
        // calculate
        return $this->lat;
    }

    public function getLongitude()
    {
        // calculate
        return $this->long;
    }
}