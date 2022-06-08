<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    List of doctors
                    @foreach($doctors as $doctor)
                        <div class="col -sm-6 col-md-4">
                            <div class="thumnail">
                                <img src="../../../../../Downloads/artworks-jVAKwcFrkDHsvvLw-PGq6Lg-t500x500.jpg" width="500" height="500">
                                <div class="caption">
                                    <h3>{{$doctor->name}}</h3>
                                    <p>{{$doctor->surname}}</p>
                                    <p>{{$doctor->exp}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
