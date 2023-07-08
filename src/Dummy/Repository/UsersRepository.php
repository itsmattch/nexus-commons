<?php

namespace Itsmattch\NexusCommons\Dummy\Repository;

use Itsmattch\Nexus\Assembler\Builder\CollectionBuilder;
use Itsmattch\Nexus\Assembler\Builder\ModelBuilder;
use Itsmattch\Nexus\Assembler\Repository;
use Itsmattch\NexusCommons\Dummy\Model\User;
use Itsmattch\NexusCommons\Dummy\Resource\UserCollection;

class UsersRepository extends Repository
{
    protected string $model = User::class;

    protected string|array $resources = [
        'users' => UserCollection::class
    ];


    protected function collection(CollectionBuilder $builder): void
    {
        $builder->root('users');
    }

    protected function model(ModelBuilder $builder): void
    {
        //
    }
}