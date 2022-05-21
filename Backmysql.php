<?php
session_start();

ob_start();

include_once("conexao.php");
if(isset($_POST["cadastrar"])){
    
    $name=$_POST["name"];
    $user_name=$_POST["username"];
    $data=$_POST["dataNasc"];
    $sexo=$_POST["sexo"];
    $email=$_POST["email"];
    $pais=$_POST["pais"];
    $provincia=$_POST["provincia"];
    $Pass=$_POST["password"];
    $Pass1=$_POST["password2"];
    $photo_user=$_FILES["foto"];
    $locate="C:/wamp64/www/TCC/Imobiliária/users/";
    $locate=$locate;
    $locate=$locate . $photo_user["name"];
    if(is_file($_FILES["foto"] ["tmp_name"])){
        if(file_exists($locate . $photo_user["name"])){
            $cont=1;
            while(file_exists($locate . $nomeimovel)){
                $cont++;
            }
            $photo_user="[$cont]".$photo_user['name']."";
        }
    }
 if($Pass==$Pass1){
    try {
       
     $criptsenha=password_hash($Pass, PASSWORD_DEFAULT);
        
        $sqlInsertQuery="INSERT INTO user( `user_nome`,`foto_user`, `dataNasc`, `sexo`, `email`, `contry`, `provincia`, `Password` ) VALUES( :nome, :foto, CURRENT_DATE(), :sexo, :email, :pais, :provincia, :pass);";
        $operation=$conection->prepare($sqlInsertQuery);
        $conection->beginTransaction();
        $operation->execute([
            
            'nome'=> $name,
            'foto'=>$photo_user["name"],
            'sexo'=> $sexo,
            'email'=>$email,
            'pais'=> $pais,
            'provincia'=>$provincia,
            'pass'=>$criptsenha,
            
    
        ]);
        $conection->commit();
        if($operation):
            if(move_uploaded_file($photo_user["tmp_name"], $locate)) echo"
            <script> alert('    Cadstrado com sucesso');  </script>
            ";
        endif;
        } 
        catch (\Exception $error) {
            if($conection-> inTransaction()){
                $conection->rollBack();
            }
            throw $error;
        }
    } else{echo" <script> alert('As palavras passes não são iguais... Tente novamente')</script>";} 
   
    
    
    


}


/*
try {
    
    $sqlQuery="UPDATE user SET user_nome=:name";

    $operation=$conection->prepare($sqlQuery);
    $conection->beginTransaction();
    $operation->execute(["name" =>'Lukenny']);
    $conection->commit();


} 

catch (\Exception $error) {
    if($conection->inTransaction()){
        $conection->rollBack();
    }
    throw $error;
}

*/


if(isset($_POST["iniciarSessao"])){
    
    
    try {
        $emailLogin=$_POST["inputEmail"];
    $passordLogin=$_POST["inputPassword"];
    $sqlSelectQuery="SELECT * FROM user WHERE email='$emailLogin'";
    $operation=$conection->prepare($sqlSelectQuery);
    $operation->execute();
    $dataUser=$operation->fetch();
    $linha=$operation->rowCount();
    if($linha>0):
        $sqlSelectQuery="SELECT Password FROM user WHERE email='$emailLogin' ";
        $operation=$conection->prepare($sqlSelectQuery);
        $operation->execute();
        $data=$operation->fetch();
        $criptsenha= $data["Password"];
        if(password_verify($passordLogin,$data["Password"] )):
            $linha=$operation->rowCount();
            if($linha==1):
                    
                    $data=$operation->fetchAll(PDO::FETCH_ASSOC);
                    $_SESSION["logado"]=true;
                    $_SESSION["id_user"]=$dataUser["id_user"];
                    $_SESSION["user"]=$dataUser["user_nome"];
                    $_SESSION["foto"]=$dataUser["foto_user"];
                    //header("Location:http://localhost/tcc/Imobili%c3%a1ria/products.php");
                    /*echo"ID: ". $_SESSION["id_user"]. " <br>";
                    echo"Nome:". $_SESSION["user"]. " <br>";
                    echo "foto:". $_SESSION["foto"];
                         */           
             
            else:
                
                echo" erro";
            endif; 
        
            endif;
       
            else: 
        endif;
    } catch (\Exception $error) {
        if($conection-> inTransaction()){
            $conection->rollBack();
        }
        throw $error;
    }
    
}
if(isset($_POST["EnviarImovel"])){
    try {
        $desc=$_POST["descImovel"];
        $preco=$_POST["price"];
        $tipo=$_POST["tipoImovel"];
        $va=$_POST["Operation"];
        $nomeimovel=$_FILES["fotoImovel"]["name"];
        $typesImg= array("image/jpg", "image/jpeg", "image/png", "image/bmp", "image/gif");
        $arquivo= $_FILES["fotoImovel"];
        $locate="C:/wamp64/www/TCC/Imobiliária/imoveis/";
        $locate=$locate;
        $locate=$locate . $arquivo["name"];
        if(is_file($_FILES["fotoImovel"] ["tmp_name"])){
            if(file_exists($locate . $arquivo["name"])){
                $cont=1;
                while(file_exists($locate . $nomeimovel)){
                    $cont++;
                }
                $fotoImovel="[$cont]$nomeimovel";
            }
        if(in_array($arquivo["type"], $typesImg)){
        include_once("conexao.php");
        $sqlInsertQuery="INSERT INTO `imoveis` ( `descImovel`, `preco_imovel`, `foto`, `tipoImovel`, `VA`) VALUES (:desc, :preco, :foto, :tipo, :VA);";
        $operation=$conection->prepare($sqlInsertQuery);
        $conection->beginTransaction();
        $operation->execute([
            'desc'=>$desc ,
            'preco'=>$preco,
            'foto'=>$arquivo["name"],
            'tipo'=>$tipo,
            'VA'=>$va          
        
        ]);
        $conection->commit();
        
        if($operation):
            if(move_uploaded_file($arquivo["tmp_name"], $locate)) echo"
            <script> alert('Imóvel carregado com sucesso querido'); Location:'addImovel.php' </script>
            ";
        endif;
            
        
        }else echo " <script> alert('Tipo de arquivo inválido querido'); Location='addImovel.php' </script> ";
        
        
        }    


    } catch (\Exception $error) {
        if($conection-> inTransaction()){
            $conection->rollBack();
        }
        throw $error;
    }


}

function pesquisar(){
if(isset($_POST["pesquisar"])):
echo "<script> alert('Tipo de arquivo inválido querido');  </script> ";

endif;

}

   
    
    

