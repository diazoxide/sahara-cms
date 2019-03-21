<div class="row">

    <div class="widget_title">Լրահոս</div>
    <div class="top-buffer-20">
        <?= \diazoxide\blog\widgets\Feed::widget([
            'items_count' => 10,
            'show_item_brief' => false,
            'show_item_category_icon'=>false,
            'item_brief_length' => 50,
            'item_date_type'=>'dateTime',
//            'item_date_options'=>['class'=>'text-right text-warning'],
            'id' => 'post_feed_widget'
        ]);
        ?>
    </div>

</div>
