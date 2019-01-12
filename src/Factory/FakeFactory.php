<?php
namespace Fake\Factory;

use Fake;

class FakeFactory {
    private $fake;
    public function __construct() {
        $this->fake = new Fake\Fake();
    }
    public function getFake() {
        return $this->fake;
    }
}
