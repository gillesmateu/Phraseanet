<?php

namespace Alchemy\Tests\Phrasea\Media\Subdef\OptionType;

use Alchemy\Phrasea\Media\Subdef\OptionType\Boolean;
use Alchemy\Phrasea\Media\Subdef\OptionType\OptionType;

/**
 * @group functional
 * @group legacy
 */
class BooleanTest extends \PhraseanetTestCase
{
    /**
     * @var Boolean
     */
    protected $object;

    public function setUp()
    {
        parent::setUp();
        $this->object = new Boolean('Booleen', 'boolean', true);
    }

    /**
     * @covers Alchemy\Phrasea\Media\Subdef\OptionType\Boolean::setValue
     * @covers Alchemy\Phrasea\Media\Subdef\OptionType\Boolean::getValue
     */
    public function testSetValue()
    {
        $this->assertTrue($this->object->getValue());
        $this->object->setValue(false);
        $this->assertFalse($this->object->getValue());
    }

    /**
     * @covers Alchemy\Phrasea\Media\Subdef\OptionType\Boolean::getType
     */
    public function testGetType()
    {
        $this->assertEquals(OptionType::TYPE_BOOLEAN, $this->object->getType());
    }

    /**
     * @covers Alchemy\Phrasea\Media\Subdef\OptionType\Boolean::getName
     */
    public function testGetName()
    {
        $this->assertEquals('boolean', $this->object->getName());
    }

    /**
     * @covers Alchemy\Phrasea\Media\Subdef\OptionType\Boolean::getDisplayName
     */
    public function testGetDisplayName()
    {
        $this->assertEquals('Booleen', $this->object->getDisplayName());
    }
}
