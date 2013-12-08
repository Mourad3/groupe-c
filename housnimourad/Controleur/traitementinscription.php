<?php
    $host = 'localhost'; 
    $user = 'root'; 
    $password = '';
    $database = 'ecomerce';
    $VerifInscriptionObj = new Client($host, $user, $password, $database);
	$VerifInscriptionObj->VerificationRemplissageNom($_POST['_nom']);
    $VerifInscriptionObj->VerificationRemplissageMail($_POST['_email']);
	$VerifInscriptionObj->VerificationRemplissageTel($_POST['_telephone']);
	$VerifInscriptionObj->VerificationRemplissageAddresse($_POST['_addresse']);
    $VerifInscriptionObj->VerificationRemplissageCiVilite($_POST['_civilite']);
    $VerifInscriptionObj->VerificationRemplissageMdp($_POST['_mdp']);
    $VerifInscriptionObj->VerificationRemplissageCodepostal($_POST['_codepost']);
    $VerifInscriptionObj->VerificationRemplissagePrenom($_POST['_prenom']);
	// on construit l'objet pour l'envoi des données du formulaire.
	$EnvoiInscriptionObj = new TraitementClient($host, $user, $password, $database); 
	//Cryptage du mot de passe a l'aide de la méthode de cryptage
    $EnvoiInscriptionObj->CryptagePass($_POST['mdp']);

     $EnvoiInscriptionObj->EnvoiDonneeVerifie($_POST['nom'], $_POST['email'],$_POST['telephone'],$_POST['adresse'],$_POST['civilite'], $EnvoiInscriptionObj->mdp, $_POST['codepost'], $_POST['prenom']);

    header("location: ../index.php"); 

	?>