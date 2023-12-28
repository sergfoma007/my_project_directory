<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PostRequestRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Config\MonologConfig;

return static function (MonologConfig $monolog) {
    $monolog->handler('file_log')
        ->type('stream')
        ->path('%kernel.logs_dir%/%kernel.environment%.log')
        ->level('debug');

    $monolog->handler('syslog_handler')
        ->type('syslog')
        ->level('error');
};
