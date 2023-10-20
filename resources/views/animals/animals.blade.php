<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of animals and their owners</title>
    <link rel="stylesheet" href="/public/css/app.css">
</head>
<body>

    <h1>Pets and Owners List</h1>

    <form method="GET" action="/search">
        @csrf
        <input type="text" name="search" placeholder="Search by name...">
        <button type="submit">Search</button>
    </form>

    <br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Breed</th>
                <th>Age</th>
                <th>Weight (lbs)</th>
                <th>Photo</th>
                <th>Owner</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($animals as $animal)
                <tr>
                    <td>{{ $animal->id }}</td>
                    <td>{{ $animal->name }}</td>
                    <td>{{ $animal->breed }}</td>
                    <td>{{ $animal->age }}</td>
                    <td>{{ $animal->weight }}</td>
                    <td>
                        @if ($animal->image)
                        <img src="{{ asset('images/pets/' . $animal->image->path) }}" class="animal-image" alt="{{ $animal->name }} Image">
                        @else
                            No Image
                        @endif
                    </td>

                    <td>
                        @if ($animal->owner)
                           <strong> {{ $animal->owner->first_name }} {{ $animal->owner->surname }}</strong>
                        @else
                            No Owner
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $animals->links() }}

    <style>
        .animal-image {
            max-width: 100px;
            height: auto;
            transition: max-width 0.5s;
        }

        .animal-image:hover {
            max-width: 300px;
        }
    </style>
</body>
</html>