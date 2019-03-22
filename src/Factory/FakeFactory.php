<?php
/**
 * FakeFactory Class.
 */

namespace Fake\Factory;

use Fake;

/**
 * Description of FakeFactory
 *
 * @author Leonardo Corazzi
 */
class FakeFactory {
    /**
     * Fake object.
     * 
     * @var \Fake\Fake
     */
    private $fake;
    
    /**
     * Constructor.
     */
    public function __construct() {
        $this->fake = new Fake\Fake();
    }
    
    /**
     * Gets a Fake object.
     * 
     * @return \Fake\Fake
     */
    public function getFake() {
        return $this->fake;
    }
    
    /**
     * @return integer Returns <b>1</b>
     */
    public function newFnc() {
        return 1;
    }
}
