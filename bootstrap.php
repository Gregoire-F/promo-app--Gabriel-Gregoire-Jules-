<?php

require_once "vendor/autoload.php";
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
paths: array(__DIR__."/src"),
isDevMode: true,
);
// configuring the database connection
$connectionParams = array(
"dbname" => "app-promo",
"user" => "root",
"password" => "root",
"host" => "localhost",
"driver" => "pdo_mysql",
"charset"=>"utf8",
"port" => 8889
);
$connection = DriverManager::getConnection($connectionParams, $config);
// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);
