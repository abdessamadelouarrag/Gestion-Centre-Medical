<?php

include "connect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $type_utilisateur = $_POST["user_type"];

    $sql = "INSERT INTO utilisateurs (nom, prenom, password, type_utilisateur) VALUES ('$nom', '$prenom', '$password', '$type_utilisateur')";

    if(mysqli_query($connect, $sql)){
        header("Location: login.php");
        exit();
    }
    else{
        echo "ERROR:" . mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="/styles/createacc.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

    <div class="account-container">
        <header class="account-header">
            <h2>Create Your Account</h2>
            <p>Join us today by filling out your details below.</p>
        </header>

        <form action="#" method="POST" class="account-form">
            
            <div class="form-group">
                <label for="nom">Nom (Last Name):</label>
                <input type="text" id="nom" name="nom" required>
            </div>

            <div class="form-group">
                <label for="prenom">Prénom (First Name):</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="user-type">Type Utilisateur (User Type):</label>
                <select id="user-type" name="user_type" required>
                    <option value="">-- Select Type --</option>
                    <option value="Patient">Patient</option>
                    <option value="Medecin">Medecin</option>
                </select>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="register-btn">
                    Create Account
                </button>
            </div>

            <p class="login-link">Already have an account? <a href="/login.php">Log In here</a></p>

        </form>
    </div>

</body>
</html>