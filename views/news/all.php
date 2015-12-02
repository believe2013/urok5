<? ///var_dump($items) ?>
<?php foreach ($items as $item): ?>
	<h2><?php echo $item->name?></h2>
	<div><?php echo $item->phone?></div>
	<hr>
<?php endforeach; ?>