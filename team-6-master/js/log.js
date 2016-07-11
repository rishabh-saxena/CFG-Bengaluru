/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function vali()
{
   var x = document.forms["log"]["lg_email"].value;
    if (x == null || x == "") {
        alert("E - mail must be filled out");
        return false;
    }
    var y = document.forms["log"]["lg_password"].value;
    if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}


