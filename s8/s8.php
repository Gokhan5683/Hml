<?php
$a=$_GET["str1"];
$b=$_GET["str2"];
$len1=strlen($a);
$len2=strlen($b);
echo "Length $len1 $len2";
$pos=strpos($a,$b);
if($pos==0){
    echo"the small string appears at the start of the large string<br>";
}
else{
    echo"small string does not appear at the start of the large string<br>";
}
$pos=strpos($a,$b);
echo"the small string appears at $pos position<br>";
if(strcasecmp($a,$b)==0)
echo "Both Strings are equal<br>";
else if(strcasecmp($a,$b)>0)
echo "first string bigger<br>";
else
echo "second string is bigger<br>";
?>