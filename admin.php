<?php
$this->widget('zii.widgets.grid.CGridView', array(
'dataProvider' =>$data,


'columns'=>array(
array('name'=>'Name',
'type'=>'raw',
'value'=>'CHtml::encode($data->name)'),

array('name'=>'Surname',            
'type'=>'raw',
'value'=>'CHtml::link("$data->id","index.php?r=admin/edit/id/".CHtml::encode($data->id))'), //Normal url

array(
                'name'  => 'trading_name',
                'value' => 'CHtml::link($data->trading_name, Yii::app()
                 ->createUrl("customer/view/",array("id"=>$data->primaryKey)))',
                 'type'  => 'raw',
                 'options' => array('ajax' => array('type' => 'get', 'url'=>'js:$(this).attr("href")',
                 'success' => 'js:function(data) { 
                  $("#tab1").html(data);')
                  ),
             ),       //This is for link with ajax call,if you dont want ajax call,then remove options attribute


)),
?>
