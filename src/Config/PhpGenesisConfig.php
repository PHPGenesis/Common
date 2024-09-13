<?php
/*
 * Copyright (c) 2024. Encore Digital Group.
 * All Right Reserved.
 */

namespace PHPGenesis\Common\Config;

use EncoreDigitalGroup\StdLib\Exceptions\NullExceptions\NullException;
use PHPGenesis\Common\Helpers\DirectoryHelper;

class PhpGenesisConfig
{
    public static object $config;

    const string FILE_NAME = '/phpgenesis.json';

    public ?object $logger;

    public static function load(): ?object
    {
        $configFilePath = DirectoryHelper::basePath() . self::FILE_NAME;

        if (file_exists($configFilePath)) {
            $configFile = file_get_contents($configFilePath);

            if ($configFile) {
                $config = json_decode($configFile);
                static::$config = $config;

                return static::$config;
            }
        }

        return null;
    }

    public static function get(): object
    {
        if (isset(static::$config)) {
            return static::$config;
        }

        $config = static::load();

        if (is_null($config)) {
            throw new NullException('config');
        }

        return $config;
    }
}
