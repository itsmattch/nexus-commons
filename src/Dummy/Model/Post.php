<?php

namespace Itsmattch\NexusCommons\Dummy\Model;

use Itsmattch\Nexus\Model\Model;

class Post extends Model
{
    protected string $name = 'post';

    protected array $badges = [
        'dummy' => 'id'
    ];

    protected function dependencies(DependenciesBuilder $builder): void
    {
        $this->dependsOn(User::class)->in('dummy');
    }
}