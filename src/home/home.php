<?php
  $user = $_COOKIE["login"];

  if (isset($user)){
    echo "Login";
  } else {
    echo "Erro login";
  };
?>