
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="fondo"> 
    <div class="container" style="margin-top: 30px">
        <div class="card margin">
            <div class="card-body">
                <a href="/pokemones"> <button type="button" class="btn btn-primary">View all pokemons</button></a>
                <br><br>
                <div class="row">
                    <div class="col-sm-6">
                        <h3>{{$pokemon['forms'][0]['name']}}</h3>
                            @foreach ($pokemon['abilities'] as $key => $poke) 
                            <ul>
                                <li>{{$poke['ability']['name']}}</li>
                            </ul>   
                            @endforeach
                    </div>
                        <div class="col-sm-6 col">
                            <img class="w-150" src="{{$pokemon['sprites']['back_default']}}">
                        </div>
                </div>
            </div>
        </div>
    </div>   
</body>
</html>