<?php
declare(strict_types=1);

namespace Adm\ObjectManager;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class ObjectManager implements ObjectManagerInterface, ContainerInterface
{
    protected CreationInterface $creationFactory;
    protected ConfigInterface  $config;

    protected array $sharedInstances = [];

    public function __construct(CreationInterface $creation, ConfigInterface $config, array &$sharedInstances = [])
    {
        $this->creationFactory = $creation;
        $this->config = $config;
        $this->sharedInstances = $sharedInstances;
        $this->sharedInstances[self::class] = $this;
    }

    public function get($id)
    {
        return isset($this->sharedInstances[$id]) ? $this->sharedInstances[$id] : $this->creationFactory->create($id);
    }

    public function has($id)
    {
        // TODO: Implement has() method.
    }
}