<?php
$list = '<ul>';
foreach ($items as $item) {
	$list .= '<li>' . $item . '</li>';
}
$list .= '</ul>';
?>

<h1>THIS IS 'VIEW ALL' TEMPLATE OF ITEMS</h1>
<?php echo $list; ?>
