<?php

//Listagem 1. Função “json_decode” – exemplo inicial


//string json contendo os dados de um funcionário
	$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": "M"}';
//faz o parsing na string, gerando um objeto PHP
	$obj = json_decode($json_str);
//imprime o conteúdo do objeto
	echo "nome: $obj->nome<br>";
	echo "idade: $obj->idade<br>";
	echo "sexo: $obj->sexo<br>";



/*Listagem 2. Arquivo JSON contendo 3 registros


{
empregados:
[
{"nome":"Jason Jones", "idade":38, "sexo": "M"},
{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},
{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}
]
}'
*/


//Listagem 3. Função “json_decode” –trabalhando com um object


//string json (array contendo 3 elementos)
	$json_str = '{"empregados": '.
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M"},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		']}';

//faz o parsing da string, criando o array "empregados"
	$jsonObj = json_decode($json_str);
	$empregados = $jsonObj->empregados;
//navega pelos elementos do array, imprimindo cada empregado
	foreach ( $empregados as $e )
    {
	echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br>";
    }


//Listagem 4. Função “json_decode” – trabalhando com um objeto complexo


//string json
//agora o primeiro empregado possui dependentes e os outros não.
//também foi acrescentado um campo denominado "data", contendo a data do arquivo de empregados
	$json_str = '{"empregados": '.
		'[{"nome":"Jason Jones", "idade":38, "sexo": "M", "dependentes": ["Sedna Jones", "Ian Jones"]},'.
		'{"nome":"Ada Pascalina", "idade":35, "sexo": "F"},'.
		'{"nome":"Delphino da Silva", "idade":26, "sexo": "M"}'.
		'],
		"data": "15/12/2012"}';

//faz o parsing da string, criando o array "empregados"
	$jsonObj = json_decode($json_str);
//cria o array de empregados
	$empregados = $jsonObj->empregados;

//imprime a data do arquivo e navega pelos elementos do array, imprimindo cada empregado.
//caso o empregado possua dependentes, estes também são exibidos.
	echo "<b>data do arquivo</b>: $jsonObj->data<br/>";
	
	foreach ( $empregados as $e )
    {
	
	echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo<br/>";

	if (property_exists($e, "dependentes")) {
		$deps = $e->dependentes;
		echo "dependentes: <br/>";
		foreach ( $deps as $d ) echo "- $d<br/>";
	}
    }


//Listagem 5.Criando um array associativo com a função “json_decode”


//cria uma string no formato JSON
	$json_str = '{"Jason":38,"Ada":35,"Delphino":26}';

//transforma a string em um array associativo
	$json_arr = json_decode($json_str, true);

//exibe o array associativo
	var_dump($json_arr);


?>