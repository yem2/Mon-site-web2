 <?php
  // Connexion à la base de données 
  $servername = "localhost"; $username = "root"; $password = ""; $dbname = "Site"; 
  $conn = new mysqli($servername, $username, $password, $dbname); 
 if ($conn->connect_error) {
     die("Connexion échouée : " . $conn->connect_error);
   }

   $email = $_POST['email']; 
   $password = $_POST['password'];
   $stmt = $conn->prepare( "SELECT * FROM users WHERE  email = ? AND mot_de_passe = ?"); 
   
   // Lier les paramètres
    $stmt->bind_param("ss", $email, $password);

    // Exécuter le statement
    $stmt->execute();

    // Récupérer le résultat 
    $result = $stmt->get_result(); 

 // Vérifier si l'utilisateur existe 
     if ($result->num_rows > 0) { 
         session_start(); 
         $_SESSION['email'] = $email; 
         $_SESSION['password'] = $mot_de_passe; 
       
         header("Location: ../page utilisateur/Acceuil.php");
      } else { 
        echo "<script>alert('Votre email ou mot de passe est incorrect');</script>";
        } 
    
   $stmt->close();
   $conn->close(); 
                 
