<?php
declare(strict_types=1);

namespace Itineris\GatherContentSyncCommand;

use GatherContent\Importer\Mapping_Post;
use WP_Post;
use function GatherContent\Importer\prepare_post_for_js;

class PullBulk
{
    public static function callback(int ...$mappingIds)
    {
        $posts = [];

        // Sync_Bulk::set_mapping_posts.
        foreach ($mappingIds as $mappingId) {
            $posts[$mappingId] = array_map(function (WP_Post $post): array {
                return prepare_post_for_js($post);
            }, PostRepository::whereMapped($mappingId)); // phpcs:ignore
        }

        // Sync_Bulk::start_sync.
        foreach ($posts as $mappingId => $posts) {
            $mapping = Mapping_Post::get($mappingId);

            if (empty($mapping)) {
                continue;
            }

            $items = wp_list_pluck($posts, 'item');

            // Sync_Items::start_pull.
            // Start the sync and bump percent value.
            $mapping->update_items_to_pull(['pending' => $items]);
            do_action('gc_pull_items', $mapping);
        }
    }
}
