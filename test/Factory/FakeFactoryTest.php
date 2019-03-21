<?php

namespace Fake\Factory;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2019-01-10 at 23:58:39.
 */
class FakeFactoryTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var FakeFactory
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        $this->object = new FakeFactory;
    }

    /**
     * @covers Fake\Factory\FakeFactory::getFake
     */
    public function testGetFake() {
        $this->assertEquals($this->object->getFake(), "Io sono " . \Fake\Fake::class);
    }
    
    /**
     * @covers Fake\Factory\FakeFactory::newFnc
     */
    public function testNewFnc() {
        $this->markTestIncomplete("Code method not yet implemented");
    }
}
