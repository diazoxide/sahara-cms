<div class="row">

    <div class="widget_title">Լրահոս</div>
    <div class="top-buffer-20">
        <?= \diazoxide\blog\widgets\Feed::widget([
            'items_count' => 15,
            'show_item_brief' => false,
            'show_item_category_icon'=>false,
            'item_brief_length' => 50,
            'infinite_scroll' => false,
            'id' => 'post_feed_widget'
        ]);
        ?>
    </div>

</div>
