<?php
$carcases = array(
    0 => array('id' => 1, 'parent' => 1, 'title' => 'E82', 'image' => ''),
    1 => array('id' => 2, 'parent' => 1, 'title' => 'E87', 'image' => ''),
    2 => array('id' => 3, 'parent' => 1, 'title' => 'F20', 'image' => ''),
);

$model_carcases = array();
foreach ($carcases as $key => $carcase) {
    if($carcase['parent'] == $_POST['id']) {
        $model_carcases[] = $carcase;
    }
}
var_dump($model_carcases);
//echo $_POST['id'];