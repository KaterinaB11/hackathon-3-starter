<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add animal</title>
</head>
<body>
    @include('components.messages')

    <form action="{{route('animals.store')}}" method="post">
    @csrf

    <br>
    <label>Name:</label>
    <br>
    <input type="text" name="name" value="{{ old('name', $animal->name)}}">

    <br>
    <label>Owner id:</label>
    <br>
    <input type="number" name="owner_id" value="{{ old('owner_id', $animal->owner ? $animal->owner->id : '')}}">

    <br>
    <label>Age:</label>
    <br>
    <input type="number" name="age" value="{{ old('age', $animal->age)}}">

    <br>
    <button>Submit</button>


</body>
</html>