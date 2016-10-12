                                <?php 
require 'mysqlconnector.php';
foreach($_POST as $metodo=> $valor){
$metodo=  isset($_POST['tipo_dato'])?$_POST['tipo_dato']:"";
if($metodo=="F" || $metodo=="M"){    
    $table=isset($_POST['nombre_tabla'])?$_POST['nombre_tabla']:"";
    generar_nombre($metodo,$table);
    

}else if($metodo=="correo"){
    $table=isset($_POST['nombre_tabla'])?$_POST['nombre_tabla']:"";
    correos($table);
}else if($metodo=="numeros"){
    $table=isset($_POST['nombre_tabla'])?$_POST['nombre_tabla']:"";
    crear_numeros($table);
    
}else{
    echo 'Lo siento no disponible';
}
}

                                

                                function correos($table){     
                                    $cantidad=isset($_POST['cantidad_valores'])?$_POST['cantidad_valores']:"";
                                 require './mysqlconnector.php';
                                $consulta1="select nombre,extension,apellido_paterno,apellido_materno from nombres inner join correos inner join apellido_paterno inner join apellido_materno";                                
                                $query2=  mysqli_query($con, $consulta1);
                                $fp = fopen("C:\wamp\www\Admin_Base\Archivo\correos.sql","w");
                                for($t=1;$t<$cantidad;$t++){
                                    $rowdirect=mysqli_fetch_array($query2);
                                    $idn1=$rowdirect["extension"];
                                    $nombre1=$rowdirect["nombre"];                                    
                                    $app=$rowdirect['apellido_paterno'];
                                    $appl=$rowdirect['apellido_materno'];
                                    $shuffle=  str_shuffle($nombre1);
                                    $shuffle2=$shuffle.str_shuffle($app);
                                    
                                    $test="INSERT INTO ".$table." values(".$t.",'".$shuffle2."".$idn1."');\n";
                                    fwrite($fp,$test);
                                    
                                }
                                fclose($fp);
                                echo '<h1>Se ha generado exitosamente el archivo <a href="C:\wamp\www\Admin_Base\Archivo\correos.sql>SQL</a></h1>';                                
                                }
                                
                                function crear_numeros($table){ 
                                    $cantidad=isset($_POST['cantidad_valores'])?$_POST['cantidad_valores']:"";
                                    $fp = fopen("C:\wamp\www\Admin_Base\Archivo\numero.sql","w");
                                for($t=0;$t<$cantidad;$t++){  
                                    $numeros=1234567890;
                                    $shuffle= str_shuffle($numeros); 
                                    $escrito="INSERT INTO".$table."values(".$t.",".$shuffle.");";                                                                        
                                    fwrite($fp,$escrito);                                    
                                    
                                }
                                fclose($fp);
                                header("Location: index.php");
                                    
                                echo '<h1>Se ha generado exitosamente el archivo</h1>';
                                
                                }
                                
                                
                                function generar_nombre($sexo,$table){   
                                    $cantidad=isset($_POST['cantidad_valores'])?$_POST['cantidad_valores']:"";
                                require './mysqlconnector.php';
                                $consulta="select nombre,apellido_paterno,apellido_materno from nombres inner join apellido_paterno inner join apellido_materno where nombres.sexo='".$sexo."'";                                
                                $query1=  mysqli_query($con, $consulta);
                                $rowdirect=  mysqli_fetch_array($query1);                                                                
                                $fp = fopen("C:\wamp\www\Admin_Base\Archivo\sexo".$sexo.".sql","w");
                                for($t=0;$t<$cantidad;$t++){
                                    $rowdirect=mysqli_fetch_array($query1);
                                    $idn1=$rowdirect["apellido_paterno"];
                                    $idn2=$rowdirect["apellido_materno"];
                                    $nombre1=$rowdirect["nombre"];                                                                                                                                          
                                    $test="INSERT INTO ".$table." values(".$t.",'".$nombre1."','".$idn1."','".$idn2."');\n";
                                    fwrite($fp,$test);
                                }                                                                    
                                    fclose($fp);
                                    
                                    echo '<h1>Se ha generado exitosamente el archivo <a href="C:\wamp\www\Admin_Base\Archivo\sexo"'.$sexo.'".sql">SQL</a></h1>';
                                }
                                
       