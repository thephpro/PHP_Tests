<ul class="menu-list  container">
	<a href="<?php echo BASE_URL; ?>home"><li>Home</li></a>
	<?php if ($menu !== false) : ?>
	<?php foreach($menu as $m) : ?>
		<?php $name = $m["name"]; ?>
		<?php $link = $m["url"]; ?>
		<!-- <li><a href="<?php #echo BASE_URL .$link; ?>"><?php #echo $name; ?></a></li> -->
		<a href="<?php echo BASE_URL .$link; ?>"><li><?php echo $name; ?></li></a>
	<?php endforeach; ?>
	<?php endif; ?>
	<a href="<?php echo BASE_URL; ?>panel"><li>Restricted Area</li></a>
</ul>