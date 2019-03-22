<?php
namespace Fake\Factory;

class FakeFactoryTest extends \PHPUnit\Framework\TestCase {

    /**
     * @var FakeFactory
     */
    protected $object;

    protected function setUp(): void {
        $this->object = new FakeFactory;
    }

    /**
     * @covers ::getFake
     */
    public function testGetFake() {
        $this->assertEquals($this->object->getFake(), "Io sono " . \Fake\Fake::class);
    }
    
    /**
     * @covers ::newFnc
     */
    public function testNewFnc() {
        $this->assertSame($this->object->newFnc(), 1);
    }
}
