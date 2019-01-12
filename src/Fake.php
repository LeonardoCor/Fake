<?php
namespace Fake;

use phpDocumentor\Command\Helper;

/**
 * Description of Fake
 *
 * @author Leonardo Corazzi
 */
class Fake {
    public function __toString() {
        $s = 'Io sono ' . self::class;
        return $s;
    }
    
    public function testDependency() {
        $h = new Helper\ConfigurationHelper(new \phpDocumentor\Configuration());
        return $h;
    }
}
