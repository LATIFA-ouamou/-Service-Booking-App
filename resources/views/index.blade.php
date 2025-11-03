<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des services</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 25px;
        }

        a.add-btn {
            display: inline-block;
            text-decoration: none;
            background-color: #28a745;
            color: white;
            padding: 10px 15px;
            border-radius: 6px;
            font-weight: 500;
            margin-bottom: 25px;
        }

        a.add-btn:hover {
            background-color: #218838;
        }

        .success {
            color: green;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 10px 15px;
            border-radius: 6px;
            width: 400px;
            text-align: center;
            margin-bottom: 25px;
        }

        .service-card {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .service-card img {
            width: 100%;
            max-height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
        }

        .service-title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .service-price {
            color: #007bff;
            font-weight: 600;
            margin: 5px 0 10px;
        }

        .actions a {
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 14px;
            margin-right: 5px;
            transition: 0.2s;
        }

        .actions a:hover {
            background-color: #0056b3;
        }

        .actions a.edit {
            background-color: #ffc107;
            color: black;
        }

        .actions a.edit:hover {
            background-color: #e0a800;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
    </style>
</head>
<body>

    <h1>Liste des services</h1>

    <a href="{{ route('services.create') }}" class="add-btn">+ Ajouter un service</a>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <ul>
        @foreach($services as $service)
            <li class="service-card">
                @if($service->image)
                    <img src="{{ asset('storage/' . $service->image) }}" alt="Image du service">
                @endif

                <div class="service-title">{{ $service->title }}</div>
                <div class="service-price">{{ $service->price }} €</div>

                <div class="actions">
                    <a href="{{ route('services.show', $service->id) }}">Voir</a>
                    <a href="{{ route('services.edit', $service->id) }}" class="edit">Modifier</a>
                </div>
            </li>
        @endforeach
    </ul>

</body>
</html>
