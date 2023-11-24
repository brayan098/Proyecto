<?php
if(isset($_POST["enviar"])){
try{
    $base=new PDO ("mysql:host=localhost; dbname=usuario", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM datos_usuario WHERE usuario= :login AND PASSWORD= password"; $resultado=$base->prepare ($sql);
    $login=htmlentities(addslashes($_POST["correo"])); 
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login",$login);
    // $password=password_hash($password->getClave(), PASSWORD_DEFAULT);
    $resultado->bindValue(":password", $password);
    $resultado->execute();
    $numero_registro=$resultado->rowCount();
    if($numero_registro!=0){
    //se inicia la sesion si el usuario esta registrado
        session_start();
        $_SESSION["usuario"]=$_POST["correo"];
        header("location:pag_inicio.php");

    }else{
        header("location:form_acceso.php");
    }
        
        }catch(Exception $e) {
        die("Error: " . $e->getMessage());
    
    }
}
?>