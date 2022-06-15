@extends('base')

@isset($massage)
    @section('title', 'Edit massage '.$massage->name)
@else
    @section('title', 'Create massage')
@endisset

@section('content')

    <form method="post" enctype="multipart/form-data" @isset($massage)
        action="{{route('massages.update', $massage)}}">
        @else
            action="{{route('massages.store')}}">
        @endisset

        @isset($massage)
            @method('PUT')
        @endisset

        <div>
            @isset($massage)
                @method('PUT')
            @endisset
            @csrf

            <div>

                @error('name')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror


                <input type="text" class="form-control mt-2" placeholder="Enter massage name" name="name" id="name"
                       @isset($massage) value="{{$massage->name}}"@endisset>

            </div>

            <div>
                @error('description')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror

                <input type="text" class="form-control mt-2" placeholder="Enter massage description" name="description"
                       id="description"
                       @isset($massage) value="{{$massage->description}}"@endisset>
            </div>


                <div>
                    @error('price')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror

                    <input type="number" placeholder="Enter massage price" id="price" name="price" class="form-control mt-2"
                           @isset($massage) value="{{$massage->price}}"@endisset>
                </div>

            <button type="submit" class="btn btn-success mt-2">@isset($massage)
                    Edit massage
                @else
                    Create massage
                @endisset</button>
        </div>
    </form>
@endsection
