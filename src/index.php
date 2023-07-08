<?php

use Itsmattch\NexusCommons\Dummy\Repository\UsersRepository;
use Itsmattch\NexusCommons\Dummy\Resource\UserCollection;

include_once '../vendor/autoload.php';

// $resource = new UserCollection();
// $response = $resource->trigger();

$repository = new UsersRepository();
$repository->assemble();
$response = $repository->getCollection();

// -------------------------
var_dump($response);