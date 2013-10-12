<?php
namespace Zero;

// Constant Application Errors File
include "ApplicationError.php";

// Application Configuration File
include "config/ApplicationConfig.php";

// Application Database Class
include "database/ApplicationDatabase.php";

class Application
{
    private static $rootDatabase = null;

    public static function getDatabase()
    {
        return self::$rootDatabase;
    }

    // main() returns int, depending on whether starting of depencies
    public static function main()
    {
        // Create new database connection and assing it to $rootDatabase
        $rootDatabase = new ApplicationDatabase
        (
            ApplicationConfig::APPLICATION_DATABASE_HOST,
            ApplicationConfig::APPLICATION_DATABASE_USERNAME,
            ApplicationConfig::APPLICATION_DATABASE_PASSWORD,
            ApplicationConfig::APPLICATION_DATABASE_NAME
        );

        // If there was error while attempting connecting to database
        if (!$rootDatabase) return ApplicationError::DATABASE_CONNECTION_FAILED;

        return ApplicationError::NO_ERROR;
    }
}