<!DOCTYPE html>
<html>
<head>
    <title>Détails de la réservation</title>
</head>
<body>
    <h1>Détails de la réservation #{{ $booking->id }}</h1>

    <p><strong>Service ID :</strong> {{ $booking->service_id }}</p>
    <p><strong>Date :</strong> {{ $booking->date }}</p>
    <p><strong>Heure :</strong> {{ $booking->time }}</p>
    <p><strong>Statut :</strong> {{ $booking->status }}</p>

    <a href="{{ route('bookings.index') }}">← Retour à la liste</a>
</body>
</html>
