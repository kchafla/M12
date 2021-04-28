<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!---->
                    <div class="centrado">
                        <!--Apartat per a modificar les dades de l'usuari-->
                        <h3>Editar les dades de l'usuari</h3><br><br><br>

                        Nou nom per a l'usuari: <br><input type="text" name="username" value="{{Auth::user()->name}}"><br><br>

                        Nou mail per a l'usuari: <br><input type="text" name="mail" value="{{Auth::user()->email}}"><br><br>

                        Nova contrasenya usuari: <br><input type="password" name="password"><br><br>

                        <button type="submit" name="actualitzar" class="btn-primary rounded" style="padding: 10px;">Enviar</button>

                    </div>
                    <!---->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>