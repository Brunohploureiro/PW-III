<?php

$NOME = $_REQUEST['nome'];
$BEBIDA = $_REQUEST['bebida'];
$DATA = $_REQUEST['data'];

$anoAtual = date('Y');

$anoNasc = date("Y", strtotime($DATA));

$IDADE = $anoAtual - $anoNasc;


if(empty($NOME && $NOME && $DATA)){
    $dados = array(

        "tipo" => 'error',
        "mensagem" => 'campos não definidos.'
    );

} else {

    if($IDADE >= 18){
        $dados = array(
            "mensagem" =>  'Olá ' . $NOME . ' ,sua idade é ' .$IDADE . '. <br> ,sua bebida favorita é ' . $BEBIDA . ', portanto você é de maior '
        );
    }else {
        $dados = array(
            "mensagem" =>  'Olá ' . $NOME . ' ,sua idade é ' .$IDADE . '. <br> ,sua bebida favorita é ' . $BEBIDA . ', portanto você é de maior '
        );
    }
    
    

   
}

echo json_encode($dados);