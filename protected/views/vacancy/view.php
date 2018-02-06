<?php

$this->breadcrumbs = array(
    'Vacancies' => array('index'),
    $model->title,
);

$this->menu = array(
    array('label' => Yii::t('translate', 'List Vacancy'), 'url' => array('index')),
    array('label' => Yii::t('translate', 'Create Vacancy'), 'url' => array('create')),
    array('label' => Yii::t('translate', 'Update Vacancy'), 'url' => array('update', 'id' => $model->id)),
    array('label' => Yii::t('translate', 'Delete Vacancy'), 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
);
?>

<?php $this->pageTitlecrumbs = Yii::t('translate', 'View Vacancy') . ' "' . $model->title . '"'; ?>

<?php

$this->widget('bootstrap.widgets.TbDetailView', array(
    'data' => $model,
    'attributes' => array(
        'title',
        'intro',
        'details' => array(
            'name' => 'details',
            'value' => $model->details,
            'type' => 'raw'
        ),
    ),
));
?>
