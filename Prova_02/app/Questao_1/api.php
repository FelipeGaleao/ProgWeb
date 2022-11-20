<?php
header('Content-Type:application/json; charset=utf-8');

buscar_moeda($_GET['codigo_moeda']);
function buscar_moeda($moeda)
/* 
@param $moeda String Código da moeda a ser buscada
@return json Retorna um objeto JSON com os dados da moeda buscado ou uma mensagem de erro
*/

{
    // Verificar se foi definido a query da Moeda
    if (!isset($_GET['codigo_moeda']) || $_GET['codigo_moeda'] == '') {
        $resposta = array(
            'codigo' => 404,
            'mensagem' => 'Moeda não definida'
        );
        http_response_code(500);
        return response(500, $resposta);
    }

    // Fazer a leitura do arquivo JSON
    $codigo_moeda = $_GET['codigo_moeda'];
    $moedas = ler_json_moedas();

    // Verificar se a moeda existe no JSON
    if (!array_key_exists($codigo_moeda, $moedas)) {
        $resposta = array(
            'codigo' => 404,
            'mensagem' => 'Moeda não encontrada'
        );
        http_response_code(500);
        return response(500, $resposta);
    }

    // Retornar a moeda
    $resposta = array(
        'codigo' => $codigo_moeda,
        'nome' => $moedas[$codigo_moeda]['name'],
        'data' => $moedas[$codigo_moeda]
    );
    http_response_code(200);
    return response(200, $resposta);
}

function ler_json_moedas()
/* @return json Retorna o objeto contendo as moedas no JSON 
*/

{
    $json = file_get_contents('./moedas.json');
    $json = json_decode($json, true);
    return $json;
}

function response($response_code, $resposta)
/* @param $response_code int Código de resposta HTTP
 * @param $resposta array Array com a resposta
 * @return json Retorna a resposta em JSON
 */

{
    $json_response = json_encode($resposta, true);
    echo $json_response;
}


?>