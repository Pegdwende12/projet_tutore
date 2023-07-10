<!DOCTYPE html>
<html>
<head>
    <title>Page de connexion</title>
</head>
<body>
    <h1>Espace prive</h1>
    <form action="{{ route('connaissance') }}" method="POST">
    @csrf
    <input type="hidden" name="id_etudiant" value="{{ $etudiant->id }}">
    <label for="titre">Titre de la connaissance :</label>
    <input type="text" id="titre" name="titre_connaiss" required>
    <label for="matiere_id">Matière correspondante :</label>
    <select id="matiere_id" name="id_matiere" required>
        @foreach ($matieres as $matiere)
            <option value="{{ $matiere->id }}">{{ $matiere->nom_matiere }}</option>
        @endforeach
    </select>
    <button type="submit">Enregistrer</button>
</form>

</body>
</html>
