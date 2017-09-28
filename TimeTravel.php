<?php
/**
 * Created by PhpStorm.
 * User: banban
 * Date: 28/09/17
 * Time: 17:40
 */

namespace Wcs;

use \DateTime;
use \DateInterval;

class TimeTravel
{
    /** @var  string */
    private $start;
    /** @var  string */
    private $end;

    /**
     * TimeTravel constructor.
     * @param string $start
     * @param string $end
     */
    public function __construct($start, $end)
    {
        $this->start = new DateTime($start);
        $this->end = new DateTime($end);
    }

    /**
     * @return string
     */
    public function getTravelInfo()
    {
        $interval = $this->start->diff($this->end);
        return $interval->format("Il y a %y années, %m mois , %d jours, %h heures, %i minutes, %s secondes.");
    }

    /**
     * @param int $interval
     */
    public function findDate(int $interval)
    {
        $date = $this->start;
        if($interval >= 0) {
            $date->sub(new DateInterval('PT' . abs($interval) . 'S'));
        } else {
            $date->add(new DateInterval('PT' . abs($interval) . 'S'));
        }
        return $date->format('Y-m-d H:i:s');
    }

    /**
     * @param string $step
     * @return array
     */
    public function backToFutureStepByStep($step){
        $interval = new DateInterval($step);
        $dateRange = new \DatePeriod($this->start, $interval, $this->end);

        foreach ($dateRange as $date) {
            $steps[] = $date->format("M d Y A H:i");
        }
        return $steps;
    }
}