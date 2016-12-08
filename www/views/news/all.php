<?php foreach ($this->data['items'] as $item): ?>
	<h1><?= $item->title ?></h1>
	<div><?= $item->text ?></div>
<?php endforeach; ?>