<ul class="menu-list">
	<?php foreach($menu as $m) : ?>
	<?php $name = $m["name"]; ?>
	<?php $link = $m["url"]; ?>
	<!-- <li><a href="<?php #echo BASE_URL .$link; ?>"><?php #echo $name; ?></a></li> -->
	<a href="<?php echo BASE_URL .$link; ?>"><li><?php echo $name; ?></li></a>
	<?php endforeach; ?>
</ul>