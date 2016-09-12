<?php
    class Clockangle
    {
        function getMinuteAngle($minute)
        {
            return $minute * 6;
        }
        function getHourAngle($hour, $minute)
        {
            return $hour * 30 + ($minute * 0.5);
        }
        function getAngleDifference($hour, $minute)
        {
            $minuteAngle = $this->getMinuteAngle($minute);
            $hourAngle = $this->getHourAngle($hour, $minute);
            return abs($minuteAngle - $hourAngle);
        }
    }
?>
