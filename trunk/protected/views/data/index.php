<?php
$this->breadcrumbs=array(
	'Data',
);?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<?php 
	$this->widget('zii.widgets.grid.CGridView',array(
		'id'=>'list-query',
		'dataProvider'=>$query->search(),
		'columns'=>array(
			array(
				'header'=>'STT',
				'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + $row +1',
			),
			array(
				'header'=>'Query',
				'name'=>'query',
			),
			array(
				'header'=>'Time',
				'name'=>'time',
			),
		)
	));

?>