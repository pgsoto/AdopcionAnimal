

<?php echo '_adoptante'; ?>


<div>
<?php

    $this->widget(
    'booster.widgets.TbCarousel',
    array(
    'items' => array(
    array(
    'image' => 'images/Carousel/first-placeholder830x400.gif',
    'label' => 'First Thumbnail label',
    'caption' => 'First Caption.'
    ),
    array(
    'image' => 'images/Carousel/second-placeholder830x400.gif',
    'label' => 'Second Thumbnail label',
    'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    array(
    'image' => 'images/Carousel/third-placeholder830x400.gif',
    'label' => 'Third Thumbnail label',
    'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'
    ),
    ),
    )
    );
 ?>
 </div>