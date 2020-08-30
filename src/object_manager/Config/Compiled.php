<?php
declare(strict_types=1);

namespace Adm\ObjectManager\Config;

use Adm\ObjectManager\ConfigInterface;

class Compiled implements ConfigInterface
{
    protected array $type = [];

    protected array $arguments = [];

    protected array $preference = [];

    public function __construct(array $data = [])
    {

    }
}