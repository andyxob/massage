@extends('base')

@isset($doctor)
    @section('title', 'Edit doctor '.$doctor->name)
@else
    @section('title', 'Create doctor')
@endisset

@section('content')

    <form method="post" enctype="multipart/form-data" @isset($doctor)
        action="{{route('doctors.update', $doctor)}}">
    @else
        action="{{route('doctors.store')}}">
    @endisset

        @isset($doctor)
            @method('PUT')
        @endisset

        <div>
            @isset($doctor)
                @method('PUT')
            @endisset
            @csrf
            <input type="text" class="form-control mt-2" placeholder="Enter doctor name" name="name" id="name"
                   @isset($doctor) value="{{$doctor->name}}"@endisset>

            <input type="text" class="form-control mt-2" placeholder="Enter doctor surname" name="surname" id="surname"
                   @isset($doctor) value="{{$doctor->surname}}"@endisset>


            <input type="number" placeholder="Enter doctor exp" id="exp" name="exp" class="form-control mt-2"
                   @isset($doctor) value="{{$doctor->exp}}"@endisset>

            <input type="file" id="image" name="image" class="form-control mt-2" >

            <button type="submit" class="btn btn-success mt-2">@isset($doctor)Edit doctor @else Create doctor @endisset</button>
        </div>
    </form>
@endsection
