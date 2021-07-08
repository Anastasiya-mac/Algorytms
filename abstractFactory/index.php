<?php

declare(strict_types=1);

namespace AbstractFactory;

use AbstractFactory\Factory\PostgresRepositoryFactory;
use AbstractFactory\Factory\MySqlRepositoryFactory;
use AbstractFactory\Db\Postgres;
use AbstractFactory\Db\MySql;
use AbstractFactory\Service\Service;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$postgresRepositoryFactory = new PostgresRepositoryFactory(new Postgres());
$serviceWithPostgresRepositories = new Service($postgresRepositoryFactory);

$serviceWithPostgresRepositories->Recording();
$serviceWithPostgresRepositories->QueryBuiler();


$mySqlRepositoryFactory = new MySqlRepositoryFactory(new MySql());
$serviceWithMySqlRepositories = new Service($mySqlRepositoryFactory);

$serviceWithMySqlRepositories->Recording();
$serviceWithMySqlRepositories->QueryBuiler();