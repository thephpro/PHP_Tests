<!DOCTYPE html>
<html>
<head>
	<title><?php echo $this->title; ?></title>
</head>
<body>
	<?php $this->loadViewIntoTemplate($viewName, $viewData); ?>
</body>
</html>