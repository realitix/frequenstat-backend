<?php
namespace Tracker\PlaceBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

use CrEOF\Spatial\PHP\Types\Geometry\Point;
use CrEOF\Spatial\PHP\Types\Geometry\LineString;
use	CrEOF\Spatial\PHP\Types\Geometry\Polygon;

class PolygonToTextTransformer implements DataTransformerInterface
{
    /**
     * 
     */
    public function __construct()
    {
    }

    /**
     * Transforms an object (polygon) to a string.
     *
     * @param  Polygon $polygon
     * @return string
     */
    public function transform($polygon)
    {
        if (null === $polygon) {
            return "";
        }

		return (string) $polygon;
    }

    /**
     * Transforms a string to a polygon.
     *
     * @param  string $str
     * @return Polygon
     * @throws TransformationFailedException if string is bad.
     */
    public function reverseTransform($str)
    {
        if (!$str) {
            return null;
        }

        $strPoints = explode(',', trim($str));
		$points = array();
		foreach($strPoints as $sp) {
			$t = explode(' ', trim($sp));
			$points[] = new Point($t[0], $t[1]);
		}
		$line = new LineString($points);
		return new Polygon(array($line));
    }
    
}