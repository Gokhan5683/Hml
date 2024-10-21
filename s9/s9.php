<?php
$str=$_GET['str1'];
$sep=$_GET['sep'];
$op=$_GET['op'];
//echo "$str $sep $op;"
switch($op){
case 'a':$m=explode($sep,$str);
    foreach($m as $a)
    echo "$a<br>";
    break;
case 'b':
    $cnt=substr_count($str,$sep);
    $n=str_replace($sep,"!",$str,$cnt);
    echo "After changing separators<br>";echo $n;
    break;
case 'c':
    $ar=explode(" ",$str);
    $cnt=count($ar);
    break;
}
echo "This is the last word :".$ar[$cnt-1];
?>
