<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un service</title>
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

        form {
            background: #fff;
            padding: 30px 35px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 450px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            border: 1px solid #ccc;
            border-radius: 6px;
            box-sizing: border-box;
            font-size: 14px;
            background-color: #fafafa;
        }

        textarea {
            min-height: 80px;
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 15px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            margin-top: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            color: red;
            font-size: 13px;
            margin-top: -10px;
            margin-bottom: 10px;
        }

        a {
            margin-top: 25px;
            text-decoration: none;
            color: #007bff;
            font-size: 15px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Ajouter un service</h1>

    <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Titre :</label>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Prix (€) :</label>
        <input type="number" name="price" value="{{ old('price') }}">
        @error('price') <p>{{ $message }}</p> @enderror

        <label>Image :</label>
        <input type="file" name="image">
        @error('image') <p>{{ $message }}</p> @enderror

        <label>Description :</label>
        <textarea name="description">{{ old('description') }}</textarea>
        @error('description') <p>{{ $message }}</p> @enderror

        <label>Durée (minutes) :</label>
        <input type="number" name="duration" value="{{ old('duration') }}">
        @error('duration') <p>{{ $message }}</p> @enderror

        <button type="submit">Enregistrer</button>
    </form>

    <a href="{{ route('services.index') }}">← Retour à la liste</a>

</body>
</html>
