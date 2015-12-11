<?php

use SprykerFeature\Shared\Mail\MailConfig;
use SprykerFeature\Shared\Application\ApplicationConfig;
use SprykerEngine\Shared\Lumberjack\LumberjackConfig;
use SprykerFeature\Shared\Payone\PayoneConfigConstants;
use SprykerFeature\Shared\Session\SessionConfig;

$config[ApplicationConfig::ZED_DB_USERNAME] = 'ubuntu';
$config[ApplicationConfig::ZED_DB_PASSWORD] = '';
$config[ApplicationConfig::ZED_DB_DATABASE] = 'circle_test';
$config[ApplicationConfig::ZED_DB_HOST] = '127.0.0.1';
$config[ApplicationConfig::ZED_DB_PORT] = '3306';

$config[ApplicationConfig::PROPEL]['database']['connections']['default']['dsn'] = 'mysql:host=127.0.0.1;dbname=circle_test';
$config[ApplicationConfig::PROPEL]['database']['connections']['default']['user'] = 'ubuntu';
$config[ApplicationConfig::PROPEL]['database']['connections']['default']['password'] = '';

$config[ApplicationConfig::ELASTICA_PARAMETER__INDEX_NAME] = 'de_development_catalog';
$config[ApplicationConfig::ELASTICA_PARAMETER__DOCUMENT_TYPE] = 'page';

$config[ApplicationConfig::ELASTICA_PARAMETER__PORT] = '9200';

$yvesHost = 'www.de.spryker.dev';
$config[ApplicationConfig::YVES_SESSION_COOKIE_DOMAIN] = $yvesHost;
$config[ApplicationConfig::HOST_YVES] = 'http://' . $yvesHost;
$config[ApplicationConfig::HOST_STATIC_ASSETS] = $config[ApplicationConfig::HOST_STATIC_MEDIA] = $yvesHost;

$config[ApplicationConfig::HOST_SSL_YVES] = 'https://' . $yvesHost;
$config[ApplicationConfig::HOST_SSL_STATIC_ASSETS] = $config[ApplicationConfig::HOST_SSL_STATIC_MEDIA] = $yvesHost;

$zedHost = 'zed.de.spryker.dev';
$config[ApplicationConfig::HOST_ZED_GUI]
    = 'http://' . $zedHost;
$config[ApplicationConfig::HOST_ZED_API] = $zedHost;
$config[ApplicationConfig::HOST_SSL_ZED_GUI]
    = $config[ApplicationConfig::HOST_SSL_ZED_API]
    = 'https://' . $zedHost;

$config[ApplicationConfig::CLOUD_CDN_STATIC_MEDIA_HTTP] = 'http://static.de.spryker.dev';
$config[ApplicationConfig::CLOUD_CDN_STATIC_MEDIA_HTTPS] = 'https://static.de.spryker.dev';

$config[ApplicationConfig::JENKINS_BASE_URL] = 'http://localhost:10007/';
$config[MailConfig::MAILCATCHER_GUI] = 'http://' . $config[ApplicationConfig::HOST_ZED_GUI] . ':1080';

/* RabbitMQ */
$config[ApplicationConfig::ZED_RABBITMQ_HOST] = 'localhost';
$config[ApplicationConfig::ZED_RABBITMQ_PORT] = '5672';
$config[ApplicationConfig::ZED_RABBITMQ_USERNAME] = 'DE_development';
$config[ApplicationConfig::ZED_RABBITMQ_PASSWORD] = 'mate20mg';
$config[ApplicationConfig::ZED_RABBITMQ_VHOST] = '/DE_development_zed';

$config[ApplicationConfig::JENKINS_DIRECTORY] = APPLICATION_ROOT_DIR . '/shared/data/common/jenkins';

$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PROTOCOL] = 'tcp';
$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_HOST] = '127.0.0.1';
$config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PORT] = '6379';

$config[ApplicationConfig::ZED_STORAGE_SESSION_REDIS_PROTOCOL] = $config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PROTOCOL];
$config[ApplicationConfig::ZED_STORAGE_SESSION_REDIS_PORT] = $config[ApplicationConfig::YVES_STORAGE_SESSION_REDIS_PORT];

$config[PayoneConfigConstants::PAYONE] = [
    PayoneConfigConstants::PAYONE_MODE => '',
];

$config[LumberjackConfig::WRITER_OPTIONS] = [
    '\SprykerEngine\Shared\Lumberjack\Model\Writer\File' => ['log_path' => '/data/logs/development/DE/'],
];

$config[SessionConfig::SESSION_IS_TEST] = true;