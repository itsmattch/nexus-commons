<?php

use Itsmattch\Nexus\Action\Action;

class ReadPost extends Action
{
    protected string $address = "https://jsonplaceholder.typicode.com/posts/{id}";
}