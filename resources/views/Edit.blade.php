<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            margin: 0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            background: #fff;
            padding: 25px 30px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 14px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        img {
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        p {
            color: red;
            font-size: 13px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        a {
            margin-top: 20px;
            text-decoration: none;
            color: #007bff;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Modifier un service</h1>

    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Titre :</label>
        <input type="text" name="title" value="{{ old('title', $service->title) }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Prix :</label>
        <input type="number" name="price" value="{{ old('price', $service->price) }}">
        @error('price') <p>{{ $message }}</p> @enderror

        <label>Image :</label>
        <input type="file" name="image">
        @if($service->image)
            <img src="{{ asset('storage/' . $service->image) }}" width="120">
        @endif
        @error('image') <p>{{ $message }}</p> @enderror

        <button type="submit">Mettre à jour</button>
    </form>

    <a href="{{ route('services.index') }}">← Retour</a>

</body>
</html>
