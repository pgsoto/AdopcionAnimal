<?php
$this->breadcrumbs=array(
	'Animales',
);

$this->menu=array(
array('label'=>'Crear Animal','url'=>array('create'), 'visible'=>Yii::app()->user->checkAccess('admin')),
array('label'=>'Administrar Animales','url'=>array('admin'), 'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h1>Animales</h1>

<?php /*$this->widget('booster.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); */?>



    <?php  echo CHtml::openTag('div', array('class' => 'row-fluid'));
    $this->widget(
    'booster.widgets.TbThumbnails',
    array(
    'dataProvider' => $dataProvider,
    'template' => "{items}\n{pager}",
    'itemView' => '_thumb',
    )
    );
    echo CHtml::closeTag('div');
    ?>