<?php
  
 // Connexion à la base de données (à remplacer par tes propres identifiants)
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "Site";

 $conn = new mysqli($servername, $username, $password, $dbname);
   

	// Vérifier la connexion
	if ($conn->connect_error) {
		die("La connexion a échoué : " . $conn->connect_error); 
	}
	
 $nom = htmlspecialchars($_POST['nom']);
 $email = htmlspecialchars($_POST['email']);
 $password = htmlspecialchars($_POST['password']);
 $req="INSERT INTO users ( nom, email, mot_de_passe) VALUES('$nom','$email','$password')";
 $res=mysqli_query($conn, $req); 
 header ("Location:connexion.php");
 echo "<script>alert('Utilisateur enregistré avec succès');</script>";
 
	



