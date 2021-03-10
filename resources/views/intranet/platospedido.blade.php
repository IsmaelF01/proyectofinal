
<x-app-layout>
    <x-slot name="header">
        <a href="/intranet/repartidor"><h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2></a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <h3 style="margin-left: 15px; font-size: 25px">Platos del plato</h3>
                <form action="#">
                    @csrf
                    <div class="relative text-gray-600" style="position: absolute; right: 80px;">
                        <input type="search" name="search" placeholder="Search: Estado"
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
                <table class="w-full text-md bg-white shadow-md rounded mb-4">
                    <tbody>
                        <tr class="border-b">
                            <th class="text-left p-3 px-5">Nombre</th>
                            <th class="text-left p-3 px-5">Descripcion</th>
                            <th class="text-left p-3 px-5">Foto</th>
                            <th class="text-left p-3 px-5">Categoria</th>
                            <th class="text-left p-3 px-5">Cantidad</th>
                            <th></th>
                        </tr>
                        @foreach ($platos as $plato)
                            <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                <td class="p-3 px-5" style="width: 200px">{{ $plato->nombre }}</td>
                                <td class="p-3 px-5" style="width: 200px">{{ $plato->descripcion }}</td>
                                <td class="p-3 px-5" style="width: 200px"><img src=" {{ url('storage/img/platos', [$plato->foto]) }}" alt=".." width="60%"></td>
                                <td class="p-3 px-5" style="width: 200px">{{ $plato->categoria }}</td>
                                <td class="p-3 px-5" style="width: 200px">{{ $plato->pivot->cantidad }}</td>
                                <td class="p-3 px-5 flex justify-end">
                                    <div style="margin-top: 20px">
                                     <a href="/fooding/restaurante/{{$plato->id }}">
                                    <button style=" margin-left: -80px; margin-right: 10px" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg">
                                        View
                                        <img style="width: 18px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyLjAwNSA1MTIuMDA1IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIuMDA1IDUxMi4wMDU7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNNTA1Ljc0OSw0NzUuNTg3bC0xNDUuNi0xNDUuNmMyOC4yMDMtMzQuODM3LDQ1LjE4NC03OS4xMDQsNDUuMTg0LTEyNy4zMTdjMC0xMTEuNzQ0LTkwLjkyMy0yMDIuNjY3LTIwMi42NjctMjAyLjY2Nw0KCQkJUzAsOTAuOTI1LDAsMjAyLjY2OXM5MC45MjMsMjAyLjY2NywyMDIuNjY3LDIwMi42NjdjNDguMjEzLDAsOTIuNDgtMTYuOTgxLDEyNy4zMTctNDUuMTg0bDE0NS42LDE0NS42DQoJCQljNC4xNiw0LjE2LDkuNjIxLDYuMjUxLDE1LjA4Myw2LjI1MXMxMC45MjMtMi4wOTEsMTUuMDgzLTYuMjUxQzUxNC4wOTEsNDk3LjQxMSw1MTQuMDkxLDQ4My45MjgsNTA1Ljc0OSw0NzUuNTg3eg0KCQkJIE0yMDIuNjY3LDM2Mi42NjljLTg4LjIzNSwwLTE2MC03MS43NjUtMTYwLTE2MHM3MS43NjUtMTYwLDE2MC0xNjBzMTYwLDcxLjc2NSwxNjAsMTYwUzI5MC45MDEsMzYyLjY2OSwyMDIuNjY3LDM2Mi42Njl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" />
                                    </button></a>

                                    <a href="/intranet/restaurante/{{$plato->restaurante_id}}/plato/{{$plato->id }}/cambiar">
                                    <button style="margin-right: 10px;" type="button" class="focus:outline-none text-white text-sm py-1 px-2 rounded-md bg-yellow-500 hover:bg-yellow-600 hover:shadow-lg">
                                        Edit
                                        <img style="width: 18px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSIwIDAgNTEyIDUxMSIgd2lkdGg9IjUxMnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im00MDUuMzMyMDMxIDI1Ni40ODQzNzVjLTExLjc5Njg3NSAwLTIxLjMzMjAzMSA5LjU1ODU5NC0yMS4zMzIwMzEgMjEuMzMyMDMxdjE3MC42Njc5NjljMCAxMS43NTM5MDYtOS41NTg1OTQgMjEuMzMyMDMxLTIxLjMzMjAzMSAyMS4zMzIwMzFoLTI5OC42Njc5NjljLTExLjc3NzM0NCAwLTIxLjMzMjAzMS05LjU3ODEyNS0yMS4zMzIwMzEtMjEuMzMyMDMxdi0yOTguNjY3OTY5YzAtMTEuNzUzOTA2IDkuNTU0Njg3LTIxLjMzMjAzMSAyMS4zMzIwMzEtMjEuMzMyMDMxaDE3MC42Njc5NjljMTEuNzk2ODc1IDAgMjEuMzMyMDMxLTkuNTU4NTk0IDIxLjMzMjAzMS0yMS4zMzIwMzEgMC0xMS43NzczNDQtOS41MzUxNTYtMjEuMzM1OTM4LTIxLjMzMjAzMS0yMS4zMzU5MzhoLTE3MC42Njc5NjljLTM1LjI4NTE1NiAwLTY0IDI4LjcxNDg0NC02NCA2NHYyOTguNjY3OTY5YzAgMzUuMjg1MTU2IDI4LjcxNDg0NCA2NCA2NCA2NGgyOTguNjY3OTY5YzM1LjI4NTE1NiAwIDY0LTI4LjcxNDg0NCA2NC02NHYtMTcwLjY2Nzk2OWMwLTExLjc5Njg3NS05LjUzOTA2My0yMS4zMzIwMzEtMjEuMzM1OTM4LTIxLjMzMjAzMXptMCAwIi8+PHBhdGggZD0ibTIwMC4wMTk1MzEgMjM3LjA1MDc4MWMtMS40OTIxODcgMS40OTIxODgtMi40OTYwOTMgMy4zOTA2MjUtMi45MjE4NzUgNS40Mzc1bC0xNS4wODIwMzEgNzUuNDM3NWMtLjcwMzEyNSAzLjQ5NjA5NC40MDYyNSA3LjEwMTU2MyAyLjkyMTg3NSA5LjY0MDYyNSAyLjAyNzM0NCAyLjAyNzM0NCA0Ljc1NzgxMiAzLjExMzI4MiA3LjU1NDY4OCAzLjExMzI4Mi42Nzk2ODcgMCAxLjM4NjcxOC0uMDYyNSAyLjA4OTg0My0uMjEwOTM4bDc1LjQxNDA2My0xNS4wODIwMzFjMi4wODk4NDQtLjQyOTY4OCAzLjk4ODI4MS0xLjQyOTY4OCA1LjQ2MDkzNy0yLjkyNTc4MWwxNjguNzg5MDYzLTE2OC43ODkwNjMtNzUuNDE0MDYzLTc1LjQxMDE1NnptMCAwIi8+PHBhdGggZD0ibTQ5Ni4zODI4MTIgMTYuMTAxNTYyYy0yMC43OTY4NzQtMjAuODAwNzgxLTU0LjYzMjgxMi0yMC44MDA3ODEtNzUuNDE0MDYyIDBsLTI5LjUyMzQzOCAyOS41MjM0MzggNzUuNDE0MDYzIDc1LjQxNDA2MiAyOS41MjM0MzctMjkuNTI3MzQzYzEwLjA3MDMxMy0xMC4wNDY4NzUgMTUuNjE3MTg4LTIzLjQ0NTMxMyAxNS42MTcxODgtMzcuNjk1MzEzcy01LjU0Njg3NS0yNy42NDg0MzctMTUuNjE3MTg4LTM3LjcxNDg0NHptMCAwIi8+PC9zdmc+" />
                                    </button></a>
                                    <a href="/intranet/restaurante/{{$plato->id }}/plato/delete">
                                    <button style="margin-right: 10px" type="button" class="text-sm bg-red-500 hover:bg-red-000 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                                        Delete
                                        <img style="width: 20px; float: right; margin-left: 2px" src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUxMnB0IiB2aWV3Qm94PSItNDcgMCA1MTIgNTEyIiB3aWR0aD0iNTEycHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTQxNi44NzUgMTE0LjQ0MTQwNi0xMS4zMDQ2ODgtMzMuODg2NzE4Yy00LjMwNDY4Ny0xMi45MDYyNS0xNi4zMzk4NDMtMjEuNTc4MTI2LTI5Ljk0MTQwNi0yMS41NzgxMjZoLTk1LjAxMTcxOHYtMzAuOTMzNTkzYzAtMTUuNDYwOTM4LTEyLjU3MDMxMy0yOC4wNDI5NjktMjguMDI3MzQ0LTI4LjA0Mjk2OWgtODcuMDA3ODEzYy0xNS40NTMxMjUgMC0yOC4wMjczNDMgMTIuNTgyMDMxLTI4LjAyNzM0MyAyOC4wNDI5Njl2MzAuOTMzNTkzaC05NS4wMDc4MTNjLTEzLjYwNTQ2OSAwLTI1LjY0MDYyNSA4LjY3MTg3Ni0yOS45NDUzMTMgMjEuNTc4MTI2bC0xMS4zMDQ2ODcgMzMuODg2NzE4Yy0yLjU3NDIxOSA3LjcxNDg0NC0xLjI2OTUzMTIgMTYuMjU3ODEzIDMuNDg0Mzc1IDIyLjg1NTQ2OSA0Ljc1MzkwNiA2LjU5NzY1NiAxMi40NDUzMTIgMTAuNTM5MDYzIDIwLjU3ODEyNSAxMC41MzkwNjNoMTEuODE2NDA2bDI2LjAwNzgxMyAzMjEuNjA1NDY4YzEuOTMzNTk0IDIzLjg2MzI4MiAyMi4xODM1OTQgNDIuNTU4NTk0IDQ2LjEwOTM3NSA0Mi41NTg1OTRoMjA0Ljg2MzI4MWMyMy45MjE4NzUgMCA0NC4xNzU3ODEtMTguNjk1MzEyIDQ2LjEwNTQ2OS00Mi41NjI1bDI2LjAwNzgxMi0zMjEuNjAxNTYyaDYuNTQyOTY5YzguMTMyODEyIDAgMTUuODI0MjE5LTMuOTQxNDA3IDIwLjU3ODEyNS0xMC41MzUxNTcgNC43NTM5MDYtNi41OTc2NTYgNi4wNTg1OTQtMTUuMTQ0NTMxIDMuNDg0Mzc1LTIyLjg1OTM3NXptLTI0OS4zMjAzMTItODQuNDQxNDA2aDgzLjA2MjV2MjguOTc2NTYyaC04My4wNjI1em0xNjIuODA0Njg3IDQzNy4wMTk1MzFjLS42Nzk2ODcgOC40MDIzNDQtNy43OTY4NzUgMTQuOTgwNDY5LTE2LjIwMzEyNSAxNC45ODA0NjloLTIwNC44NjMyODFjLTguNDA2MjUgMC0xNS41MjM0MzgtNi41NzgxMjUtMTYuMjAzMTI1LTE0Ljk4MDQ2OWwtMjUuODE2NDA2LTMxOS4xODM1OTNoMjg4Ljg5ODQzN3ptLTI5OC41NjY0MDYtMzQ5LjE4MzU5MyA5LjI2OTUzMS0yNy43ODkwNjNjLjIxMDkzOC0uNjQwNjI1LjgwODU5NC0xLjA3MDMxMyAxLjQ4NDM3NS0xLjA3MDMxM2gzMzMuMDgyMDMxYy42NzU3ODIgMCAxLjI2OTUzMi40Mjk2ODggMS40ODQzNzUgMS4wNzAzMTNsOS4yNjk1MzEgMjcuNzg5MDYzem0wIDAiLz48cGF0aCBkPSJtMjgyLjUxNTYyNSA0NjUuOTU3MDMxYy4yNjU2MjUuMDE1NjI1LjUyNzM0NC4wMTk1MzEuNzkyOTY5LjAxOTUzMSA3LjkyNTc4MSAwIDE0LjU1MDc4MS02LjIxMDkzNyAxNC45NjQ4NDQtMTQuMjE4NzVsMTQuMDg1OTM3LTI3MC4zOTg0MzdjLjQyOTY4Ny04LjI3MzQzNy01LjkyOTY4Ny0xNS4zMzIwMzEtMTQuMTk5MjE5LTE1Ljc2MTcxOS04LjI5Mjk2OC0uNDQxNDA2LTE1LjMyODEyNSA1LjkyNTc4Mi0xNS43NjE3MTggMTQuMTk5MjE5bC0xNC4wODIwMzIgMjcwLjM5ODQzN2MtLjQyOTY4NyA4LjI3MzQzOCA1LjkyNTc4MiAxNS4zMzIwMzIgMTQuMTk5MjE5IDE1Ljc2MTcxOXptMCAwIi8+PHBhdGggZD0ibTEyMC41NjY0MDYgNDUxLjc5Mjk2OWMuNDM3NSA3Ljk5NjA5MyA3LjA1NDY4OCAxNC4xODM1OTMgMTQuOTY0ODQ0IDE0LjE4MzU5My4yNzM0MzggMCAuNTU0Njg4LS4wMDc4MTIuODMyMDMxLS4wMjM0MzcgOC4yNjk1MzEtLjQ0OTIxOSAxNC42MDkzNzUtNy41MTk1MzEgMTQuMTYwMTU3LTE1Ljc5Mjk2OWwtMTQuNzUzOTA3LTI3MC4zOTg0MzdjLS40NDkyMTktOC4yNzM0MzgtNy41MTk1MzEtMTQuNjEzMjgxLTE1Ljc5Mjk2OS0xNC4xNjAxNTctOC4yNjk1MzEuNDQ5MjE5LTE0LjYwOTM3NCA3LjUxOTUzMi0xNC4xNjAxNTYgMTUuNzkyOTY5em0wIDAiLz48cGF0aCBkPSJtMjA5LjI1MzkwNiA0NjUuOTc2NTYyYzguMjg1MTU2IDAgMTUtNi43MTQ4NDMgMTUtMTV2LTI3MC4zOTg0MzdjMC04LjI4NTE1Ni02LjcxNDg0NC0xNS0xNS0xNXMtMTUgNi43MTQ4NDQtMTUgMTV2MjcwLjM5ODQzN2MwIDguMjg1MTU3IDYuNzE0ODQ0IDE1IDE1IDE1em0wIDAiLz48L3N2Zz4=" />
                                    </button></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $platos->Links() }} --}}
            </div>
        </div>
    </div>
</x-app-layout>
