<?php
include_once("controller/config.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stmt = $db->prepare("INSERT INTO Usuarios (idUsuario,nome,email,password,telefone) VALUES (?,?,?,?,?)");
        $stmt->bindValue(1, $_POST["idUsuario"], SQLITE3_TEXT);
        $stmt->bindValue(2, $_POST["nome"], SQLITE3_TEXT);
        $stmt->bindValue(3, strtolower($_POST["email"]), SQLITE3_TEXT);
        $stmt->bindValue(4, openssl_encrypt($_POST["password"], "aes128", "1234", 0, "1234567812345678"), SQLITE3_TEXT);
        $stmt->bindValue(5, $_POST["telefone"], SQLITE3_TEXT);

        try {
          $result = $stmt->execute();
          header("Location: login.php");
          exit();
        } catch (Throwable $th) {
          echo "<script>alert('Email já cadastrado!');</script>";
        }
      }
       // fazer dentro do body de cadastro
      include_once(view/cadastro.php);
?>