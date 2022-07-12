<?php
/**
 * Property Plus Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php $terms = get_field('property_plus'); ?>
<?php if($terms) : ?>
    <div class="block_plus container">
        <?php foreach( $terms as $term ): ?>
            <div class="block_plus-item">
                <p><?php echo esc_html( $term->name ); ?></p>
                <span><?php echo esc_html( $term->description ); ?></span>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
