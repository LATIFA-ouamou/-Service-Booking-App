
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une réservation</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f8f9fa; padding: 30px; }
        form { background: white; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; }
        label { display: block; margin-top: 10px; }
        input, select { width: 100%; padding: 8px; margin-top: 5px; }
        button { margin-top: 15px; background: #4CAF50; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        a { display: block; margin-top: 10px; text-align: center; }
    </style>
</head>
<body>
    <h1>Ajouter une réservation</h1>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf

        <label>ID du service :</label>
        <input type="number" name="service_id" value="{{ old('service_id') }}">
        @error('service_id') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Date :</label>
        <input type="date" name="date" value="{{ old('date') }}">
        @error('date') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Heure :</label>
        <input type="time" name="time" value="{{ old('time') }}">
        @error('time') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Statut :</label>
        <input type="text" name="status" value="{{ old('status') }}">
        @error('status') <p style="color:red;">{{ $message }}</p> @enderror

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('bookings.index') }}">← Retour</a>
</body>
</html>
