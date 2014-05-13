<?php
$list = '<ul>';
foreach ($items as $item) {
	$list .= '<li>' . $item . '</li>';
}
$list .= '</ul>';
?>

<h1>THIS IS 'INDEX' TEMPLATE OF ITEMS</h1>
<?php echo $list; ?>
