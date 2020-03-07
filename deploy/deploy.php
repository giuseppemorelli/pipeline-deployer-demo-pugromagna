<?php

namespace Deployer;

use Deployer\Exception\Exception;

require 'recipe/common.php';
require __DIR__.'/vendor/giuseppemorelli/deployer-common/common.php';

// Servers
inventory('hosts.yml');

// Main Tasks
desc('Deploy project');
task(
    'deploy', [
                'git:update-code',
                'composer:install-no-dev'
            ]
);

after('deploy', 'success');
