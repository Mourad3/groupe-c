function checkAll(name, checked){
    //On parcourt tous les inputs de la page
    var inputs = document.getElementsByTagName('input');
    for(var i=0; i<inputs.length; i++){
        //On regarde s'il s'agit d'une checkbox avec le nom souhait�
        if(inputs[i].type == 'checkbox' && inputs[i].name == name){
            //On attribue � la case le m�me �tat (coch�/d�coch�) que celui de la checkbox servant � tout cocher/d�cocher
            inputs[i].checked = checked;
			//alert(inputs[i].checked);
        }
    }
	
} 