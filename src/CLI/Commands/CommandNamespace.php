<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand\CLI\Commands;

use WP_CLI\Dispatcher\CommandNamespace as BaseCommandNamespace;

/**
 * Sync with GatherContent via WP CLI.
 *
 * ## EXAMPLES
 *
 *     # Pull all imported posts
 *     $ wp gather-content-sync pull
 */
class CommandNamespace extends BaseCommandNamespace
{
}
