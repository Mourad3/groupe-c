$(document).ready(function() {
$("#div1").hide();
$("#div2").hide();
$("#chart_div").hide;
});
function GereChkbox(conteneur, a_faire) {
var blnEtat=null;
var Chckbox = document.getElementById(conteneur).firstChild;
	while (Chckbox!=null) {
		if (Chckbox.nodeName=="INPUT")
			if (Chckbox.getAttribute("type")=="checkbox") {
				blnEtat = (a_faire=='0') ? false : (a_faire=='1') ? true : (document.getElementById(Chckbox.getAttribute("id")).checked) ? false : true;
				document.getElementById(Chckbox.getAttribute("id")).checked=blnEtat;
			}
		Chckbox = Chckbox.nextSibling;
	}
}
function checkAll(name, checked){
    //On parcourt tous les inputs de la page
    var inputs = document.getElementsByTagName('input');
    for(var i=0; i<inputs.length; i++){
        //On regarde s'il s'agit d'une checkbox avec le nom souhaité
        if(inputs[i].type == 'checkbox' && inputs[i].name == name){
            //On attribue à la case le même état (coché/décoché) que celui de la checkbox servant à tout cocher/décocher
            inputs[i].checked = checked;
			//alert(inputs[i].checked);
        }
    }
	
} 
function check()
{
      if ($("#chek1").is(":checked")) {
        $("#div1").show();
		$("#div2").hide();
    }
	if ($("#chek2").is(":checked")) {
        $("#div1").show();
		$("#div2").show();
    }
}    

function cocherTout(name, etat)
{
  var cases = document.getElementsByTagName('input');   // on recupere tous les INPUT
   for(var i=1; i<cases.length; i++)     // on les parcourt
     if(cases[i].type == 'checkbox' && inputs[i].name == name)     // si on a une checkbox...
         {cases[i].checked = etat;}
             // ... on la coche ou non
 
 
}