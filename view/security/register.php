<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h1>Formulaire d'inscription</h1>

<form action="register.php?ctrl=security&action=register" method="POST">
        
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required><br><br>

        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom" placeholder="Entrez votre prenom" required><br><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="Entrez votre email" required><br><br>

        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo" required><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required><br><br>

        <label for="password_confirm">Confirmez le mot de passe :</label>
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmez votre mot de passe" required><br><br>

        <label for="Role">Rôle</label>
        <input type="text" id="role" name="role" placeholder="Entrez votre rôle" required><br><br>





        <button type="submit" name="submit">S'inscrire</button>
    </form>







    
</body>
</html>