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
                                    <a href="/dashboard"><h1>Restaurantes</h1></a>
                                    {{-- <form action="/logout" method="POST">
                                        <button type="submit"><img style="position: absolute; right: 20px; top:-80px" width="3%" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyLjAwNTMzIDUxMiIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMjAgMjc3LjMzNTkzOGMtMTEuNzk2ODc1IDAtMjEuMzMyMDMxIDkuNTU4NTkzLTIxLjMzMjAzMSAyMS4zMzIwMzF2ODUuMzM1OTM3YzAgMTEuNzUzOTA2LTkuNTU4NTk0IDIxLjMzMjAzMi0yMS4zMzU5MzggMjEuMzMyMDMyaC02NHYtMzIwYzAtMTguMjE4NzUtMTEuNjA1NDY5LTM0LjQ5NjA5NC0yOS4wNTQ2ODctNDAuNTU0Njg4bC02LjMxNjQwNi0yLjExMzI4MWg5OS4zNzEwOTNjMTEuNzc3MzQ0IDAgMjEuMzM1OTM4IDkuNTc4MTI1IDIxLjMzNTkzOCAyMS4zMzU5Mzd2NjRjMCAxMS43NzM0MzggOS41MzUxNTYgMjEuMzMyMDMyIDIxLjMzMjAzMSAyMS4zMzIwMzJzMjEuMzMyMDMxLTkuNTU4NTk0IDIxLjMzMjAzMS0yMS4zMzIwMzJ2LTY0YzAtMzUuMjg1MTU2LTI4LjcxNDg0My02My45OTk5OTk3NS02NC02My45OTk5OTk3NWgtMjI5LjMzMjAzMWMtLjgxMjUgMC0xLjQ5MjE4OC4zNjMyODE3NS0yLjI4MTI1LjQ2ODc0OTc1LTEuMDI3MzQ0LS4wODU5MzctMi4wMDc4MTItLjQ2ODc0OTc1LTMuMDUwNzgxLS40Njg3NDk3NS0yMy41MzEyNSAwLTQyLjY2Nzk2OSAxOS4xMzI4MTI3NS00Mi42Njc5NjkgNDIuNjY0MDYyNzV2Mzg0YzAgMTguMjE4NzUgMTEuNjA1NDY5IDM0LjQ5NjA5MyAyOS4wNTQ2ODggNDAuNTU0Njg3bDEyOC4zODY3MTggNDIuNzk2ODc1YzQuMzUxNTYzIDEuMzQzNzUgOC42Nzk2ODggMS45ODQzNzUgMTMuMjI2NTYzIDEuOTg0Mzc1IDIzLjUzMTI1IDAgNDIuNjY0MDYyLTE5LjEzNjcxOCA0Mi42NjQwNjItNDIuNjY3OTY4di0yMS4zMzIwMzJoNjRjMzUuMjg1MTU3IDAgNjQtMjguNzE0ODQ0IDY0LTY0di04NS4zMzU5MzdjMC0xMS43NzM0MzgtOS41MzUxNTYtMjEuMzMyMDMxLTIxLjMzMjAzMS0yMS4zMzIwMzF6bTAgMCIvPjxwYXRoIGQ9Im01MDUuNzUgMTk4LjI1MzkwNi04NS4zMzU5MzgtODUuMzMyMDMxYy02LjA5NzY1Ni02LjEwMTU2My0xNS4yNzM0MzctNy45Mzc1LTIzLjI1LTQuNjMyODEzLTcuOTU3MDMxIDMuMzA4NTk0LTEzLjE2NDA2MiAxMS4wOTM3NS0xMy4xNjQwNjIgMTkuNzE0ODQ0djY0aC04NS4zMzIwMzFjLTExLjc3NzM0NCAwLTIxLjMzNTkzOCA5LjU1NDY4OC0yMS4zMzU5MzggMjEuMzMyMDMyIDAgMTEuNzc3MzQzIDkuNTU4NTk0IDIxLjMzMjAzMSAyMS4zMzU5MzggMjEuMzMyMDMxaDg1LjMzMjAzMXY2NGMwIDguNjIxMDkzIDUuMjA3MDMxIDE2LjQwNjI1IDEzLjE2NDA2MiAxOS43MTQ4NDMgNy45NzY1NjMgMy4zMDQ2ODggMTcuMTUyMzQ0IDEuNDY4NzUgMjMuMjUtNC42Mjg5MDZsODUuMzM1OTM4LTg1LjMzNTkzN2M4LjMzOTg0NC04LjMzOTg0NCA4LjMzOTg0NC0yMS44MjQyMTkgMC0zMC4xNjQwNjN6bTAgMCIvPjwvc3ZnPg==" /></button>
                                    </form> --}}
                                    <form action="#" style="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
                                        @csrf
                                        <div class="relative text-gray-600" style="position: absolute; right: 80px;">
                                            <input type="search" name="search" placeholder="Search: Nombre"
                                                class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                            <button style="width: 10%; height: 30px;" type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                                <img style="width: 50%" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGhlaWdodD0iMTM2cHQiIHZlcnNpb249IjEuMSIgdmlld0JveD0iLTEgMCAxMzYgMTM2LjIxODUyIiB3aWR0aD0iMTM2cHQiPgo8ZyBpZD0ic3VyZmFjZTEiPgo8cGF0aCBkPSJNIDkzLjE0ODQzOCA4MC44MzIwMzEgQyAxMDkuNSA1Ny43NDIxODggMTA0LjAzMTI1IDI1Ljc2OTUzMSA4MC45NDE0MDYgOS40MjE4NzUgQyA1Ny44NTE1NjIgLTYuOTI1NzgxIDI1Ljg3ODkwNiAtMS40NjA5MzggOS41MzEyNSAyMS42MzI4MTIgQyAtNi44MTY0MDYgNDQuNzIyNjU2IC0xLjM1MTU2MiA3Ni42OTE0MDYgMjEuNzQyMTg4IDkzLjAzOTA2MiBDIDM4LjIyMjY1NiAxMDQuNzA3MDMxIDYwLjAxMTcxOSAxMDUuNjA1NDY5IDc3LjM5NDUzMSA5NS4zMzk4NDQgTCAxMTUuMTY0MDYyIDEzMi44ODI4MTIgQyAxMTkuMjQyMTg4IDEzNy4xNzU3ODEgMTI2LjAyNzM0NCAxMzcuMzQ3NjU2IDEzMC4zMjAzMTIgMTMzLjI2OTUzMSBDIDEzNC42MTMyODEgMTI5LjE5NTMxMiAxMzQuNzg1MTU2IDEyMi40MTAxNTYgMTMwLjcxMDkzOCAxMTguMTE3MTg4IEMgMTMwLjU4MjAzMSAxMTcuOTgwNDY5IDEzMC40NTcwMzEgMTE3Ljg1NTQ2OSAxMzAuMzIwMzEyIDExNy43MjY1NjIgWiBNIDUxLjMwODU5NCA4NC4zMzIwMzEgQyAzMy4wNjI1IDg0LjMzNTkzOCAxOC4yNjk1MzEgNjkuNTU0Njg4IDE4LjI1NzgxMiA1MS4zMDg1OTQgQyAxOC4yNTM5MDYgMzMuMDYyNSAzMy4wMzUxNTYgMTguMjY5NTMxIDUxLjI4NTE1NiAxOC4yNjE3MTkgQyA2OS41MDc4MTIgMTguMjUzOTA2IDg0LjI5Mjk2OSAzMy4wMTE3MTkgODQuMzI4MTI1IDUxLjIzNDM3NSBDIDg0LjM1OTM3NSA2OS40ODQzNzUgNjkuNTg1OTM4IDg0LjMwMDc4MSA1MS4zMzIwMzEgODQuMzMyMDMxIEMgNTEuMzI0MjE5IDg0LjMzMjAzMSA1MS4zMjAzMTIgODQuMzMyMDMxIDUxLjMwODU5NCA4NC4zMzIwMzEgWiBNIDUxLjMwODU5NCA4NC4zMzIwMzEgIiBzdHlsZT0iIHN0cm9rZTpub25lO2ZpbGwtcnVsZTpub256ZXJvO2ZpbGw6cmdiKDAlLDAlLDAlKTtmaWxsLW9wYWNpdHk6MTsiIC8+CjwvZz4KPC9zdmc+" />
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div style="margin-left: 12%; width: 90%;">
                            <div class="row featured isotope">
                                @foreach ($restaurantes as $restaurante)
                                    <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item"
                                        style="width: 20%; float: left; margin-left: 10px">
                                        <div class="product-item">
                                            <img src="{{ url('storage/img/restaurantes', [$restaurante->foto]) }}" class="img-responsive" width="255"
                                                alt="" style="margin-bottom: 90px; height: 200px;">
                                            <div class="product-hover">
                                                <div class="product-meta">
                                                    <a href="restaurantes/{{$restaurante->id}}/acercade"><img style="width: 20px" src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTUwOS43OTYgMzI2Ljg3NGMtNDQuODU3LTg3LjQ2NS0xNDIuNDgzLTE2Ni44NzQtMjUzLjc5Ni0xNjYuODc0LTExMi4wOTQgMC0yMDkuNDM2IDgwLjM3Ny0yNTMuNzk2IDE2Ni44NzQtMi45MzggNS43MjktMi45MzggMTIuNTIzIDAgMTguMjUzIDQ0Ljg1NyA4Ny40NjQgMTQyLjQ4MyAxNjYuODczIDI1My43OTYgMTY2Ljg3MyAxMjYuMDQgMCAyMTguOTQ3LTk4LjkyMiAyNTMuNzk2LTE2Ni44NzQgMi45MzgtNS43MjkgMi45MzgtMTIuNTIzIDAtMTguMjUyem0tMjUzLjc5NiAxNDUuMTI2Yy05MC43NzYgMC0xNjYuOTc0LTYwLjMwNy0yMTIuOTU2LTEzNiA0NS40NzMtNzQuODU1IDEyMS40MjgtMTM2IDIxMi45NTYtMTM2IDkxLjEzNyAwIDE2Ny4yMzIgNjAuNzM1IDIxMi45NTYgMTM2LTQ2LjE5NCA3Ni4wMzgtMTIyLjY5NyAxMzYtMjEyLjk1NiAxMzZ6bS0yNDkuNjk3LTM2MC44MjhjNy4zOS04LjIwOSAyMC4wMzctOC44NzEgMjguMjQ2LTEuNDhsNDQuNTQ0IDQwLjEwN2M4LjIwOCA3LjM5MiA4Ljg3MSAyMC4wMzcgMS40OCAyOC4yNDYtNy4zOTEgOC4yMS0yMC4wMzggOC44Ny0yOC4yNDYgMS40OGwtNDQuNTQ0LTQwLjEwOGMtOC4yMDgtNy4zOS04Ljg3MS0yMC4wMzYtMS40OC0yOC4yNDV6bTIyOS42OTctMTEuMTcydi04MGMwLTExLjA0NSA4Ljk1NC0yMCAyMC0yMHMyMCA4Ljk1NSAyMCAyMHY4MGMwIDExLjA0NS04Ljk1NCAyMC0yMCAyMHMtMjAtOC45NTUtMjAtMjB6bS0xMjYuOC00NC41NDVjLTQuNDkzLTEwLjA5MS4wNDUtMjEuOTEzIDEwLjEzNi0yNi40MDYgMTAuMDkyLTQuNDkzIDIxLjkxMy4wNDUgMjYuNDA2IDEwLjEzNmwzMC41ODcgNjguN2M0LjQ5MyAxMC4wOS0uMDQ1IDIxLjkxMy0xMC4xMzYgMjYuNDA2LTEwLjA2MiA0LjQ3OS0yMS44OTgtLjAxNC0yNi40MDYtMTAuMTM2em0zMjIuMjI3IDEyMi41OWMtNy4zOTEtOC4yMDgtNi43MjktMjAuODU0IDEuNDgtMjguMjQ2bDQ0LjU0NC00MC4xMDdjOC4yMDgtNy4zOTEgMjAuODU1LTYuNzI5IDI4LjI0NiAxLjQ4IDcuMzkxIDguMjA4IDYuNzI5IDIwLjg1NC0xLjQ4IDI4LjI0NWwtNDQuNTQ0IDQwLjEwOGMtOC4yMTEgNy4zOTItMjAuODU2IDYuNzI3LTI4LjI0Ni0xLjQ4em0tOTUuNzU3LTcwLjE2IDMwLjU4Ny02OC43YzQuNDkzLTEwLjA5MSAxNi4zMTUtMTQuNjI5IDI2LjQwNi0xMC4xMzZzMTQuNjI5IDE2LjMxNSAxMC4xMzYgMjYuNDA2bC0zMC41ODcgNjguNjk5Yy00LjUxMyAxMC4xMzctMTYuMzYgMTQuNjA5LTI2LjQwNiAxMC4xMzctMTAuMDktNC40OTMtMTQuNjI4LTE2LjMxNS0xMC4xMzYtMjYuNDA2em0tNzkuNjcgMTI5Ljg2NWMtNTQuMTc1IDAtOTguMjUgNDQuMDc1LTk4LjI1IDk4LjI1czQ0LjA3NSA5OC4yNSA5OC4yNSA5OC4yNSA5OC4yNS00NC4wNzUgOTguMjUtOTguMjUtNDQuMDc1LTk4LjI1LTk4LjI1LTk4LjI1em0wIDE1Ni41Yy0zMi4xMTkgMC01OC4yNS0yNi4xMzEtNTguMjUtNTguMjVzMjYuMTMxLTU4LjI1IDU4LjI1LTU4LjI1IDU4LjI1IDI2LjEzMSA1OC4yNSA1OC4yNS0yNi4xMzEgNTguMjUtNTguMjUgNTguMjV6Ii8+PC9nPjwvc3ZnPg==" /></a>
                                                    <a href="/fooding/restaurante/{{$restaurante->id}}"><i class="pe-7s-cart"></i>Ver Carta</a>
                                                </div>
                                            </div>
                                            <div class="product-title" style="height: 100px;">
                                                <a href="#">
                                                    <h3>{{ $restaurante->nombre }}</h3>
                                                </a>
                                                <br />
                                                <strong>
                                                <p style="position: absolute; bottom: 22px; left:15px; color: red">
                                                    <label style="color: white">City: </label>{{ $restaurante->ciudad }}</p>
                                                <p style="position: absolute; bottom: 5px; left:15px; color: red">
                                                    <label style="color: white">Telf: </label>{{ $restaurante->telefono }}</p>
                                                </strong>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
