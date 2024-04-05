<!doctype html>
<?php
$cookies_name="user";
$cooke_value="vivek";
setcookie($cookie_name.$cookie_cookie_value.time()+(86400*30)."/");
?>
<html>
<body>
<?php
if(!isset($_COOKIE[$cookie_name]))
{
eco"cookie is '"$cookie_name"' is set<br>";
}
else
{
eco"cookie is '"$cookie_name"' is set<br>";
echo"value
is :"$_COOKIE[$cookie_value];
}
?>
</body>
<./html>