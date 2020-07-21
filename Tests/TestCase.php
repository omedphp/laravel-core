<?php


namespace Omed\Laravel\Core\Tests;

use Kilip\LaravelDoctrine\ORM\KilipDoctrineServiceProvider;
use Kilip\SanctumORM\SanctumORMServiceProvider;
use Laravel\Sanctum\SanctumServiceProvider;
use LaravelDoctrine\Extensions\GedmoExtensionsServiceProvider;
use LaravelDoctrine\ORM\DoctrineServiceProvider;
use Omed\Laravel\Core\CoreServiceProvider;
use Omed\Laravel\Core\Tests\Http\Controllers\TestApiController;
use Omed\Laravel\Security\SecurityServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        include __DIR__.'/Fixtures/routes.php';
    }

    protected function getPackageProviders($app)
    {
        return [
            CoreServiceProvider::class
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app->alias(TestApiController::class, 'TestApiController');
    }
}