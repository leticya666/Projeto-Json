<?php

//Listagem 6. Função “json_encode” – exemplo inicial


//cria o array associativo
	$idades = array("Jason"=>38, "Ada"=>35, "Delphino"=>26);

//converte o conteúdo do array associativo para uma string JSON
	$json_str = json_encode($idades);

//imprime a string JSON
	echo "$json_str";


//Listagem 7.Convertendo um array com 3 empregados para uma String JSON


//cria um array contendo 3 empregados
	$empregados = array('empregados' => array(
    array(
        'nome' => 'Jason Jones',
        'idade' => 38,
        'sexo' => 'M'
    ),
    
    array(
        'nome' => 'Ada Pascalina',
        'idade' => 35,
        'sexo' => 'F'
    ),
    
    array(
        'nome' => 'Delphino da Silva',
        'idade' => 26,
        'sexo' => 'M'
    )));

//converte o conteúdo do array para uma string JSON
	$json_str = json_encode($empregados);

//imprime a string JSON
	echo "$json_str";


?>
