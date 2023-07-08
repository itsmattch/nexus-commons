<?php

namespace Itsmattch\NexusCommons\Dummy\Resource;

use Itsmattch\Nexus\Resource\Resource;

class UserCollection extends Resource
{
    protected string $address = "https://jsonplaceholder.typicode.com/users";
    protected string $format = 'application/json';
}