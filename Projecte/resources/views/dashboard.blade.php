<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!---->
                    Pagina de Inicio
                    

                        <div id="carouselId" class="carousel slide" data-ride="carousel" data-interval="1000">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselId" data-slide-to="1"></li>
                                <li data-target="#carouselId" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img src="images/home1.jpg" alt="Image1" height="50%"  class="responsive col-md-12 rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/home2.jpg" alt="Image2" class="responsive col-md-12 rounded">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/home3.jpg" alt="Image3" class="responsive col-md-12 rounded">
                                </div>
                                
                            </div>
                            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                    <!---->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
