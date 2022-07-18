<?php
if(!class_exists("CloneItem")){
    include("./clone_item.class.php");
}
extract($_POST);
$clone = new CloneItem();
echo $clone -> Clone($entry,$newEntry,$display,$itemLevel,$name,$description);
?>