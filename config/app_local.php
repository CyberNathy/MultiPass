<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '69ab0885dd6c8d643c8ffd2453d628e093a2febb3b9fe875013ac35bc7401876'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
            'host' => 'dbase.flawlesspoolservices.com',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            'port' => '3306',

            'username' => 'flawless_admin',
            'password' => 'Flawle$$',

            'database' => 'BillingApp',
            /*
             * If not using the default 'public' schema with the PostgreSQL driver
             * set it here.
             */
            'schema' => 'BillingApp',

            /*
             * You can use a DSN string to set the entire configuration
             */
            'url' => env('DATABASE_URL', 'mysql://flawless_admin:Flawle$$@dbase.flawlesspoolservices.com/BillingApp'),
        ],

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'host' => 'dbase.flawlesspoolservices.com',
            'port' => '3306',
            'username' => 'flawless_admin',
            'password' => 'Flawle$$',
            'database' => 'BillingApp_Test',
            'schema' => 'BillingApp',
            'url' => env('DATABASE_TEST_URL', 'mysql://flawless_admin:Flawle$$@dbase.flawlesspoolservices.com/BillingApp_Test'),
        ],

        'debug_kit' => [
            'host' => 'dbase.flawlesspoolservices.com',
            'port' => '3306',
            'username' => 'flawless_admin',
            'password' => 'Flawle$$',
            'database' => 'DebugKit',
            //'schema' => 'myapp',
            'url' => env('DATABASE_URL', 'mysql://flawless_admin:Flawle$$@dbase.flawlesspoolservices.com/DebugKit'),
        ],


    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'mail.manmadedigital.com',
            'port' => 587,
            'username' => 'admin@flawlesspoolservices.com',
            'password' => 'Flawless916!',
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
