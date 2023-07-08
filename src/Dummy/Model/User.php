<?php

namespace Itsmattch\NexusCommons\Dummy\Model;

use Itsmattch\Nexus\Model\Model;

class User extends Model
{
    protected string $name = 'user';

    protected array $badges = [
        'dummy' => 'id'
    ];
}