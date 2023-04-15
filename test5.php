<style>
h1{
    color:navy;
}
</style>
<?php
echo "<h1>strlen</h1>";
$str = "php is a popular scripting language";
echo strlen($str);
echo ("<br>");
?>
<hr>

<?php
$var1 = "hello";
$var2 = "Hello";
$result = strcmp($var1, $var2);
echo "result: ".$result;
?>
<hr>

<?php
$str="abcdef";
$find="c";
$pos=strpos($str, $find);
echo "pos: ".$pos;
?>

<hr>

<?php
$str="Marry had a Little lamd and she loved IT so MUCH";
echo strtolower($str);
echo ("<br>");
echo strtoUpper($str);
?>

<hr>

<?php
$str="hellophpwelcome";
$result=substr($str,5,5);
echo $result."<br>";
$result2=substr($str,3);
echo $result2;
?>

