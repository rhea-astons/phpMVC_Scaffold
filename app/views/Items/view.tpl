<?php
if (!$item) {
	die('Item not found');
}
?>
<h1>THIS IS 'VIEW' TEMPLATE OF ITEMS</h1>
<b>Name: </b><?php echo $item->name; ?>