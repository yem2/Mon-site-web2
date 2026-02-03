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
	
 $full_name = htmlspecialchars($_POST['name1']);
 $email = htmlspecialchars($_POST['email1']);
 $mobile_number = htmlspecialchars($_POST['mobile1']);
 $email_subject = htmlspecialchars($_POST['subject1']);
 $message = htmlspecialchars($_POST['message1']);
 $sqlInsertData = "INSERT INTO contacts (full_name, email, mobile_number, email_subject, message) VALUES ('$full_name', '$email', '$mobile_number', '$email_subject', '$message')";
 $res=mysqli_query($conn, $req); 
 header ("Location:../page d'accueil/index.php");
 