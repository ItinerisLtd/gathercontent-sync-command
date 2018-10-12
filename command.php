<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand;

use Itineris\GatherContentSyncCommand\CLI\Commands\CommandNamespace;
use Itineris\GatherContentSyncCommand\CLI\Commands\PullCommand;
use WP_CLI;

if (! class_exists('WP_CLI')) {
    return;
}

WP_CLI::add_command('gather-content-sync', CommandNamespace::class);
WP_CLI::add_command('gather-content-sync pull', PullCommand::class);
