<?php

    require_once "src/Clockangle.php";

    class clockAngleTests extends PHPUnit_Framework_TestCase
    {
        function test_minute_hand()
        {
            $test_clock = new Clockangle;
            $input = 20;
            $output = $test_clock->getMinuteAngle($input);
            $this->assertEquals(120, $output);
        }

        function test_hour_hand()
        {
            $test_clock = new Clockangle;
            $input = array(4, 20);
            $output = $test_clock->getHourAngle($input[0],$input[1]);
            $this->assertEquals(130, $output);
        }

        function test_angle_difference()
        {
            $test_clock = new Clockangle;
            $input = array(4, 20);
            $output = $test_clock->getAngleDifference($input[0],$input[1]);
            $this->assertEquals(10, $output);
        }
    }

?>
