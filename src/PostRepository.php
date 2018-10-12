<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand;

use WP_Query;

class PostRepository
{
    /**
     * Get posts for a mapping.
     *
     * @param int $mappingId The mapping ID.
     *
     * @return \WP_Post[]
     */
    public static function whereMapped(int $mappingId): array
    {
        $query = new WP_Query([
            'post_type' => 'any',
            'post_status' => ['publish', 'pending', 'draft', 'future', 'private'],
            'meta_key' => '_gc_mapping_id',
            'meta_value' => $mappingId,
        ]); // WPCS: slow query ok.

        return $query->posts;
    }
}
