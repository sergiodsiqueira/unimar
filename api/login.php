<?php
require("connection.php");

$msg = '';

if (isset($_POST['email']) && isset($_POST['senha'])) {

  extract($_POST);
  $erro = true;

  if (($email != '') && ($senha != '')) {

    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $res = $conn->query($sql);

    if (mysqli_num_rows($res) > 0) {

      if ($email != '') {
        session_start();
        $_SESSION['semail'] = $email;
        $erro = false;

        if (isset($lembrar)) {
          if ($lembrar == 'on') {
            setcookie('clembrar', 'checked="checked"', time() + 60 * 60 * 24 * 1);
            setcookie('cemail', $email, time() + 60 * 60 * 24 * 1);
            setcookie('csenha', $senha, time() + 60 * 60 * 24 * 1);
          }
        } else {
          setcookie('clembrar', '', time() - 60 * 60 * 24 * 1);
          setcookie('cemail', '', time() - 60 * 60 * 24 * 1);
          setcookie('csenha', '', time() - 60 * 60 * 24 * 1);
        }
      }
    }
  }

  if ($erro) {
    echo "<script>
            window.location.href='/projeto/login.php';
            alert('Login e/ou senha incorretos');            
          </script>";
  } else {
    echo "<script>
            window.location.href='/projeto/home.php';
        </script>";
  }
}
?>
