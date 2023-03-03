<h2><?= $params["title"] ?></h2>
<?php
$info = $prams["info"];
if($info->uname)
{
    echo $info->get_detail();
}
?>

<form method="post">
    <p>Username<input type="text" name="uname" /></p>
    <p>Password<input type="password" name="pass" /></p>
    <p><input type="submit" name="submit"></p>
</form>