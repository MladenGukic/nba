<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$team->name}}</title>
</head>
<body>
        <ul>
            <h3>{{$team->name}}</h3>
            <p>email: {{$team->email}}</p>
            <p>Address: {{$team->address}}</p>
            <p>City: {{$team->city}}</p>
            <h4>Players: </h4>
            @foreach($players as $player)
                <li>
                    <a href="/players/{{$player->id}}"> {{$player->first_name . ' ' . $player->last_name}}</a>
                </li>
            @endforeach
        </ul>
</body>
</html>