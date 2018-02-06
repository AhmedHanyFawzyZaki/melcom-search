<?php
$this->breadcrumbs=array(
	'Vacancies'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>Yii::t('translate', 'List Vacancy'),'url'=>array('index')),
	array('label'=>Yii::t('translate', 'Create Vacancy'),'url'=>array('create')),
	array('label'=>Yii::t('translate', 'View Vacancy'),'url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'Update Vacancy'). ' "'.$model->id.'"'; ?>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>