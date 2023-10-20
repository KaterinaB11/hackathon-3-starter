<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search results</title>
</head>
<body>
    
    <h1>Search Results</h1>

    <h2>Animals</h2>
    @if ($animals->count() > 0)
        <ul>
            @foreach ($animals as $animal)
                <li>
                    <a href="{{ route('animal.show', ['animal' => $animal->id]) }}">
                        {{ $animal->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No animals found.</p>
    @endif

    <h2>Owners</h2>
    @if ($owners->count() > 0)
        <ul>
            @foreach ($owners as $owner)
                <li>
                    <a href="{{ route('owner.show', ['owner' => $owner->id]) }}">
                        {{ $owner->first_name }} {{ $owner->surname }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <p>No owners found.</p>
    @endif
</div>


</body>
</html>