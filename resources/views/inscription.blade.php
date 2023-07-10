<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="POST" action="{{ route('inscription') }}">
    {{ csrf_field() }}

        <input type="text" name="nom_etudiant" placeholder="Nom">
        <input type="text" name="prenom_etudiant" placeholder="Prénom">
        <input type="email" name="email_etudiant" placeholder="Email">
        <input type="password" name="password" placeholder="Mot de passe">
        <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
        <button type="submit">s'inscrire</button>
    </form>
</body>
</html>
