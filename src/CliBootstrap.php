<?php

namespace Symla\Joomla\Cli;

abstract class CliBootstrap
{
    public static function bootstrap($application = 'site')
    {
        require_once(__DIR__ . '/joomla_bootstrap.php');
    }
}