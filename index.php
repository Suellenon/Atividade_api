


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade_api</title>
    <link rel="stylesheet" href=./style/style.css>



<?php
    $cep = $_POST['cep'];
    $url = "https://viacep.com.br/ws/$cep/json/";
    $dados= file_get_contents($url);
   $resultado = json_decode($dados, true);

   
    // echo "<pre>";
    // var_dump($resultado);
    // echo "<pre>";
?>

</head>
<body>

<section id=conjunto >
    <h1>
        Digite o cep e encontre endereço
    </h1>
    <form action="" method= "post">
        <div class="dados">
            <label for="cep"><strong>Cep</strong></label>
             
          <input type="number" name="cep" id="cep"  min="8" value=<?=  $cep ?? '';?>>
           <button type="submit">Enviar</button>
       
        </div>
        <div  class="dados">
            <label for="local"><strong>Local</strong></label>
           
            <input type="text" name="local" id="local" value=" <?=$resultado['logradouro'] ?? '';?>">
        </div>
        <div  class="dados">
          <label for="complemento"><strong>Complemento</strong></label>
           <input type="text" name="complemento" id="complemento" value=" <?=  $resultado["complemento"] ?? '';?>">
        </div>
        <div  class="dados">
           <label for="cep"><strong>Bairro</strong></label>
           <input type="text" name="bairro" id="bairro" value= "<?php echo $resultado ['bairro'] ?? ''?>">
          </div>
          <div  class="dados">
          <label for="estado"><strong>Estado</strong></label>
          <input type="text" name="estado" id="estado" value="<?php echo $resultado ['localidade'] ?? ''?>">
          </div>
    </form>
</section>

</body>
</html>

