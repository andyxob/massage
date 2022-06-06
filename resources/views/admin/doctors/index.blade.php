<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Admin page crud doctors <br>
                    <table>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Experience</th>
                            <th>Actions</th>
                        </tr>
                        @foreach($doctors as $doctor)
                            <tr>
                                <td>{{$doctor->id}}</td>
                                <td>{{$doctor->name}}</td>
                                <td>{{$doctor->surname}}</td>
                                <td>{{$doctor->exp}}</td>
                                <td>sdfsdf</td>
                            </tr>

                        @endforeach
                    </table>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
