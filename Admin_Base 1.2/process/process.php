                                <?php
                                require './mysqlconnector.php';
function crearNombres($cantidad){                              
                                $consulta="select nombre,apellidos from nombres inner join apellidos where sexo='M'";                                
                                $query1=  mysqli_query($con, $consulta);
                                $rowdirect=  mysqli_fetch_array($query1);
                                for($t=0;$t<$cantidad;$t++){
                                    $idn1=$rowdirect["apellidos"];
                                    $nombre1=$rowdirect["nombre"];
                                    $shuffle=  str_shuffle($nombre1);                                    
                                    echo '<br>';
                                    echo $t."".$nombre1." . ".$idn1." ";
                                    
                                }
                                }
                                                                                          
                                $consulta1="select nombre,extension from nombres inner join correos ";                                
                                $query2=  mysqli_query($con, $consulta);
                                for($t=0;$t<$rowdirect=  mysqli_fetch_array($query1);$t++){
                                    $idn1=$rowdirect["extension"];
                                    $nombre1=$rowdirect["nombre"];                                    
                                    $shuffle=  str_shuffle($nombre1);                                    
                                    echo '<br>';
                                    echo $t."".$shuffle." . ".$idn1." ";
                                    
                                }
                                
                                function crear_numeros($cantidad,$tabla){                                                                                                                                   
                                for($t=1;$t<$cantidad;$t++){  
                                    $numeros=1234567890;
                                    $shuffle=  str_shuffle($numeros); 
                                    $escriyo="INSERT INTO".$tabla."values";
                                    fwrite($handle, $string);
                                    $fp = fopen("sql.sql","r");
                                    fclose($fp);
                                    
                                }
                                }
                               
       