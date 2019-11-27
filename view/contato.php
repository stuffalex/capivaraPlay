<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="estilos/estiloContato.css">
    <meta charset="utf-8">
	<title>Contato CapivaraPlay</title>
</head>
<body> 
	<div id="altura">
		<h2>CAPIVARA PLAY</h2>
	</div>
	<h1>FALE CONOSCO</h1>

	<form method="post" action="./../model/contatodosite.php">
		<input name="nome" class="campo" type="text" placeholder="Nome">
		<input name="email" class="campo" type="text" placeholder="Email">
		<input name="telefone" class="campo" type="text" name="Celular" onkeyup="mascara(this, mtel);" maxlength="15" placeholder="Celular" required>
        <textarea name="mensagem" id="campoMensagem" name="mensagem" placeholder="Mensagem" rows="4" required></textarea>
		<button class="botaoLogin" type="submit" id="botaoLogin"><STRONG>ENVIAR</STRONG></button>
	</form>
</body>

<script>
    	if(sessionStorage.getItem('mensagem')) {
    	    alert(sessionStorage.getItem('mensagem'));  
    	    sessionStorage.removeItem('mensagem');
    	}
    </script>
    <script>
    /* Máscaras ER */
    function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/\D/g,"");             //Remove tudo o que não é dígito
        v=v.replace(/^(\d{2})(\d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(\d)(\d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
    </script>
</html>