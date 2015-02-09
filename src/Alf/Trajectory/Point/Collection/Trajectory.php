<?php

namespace Alf\Trajectory\Point\Collection;

use Alf\Trajectory\Point\Place;

class PointCollection {

    public function addPoint(Place $point) {
        $this->points[] = $point;
    }

}