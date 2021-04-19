<section class="related-posts">
    <h2>Related Posts:</h2>
    <?php
        // store relevant category IDs. Will be used for finding related posts.
        $categoryIds = array_map(function($category) {
            return $category->term_id;
        }, get_the_category());
        $activePostId = get_the_ID();

        $categorySearch = 0; // default to show all categories
        if (!empty($categoryIds)) {
            $categorySearch = implode(', ', $categoryIds);
        }
        $relatedPosts = get_posts([
            'numberposts' => 8,
            'category' => $categorySearch,
            'exclude' => [$activePostId],
        ]);

        if (count($relatedPosts) < 1) {
            // can't find any related posts, so just get any posts at all
            $relatedPosts = get_posts([
                'numberposts' => 8,
                'exclude' => [$activePostId],
            ]);
        }

        global $post;
        foreach ($relatedPosts as $relatedPost) {
            $post = $relatedPost;
            get_template_part('template-parts/content', 'preview');
        }
    ?>
</section>
