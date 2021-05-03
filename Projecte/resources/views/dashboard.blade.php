<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <h2 class="pl-12">Home</h2>
    <div class="pb-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-dark border-b border-gray-200 text-light">
                   <!---->
                        <h3>Hola {{ Auth::user()->name }}</h3><br><br><br>
                        <h4>Aquí tens les teves sales actives: </h4>
                        <br><br>
                        Work in progress...
                   <!---->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
