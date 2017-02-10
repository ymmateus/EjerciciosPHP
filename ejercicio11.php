<?php
$result= $_POST['result'];
if ($result > 5){
    echo "Aprobo";
} elseif ( $result <= 5){
    echo "Reprobo";
}