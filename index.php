

<h1>Pie</h1>
<form action="process.php" method="post">
	<input type="text" name="price">
	<button type="submit">Change price</button>
</form>

<?php
	require "fllat.php";
	$appdb = new Fllat("appdb");

	//$bPrice = $pie -> get("price", "name", "bacon");

	$new_comp = array(
		"comp_name" => "btn", 
		"comp_notes" => "This is a button", 
		"comp_context_color" => "#eee", 
		"comp_category" => "atoms", 
		"comp_sort_order" => "20"
	);
    $appdb -> add($new_comp);

	$data = $appdb -> select(array());


	//var_dump($data);

	/*highlight_string("<?php\n\$data =\n" . var_export($data, true) . ";\n?>");*/


foreach ($data as $value) {
    echo 'comp_name: '.$value['comp_name'].'<br>';
    echo 'comp_notes: '.$value['comp_notes'].'<br>';
    echo 'comp_context_color: '.$value['comp_context_color'].'<br>';
    echo 'comp_category: '.$value['comp_category'].'<br>';
    echo 'comp_sort_order: '.$value['comp_sort_order'].'<br><hr></hr>';

}





?>
