<?php 

include("con_db.php");

if (isset($_POST['register'])){
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email'])>=1){
        $name = trim($_POST['name']);  
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado){
            ?>
            <h3 class="ok">!Te haz inscrito correctamente!</h3>
            <?php
        }else{
            ?>
            <h3 class="bad">!Ocurrió un error!</h3>
            <?php
        }
    }   else{
            ?>
            <h3 class="bad">Por favor, complete los campos</h3>
            <?php
        }
    }


/*Para confirmar la conexión :)
if($conex){
    echo"se ha conectado";
}else{
    echo"no se conectó";
}
*/
?>