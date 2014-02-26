<?php
$this->widget('zii.widgets.grid.CGridView', array(
'dataProvider' =>$data,


'columns'=>array(
array('name'=>'Name',
'type'=>'raw',
'value'=>'CHtml::encode($data->name)'),

array('name'=>'Surname',
'type'=>'raw',
'value'=>'CHtml::link("$data->id","index.php?r=admin/edit/id/".CHtml::encode($data->id))',


)),
?>
