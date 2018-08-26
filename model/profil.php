<?php
function user($bdd)
{
  $getId = intval($_GET['id']);

  $reqUser = $bdd->prepare("SELECT * FROM member WHERE id = ?");
  $reqUser->execute(array($getId));
  $userInfo = $reqUser->fetch();
}
