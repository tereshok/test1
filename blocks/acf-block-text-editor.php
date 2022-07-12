<?php
/**
 * Property Text Editor Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */
?>
<?php if(get_field('property_text_editor')) : ?>
    <div class="block_text-editor container">
        <?php the_field('property_text_editor'); ?>
    </div>
<?php endif; ?>

