<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email_etudiant" value="{{ old('email_etudiant') }}" required>
        @error('email_etudiant')
            <span>{{ $message }}</span>
        @enderror
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>
        @error('password')
            <span>{{ $message }}</span>
        @enderror
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
