<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du service</title>
    <style>
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background-color: #f4f6fa;
            margin: 0;
            padding: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .container {
            background: #fff;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 450px;
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .price {
            color: #007bff;
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 15px;
        }

        .description {
            color: #555;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .duration {
            font-size: 14px;
            color: #777;
            margin-bottom: 15px;
        }

        img {
            width: 220px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: white;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 6px;
            transition: 0.2s;
        }

        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>{{ $service->title }}</h1>
        <p class="price">{{ $service->price }} €</p>

        @if($service->image)
            <img src="{{ asset('storage/' . $service->image) }}" alt="Image du service">
        @endif

        <p class="description">
            {{ $service->description ?? 'Aucune description disponible.' }}
        </p>

        @if($service->duration)
            <p class="duration">Durée : {{ $service->duration }} minutes</p>
        @endif

        <a href="{{ route('services.index') }}">← Retour à la liste</a>
    </div>

</body>
</html>
