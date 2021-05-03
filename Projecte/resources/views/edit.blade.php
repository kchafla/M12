<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>
    <h2 class="pl-12">Edit user</h2>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark border-b border-gray-200 text-light">
                    <!---->
                    <div class="centrado">
                        <!--Apartat per a modificar les dades de l'usuari-->
                        <h3>Editar les dades de l'usuari</h3><br><br><br>

                        <form action="{{url('updateUser')}}" method="post">
                            @csrf
                            Nou nom per a l'usuari: <br><input type="text" name="name" value="{{Auth::user()->name}}" class="text-dark"><br><br>

                            Nou mail per a l'usuari: <br><input type="text" name="email" value="{{Auth::user()->email}}" class="text-dark"><br><br>

                            Nova contrasenya usuari: <br><input type="password" name="password"><br><br>

                            <input type="hidden" value="{{Auth::user()->id}}" name="id">

                            <button type="submit" name="actualitzar" class="btn-primary rounded" style="padding: 10px;">Enviar</button>
                        
                        </form>
                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>