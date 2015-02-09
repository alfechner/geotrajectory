<?php

namespace Alf\Trajectory\Point;

use Alf\Trajectory\Coordinate\Latitude;
use Alf\Trajectory\Coordinate\Longitude;
use DateTime;
use PhpUnitsOfMeasure\PhysicalQuantity\Length;
use PhpUnitsOfMeasure\PhysicalQuantity\Time;

abstract class GpsPoint
{
    protected $time;
    protected $lat;
    protected $long;

    protected $unit_time = '';


    function __construct(Latitude $lat, Longitude $long, DateTime $time = null)
    {

        // check for data types. time only if != null

        $this->setLatitude($lat);
        $this->setLongitude($long);
        $this->setTime($time);
    }

    public function getSpatialDistance(GpsPoint $point, $inputUnit, $outputUnit = null)
    {

        // calculate distance
        // different units: php-units-of-measure
    }

    /**
     * @param GpsPoint $point
     * @param null $unit
     * @return float
     */
    public function getTemporalDistance(GpsPoint $point, $unit = null)
    {
        /** @var Time $distance */
        $distance = new Time(
             $this->getTime()->getTimestamp() - $point->getTime()->getTimestamp(),
            'ms'
        );

        if($unit) {
            return $distance->toUnit('unit');
        }

        return $distance->toNativeUnit();
    }

    public function setLongitude($long)
    {
        $this->long = $long;
    }

    public function getLongitude()
    {
        return $this->long;
    }

    public function setLatitude($lat)
    {
        $this->lat = $lat;
    }

    public function getLatitude()
    {
        return $this->lat;
    }

    /**
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

}