<?php 

function inserirUsuario($conn,$jogonome,$jogogenero,$codigojogo, $plataformajogo) {



$query = "INSERT INTO `tbusuario` (`jogonome`, `jogogenero`, `codigojogo`) 
VALUES (NULL,'{$jogonome}','{$jogogenero}','{$codigojogo}','{$plataformajogo})";


$dados = mysqli_query($conn,$query);
return $dados; 

}

function visuJogoNome($conn,$jogonome){
    $query = "select * from tbusuario where jogonome like '%{$jogonome}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
     
}
function visuJogoGenero($conn,$jogogenero){ 
    $query = "select * from tbusuario where jogogenero like '%{$jogogenero}%'";
    $resultado = mysqli_query($conn, $query);
    return $resultado;
}
function visuJogoCodigo($conn,$codigojogo){ 
    $query = "select * from tbusuario where codigojogo = {$codigojogo}";
    
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}

function visuJogoPlataforma($conn,$plataformajogo){ 
    $query = "select * from tbusuario where codigojogo = {$plataformajogo}";
    
    $resultado = mysqli_query($conn, $query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}


?>