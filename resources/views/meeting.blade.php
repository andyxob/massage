<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meeting form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <p>Select doctor</p>
                        <select class="form-control mt-2">


                            @foreach($doctors as $doctor)
                                <option value="{{$doctor->id}}"
                                selected>{{$doctor->name}}</option>
                            @endforeach
                        </select>

                        <p>select massage type </p>
                        <select class="form-control mt-2">


                            @foreach($massages as $massage)
                                <option value="{{$massage->id}}"
                                        selected>{{$massage->name}}</option>
                            @endforeach
                        </select>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
