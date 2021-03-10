<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
            <nav>
                <ul style="position: absolute; right: 30px; top: 90px">
                <li style="display: inline;"><a href="/intranet/restaurante">Restaurante</a> |</li>
                <li style="display: inline;"><a href="/fooding/restaurantes">Fooding</a> |</li>
                <li style="display: inline;"><a href="/intranet/repartidor">Repartidor</a></li>
            </ul>
            </nav>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @php
                $users = App\Models\User::paginate(5);
                @endphp
                @if($user->role->role == 'admin')
                <h3 style="font-size: 25px; margin-left: 15px">USERS</h3>
                <div class="text-gray-900 bg-gray-200">
                    <div class="px-3 py-4 flex justify-center">
                        <table class="w-full text-md bg-white shadow-md rounded mb-4">
                            <tbody>
                                <tr class="border-b">
                                    <th class="text-left p-3 px-5">Name</th>
                                    <th class="text-left p-3 px-5">LastName</th>
                                    <th class="text-left p-3 px-5">City</th>
                                    <th class="text-left p-3 px-5">Address</th>
                                    <th class="text-left p-3 px-5">Movil</th>
                                    <th class="text-left p-3 px-5">DNI</th>
                                    <th class="text-left p-3 px-5">Email</th>
                                    <th class="text-left p-3 px-5">Role</th>
                                    <th></th>
                                </tr>
                                @foreach ($users as $user)
                                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                                    <td class="p-3 px-5">{{ ucwords($user->name) }}</td>
                                    <td>{{ ucwords($user->lastname) }}</td>
                                    <td>{{ ucwords($user->city) }}</td>
                                    <td>{{ ucwords($user->address) }}</td>
                                    <td>{{ ucwords($user->movil) }}</td>
                                    <td>{{$user->dni}}</td>
                                    <td class="p-3 px-5">{{$user->email}}</td>
                                    <td class="p-3 px-5">{{ ucwords($user->role->role) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $users->Links() }}
                </div>
                @else
                <h3 style="margin-left: 15px">MODULO DE ADMIN DE LA WEB FOODING</h3>
                <h4 style="text-align: center; margin-top: 10px; border:solid black 2px; border-radius: 8px">No eres Admin no puedes ver el contenido de aqui</h4>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
