<?php
/**
 * Fake Class.
 */
namespace Fake;

use phpDocumentor\Command\Helper;

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
     * @return \phpDocumentor\Command\Helper\ConfigurationHelper
     */
    public function testDependency() {
        $h = new Helper\ConfigurationHelper(new \phpDocumentor\Configuration());
        return $h;
    }
}
