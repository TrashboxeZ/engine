<h3> Products </h3>

<?php if(is_array($products)): ?>

	<ul>
	<?php foreach($products as $product): ?>
		<li><?php echo $product->name; ?></li>
	<?php endforeach; ?>
	</ul>

<?php endif; ?>