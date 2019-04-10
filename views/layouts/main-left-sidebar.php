<div class="row">
    <?= \diazoxide\blog\widgets\Feed::widget([
        'items_count' => 10,
        'title' => 'Լրահոս',
        'title_options' => ['tag' => 'div', 'class' => 'widget_title'],
        'show_title' => true,
        'show_item_brief' => false,
        'item_options' => ['class' => 'col-xs-12 top-buffer-20-xs'],
        'item_body_options' => ['class' => 'row'],
        'item_image_type'=>'xsthumb',
        'show_item_category_icon' => false,
        'item_brief_length' => 50,
        'item_date_type' => 'dateTime',
        'item_info_container_options' => ['class' => 'text-warning text-right small'],
        'id' => 'post_feed_widget'
    ]);
    ?>
</div>

