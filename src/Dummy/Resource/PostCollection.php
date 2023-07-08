<?php

namespace Itsmattch\NexusCommons\Dummy\Resource;

use Itsmattch\Nexus\Resource\Resource;

class PostCollection extends Resource
{
    protected string $address = "https://jsonplaceholder.typicode.com/posts";
    protected string $format = 'application/json';
}