<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <title>Footing</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
        body {
            font-family: 'Nunito';
        }

        a:link, a:visited, a:active{
            text-decoration:none; 
            color: rgb(43, 43, 43);
        }

        #map {
            height: 500px;
            width: 50%;
            float: right;
            margin-right: 15%
        }

        #contenedor{
            float: left;
            margin-left: 15%;
            margin-top: -25px;
        }

        h3{
            color: red;
            border-bottom-style: dotted;
            border-bottom-color: black;
            text-align: center;
        }

        p{
            text-align: center;
        }

    </style>
</head>

<body class="antialiased">

    @foreach ($restaurantes as $restaurante)
        <a href="/fooding/restaurantes"><h1 style="width: 20% ; border-bottom: double cyan 10px; margin-left: 40%; text-align: center"> {{ $restaurante->nombre }} </h1></a>
        <div id="contenedor">
            <h3>Ciudad</h3>
            <p>{{ $restaurante->ciudad }}</p>
            <h3>Direccion</h3>
            <p>{{ $restaurante->direccion }}</p>
            <h3>Telefono</h3>
            <p>{{ $restaurante->telefono }}</p>
            <h3>Foto del restaurante</h3>
            <img src="{{ url('storage/img/restaurantes', [$restaurante->foto]) }}" class="img-responsive" width="255" alt="" style="margin-bottom: 90px; height: 200px;">
        </div>
        <div id="map"></div>

        <script>
            function iniciarMap() {
                var coord = {
                    lat: {{ $restaurante->latitud}},
                    lng: {{ $restaurante->longitud}}
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 18,
                    center: coord
                });
                var marker = new google.maps.Marker({
                    position: coord,
                    map: map
                });
            }

        </script>
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap">
        </script>
    @endforeach
</body>

</html>
