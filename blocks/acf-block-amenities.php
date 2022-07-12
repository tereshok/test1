<?php
/**
 * Property Amenities Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
$terms = get_field('property_amenities');
if( $terms ): ?>
    <div class="block_amenities container">
        <?php foreach( $terms as $term ): ?>
            <p class="item_amenities"><?php echo esc_html( $term->name ); ?></p>          
        <?php endforeach; ?>
    </div>
<?php endif; ?>