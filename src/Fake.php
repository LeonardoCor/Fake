<?php
namespace Fake;

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
}
