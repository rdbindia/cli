<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH . 'controllers/Point.php');

class Intersect extends Point
{

    // Inside Point
    public function point()
    {
        $circle_point = array(0,1);
        $rad = 2;
        $circle = new Point($circle_point,$rad);

        $point = array(0,0);
        $point = new Point($point);
        echo "--------------\n";
        echo "Circle Points\n";
        echo "Circle X==" . $circle->x . "  Circle Y==" . $circle->y . "\n";
        echo "---------------\n";
        echo "Point value \n";
        echo 'Point X==' . $point->x . ' Point Y==' . $point->y . "\n";
        echo "--------------\n";
        echo "Is Point Inside Circle?\n";

        $result = Point::isInsideCircle($circle, $point);
        $show_result =  ($result) ? 'Yes' : 'No' ;
        echo $show_result;
        echo "\n--------------\n";

    }

    //Circle Intersection
    public function circleIntersect()
    {
        $circle1 = new Point(array(-10,8),30);
        $circle2 = new Point(array(14,-24),10);

        $result = Point::circleIntersection($circle1,$circle2);
        if ($result == 1)
            echo "Circle touch each other.";
        else if ($result < 0)
            echo "Circle do not touch each other.";
        else
            echo "Circle intersect each other.";
    }

    // line intersection
    public function lineIntersect()
    {
        $A = new Point(array(0,0));
        $B = new Point(array(3,2));
        $C = new Point(array(-1,0));
        $D = new Point(array(4,2));

        $lineIntersect = Point::lineLineIntersection($A, $B, $C, $D);

        if ($lineIntersect->x == null && $lineIntersect->y == null) {
            // parallel line;
            echo "The given lines AB and CD are parallel.";
        } else {
            // intersecting line
            echo "The intersection of the given lines AB and CD is: ";
            Point::displayPoint($lineIntersect->x, $lineIntersect->y);
        }

    }
}
