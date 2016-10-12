/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var counter = 1;
var limit = 100;
var contador = 1;
var caja=document.getElementById("cantidad").valueOf(); 
function addInput(divName)
{                       
            for(contador=1;contador<=caja;contador++){
        var newdiv = document.createElement('div');
        newdiv.innerHTML = "<br><input type='text' name='dia_"+contador+"'>";
        document.getElementById(divName).appendChild(newdiv);
        counter++;
    }    
}
