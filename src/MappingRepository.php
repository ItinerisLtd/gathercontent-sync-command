<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand;

use GatherContent\Importer\Post_Types\Template_Mappings;
use WP_Query;

class MappingRepository
{
    /**
     * Get all mapping ids.
     *
     * @return int[]
     */
    public static function all(): array
    {
        $query = new WP_Query([
            'post_type' => Template_Mappings::SLUG,
            'fields' => 'ids',
        ]);

        return $query->posts;
    }
}
