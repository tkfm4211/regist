<?php
$delete_flag=true;
//$delete_flag=1;
if($delete_flag){
    //削除されている
    echo "削除されている";
}else{
    //削除されていない
    echo "削除されていない";
}
var_dump($delete_flag);

$registed_time=new DateTime();
echo $registed_time->format('Y-m-d');

?>