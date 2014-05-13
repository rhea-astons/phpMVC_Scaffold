<?php
if (count($items) == 0) {
	$itemsList = 'No items';
} else {
	$itemsList = "<ul>\n";
	foreach ($items as $item) {
		$itemsList .= "<li>" . $item->name . "</li>\n";
	}
	$itemsList .= "</ul>\n";
}
?>

<h1>THIS IS 'VIEW ALL' TEMPLATE OF ITEMS</h1>
<?php echo $itemsList; ?>
