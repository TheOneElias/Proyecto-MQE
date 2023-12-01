<?php
        $dbhost="localhost";
        $dbuser="root";
        $dbpass="";
        $dbname="atm";
        $dbport="3306";
        
        
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname, $dbport);
        
        if(!$conn){
            die("no hay conexion: ".mysqli_connect_error());
        }
        

        $sql ="SELECT* FROM swift WHERE ID = 1";
        $result = $conn->query($sql);
        
        /*
        $result->num_rows es una propiedad en PHP que pertenece al objeto $result, 
        que es el resultado de una consulta a la base de datos. Esta propiedad 
        num_rows devuelve el número de filas que se han encontrado como resultado
         de la consulta SQL.xX
        */
        
        if ($result->num_rows > 0) {
           while($row=$result->fetch_assoc()){
            echo"nombre:". $row["NOMBRE"]. "<br>";
            echo"apellido paterno:". $row["AP"]. "<br>";
            echo"apellido materno:". $row["AM"]. "<br>";
            echo"email:". $row["EMAIL"]. "<br>";
            echo"numero de cuenta:". $row["CUENTA"]. "<br>";
            echo"saldo:". $row["SALDO"]. "<br>";
           }
            
        } else {
            echo "0 RESULTADOS";
        }
        
        $conn->close();  //cierre de la connection
    

   


?>