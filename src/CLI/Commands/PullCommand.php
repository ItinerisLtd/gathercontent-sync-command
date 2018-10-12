<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand\CLI\Commands;

use Itineris\GatherContentSyncCommand\MappingRepository;
use Itineris\GatherContentSyncCommand\PullBulk;
use WP_CLI;
use WP_CLI_Command;

class PullCommand extends WP_CLI_Command
{
    /**
     * Find all imported posts and "pull" the latest versions from GatherContent.
     *
     * ## EXAMPLES
     *
     *     # Pull all imported posts
     *     $ wp gather-content-sync pull
     */
    public function __invoke($_args, $assocArgs): void
    {
        WP_CLI::confirm(
            'Are you sure to "pull" from GatherContent? Local changes will be discarded.',
            $assocArgs
        );

        $mappingIds = MappingRepository::all();

        WP_CLI::success(
            sprintf(
                '%1$d template mapping(s) found',
                count($mappingIds)
            )
        );

        WP_CLI::log('Scheduling pull events...');

        PullBulk::callback(...$mappingIds);

        WP_CLI::success('Scheduled!');
    }
}
