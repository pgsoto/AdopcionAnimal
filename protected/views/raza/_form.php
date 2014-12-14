<?php $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
	'id'=>'raza-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->dropDownListGroup($model,
	 'id_especie',
	 array(
				'wrapperHtmlOptions' => array(
					'class' => 'col-sm-5',
				),
	   			'widgetOptions' => array(
	   				'data' => Especie::getEspecie(),
					'htmlOptions' => array('empty' => 'Seleccione Especie'),
				)
			)
    ); ?>

	<?php echo $form->textFieldGroup($model,'nombre_raza',array('widgetOptions'=>array('htmlOptions'=>array('class'=>'span5','maxlength'=>1024)))); ?>

<div class="form-actions">
	<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'context'=>'primary',
			'label'=>$model->isNewRecord ? 'Crear' : 'Guardar',
		)); ?>
</div>

<?php $this->endWidget(); ?>
