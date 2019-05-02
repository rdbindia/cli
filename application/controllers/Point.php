<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Point extends CI_Controller
{
    public $x;
    public $y;
    public $rad;

    public function __construct($arr = array(), $radius = NULL)
    {
        if ($arr) {
            $this->x = $arr[0];
            $this->y = $arr[1];
            $this->rad = $radius;
        }
    }

    // Method used to display X and Y coordinates
    // of a point
    public function displayPoint($x, $y)
    {
        echo "display point";
        echo "(x==" . $x . ",y==" . $y . ")";
    }


    // point inside circle

    public static function isInsideCircle($circle, $point)
    {
        $distance = ($point->x - $circle->x) * ($point->x - $circle->x) + ($point->y - $circle->y) * ($point->y - $circle->y);
        $radius = $circle->rad * $circle->rad;
        return ($distance <= $radius) ? true : false;
    }

    //Circle Intersect
    public static function circleIntersection($circle1, $circle2)
    {
        $distance = ($circle1->x - $circle2->x) * ($circle1->x - $circle2->x) + ($circle1->y - $circle2->y) * ($circle1->y - $circle2->y);
        $radius = ($circle1->rad + $circle2->rad) * ($circle1->rad + $circle2->rad);

        if ($distance == $radius)
            return 1;
        elseif ($distance > $radius)
            return -1;
        else
            return 0;
    }


    // line intersection
    public static function lineLineIntersection($A, $B, $C, $D)
    {
        // Line AB represented as a1x + b1y = c1
        $a1 = (float)($B->y - $A->y);
        $b1 = (float)($A->x - $B->x);
        $c1 = (float)($a1 * ($A->x) + $b1 * ($A->y));

        // Line CD represented as a2x + b2y = c2
        $a2 = (float)($D->y - $C->y);
        $b2 = (float)($C->x - $D->x);
        $c2 = (float)($a2 * ($C->x) + $b2 * ($C->y));


        $determinant = (float)($a1 * $b2 - $a2 * $b1);
        if ($determinant == 0) {
            // The lines are parallel.
            return new Point(NULL, NULL);
        } else {
            // The lines are intersecting
            $x = (float)($b2 * $c1 - $b1 * $c2) / $determinant;
            $y = (float)($a1 * $c2 - $a2 * $c1) / $determinant;
            return new Point(array($x, $y));
        }
    }
} 