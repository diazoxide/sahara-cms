<div class="row">
    <div class="widget_title">Շատ դիտված</div>
    <div class="top-buffer-20">
        <?= \diazoxide\blog\widgets\Feed::widget([
            'items_count' => 15,
            'show_item_brief' => false,
            'item_brief_length' => 50,
            'id' => 'post-page-hot-posts',
            'type' => \diazoxide\blog\widgets\Feed::TYPE_POPULAR,
            'show_item_views' => true,
            'show_item_category' => false,
        ]);
        ?>
    </div>

</div>
