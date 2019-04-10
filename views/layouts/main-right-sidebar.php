<div class="row">
    <?= \diazoxide\blog\widgets\Feed::widget([
        'title' => 'Շատ դիտված',
        'show_title' => true,
        'title_options' => ['tag' => 'div', 'class' => 'widget_title'],
        'items_count' => 10,
        'show_item_brief' => false,
        'item_image_type'=>'xsthumb',
        'item_brief_length' => 50,
        'item_date_type' => 'dateTime',
        'item_options' => ['class' => 'col-xs-12 top-buffer-20-xs'],
        'item_body_options' => ['class' => 'row'],
        'item_info_container_options' => ['class' => 'text-warning text-right small'],
        'show_item_views' => false,
        'id' => 'post-page-hot-posts',
        'type' => \diazoxide\blog\widgets\Feed::TYPE_POPULAR,
        'show_item_category' => false,
    ]);
    ?>
</div>
