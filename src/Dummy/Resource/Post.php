<?php

namespace Itsmattch\NexusCommons\Dummy\Resource;

use Itsmattch\Nexus\Resource\Resource;

class Post extends Resource
{
    protected string $address = "https://jsonplaceholder.typicode.com/posts/{id}";
    protected string $format = 'application/json';
}