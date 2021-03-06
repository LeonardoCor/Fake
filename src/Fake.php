<?php
/**
 * Fake Class.
 */
namespace Fake;

use Monolog\Logger;

/**
 * Description of Fake
 *
 * @author Leonardo Corazzi
 */
class Fake {
    /**
     * String transformation.
     * 
     * @return string
     */
    public function __toString() {
        $s = 'Io sono ' . self::class;
        return $s;
    }
    
    /**
     * Test for dependency.
     * 
     * @return \Monolog\Logger
     */
    public function testDependency() {
        $l = new Logger("Fake Log");
        return $l;
    }
}
