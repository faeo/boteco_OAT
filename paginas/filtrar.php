<?php
if(isset($_POST['fazBusca'])){
    $filtroAux = "";
	$busca = $_POST['busca'];
	$categoria = $_POST['tipo'];
    $preco = $_POST['preco'];
    $where = FALSE;
    
    if($busca != ""){
        $busca = "WHERE nome LIKE '%".$busca."%'";
        $filtroAux = $busca;
        $where = TRUE;
    }
    else{
        $filtroAux = "";
        $busca = "";
    }
    $cat = "";

    if($where == TRUE){
        $cat = " AND ";
    }
    else{
        $cat = " WHERE ";
    }

    if($categoria == "nacional"){
        $cat .= " tipo = 'N'";
    }
    elseif($categoria == "importadas"){
        $cat .= " tipo = 'I'";
    }
    else{
        $cat .= "TRUE";
    }

    $filtroAux .= $cat;

    if($preco == "menor"){
        $preco = " ORDER BY valor ASC";
    }
    elseif($preco == "maior"){
        $preco = " ORDER BY valor DESC";
    }

    $filtroAux .= $preco;
    
    header('Location: ?pg=cervejas&filtro='.$filtroAux);
}
?>