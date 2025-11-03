<!DOCTYPE html>
<html>
<head>
    <title>Liste des réservations</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background: #eee; }
        a { text-decoration: none; padding: 5px 10px; border-radius: 4px; }
        .btn { background: #4CAF50; color: white; }
        .edit { background: #2196F3; color: white; }
        .delete { background: #e74c3c; color: white; }
    </style>
</head>
<body>
    <h1>Liste des réservations</h1>

    <a href="{{ route('bookings.create') }}" class="btn">+ Ajouter une réservation</a>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Service ID</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->service_id }}</td>
                    <td>{{ $booking->date }}</td>
                    <td>{{ $booking->time }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a href="{{ route('bookings.show', $booking->id) }}" class="btn">Voir</a>
                        <a href="{{ route('bookings.edit', $booking->id) }}" class="edit">Modifier</a>
                        <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button type="submit" class="delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
