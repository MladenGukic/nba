<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Player</title>
</head>
<body>
    <ul>
        <h2>{{$player->first_name . ' ' . $player->last_name}}
        <li>
            <p>{{$player->email}}</p>
            <a href="/teams/{{$player->team_id}}">{{$player->team->name}}</a>
        </li>
    <ul>        
</body>
</html>