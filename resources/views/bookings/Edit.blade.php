<!DOCTYPE html>
<html>
<head>
    <title>Modifier une réservation</title>
</head>
<body>
    <h1>Modifier la réservation</h1>

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>ID du service :</label>
        <input type="number" name="service_id" value="{{ old('service_id', $booking->service_id) }}">
        @error('service_id') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Date :</label>
        <input type="date" name="date" value="{{ old('date', $booking->date) }}">
        @error('date') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Heure :</label>
        <input type="time" name="time" value="{{ old('time', $booking->time) }}">
        @error('time') <p style="color:red;">{{ $message }}</p> @enderror

        <label>Statut :</label>
        <input type="text" name="status" value="{{ old('status', $booking->status) }}">
        @error('status') <p style="color:red;">{{ $message }}</p> @enderror

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('bookings.index') }}">← Retour</a>
</body>
</html>
