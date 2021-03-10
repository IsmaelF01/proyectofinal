<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Restaurantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-gray-900 bg-gray-200">
                    <div class="p-4 flex">
                        <h1 class="text-3xl">
                            Restaurante
                        </h1>
                        <form action="/intranet/restaurante">
                            @csrf
                            <div class="relative text-gray-600" style="position: absolute; right: 80px;">
                                <input type="search" name="search" placeholder="Search: Nombre"
                                    class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none">
                                <button type="submit" class="absolute right-0 top-0 mt-3 mr-4">
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                                        viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;"
                                        xml:space="preserve" width="512px" height="512px">
                                        <path
                                            d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="px-3 py-4 flex justify-center">
                        @if ($restaurantes->count() == 0)
                            <div class="m-3">
                                <button onclick="document.getElementById('myModal').showModal()"
                                    class="bg-white text-gray-800 font-bold rounded border-b-2 border-blue-500 hover:border-blue-600 hover:bg-blue-500 hover:text-white shadow-md py-2 px-6 inline-flex">
                                    <span class="mr-2">New Restaurant</span>
                                    <svg class="fill-current w-4 h-4 mr-2" version="1.1" id="Open_book"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20"
                                        xml:space="preserve">
                                        <path
                                            d="M10.595,5.196l0.446,1.371c0.369-0.316,0.835-0.599,1.441-0.795c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323 c-0.476,0.069-1.001,0.18-1.58,0.368C11.476,4.643,10.999,4.905,10.595,5.196z M11.522,8.051l0.446,1.371 c0.369-0.316,0.835-0.599,1.441-0.795c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323c-0.476,0.069-1.001,0.18-1.58,0.368 C12.403,7.497,11.927,7.759,11.522,8.051z M12.45,10.905l0.446,1.371c0.369-0.316,0.835-0.599,1.441-0.795 c0.59-0.192,1.111-0.3,1.582-0.362l-0.43-1.323c-0.476,0.069-1.001,0.18-1.58,0.368C13.33,10.351,12.854,10.614,12.45,10.905z M5.388,13.077l0.43,1.323c0.417-0.226,0.902-0.445,1.492-0.636c0.606-0.197,1.149-0.242,1.633-0.203l-0.446-1.371 c-0.499,0.002-1.038,0.07-1.615,0.257C6.303,12.635,5.813,12.853,5.388,13.077z M3.533,7.368l0.43,1.323 C4.38,8.465,4.865,8.247,5.455,8.055c0.606-0.197,1.149-0.242,1.633-0.203L6.643,6.48C6.144,6.483,5.605,6.55,5.027,6.738 C4.448,6.926,3.958,7.144,3.533,7.368z M4.46,10.223l0.43,1.323c0.417-0.226,0.902-0.445,1.492-0.636 c0.606-0.197,1.149-0.242,1.633-0.203L7.57,9.335c-0.499,0.002-1.038,0.07-1.615,0.257C5.376,9.78,4.885,9.999,4.46,10.223z M11.064,1.41C9.341,1.97,8.441,3.162,8.011,3.969c-0.822-0.4-2.25-0.835-3.973-0.275c-2.523,0.82-3.969,2.627-3.969,2.627 l4.095,12.587c0.126,0.387,0.646,0.477,0.878,0.143c0.499-0.719,1.46-1.658,3.257-2.242c1.718-0.558,2.969,0.054,3.655,0.578 c0.272,0.208,0.662,0.06,0.762-0.268c0.252-0.827,0.907-2.04,2.61-2.593c1.799-0.585,3.129-0.389,3.956-0.1 c0.385,0.134,0.75-0.242,0.625-0.629L15.819,1.203C15.819,1.203,13.587,0.591,11.064,1.41z M10.951,15.256 c-0.819-0.244-1.901-0.358-3.141,0.044c-1.251,0.406-2.127,0.949-2.699,1.404L1.866,6.722C2.224,6.364,3.053,5.68,4.528,5.201 c1.389-0.451,2.528-0.065,3.279,0.378L10.951,15.256z M17.845,12.567c-0.731-0.032-1.759,0.044-3.01,0.451 c-1.24,0.403-2.048,1.132-2.567,1.81L9.124,5.151c0.346-0.8,1.04-1.782,2.43-2.233c1.474-0.479,2.547-0.413,3.047-0.334 L17.845,12.567z" />
                                    </svg>
                                </button>
                            </div>
                            <dialog id="myModal" class="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">

                                <div class="flex flex-col w-full h-auto ">
                                    <!-- Header -->
                                    <div class="flex w-full h-auto justify-center items-center">
                                        <div
                                            class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                                            <img src="/img/logo.png" alt="" width="20%" style="margin-left: 50px">

                                        </div>
                                        <div onclick="document.getElementById('myModal').close();"
                                            class="flex w-1/12 h-auto justify-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                        <!--Header End-->
                                    </div>
                                    <!-- Modal Content-->
                                    <div
                                        class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                                        <div class=" flex items-center justify-center">

                                            <form action="/intranet/restaurante" method="POST" id="form"
                                                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                                                <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">
                                                    QUESTIONNAIRE TO ADD A RESTAURANT</h1>
                                                @csrf
                                                <br>
                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Nombre
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="nombre" id="nombre" type="text"
                                                        placeholder="Ingresa tu nombre" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Dirección
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="direccion" id="direccion" type="text"
                                                        placeholder="Ingresa tu dirección" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Ciudad
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="ciudad" id="ciudad" type="text"
                                                        placeholder="Ingresa tu ciudad" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Telefono
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="telefono" id="telefono" type="text"
                                                        placeholder="Ingresa tu telefono" required>
                                                </div>

                                                <div class="mb-4">

                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Latitud
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="latitud" id="latitud" type="text"
                                                        placeholder="Ingresa tu latitud" required>
                                                </div>

                                                <div class="mb-4">

                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Longitud
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="longitud" id="longitud" type="text"
                                                        placeholder="Ingresa tu longitud" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Foto
                                                    </label>
                                                    <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="foto" id="foto" required>
                                                </div>


                                                <div class="flex items-right justify-between">
                                                    <button id="submit"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                        type="submit">
                                                        Create <img src="/img/mas.svg" alt=""
                                                            style="float: right; margin-left: 5px">
                                                    </button>
                                                </div>

                                                <div class="mb-4">


                                            </form>

                                        </div>
                                        <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous">
                                        </script>
                                        <script src="assets/js/helpers.js"></script>
                                    </div>
                                    <!-- End of Modal Content-->



                                </div>
                            </dialog>
                        @else
                            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                                <tbody>
                                    <tr class="border-b">
                                        <th class="text-left p-3 px-5">Nombre</th>
                                        <th class="text-left p-3 px-5">Direccion</th>
                                        <th class="text-left p-3 px-5">Ciudad</th>
                                        <th class="text-left p-3 px-5">Telefono</th>
                                        <th class="text-left p-3 px-5">Foto</th>
                                        <th></th>
                                    </tr>
                                    @foreach ($restaurantes as $restaurante)
                                        <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                            <td class="p-3 px-5" style="width: 200px">{{ $restaurante->nombre }}</td>
                                            <td class="p-3 px-5" style="width: 200px">{{ $restaurante->direccion }}</td>
                                            <td class="p-3 px-5" style="width: 160px">{{ $restaurante->ciudad }}</td>
                                            <td class="p-3 px-5" style="width: 160px">{{ $restaurante->telefono }}</td>
                                            <td class="p-3 px-5" style="width: 250px"><a href="restaurante/{{$restaurante->id}}"><img src=" {{ url('storage/img/restaurantes', [$restaurante->foto]) }}" alt=".." width="60%" style="height: 70px"></td></a>
                                            <td class="p-3 px-5 flex justify-end">
                                                <div style="margin-top: 20px">
                                                <a href="/intranet/restaurante/{{ $restaurante->id }}/pedido">
                                                <button style=" margin-left: -85px; margin-right: 10px" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                                    Orders
                                                    <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgd2lkdGg9IjUxMiIgaGVpZ2h0PSI1MTIiPjx0aXRsZT5Db21tZXJjaWFsIGRlbGl2ZXJ5IDwvdGl0bGU+PHBhdGggZD0iTTQ3Mi45MTYsMjI0SDQ0OC4wMDdhMjQuNTM0LDI0LjUzNCwwLDAsMC0yMy40MTctMThIMzk4VjE0MC45NzZhNi44Niw2Ljg2LDAsMCwwLTMuMzQ2LTYuMDYyTDIwNy4wNzcsMjYuNTcyYTYuOTI3LDYuOTI3LDAsMCwwLTYuOTYyLDBMMTIuNDgsMTM0LjkxNEE2Ljk4MSw2Ljk4MSwwLDAsMCw5LDE0MC45NzZWMzU3LjY2MWE3LDcsMCwwLDAsMy41LDYuMDYyTDIwMC4xNTQsNDcyLjA2NWE3LDcsMCwwLDAsMy41LjkzOCw3LjM2MSw3LjM2MSwwLDAsMCwzLjYtLjkzOEwzMDYsNDE1LjEwOHY0MS4xNzRBMjkuNjQyLDI5LjY0MiwwLDAsMCwzMzUuODkxLDQ4Nkg0NzIuOTE2QTI5LjgwNywyOS44MDcsMCwwLDAsNTAzLDQ1Ni4yODJ2LTIwMi4xQTMwLjIsMzAuMiwwLDAsMCw0NzIuOTE2LDIyNFptLTQ4LjA3Ny00QTEwLjE2MSwxMC4xNjEsMCwwLDEsNDM1LDIzMC4xNjF2LjY3OEExMC4xNjEsMTAuMTYxLDAsMCwxLDQyNC44MzksMjQxSDM4NC4xNjFBMTAuMTYxLDEwLjE2MSwwLDAsMSwzNzQsMjMwLjgzOXYtLjY3OEExMC4xNjEsMTAuMTYxLDAsMCwxLDM4NC4xNjEsMjIwWk0yMDMuNjU0LDQwLjcxN2w3Ny45NzQsNDUuMDE4TDEwNy45ODYsMTg1Ljk4NywzMC4wMTMsMTQwLjk2OVpNMTk3LDQ1My44NzgsMjMsMzUzLjYxOVYxNTMuMDg1TDE5NywyNTMuMzQ0Wm02LjY1NC0yMTIuNjU4LTgxLjY2OC00Ny4xNTFMMjk1LjYyOCw5My44MTgsMzc3LjMsMTQwLjk2OVpNMzA2LDI1NC4xODJWMzk4Ljk0M2wtOTUsNTQuOTM1VjI1My4zNDRMMzg0LDE1My4wODVWMjA2aC4yMTdBMjQuNTMzLDI0LjUzMywwLDAsMCwzNjAuOCwyMjRIMzM1Ljg5MUEzMC4wMzcsMzAuMDM3LDAsMCwwLDMwNiwyNTQuMTgyWm0xODMsMjAyLjFBMTUuNzkzLDE1Ljc5MywwLDAsMSw0NzIuOTE2LDQ3MkgzMzUuODkxQTE1LjYyOCwxNS42MjgsMCwwLDEsMzIwLDQ1Ni4yODJ2LTIwMi4xQTE2LjAyMiwxNi4wMjIsMCwwLDEsMzM1Ljg5MSwyMzhoMjUuMTgyYTIzLjk0NCwyMy45NDQsMCwwLDAsMjMuMTQ0LDE3SDQyNC41OWEyMy45NDIsMjMuOTQyLDAsMCwwLDIzLjE0My0xN2gyNS4xODNBMTYuMTg2LDE2LjE4NiwwLDAsMSw0ODksMjU0LjE4MloiLz48cGF0aCBkPSJNMzQzLjk0OSwzMjVoNy4zMjdhNyw3LDAsMSwwLDAtMTRIMzUxVjI5MmgxOS4zMDdhNi43MzksNi43MzksMCwwLDAsNi42NTUsNC43MjdBNy4wMTksNy4wMTksMCwwLDAsMzg0LDI4OS43NDN2LTQuNzFBNy4wOTMsNy4wOTMsMCwwLDAsMzc2LjkyNCwyNzhIMzQzLjk0OUE2Ljk4NSw2Ljk4NSwwLDAsMCwzMzcsMjg1LjAzM3YzMi45NzVBNi45NSw2Ljk1LDAsMCwwLDM0My45NDksMzI1WiIvPjxwYXRoIGQ9Ik0zNDQsMzg5aDMzYTcsNywwLDAsMCw3LTdWMzQ5YTcsNywwLDAsMC03LTdIMzQ0YTcsNywwLDAsMC03LDd2MzNBNyw3LDAsMCwwLDM0NCwzODlabTctMzNoMTl2MTlIMzUxWiIvPjxwYXRoIGQ9Ik0zNTEuMjc3LDQzOUgzNTFWNDIwaDE4LjkyOWE3LjAzNyw3LjAzNywwLDAsMCwxNC4wNzEuMDE0di02Ljc0NUE3LjMsNy4zLDAsMCwwLDM3Ni45MjQsNDA2SDM0My45NDlBNy4xOTEsNy4xOTEsMCwwLDAsMzM3LDQxMy4yNjl2MzIuOTc1QTYuNzUyLDYuNzUyLDAsMCwwLDM0My45NDksNDUzaDcuMzI4YTcsNywwLDEsMCwwLTE0WiIvPjxwYXRoIGQ9Ik0zOTMuMDQxLDI4Ni41OTJsLTIwLjUsMjAuNS02LjIzNi02LjIzN2E3LDcsMCwxLDAtOS45LDkuOWwxMS4xODcsMTEuMTg2YTcsNywwLDAsMCw5LjksMGwyNS40NTItMjUuNDUyYTcsNywwLDAsMC05LjktOS45WiIvPjxwYXRoIGQ9Ik0zOTMuMDQxLDQxNS44NDFsLTIwLjUsMjAuNS02LjIzNi02LjIzN2E3LDcsMCwxLDAtOS45LDkuOWwxMS4xODcsMTEuMTg2YTcsNywwLDAsMCw5LjksMGwyNS40NTItMjUuNDUyYTcsNywwLDAsMC05LjktOS45WiIvPjxwYXRoIGQ9Ik00NjQuODU3LDI5NUg0MjAuODkxYTcsNywwLDAsMCwwLDE0aDQzLjk2NmE3LDcsMCwwLDAsMC0xNFoiLz48cGF0aCBkPSJNNDY0Ljg1NywzNTlINDIwLjg5MWE3LDcsMCwwLDAsMCwxNGg0My45NjZhNyw3LDAsMCwwLDAtMTRaIi8+PHBhdGggZD0iTTQ2NC44NTcsNDIzSDQyMC44OTFhNyw3LDAsMCwwLDAsMTRoNDMuOTY2YTcsNywwLDAsMCwwLTE0WiIvPjwvc3ZnPgo=" />
                                                </button></a>

                                                <button onclick="document.getElementById('foot').showModal()" style="margin-right: 10px;" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">
                                                    Dish
                                                    <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NTYuMzU0LDMzNC4zOTZjLTAuNDk1LTAuODI4LTEuMDE2LTEuNjIxLTEuNTM2LTIuMzIxYy01LjE3MS03LjIyOC0xMi44Ni0xMi4wMDYtMjEuNjMyLTEzLjQ0OQ0KCQkJYy04LjczLTEuNDQyLTE3LjU3OSwwLjYxNC0yNC43ODEsNS43ODZsLTk1LjQwMyw2OC4xMjJoLTk5LjY2OWMtNC43MDIsMC04LjUzMy0zLjgyMy04LjUzMy04LjUzM3MzLjgzMS04LjUzMyw4LjUzMy04LjUzM0gyNjguOA0KCQkJYzE2LjQ2OSwwLDI5Ljg2Ny0xMy4zOTcsMjkuODY3LTI5Ljg2N2MwLTAuMDk0LTAuMDA5LTAuODc5LTAuMDE3LTAuOTY0Yy0wLjUyOS0xNi40NjEtMTQuNDEzLTI5LjI5NS0zMC41MzItMjguOTAyaC0xMTEuMDENCgkJCWMtOS44MzksMC4wODUtMTkuNDIyLDMuNjEtMjYuOTc0LDkuOTA3bC00MS43MjgsMzQuNzMxYy0xLjk0NiwxLjYzLTMuMDcyLDQuMDI4LTMuMDcyLDYuNTYydjEwMi40DQoJCQljMCw0LjcxOSwzLjgyMyw4LjUzMyw4LjUzMyw4LjUzM2gyMTEuNzIxYzEzLjg1OC0wLjAxNywyNy4zNTgtNC44OTgsMzguMDI1LTEzLjczbDEwMy40NS04NS40NzgNCgkJCUM0NjEuMTE2LDM2OC42NDgsNDY1LjE5NSwzNDkuMjEsNDU2LjM1NCwzMzQuMzk2eiBNNDM2LjY4NSwzNjUuMTMzTDMzMi43NCw0NTAuOTg3Yy03LjYyOSw2LjMxNS0xNy4yOCw5Ljc5Ni0yNy4xNjIsOS44MTNIMTAyLjQNCgkJCXYtODkuODY1bDM4LjY2NC0zMi4xODhjNC41NC0zLjc4LDEwLjI4My01Ljg5NywxNi4xMi01Ljk0OGwxMTEuMjA2LTAuMDA4YzcuMDc0LTAuMDA5LDEyLjk3OSw1LjM0MiwxMy4yMSwxMi44MDkNCgkJCWMwLDcuMDU3LTUuNzQzLDEyLjgtMTIuOCwxMi44aC01NS40NjdjLTE0LjExNCwwLTI1LjYsMTEuNDg2LTI1LjYsMjUuNnMxMS40ODYsMjUuNiwyNS42LDI1LjZoMTAyLjQNCgkJCWMxLjc3NSwwLDMuNTA3LTAuNTU1LDQuOTc1LTEuNTg3bDk3LjYzOC02OS43MjZjMy41MTYtMi41MjYsNy43OTEtMy41MDcsMTIuMDc1LTIuODI1YzQuMjc1LDAuNzA4LDguMDEzLDMuMDI5LDEwLjU4MSw2LjYxMw0KCQkJYzAuMjU2LDAuMzUsMC40ODYsMC43MDgsMC43MDgsMS4wNzVDNDQ2LjAyOSwzNTAuMzc5LDQ0NC4wMjMsMzU5Ljg3Niw0MzYuNjg1LDM2NS4xMzN6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik05My42MTEsMzQ5Ljg2N0gwdjE3LjA2N2g4NS4wNzd2MTI4SDBWNTEyaDkzLjYxMWM0LjcxLDAsOC41MzMtMy44MTQsOC41MzMtOC41MzNWMzU4LjQNCgkJCUMxMDIuMTQ0LDM1My42ODEsOTguMzIxLDM0OS44NjcsOTMuNjExLDM0OS44Njd6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00Mi42NjcsNDI2LjY2N2MtMTQuMTE0LDAtMjUuNiwxMS40ODYtMjUuNiwyNS42YzAsMTQuMTE0LDExLjQ4NiwyNS42LDI1LjYsMjUuNnMyNS42LTExLjQ4NiwyNS42LTI1LjYNCgkJCUM2OC4yNjcsNDM4LjE1Myw1Ni43ODEsNDI2LjY2Nyw0Mi42NjcsNDI2LjY2N3ogTTQyLjY2Nyw0NjAuOGMtNC43MDIsMC04LjUzMy0zLjgyMy04LjUzMy04LjUzM2MwLTQuNzEsMy44MzEtOC41MzMsOC41MzMtOC41MzMNCgkJCWM0LjcwMiwwLDguNTMzLDMuODIzLDguNTMzLDguNTMzQzUxLjIsNDU2Ljk3Nyw0Ny4zNjksNDYwLjgsNDIuNjY3LDQ2MC44eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTAzLjQ2NywyNjQuNTMzSDguNTMzYy00LjcxLDAtOC41MzMsMy44MTQtOC41MzMsOC41MzNjMCwzMi45MywyNi43OTUsNTkuNzMzLDU5LjczMyw1OS43MzNoMzkyLjUzMw0KCQkJYzMyLjkzLDAsNTkuNzMzLTI2LjgwMyw1OS43MzMtNTkuNzMzQzUxMiwyNjguMzQ4LDUwOC4xODYsMjY0LjUzMyw1MDMuNDY3LDI2NC41MzN6IE00NTIuMjY3LDMxNS43MzNINTkuNzMzDQoJCQljLTIwLjYwOCwwLTM3Ljg0NS0xNC42ODYtNDEuODA1LTM0LjEzM2g0NzYuMTQzQzQ5MC4xMTIsMzAxLjA0Nyw0NzIuODc1LDMxNS43MzMsNDUyLjI2NywzMTUuNzMzeiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjU2LDQyLjY2N2MtMTIyLjMzNCwwLTIyMS44NjcsOTkuNTMzLTIyMS44NjcsMjIxLjg2N3Y4LjUzM2MwLDQuNzE5LDMuODIzLDguNTMzLDguNTMzLDguNTMzaDQyNi42NjcNCgkJCWM0LjcxOSwwLDguNTMzLTMuODE0LDguNTMzLTguNTMzdi04LjUzM0M0NzcuODY3LDE0Mi4xOTksMzc4LjM0Miw0Mi42NjcsMjU2LDQyLjY2N3ogTTUxLjIsMjY0LjUzMw0KCQkJYzAtMTEyLjkyMiw5MS44NzgtMjA0LjgsMjA0LjgtMjA0LjhzMjA0LjgsOTEuODc4LDIwNC44LDIwNC44SDUxLjJ6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0xMTUuNjQ0LDE0MC4wMDZjLTUuOTY1LDYuNzA3LTExLjQ5NCwxMy44ODQtMTYuNDM1LDIxLjM0MmwxNC4yMjUsOS40MjljNC41MDYtNi43OTMsOS41NC0xMy4zMzgsMTQuOTY3LTE5LjQzOQ0KCQkJTDExNS42NDQsMTQwLjAwNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTI1Niw3Ni44Yy00Ny45MjMsMC4wMjYtOTMuNTUxLDE4LjEzMy0xMjguNDY5LDUwLjk2MWwxMS42OTEsMTIuNDMzYzMxLjc0NC0yOS44NSw3My4yMjQtNDYuMzAyLDExNi43ODctNDYuMzI3TDI1Niw3Ni44DQoJCQl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjIzMC40IiB3aWR0aD0iNTEuMiIgaGVpZ2h0PSIxNy4wNjciLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iMjQ3LjQ2NyIgeT0iOC41MzMiIHdpZHRoPSIxNy4wNjciIGhlaWdodD0iNDIuNjY3Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                                </button>

                                                <a href="/intranet/restaurante/{{ $restaurante->id }}/delete">
                                                <button style="margin-right: 10px" type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                                    Delete
                                                    <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNDcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQxNi44NzUgMTE0LjQ0MTQwNi0xMS4zMDQ2ODgtMzMuODg2NzE4Yy00LjMwNDY4Ny0xMi45MDYyNS0xNi4zMzk4NDMtMjEuNTc4MTI2LTI5Ljk0MTQwNi0yMS41NzgxMjZoLTk1LjAxMTcxOHYtMzAuOTMzNTkzYzAtMTUuNDYwOTM4LTEyLjU3MDMxMy0yOC4wNDI5NjktMjguMDI3MzQ0LTI4LjA0Mjk2OWgtODcuMDA3ODEzYy0xNS40NTMxMjUgMC0yOC4wMjczNDMgMTIuNTgyMDMxLTI4LjAyNzM0MyAyOC4wNDI5Njl2MzAuOTMzNTkzaC05NS4wMDc4MTNjLTEzLjYwNTQ2OSAwLTI1LjY0MDYyNSA4LjY3MTg3Ni0yOS45NDUzMTMgMjEuNTc4MTI2bC0xMS4zMDQ2ODcgMzMuODg2NzE4Yy0yLjU3NDIxOSA3LjcxNDg0NC0xLjI2OTUzMTIgMTYuMjU3ODEzIDMuNDg0Mzc1IDIyLjg1NTQ2OSA0Ljc1MzkwNiA2LjU5NzY1NiAxMi40NDUzMTIgMTAuNTM5MDYzIDIwLjU3ODEyNSAxMC41MzkwNjNoMTEuODE2NDA2bDI2LjAwNzgxMyAzMjEuNjA1NDY4YzEuOTMzNTk0IDIzLjg2MzI4MiAyMi4xODM1OTQgNDIuNTU4NTk0IDQ2LjEwOTM3NSA0Mi41NTg1OTRoMjA0Ljg2MzI4MWMyMy45MjE4NzUgMCA0NC4xNzU3ODEtMTguNjk1MzEyIDQ2LjEwNTQ2OS00Mi41NjI1bDI2LjAwNzgxMi0zMjEuNjAxNTYyaDYuNTQyOTY5YzguMTMyODEyIDAgMTUuODI0MjE5LTMuOTQxNDA3IDIwLjU3ODEyNS0xMC41MzUxNTcgNC43NTM5MDYtNi41OTc2NTYgNi4wNTg1OTQtMTUuMTQ0NTMxIDMuNDg0Mzc1LTIyLjg1OTM3NXptLTI0OS4zMjAzMTItODQuNDQxNDA2aDgzLjA2MjV2MjguOTc2NTYyaC04My4wNjI1em0xNjIuODA0Njg3IDQzNy4wMTk1MzFjLS42Nzk2ODcgOC40MDIzNDQtNy43OTY4NzUgMTQuOTgwNDY5LTE2LjIwMzEyNSAxNC45ODA0NjloLTIwNC44NjMyODFjLTguNDA2MjUgMC0xNS41MjM0MzgtNi41NzgxMjUtMTYuMjAzMTI1LTE0Ljk4MDQ2OWwtMjUuODE2NDA2LTMxOS4xODM1OTNoMjg4Ljg5ODQzN3ptLTI5OC41NjY0MDYtMzQ5LjE4MzU5MyA5LjI2OTUzMS0yNy43ODkwNjNjLjIxMDkzOC0uNjQwNjI1LjgwODU5NC0xLjA3MDMxMyAxLjQ4NDM3NS0xLjA3MDMxM2gzMzMuMDgyMDMxYy42NzU3ODIgMCAxLjI2OTUzMi40Mjk2ODggMS40ODQzNzUgMS4wNzAzMTNsOS4yNjk1MzEgMjcuNzg5MDYzem0wIDAiLz48cGF0aCBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIi8+PHBhdGggZD0ibTEyMC41NjY0MDYgNDUxLjc5Mjk2OWMuNDM3NSA3Ljk5NjA5MyA3LjA1NDY4OCAxNC4xODM1OTMgMTQuOTY0ODQ0IDE0LjE4MzU5My4yNzM0MzggMCAuNTU0Njg4LS4wMDc4MTIuODMyMDMxLS4wMjM0MzcgOC4yNjk1MzEtLjQ0OTIxOSAxNC42MDkzNzUtNy41MTk1MzEgMTQuMTYwMTU3LTE1Ljc5Mjk2OWwtMTQuNzUzOTA3LTI3MC4zOTg0MzdjLS40NDkyMTktOC4yNzM0MzgtNy41MTk1MzEtMTQuNjEzMjgxLTE1Ljc5Mjk2OS0xNC4xNjAxNTctOC4yNjk1MzEuNDQ5MjE5LTE0LjYwOTM3NCA3LjUxOTUzMi0xNC4xNjAxNTYgMTUuNzkyOTY5em0wIDAiLz48cGF0aCBkPSJtMjA5LjI1MzkwNiA0NjUuOTc2NTYyYzguMjg1MTU2IDAgMTUtNi43MTQ4NDMgMTUtMTV2LTI3MC4zOTg0MzdjMC04LjI4NTE1Ni02LjcxNDg0NC0xNS0xNS0xNXMtMTUgNi43MTQ4NDQtMTUgMTV2MjcwLjM5ODQzN2MwIDguMjg1MTU3IDYuNzE0ODQ0IDE1IDE1IDE1em0wIDAiLz48L3N2Zz4=" />
                                                </button></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <dialog id="foot"="h-auto w-11/12 md:w-1/2 p-5  bg-white rounded-md ">

                                <div class="flex flex-col w-full h-auto ">
                                    <!-- Header -->
                                    <div class="flex w-full h-auto justify-center items-center">
                                        <div
                                            class="flex w-10/12 h-auto py-3 justify-center items-center text-2xl font-bold">
                                            <img src="/img/logo.png" alt="" width="20%" style="margin-left: 50px">

                                        </div>
                                        <div onclick="document.getElementById('foot').close();"
                                            class="flex w-1/12 h-auto justify-center cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-x">
                                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                                <line x1="6" y1="6" x2="18" y2="18"></line>
                                            </svg>
                                        </div>
                                        <!--Header End-->
                                    </div>
                                    <!-- Modal Content-->
                                    <div
                                        class="flex w-full h-auto py-10 px-2 justify-center items-center bg-gray-200 rounded text-center text-gray-500">
                                        <div class=" flex items-center justify-center">

                                            <form action="/intranet/restaurante/{{$restaurante->id}}/plato" method="POST" id="form"
                                                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                                                <h1 class="block text-gray-700 font-bold mb-2 text-xl text-center">
                                                    QUESTIONNAIRE TO ADD A DISH OF RESTAURANT</h1>
                                                @csrf
                                                <br>
                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Nombre
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="nombre" id="nombre" type="text"
                                                        placeholder="Ingresa tu nombre" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Descripcion
                                                    </label>
                                                    <textarea cols="10" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="descripcion" id="descripcion" type="text"
                                                    placeholder="Ingresa tu descripcion" required></textarea>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Foto
                                                    </label>
                                                    <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="foto" id="foto" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Precio
                                                    </label>
                                                    <input
                                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                        name="precio" id="precio" type="text"
                                                        placeholder="Ingresa tu nombre" required>
                                                </div>

                                                <div class="mb-4">
                                                    <label class="block text-gray-700 text-sm font-bold mb-2"
                                                        for="name">
                                                        Categoria
                                                    </label>
                                                    <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                                    name="categoria" id="categoria" type="text" required>
                                                    <option selected disabled hidden>Seleccione</option>
                                                    <option value="Desayuno">Desayuno</option>
                                                    <option value="Pescados">Pescados</option>
                                                    <option value="Carnes">Carnes</option>
                                                    <option value="Postres">Postres</option>
                                                    <option value="Bebidas">Bebidas</option>
                                                </select>
                                                </div>

                                                <input type="hidden" name="restaurante_id" id="restaurante_id" value="{{$restaurante->id}}">

                                                <div class="flex items-right justify-between">
                                                    <button id="submit"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                                                        type="submit">
                                                        Create <img src="/img/mas.svg" alt=""
                                                            style="float: right; margin-left: 5px">
                                                    </button>
                                                </div>

                                                <div class="mb-4">


                                            </form>

                                        </div>
                                        {{-- <script src="https://kit.fontawesome.com/1e268974cb.js" crossorigin="anonymous">
                                        </script>
                                        <script src="assets/js/helpers.js"></script> --}}
                                    </div>
                                    <!-- End of Modal Content-->
                                </div>
                            </dialog>
                        @endif
                    </div>
                </div>
                {{ $restaurantes->Links() }}
        </div>
    </div>
</x-app-layout>
