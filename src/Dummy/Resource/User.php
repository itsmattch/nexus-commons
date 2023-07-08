<?php

namespace Itsmattch\NexusCommons\Dummy\Resource;

use Itsmattch\Nexus\Resource\Resource;

class User extends Resource
{
    protected string $address = "https://jsonplaceholder.typicode.com/users/{id}";
}