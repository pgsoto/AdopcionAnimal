<?php
$this->breadcrumbs=array(
	'Animals'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Animal','url'=>array('index')),
array('label'=>'Create Animal','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('animal-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Animals</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('booster.widgets.TbGridView',array(
'id'=>'animal-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		

		'nombre_animal',
		array(
			'name'=>'id_especie',
			'header'=>'Especie',
			'value'=>'$data->idEspecie->nombre_especie',
			'filter' =>CHtml::listData(Especie::model()->findAll(),'id_especie','nombre_especie'),
		),

		array(
			'name'=>'id_raza',
			'header'=>'Raza',

			'filter' =>CHtml::listData(Raza::model()->findAll(),'id_raza','nombre_raza'),
		),

		array(
			'name'=>'genero_animal',
			'header'=>'Género',
			'value' =>'$data->genero_animal',
			'filter' =>array('Macho'=>'Macho','Hembra'=>'Hembra'),
			),
		/*
		'id_animal',
		'numero_chip',
		'edad_animal',
		'id_color',
		'peso',
		'desparasitado',
		'esterilizado',
		'vacunas',
		'observaciones',
		'fecha_ingreso',
		'image',
		'adoptado',
		*/
array(
'class'=>'booster.widgets.TbButtonColumn',
),
),
)); ?>
