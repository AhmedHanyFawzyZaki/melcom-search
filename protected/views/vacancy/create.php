<?php
$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Vacancy'),'url'=>array('index')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Create Vacancy');?>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>