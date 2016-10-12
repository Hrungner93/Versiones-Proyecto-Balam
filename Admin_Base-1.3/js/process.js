function generar_campos(){
var ju=document.getElementById("agregar")
for(var cual=1;cual<=4;cual++){        
    ju.innerHTML='<td align="left">\n\
                    '+cual+'</td>\n\
                    <td align="right"><input type="text" name="nombre_tabla'+cual+'" size="25"></td>\n\
                    <td align="right"> \n\
                    <select name="tipo_dato>\n\
                        <option value="nombre_mujer">Nombres de mujer</option>\n\
                        <option value="nombre_hombre">Nombres de hombre</option>\n\
                        <option value="correo">emails</option>\n\
                        <option value="numeros_celulares">Numeros celulares</option>\n\
                        <option value="contraseñas">Contraseñas</option>\n\
                        </td>\n\
                    <td align="right"><input type="checkbox" name="auto_increment"></td>';
                                                                                                        
}
}


                                         function tablas(){
var yea=document.getElementById("tabla1").rows.length;
var numero=document.getElementById("numero_de_campos").value;
alert(numero);
var ju=document.getElementById("tabla1")
for(var cual=1;cual<=numero;cual++){        
    ju.HTML='<tr id="agregado">\n\
                   <td align="left">\n\
                    '+columna+'</td>\n\
                    <td align="right"><input type="text" name="nombre_tabla'+columna+'" size="25"></td>\n\
                    <td align="right"> \n\
                    <select name="tipo_dato>\n\
                        <option id="nombre_mujer">Nombres de mujer</option>\n\
                        <option id="nombre_hombre">Nombres de hombre</option>\n\
                        <option id="correo">emails</option>\n\
                        <option id="numeros_celulares">Numeros celulares</option>\n\
                        <option id="contraseñas">Contraseñas</option>\n\
                        </td>\n\
                    <td align="right"><input type="checkbox" name="auto_increment"></td>\n\
                    </tr>';
                                                                                                        
}
}

function myCreateFunction()
{
var table = document.getElementById("row1");
  {  
  var cell1 = table.insertCell(0);
  var cell2 = table.insertCell(1);
  cell1.innerHTML = "Quiero insertar input text aaqui";
  cell2.innerHTML = "Aqui tambien";
  }
}
function myDeleteFunction()
{
document.getElementById("myTable").deleteRow(0);
}