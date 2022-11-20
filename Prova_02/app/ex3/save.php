<?php
$file = "lista.csv";
//Carregar o arquivo existente
$current = file_get_contents($file);
//Criar (usando informações fornecidas pelo formulário HTML) e adicionar nova linha ao conteúdo já existente
$current .= $_POST['nome'] . ', ' . $_POST['sobrenome']  . ', ' . $_POST['email']  . ', ' . $_POST['cep']  . ', '  . $_POST['telefone']  . ',' . $_POST['data_nascimento']  . ', ' . $_POST['sexo'][0] . "\n";
//Adicionar conteúdo todo ao arquivo
file_put_contents($file, $current);

// Redirecionar para index.html
header('Location: index.html');

?>