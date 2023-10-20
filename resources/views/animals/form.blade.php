<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add animal</title>
    <style>
        body {
            margin-left: 1.5rem;
        }
        form {
            display: flex;
            flex-direction: column;
            width: 50%;
        }
        h1 {
            font-size: 2.5rem;
        }
        input, button, label {
            font-size: 1.5rem;
        }

    </style>
</head>
<body>
    @include('components.messages')

    <h1>Add your pet</h1>

    <form action="{{route('animals.store')}}" method="post">
    @csrf

    <br>
    <label>Animal name:</label>
    <br>
    <input type="text" name="name" value="{{ old('name', $animal->name)}}">

    <br>
    <label>Owner id:</label>
    <br>
    <input type="number" name="owner_id" value="{{ old('owner_id', $animal->owner ? $animal->owner->id : '')}}">

    <br>
    <label>Species:</label>
    <br>
    <input type="text" name="species" value="{{ old('species', $animal->species)}}">

    <br>
    <label>Breed:</label>
    <br>
    <input type="text" name="breed" value="{{ old('breed', $animal->breed)}}">

    <br>
    <label>Age:</label>
    <br>
    <input type="number" name="age" value="{{ old('age', $animal->age)}}">

    <br>
    <label>Weight:</label>
    <br>
    <input type="number" name="weight" value="{{ old('weight', $animal->weight)}}">
    <br>

    <br>
    <button>Submit</button>


</body>
</html>