<?php
declare(strict_types=1);

namespace Adm\ObjectManager\Test;

use Adm\ObjectManager\Config\Compiled;
use Adm\ObjectManager\Creation\Factory;
use Adm\ObjectManager\ObjectManager;
use Adm\ObjectManager\ObjectManagerInterface;
use PHPUnit\Framework\TestCase;

class ObjectManagerTest extends TestCase
{
    protected ObjectManager $objectManager;

    public function setUp() : void
    {
        $this->objectManager = new ObjectManager(new Factory(), new Compiled());
    }

    public function testObjectInstance()
    {
        $this->assertInstanceOf(ObjectManagerInterface::class, $this->objectManager);
    }
}