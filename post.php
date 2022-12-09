<?php
@$titre = $_POST['titre'];

@$target_file = "uploads/cours/" .basename($_FILES["lien"]["name"]);
@$nom_temporaire = $_FILES["lien"]["tmp_name"];

@$target_file1 = "uploads/images/" .basename($_FILES["test"]["name"]);
@$nom_temporaire1 = $_FILES["test"]["tmp_name"];

@$module = $_POST['module'];
@$conn = new mysqli("localhost","root","","DSI");

move_uploaded_file($nom_temporaire,$target_file);
move_uploaded_file($nom_temporaire1,$target_file1);


if ($conn->connect_error){
    echo "error";
}

    $req = $conn->prepare("INSERT INTO cours(nomCours,fichierCours,logoCours,idModule)values(?,?,?,?)");
    $req->bind_param("sssi",$titre,$target_file,$target_file1,$module);
    $req->execute();

    if ($req){
        echo "les informations est bien ajouter";
    }else{
        echo "error";
    }
?>