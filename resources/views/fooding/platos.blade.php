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
        <link rel="stylesheet" href="{{ url('/css/style.css')}}">

        <style>
            body {
                font-family: 'Nunito';
            }

            a.link {
                color: red;
            }

        </style>
    </head>

    <body class="antialiased">
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <section class="featured-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="titie-section wow fadeInDown animated ">
                                        @foreach ($restaurantes as $restaurante)
                                            @if ($restaurante_id == $restaurante->id)
                                                <a href="/fooding/restaurantes"><h1>{{ $restaurante->nombre }}</h1></a><br>
                                            @endif
                                        @endforeach
                                        <div style="width: 45px; position: absolute; left:48.5%; top:75%; border-radius: 25px; background-color: red; height: 42px;">
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/pedido/checkout">
                                            @if (count(Cart::getContent()))
                                            <img style="width: 22px; margin: 10px 0 0 5px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0iRmlsbGVkIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQ4OCAxNTItNDAgMTkyaC0zMDRsLTQwLTE5MnoiIGZpbGw9IiNlYTlmMjYiLz48cGF0aCBkPSJtMzg0IDIwMC0xMjAgOTZ2NDhoMTI4bDE2LTE0NHoiIGZpbGw9IiMyZDg1Y2MiLz48cGF0aCBkPSJtNDQ4IDM0NGgtODhsNC41OS01NS4wOCAzNS40MSA3LjA4eiIgZmlsbD0iI2ViNDIzZiIvPjxwYXRoIGQ9Im00NjQgMTUyaC04MGwyNC00OGgzMnoiIGZpbGw9IiNmZmQzM2EiLz48cGF0aCBkPSJtNDg4IDE1Mi0yMCA5NmgtNHYtOTZ6IiBmaWxsPSJub25lIi8+PHBhdGggZD0ibTQ4OCAxNTItMjQgOTZoLTU2di00OGgtMjR2LTQ4eiIgZmlsbD0iI2ZmZDMzYSIvPjxwYXRoIGQ9Im00NjQgMjQ4di04bC01Ni00MC04IDQ4aC0zMmwtOCA5Nmg4OGwyMC05NnoiIGZpbGw9IiMyNDgyNTYiLz48cGF0aCBkPSJtNDE2IDcyaDE2YTE2IDE2IDAgMCAxIDE2IDE2djE2YTAgMCAwIDAgMSAwIDBoLTQ4YTAgMCAwIDAgMSAwIDB2LTE2YTE2IDE2IDAgMCAxIDE2LTE2eiIgZmlsbD0iI2VhOWYyNiIvPjxwYXRoIGQ9Im0yMjQgMjk2djQ4aC04MGwtMTAtNDh6IiBmaWxsPSIjOTk2MDQ2Ii8+PHBhdGggZD0ibTI1NiAxMjh2NzJoLTE0NGwtMTUuMDQzLTc5LjE2Ny41NTEtLjgzM2EyNi4zNjYgMjYuMzY2IDAgMCAxIDIyLjAzNS0xMS43NjUgMjYuODEyIDI2LjgxMiAwIDAgMSA1LjI3LjUyMWMwLS4xNzQtLjAxMy0uMzQ2LS4wMTMtLjUyMSAwLTIwLjAxMiAxNi40NzYtMzYuMjM1IDM2LjgtMzYuMjM1YTM2Ljc4IDM2Ljc4IDAgMCAxIDM0LjY1MSAyNC4wMjIgMjYuMzYyIDI2LjM2MiAwIDAgMSA0OS40NjMgMTIuMjEzIDI1LjUyMyAyNS41MjMgMCAwIDEgLTUuNzYgMTYuMTYxIDI2LjcxMiAyNi43MTIgMCAwIDEgNS43Ni0uNjMxeiIgZmlsbD0iIzM1YTg3MiIvPjxwYXRoIGQ9Im0yNDAgNDBoMTI4djExMmgtMTI4eiIgZmlsbD0iI2M0ODY2OSIvPjxwYXRoIGQ9Im0yNDAgNDBoOTZ2MTEyaC05NnoiIGZpbGw9IiNkNDkwNzMiLz48cGF0aCBkPSJtMjU2IDIwMGgtNDBsOCA0OGgtNDBsLTQwIDQ4aC0xMGwtMzAtMTQ0aDE1MnoiIGZpbGw9IiMyNDgyNTYiLz48Y2lyY2xlIGN4PSIxNzYiIGN5PSI0NDAiIGZpbGw9IiM3ZTg1ODkiIHI9IjMyIi8+PGNpcmNsZSBjeD0iNDAwIiBjeT0iNDQwIiBmaWxsPSIjN2U4NTg5IiByPSIzMiIvPjxwYXRoIGQ9Im0yOTYgMjQ4LTE2LTQ4aC0yNHYtNDhoMTI4djQ4bC01NiA0OHoiIGZpbGw9IiNlYjQyM2YiLz48cGF0aCBkPSJtMzA0IDY0aC0zMmE4IDggMCAwIDAgMCAxNmgzMmE4IDggMCAwIDAgMC0xNnoiLz48cGF0aCBkPSJtMjQgODBoNDkuNjY0bDYwLjU5MyAyNTcuNTIxYTMyLjA1NCAzMi4wNTQgMCAwIDAgLTIyLjI1NyAzMC40Nzl2MTZhMzIuMDM2IDMyLjAzNiAwIDAgMCAzMiAzMmguMDIyYTQwIDQwIDAgMSAwIDYzLjk1NiAwaDE2MC4wNDRhNDAgNDAgMCAxIDAgNjMuOTU2IDBoMzIuMDIyYTggOCAwIDAgMCAwLTE2aC0zMjBhMTYuMDE5IDE2LjAxOSAwIDAgMSAtMTYtMTZ2LTE2YTE2LjAxOSAxNi4wMTkgMCAwIDEgMTYtMTZoMzA0YTggOCAwIDAgMCA3LjgzMi02LjM2OGw0MC0xOTJhOCA4IDAgMCAwIC03LjgzMi05LjYzMmgtMTkuMDU2bC0xNi42MzQtMzMuMjY4YTcuOTg1IDcuOTg1IDAgMCAwIDMuNjktNi43MzJ2LTE2YTI0LjAyNyAyNC4wMjcgMCAwIDAgLTI0LTI0aC0xNmEyNC4wMjcgMjQuMDI3IDAgMCAwIC0yNCAyNHYxNmE3Ljk4NSA3Ljk4NSAwIDAgMCAzLjY5IDYuNzMybC0xNi42MzQgMzMuMjY4aC0zLjA1NnYtMTA0YTggOCAwIDAgMCAtOC04aC0xMjhhOCA4IDAgMCAwIC04IDh2MzYuNzA3YTM0LjY2NCAzNC42NjQgMCAwIDAgLTM0LjMxMyA1LjMyNCA0NC45OTMgNDQuOTkzIDAgMCAwIC04MC4xNjQgMTguMjYxIDM0LjI4MyAzNC4yODMgMCAwIDAgLTIwLjY3MSA4LjRsLTkuMDY1LTM4LjUyNWE4IDggMCAwIDAgLTcuNzg3LTYuMTY3aC01NmE4IDggMCAwIDAgMCAxNnptMzc2IDMzNmEyNCAyNCAwIDEgMSAtMjQgMjQgMjQuMDI4IDI0LjAyOCAwIDAgMSAyNC0yNHptLTIyNCAwYTI0IDI0IDAgMSAxIC0yNCAyNCAyNC4wMjggMjQuMDI4IDAgMCAxIDI0LTI0em0tNjcuMDc2LTI1Nmg2MC4wMTRsNCAzMmgtNTYuNDg0em0xOS4wNzYgODEuMDcyLTcuNzgyLTMzLjA3Mmg1NC43Mmw0IDMyaC01MC45Mzh6bTExLjA0MiA0Ni45MjgtNy41My0zMmgzNS40MDdsLTI2LjY2NiAzMnptNDIuNzg0LTI0Ljg5NSAzLjExMiAyNC44OTVoLTIzLjg1N3ptLTMxLjQ5IDcyLjg5NS03LjUyOS0zMmg0NC4xMzFsNCAzMnptNDAuNzI2LTEyOGgxOC4xNjFsNS4zMzMgMzJoLTE5LjQ5NHptNiA0OGg1NS4yNjRsMS4zMzQgMzJoLTUyLjZ6bTI4LjM4Mi00OGgyNC44ODJsMS4zMzQgMzJoLTIwLjg4M3ptLTkuNDQ0IDEyOGgtOC45MzhsLTQtMzJoMTIuOTM4em0xNiAwdi0zMmgyMi4zMjZsMS4zMzQgMzJ6bTM0LjM0LTEyOGg3Ljg5NGwxMC42NjYgMzJoLTE3LjIyNnptMiA0OGgzNS42NmwtMzQuNTc5IDI1LjkzNXptNTEuOTg2IDgwaC00OC42NTJsLTEuMzM0LTMyaDUxLjMyem0yLTQ4aC0zNC4zMjZsMzUuNDM0LTI2LjU3NXptMi00OGgtMjIuNTZsLTEwLjY2Ni0zMmgzNC41NnptMi00OGgtNjAuNjUybC0xLjMzNC0zMmg2My4zMnptNTguNjEyIDE0NGgtMTYuMjQ0bDIuNjY3LTMyaDE3LjU3N3ptNi00OGgtMTguMjQ0bDIuNjY3LTMyaDE5LjU3N3ptMTAuMTI0IDQ4IDMuODc3LTMxLjAxOSAyNC44MTYgMzEuMDE5em00Mi4yNDEtOC42NzgtMTguNjU4LTIzLjMyMmgyMy41MTd6bTguMTk3LTM5LjMyMmgtNDQuNDM4bDQtMzJoNDcuMXptLTM4LjQzMy00OCAzLjYyNy0yOS4wMTIgMzQuODA2IDI5LjAxMnptNTAuNjUyLTEwLjY1Mi0yNS42MTktMjEuMzQ4aDMwLjA2NXptMTQuNDQzLTY5LjM0OC02LjY2MiAzMmgtNTIuNDM4bDQtMzJ6bS03MC4xNjItNzJhOC4wMDkgOC4wMDkgMCAwIDEgOC04aDE2YTguMDA5IDguMDA5IDAgMCAxIDggOHY4aC0zMnptNC45NDQgMjRoMjIuMTEybDE2IDMyaC01NC4xMTJ6bS0yMC45NDQgNDhoMTQuOTM4bC00IDMyaC0xMC45Mzh6bS01LjA0IDQ4aDEzLjk3OGwtNCAzMmgtNDcuMzEyem0tNDIuOTYtMTYwaDE2djk2aC0xNnptLS4zMjYgMTEyaDMyLjMyNnYzMmgtMzMuNjZ6bS0yIDQ4aDIwLjdsLTIxLjQ2NyAxOC40em0tMiA0OGgxOS42MzJsLTIuNjY3IDMyaC0xOC4zem0tMiA0OGgxNy42MzJsLTIuNjY3IDMyaC0xNi4zem0tODkuNjc0LTIxMS44di00NC4yaDgwdjk2aC04MHptLjU1OSA3My4zODEgMS4xMDEgMjYuNDE5aC0xOC43MTJ6bS0xNS41MDctNS41ODEtMjEuMzMzIDMyaC0yMi42NTdsLTQtMzJ6bS0xMjkuOTEzLTMzLjc5NWExOC4yMzcgMTguMjM3IDAgMCAxIDE2LjQtOS45NyAxOC44MDkgMTguODA5IDAgMCAxIDMuNy4zNjYgOCA4IDAgMCAwIDkuNTctNy45NTZsLS4wMTItLjQxYy4wMDMtMTUuNTY4IDEyLjkyMy0yOC4yMzUgMjguODAzLTI4LjIzNWEyOC44MzYgMjguODM2IDAgMCAxIDI3LjEzMyAxOC43NTUgOCA4IDAgMCAwIDE0LjU0NCAxLjA5MyAxOC41MTggMTguNTE4IDAgMCAxIDI4LjcyMy00LjU5MnY0OC43NDRoLTEyNi44NGwtMy42NzMtMTUuNjA4YTcuOTQ4IDcuOTQ4IDAgMCAwIDEuNjUyLTIuMTg3eiIvPjxjaXJjbGUgY3g9IjE3NiIgY3k9IjQ0MCIgcj0iOCIvPjxjaXJjbGUgY3g9IjQwMCIgY3k9IjQ0MCIgcj0iOCIvPjwvc3ZnPg==" />
                                                <span class="" style="color: black; margin-top: 10px">{{ Cart::getTotalQuantity() }}</span>
                                            @else
                                            <img style="width: 22px; margin: 10px 0 0 10px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iT3V0bGluZSIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIj48cGF0aCBkPSJNMTQ0LDMzNkg0NDhhOCw4LDAsMCwwLDcuODMyLTYuMzY4bDQwLTE5MkE4LDgsMCwwLDAsNDg4LDEyOEgxMDUuMTU5TDg3Ljc4Nyw1NC4xNjdBOCw4LDAsMCwwLDgwLDQ4SDI0YTgsOCwwLDAsMCwwLDE2SDczLjY2NGw2MC41OTMsMjU3LjUyMkEzMi4wNTMsMzIuMDUzLDAsMCwwLDExMiwzNTJ2MTZhMzIuMDM2LDMyLjAzNiwwLDAsMCwzMiwzMmguMDIyYTQwLDQwLDAsMSwwLDYzLjk1NiwwSDM2OC4wMjJhNDAsNDAsMCwxLDAsNjMuOTU2LDBINDY0YTgsOCwwLDAsMCwwLTE2SDE0NGExNi4wMTksMTYuMDE5LDAsMCwxLTE2LTE2VjM1MkExNi4wMTksMTYuMDE5LDAsMCwxLDE0NCwzMzZabTYuMzM2LTE2LTcuNTI5LTMyaDQ0LjEzMWw0LDMyaC00MC42Wk0zMjMuNjYsMjQwbC0xLjMzNCwzMkgyNjkuNjc0bC0xLjMzNC0zMlptLTU1Ljk4Ni0xNi0xLjMzNC0zMmg1OS4zMmwtMS4zMzQsMzJaTTI1My42NiwyNzJoLTUyLjZsLTQtMzJoNTUuMjY0Wm0uNjY2LDE2LDEuMzM0LDMyaC00OC42bC00LTMyWm0xNi4wMTQsMGg1MS4zMmwtMS4zMzQsMzJIMjcxLjY3NFptNjcuMzM0LDBoNTEuMjY0bC00LDMyaC00OC42Wm0uNjY2LTE2LDEuMzM0LTMyaDU1LjI2NGwtNCwzMlptNzIuNzIyLTMyaDQ3LjFMNDUxLjUsMjcySDQwNy4wNjJabTItMTYsNC0zMmg1MS4xTDQ2MS41LDIyNFptLTE2LjEyNCwwaC01Ni42bDEuMzM0LTMyaDU5LjI2NFptLTU0LjYtNDgsMS4zMzQtMzJoNjMuMjY0bC00LDMyWm0tMTYuMDE0LDBIMjY1LjY3NGwtMS4zMzQtMzJoNjMuMzJabS03Ni42NjYsMGgtNjAuNmwtNC0zMmg2My4yNjRabS42NjYsMTYsMS4zMzQsMzJoLTU2LjZsLTQtMzJabS03MS4zODgsMzJoLTUxLjE5bC03LjUyOS0zMmg1NC43MTlabTIsMTYsNCwzMmgtNDUuOWwtNy41MjktMzJaTTQ0MS41LDMyMEg0MDEuMDYybDQtMzJoNDMuMVptMzAtMTQ0SDQxOS4wNjJsNC0zMmg1NS4xWk0xNjguOTM4LDE0NGw0LDMySDExNi40NTRsLTcuNTI5LTMyWk0yMDAsNDI0YTI0LDI0LDAsMSwxLTI0LTI0QTI0LjAyOCwyNC4wMjgsMCwwLDEsMjAwLDQyNFptMjI0LDBhMjQsMjQsMCwxLDEtMjQtMjRBMjQuMDI4LDI0LjAyOCwwLDAsMSw0MjQsNDI0WiIvPjxjaXJjbGUgY3g9IjE3NiIgY3k9IjQyNCIgcj0iOCIvPjxjaXJjbGUgY3g9IjQwMCIgY3k9IjQyNCIgcj0iOCIvPjwvc3ZnPgo=" />
                                            @endif
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="filter-menu">
                                        <ul class="button-group sort-button-group" style="margin: 30px 0 -80px 0;">
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}"><li class="button active" data-category="all">Todos<span>{{ $cantidad }}</span></li></a>
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/Desayuno"><li class="button active" data-category="cat-1">Desayunos</li></a>
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/Pescados"><li class="button active" data-category="cat-2">Pescados</li></a>
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/Carnes"><li class="button active" data-category="cat-3">Carnes</li></a>
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/Postres"><li class="button active" data-category="cat-4">Postres</li></a>
                                            <a href="/fooding/restaurante/{{ $restaurante_id }}/Bebidas"><li class="button active" data-category="cat-5">Bebidas</li></a>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @foreach ($platos as $plato)
                                <div style="margin-left: 7%; width: 100%;">
                                    <div class="row featured isotope">
                                        @if ($restaurante_id == $plato->restaurante_id)
                                            <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item"
                                                style="width: 20%; float: left; margin-left: 15px;">
                                                <div class="product-item">
                                                    <img src="{{ url('storage/img/platos', [$plato->foto]) }}"
                                                        class="img-responsive" width="300" alt=""
                                                        style="margin-bottom: 90px; height: 220px;">
                                                    <div class="product-hover">
                                                        <div class="product-meta">
                                                            <form action="{{ $restaurante_id }}/pedido/cart-add" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="producto_id" value={{ $plato->id }}>
                                                                <img style="width: 20px; position: absolute; left:65px; margin-top: 5px"
                                                                    src="data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIC0xNiA1MTIuMDAwMTggNTEyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zOTYgNDQwYzUuNTE5NTMxIDAgMTAtNC40ODA0NjkgMTAtMTBzLTQuNDgwNDY5LTEwLTEwLTEwLTEwIDQuNDgwNDY5LTEwIDEwIDQuNDgwNDY5IDEwIDEwIDEwem0wIDAiLz48cGF0aCBkPSJtMjMwIDQ0MGM1LjUxOTUzMSAwIDEwLTQuNDgwNDY5IDEwLTEwcy00LjQ4MDQ2OS0xMC0xMC0xMC0xMCA0LjQ4MDQ2OS0xMCAxMCA0LjQ4MDQ2OSAxMCAxMCAxMHptMCAwIi8+PHBhdGggZD0ibTUwOS44ODI4MTIgMTIzLjg0NzY1NmMtMS44OTQ1MzEtMi40Mjk2ODctNC44MDQ2ODctMy44NDc2NTYtNy44ODI4MTItMy44NDc2NTZoLTM2MC4wMDM5MDZsLTIyLjc5Mjk2OS05Ni44NzVjLTMuMjEwOTM3LTEzLjYxNzE4OC0xNS4yMjI2NTYtMjMuMTI1LTI5LjIwMzEyNS0yMy4xMjVoLTYwYy0xNi41NDI5NjkgMC0zMCAxMy40NTcwMzEtMzAgMzBzMTMuNDU3MDMxIDMwIDMwIDMwaDM2LjIzODI4MWw3NC41NTg1OTQgMzE2Ljg3NWMzLjIxMDkzNyAxMy42MTcxODggMTUuMjIyNjU2IDIzLjEyNSAyOS4yMDMxMjUgMjMuMTI1aDIwLjAyNzM0NGMtNi4yOTI5NjkgOC4zNjMyODEtMTAuMDI3MzQ0IDE4Ljc1MzkwNi0xMC4wMjczNDQgMzAgMCAyNy41NzAzMTIgMjIuNDI5Njg4IDUwIDUwIDUwczUwLTIyLjQyOTY4OCA1MC01MGMwLTExLjI0NjA5NC0zLjczNDM3NS0yMS42MzY3MTktMTAuMDI3MzQ0LTMwaDg2LjA1NDY4OGMtNi4yOTI5NjkgOC4zNjMyODEtMTAuMDI3MzQ0IDE4Ljc1MzkwNi0xMC4wMjczNDQgMzAgMCAyNy41NzAzMTIgMjIuNDI5Njg4IDUwIDUwIDUwczUwLTIyLjQyOTY4OCA1MC01MGMwLTExLjI0NjA5NC0zLjczNDM3NS0yMS42MzY3MTktMTAuMDI3MzQ0LTMwaC4wMjczNDRjMTYuNTQyOTY5IDAgMzAtMTMuNDU3MDMxIDMwLTMwcy0xMy40NTcwMzEtMzAtMzAtMzBoLTI0Mi4yMzgyODFsLTkuNDE0MDYzLTQwaDU4LjYyMTA5NC4wMTk1MzEuMDE1NjI1IDE0NS45OTIxODguMDE5NTMxLjAxOTUzMSA1Ny4zNDc2NTZjMTMuNzg1MTU3IDAgMjUuNzU3ODEzLTkuMzQzNzUgMjkuMTA5Mzc2LTIyLjcyNjU2MmwzNi4yMTA5MzctMTQ0Ljg0NzY1N2MuNzQ2MDk0LTIuOTg4MjgxLjA3NDIxOS02LjE1MjM0My0xLjgyMDMxMy04LjU3ODEyNXptLTM1LjY5MTQwNiA3Ni4xNTIzNDRoLTYzLjg2MzI4MWw3LjUtNjBoNzEuMzYzMjgxem0tMTE4LjE5MTQwNiAyMGgzMS42NzE4NzVsLTcuNSA2MGgtNTQuMTcxODc1di0zMGMwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwcy0xMCA0LjQ3NjU2Mi0xMCAxMHYzMGgtNTQuMTcxODc1bC03LjUtNjBoMzEuNjcxODc1YzUuNTIzNDM4IDAgMTAtNC40NzY1NjIgMTAtMTBzLTQuNDc2NTYyLTEwLTEwLTEwaC0zNC4xNzE4NzVsLTcuNS02MGg3MS42NzE4NzV2MzBjMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMHMxMC00LjQ3NjU2MiAxMC0xMHYtMzBoNzEuNjcxODc1bC03LjUgNjBoLTM0LjE3MTg3NWMtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHM0LjQ3NjU2MiAxMCAxMCAxMHptLTE3Ni4zNTkzNzUgNjAtMTQuMTE3MTg3LTYwaDU4LjY0ODQzN2w3LjUgNjB6bTM0LjUzMTI1LTE0MCA3LjUgNjBoLTYwLjg1NTQ2OWwtMTQuMTEzMjgxLTYwem00NS44MjgxMjUgMjkwYzAgMTYuNTQyOTY5LTEzLjQ1NzAzMSAzMC0zMCAzMHMtMzAtMTMuNDU3MDMxLTMwLTMwIDEzLjQ1NzAzMS0zMCAzMC0zMCAzMCAxMy40NTcwMzEgMzAgMzB6bTE2NiAwYzAgMTYuNTQyOTY5LTEzLjQ1NzAzMSAzMC0zMCAzMHMtMzAtMTMuNDU3MDMxLTMwLTMwIDEzLjQ1NzAzMS0zMCAzMC0zMCAzMCAxMy40NTcwMzEgMzAgMzB6bTEwLTcwYzUuNTE1NjI1IDAgMTAgNC40ODQzNzUgMTAgMTBzLTQuNDg0Mzc1IDEwLTEwIDEwaC0yNjZjLTQuNjYwMTU2IDAtOC42NjQwNjItMy4xNzE4NzUtOS43MzQzNzUtNy43MTA5MzhsLTc4LjE4NzUtMzMyLjI4OTA2MmgtNTIuMDc4MTI1Yy01LjUxNTYyNSAwLTEwLTQuNDg0Mzc1LTEwLTEwczQuNDg0Mzc1LTEwIDEwLTEwaDYwYzQuNjYwMTU2IDAgOC42NjQwNjIgMy4xNzE4NzUgOS43MzQzNzUgNy43MTA5MzhsNjIuMTg3NSAyNjQuMjkyOTY4Yy4wMDM5MDYuMDE1NjI1LjAwNzgxMy4wMzEyNS4wMTE3MTkuMDUwNzgybDE1Ljk4ODI4MSA2Ny45NDUzMTJ6bTIwLjA4OTg0NC04Ny41ODIwMzFjLTEuMTE3MTg4IDQuNDY0ODQzLTUuMTA5Mzc1IDcuNTgyMDMxLTkuNzEwOTM4IDcuNTgyMDMxaC00Ni4wNTA3ODFsNy41LTYwaDYxLjM2NzE4N3ptMCAwIi8+PHBhdGggZD0ibTMxNiAyMDBjLTUuNTE5NTMxIDAtMTAgNC40ODA0NjktMTAgMTBzNC40ODA0NjkgMTAgMTAgMTAgMTAtNC40ODA0NjkgMTAtMTAtNC40ODA0NjktMTAtMTAtMTB6bTAgMCIvPjwvc3ZnPg==" />
                                                                <input type="submit" value='ADD TO CART' id="carro"
                                                                    style="padding: 5px 10px 5px 30px;">
                                                                </form>
                                                        </div>
                                                    </div>
                                                    <div class="product-title" style="height: 100px;>
                                                    <a href=" #">
                                                        <h3 style="margin-top: 20px">{{ $plato->nombre }}</h3>
                                                        <strong>
                                                            <p
                                                                style="position: absolute; bottom: 5px; left:15px; color: red">
                                                                <label style="color: white">Categoria:
                                                                </label>{{ $plato->categoria }}
                                                            </p>
                                                        </strong>
                                                        <span
                                                            style="position: absolute; right: 0; bottom: 0">{{ $plato->precio }}
                                                            €</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </body>

    </html>
