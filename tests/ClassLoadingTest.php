<?php

namespace Tests;

use OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Loads and exercises every generated class. Catches syntax errors, bad
 * autoload mappings and runtime deprecations on the PHP version in use.
 */
class ClassLoadingTest extends TestCase
{
    public static function apiClasses(): iterable
    {
        foreach (glob(__DIR__ . '/../src/lib/Api/*.php') as $file) {
            $class = 'OpenAPI\\Client\\Api\\' . basename($file, '.php');
            yield basename($file, '.php') => [$class];
        }
    }

    public static function modelClasses(): iterable
    {
        foreach (glob(__DIR__ . '/../src/lib/Model/*.php') as $file) {
            if (basename($file, '.php') === 'ModelInterface') {
                continue;
            }
            $class = 'OpenAPI\\Client\\Model\\' . basename($file, '.php');
            yield basename($file, '.php') => [$class];
        }
    }

    #[DataProvider('apiClasses')]
    public function testApiClassInstantiates(string $class): void
    {
        $this->assertInstanceOf($class, new $class());
    }

    #[DataProvider('modelClasses')]
    public function testModelInstantiatesAndSerializes(string $class): void
    {
        $model = new $class();

        $this->assertInstanceOf(\JsonSerializable::class, $model);
        $this->assertInstanceOf(\ArrayAccess::class, $model);
        $this->assertIsArray($model->listInvalidProperties());
        $this->assertIsString((string) $model);
        $this->assertNotFalse(json_encode(ObjectSerializer::sanitizeForSerialization($model)));
    }
}
