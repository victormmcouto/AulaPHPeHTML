<?php
    $css = ".\assets\css\style.css";
    include('.\layouts\header.php');
?>
<?php
    $data_nascimento = $_POST['data_nascimento'];
    $signos = simplexml_load_file("signos.xml");

    $partes_data_nascimento = explode("-", $data_nascimento);

    foreach($signos->signo as $signo) {
        $partes_data_inicio = explode("/", (string) $signo->dataInicio);
        $partes_data_fim = explode("/", (string) $signo->dataFim);

        $numero_data_nascimento = (int) $partes_data_nascimento[1] . $partes_data_nascimento[2];
        $numero_data_inicio = (int) $partes_data_inicio[1] . $partes_data_inicio[0];
        $numero_data_fim = (int) $partes_data_fim[1] . $partes_data_fim[0];

        if($numero_data_nascimento >= $numero_data_inicio && 
            $numero_data_nascimento <= $numero_data_fim) {
            $signo_nome = $signo->signoNome . "<br>";
            $signo_descricao = $signo->descricao;
            break;
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
    <body>

        <div class="signo-container">
            <h1><?php echo $signo_nome;?></h1>
            <p><?php echo $signo_descricao;?></p>
        </div>

    </body>
</html>