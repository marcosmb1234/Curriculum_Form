<?php
function calcularIdade($x) { // Função obrigatória para a idade
    $x = new DateTime($x);
    $hoje = new DateTime();
    $idade = $hoje->diff($x);
    return $idade->y;
}

function formatarTelefone($numero) { // Função opcional
    $numero = preg_replace('/\D/', '', $numero);
    if (strlen($numero) == 11) { 
        $telefone_formatado = '(' . substr($numero, 0, 2) . ')' . substr($numero, 2, 5) . '-' . substr($numero, 7); // Formatação usando string
        return $telefone_formatado;
    } else {
        return $numero;
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="interfaceCurri.css"/>
    <title>Curriculo</title>
</head>

<body>

    <?php
    $dados_pessoais = $_POST['array1'];
    $dados_pessoais = isset($_POST['array1']) ? $_POST['array1'] : false;

    $formacao = $_POST['array2'];
    $formacao = isset($_POST['array2']) ? $_POST['array2'] : false;

    $experiencia_profissional = $_POST['array3'];
    $experiencia_profissional = isset($_POST['array3']) ? $_POST['array3'] : false;

    $extracurricular = $_POST['array4'];
    $extracurricular = isset($_POST['array4']) ? $_POST['array4'] : false;

    $idiomas = $_POST['array5'];
    $idiomas = isset($_POST['array5']) ? $_POST['array5'] : false;
    $idade = calcularIdade($dados_pessoais['data']);
    $telefone = formatarTelefone($dados_pessoais['tel']);

    $pasta_destino = 'arquivos/';
    $nome_arquivo = $_FILES['foto']['name'];
    $caminho_arquivo = $pasta_destino . $nome_arquivo;
    move_uploaded_file($_FILES['foto']['tmp_name'], $caminho_arquivo);

    if (
        isset($dados_pessoais['nome'], $dados_pessoais['data'], $dados_pessoais['nation'], $dados_pessoais['estado_civil'], $dados_pessoais['rua'], $dados_pessoais['num'], $dados_pessoais['bairro'], $dados_pessoais['muni'], $dados_pessoais['estado'], $dados_pessoais['tel'], $dados_pessoais['email'], $dados_pessoais['objetivo']) &&
        isset($formacao['escolaridade'], $formacao['curso'], $formacao['instituicao'], $formacao['conclusao']) &&
        isset($experiencia_profissional['entrada'], $experiencia_profissional['saida'], $experiencia_profissional['funcao'], $experiencia_profissional['setor'], $experiencia_profissional['ativ']) &&
        isset($extracurricular['extra'], $extracurricular['ins']) &&
        isset($idiomas['lingua'], $idiomas['nivel'], $idiomas['ins2'])
    ) {
    ?>

        <h1><?php echo $dados_pessoais['nome'] ?></h1>
        <p><?php echo $dados_pessoais['nation'] . ", " . $dados_pessoais['estado_civil'] . ", " . $idade; ?></p>
        <p><?php echo "Rua: " . $dados_pessoais['rua'] . ", " . "casa Nº " . $dados_pessoais['num'] . ", " . $dados_pessoais['com'] . " - " . $dados_pessoais['bairro'] . " - " . $dados_pessoais['muni'] . " - " . $dados_pessoais['estado']; ?></p>
        <img src="<?php echo $caminho_arquivo; ?>" style="width: 150px; height: auto;">

        <p><?php echo "Telefone: " . $telefone ?></p>
        <p><?php echo "E-mail:" . $dados_pessoais['email'] ?></p>

        <h3><?php echo "Objetivo" ?></h3>
        <hr>
        <p><?php echo $dados_pessoais['objetivo'] ?></p>

        <h3><?php echo "Formação" ?></h3>
        <hr>
        <p><?php echo $formacao['escolaridade'] . " em " . $formacao['curso'] . " na " . $formacao['instituicao'] . " , " . "conclusão " . $formacao['conclusao'] ?></p>

        <h3><?php echo "Experiência Profissional" ?></h3>
        <hr>
        <p><?php echo $experiencia_profissional['entrada'] . "-" . $experiencia_profissional['saida'] . " - " . $experiencia_profissional['funcao'] . " , " . $experiencia_profissional['setor'] . " . " . $experiencia_profissional['ativ'] . " ." ?></p>

        <h3><?php echo "Atividades Extracurriculares" ?></h3>
        <p><?php echo $extracurricular['extra'] . " - " . $extracurricular['ins'] ?></p>

        <h3><?php echo "Idiomas" ?></h3>
        <p><?php echo $idiomas['lingua'] . " - " . $idiomas['nivel'] . " - " . $idiomas['ins2'] ?></p>
        <hr>
        <hr>
    <?php } else {
        header('Location: formulario.php');
    } ?>


</body>

</html>
