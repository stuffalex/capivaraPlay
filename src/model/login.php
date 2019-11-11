<?php
          if ($_SERVER["REQUEST_METHOD"] === "POST") {
            if (isset($_POST["email"]) && isset($_POST["password"])) {
              $stmt = $db->prepare("SELECT * FROM Usuarios WHERE email = ? AND password = ?");
              $stmt->bindValue(1, strtolower($_POST["email"]), SQLITE3_TEXT);
              $stmt->bindValue(2, openssl_encrypt($_POST["password"], "aes128", "1234", 0, "1234567812345678"), SQLITE3_TEXT);
              $usuario = $stmt->execute()->fetchArray();
              if ($usuario) {
                $_SESSION["usuario"] = $usuario;
                header("Location: index.php");
                exit();
              }
            }
            echo "<script>alert('Usuário ou senha invalidos!');</script>";
          } else {
            if (isset($_SESSION["usuario"])) {
              echo "<div class=\"center-align\"><i class=\"large material-icons teal-text\">arrow_upward</i></div>";
              die();
            }
          }
        ?>