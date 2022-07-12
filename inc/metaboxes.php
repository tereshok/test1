<?php 
function availability_dates_metabox(){
    add_meta_box('availability_dates', 'Availability dates', 'availability_dates_block', 'property');
}

add_action('add_meta_boxes', 'availability_dates_metabox');

function availability_dates_block($post) {
    ?>
    <div class="Calendar">
        <label for="start">Start date:</label>
        <input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01">
        <label for="start">Finish date:</label>
        <input type="date" id="finish" name="trip-finish" value="2018-07-22" min="2018-01-01" max="2018-12-31">
    </div>
<?php }

