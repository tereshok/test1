<?php
/**
 * Property Gallery Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


$images = get_field('property_gallery');
$size = 'full'; 
if( $images ): ?>
    <section>
        <?php foreach( $images as $image_id ): ?>
            <div>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </div>
        <?php endforeach; ?>
    </section>
<?php endif; ?> 