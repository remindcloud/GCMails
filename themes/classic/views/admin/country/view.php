<?php
/* @var $this CountryController */
/* @var $model Country */

$this->breadcrumbs = array(
    'Countries' => array('index'),
    $model->name,
);

$this->menu = array(
    array('label' => 'List Country', 'url' => array('index')),
    array('label' => 'Create Country', 'url' => array('create')),
    array('label' => 'Update Country', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Country', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Country', 'url' => array('admin')),
);
?>

<h1>View Country #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'name',
        'timeZone.name:text:Time Zone',
        'userCount:number:User Count',
        'statusText:text:Status',
    ),
));
?>

<h2>Users</h2>

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'user-grid',
    'dataProvider' => $profile->search(),
    'filter' => $profile,
    'columns' => array(
        'fullName',
        'user.email',
        'user.statusText:text:Status',
        array(
            'class' => 'CButtonColumn',
        ),
    ),
));
?>