<?php

namespace Itsmattch\NexusCommons\Dummy\Repository;

use Itsmattch\Nexus\Assembler\Repository;
use Itsmattch\Nexus\Contract\Assembler\Builder\CollectionBuilder;
use Itsmattch\Nexus\Contract\Assembler\Builder\ModelBuilder;
use Itsmattch\NexusCommons\Dummy\Model\Post;

class UsersRepository extends Repository
{
    protected string $model = Post::class;

    protected string|array $resources = [
        \Itsmattch\NexusCommons\Dummy\Resource\Post::class
    ];

    protected function collection(CollectionBuilder $builder): void
    {
        //
    }

    protected function model(ModelBuilder $builder): void
    {
        //
    }
}