<?php

declare(strict_types=1);

namespace Php\Package;

use Tightenco\Collect\Support\Collection;

class User
{
    /** @var string */
    private string $name;

    /** @var Collection */
    private Collection $children;

    /**
     * User constructor.
     * @param string $name
     * @param array $children
     */
    public function __construct(string $name, array $children = [])
    {
        $this->name = $name;
        $this->children = collect($children);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Collection
     */
    public function getChildren(): Collection
    {
        return $this->children;
    }
}
