<div class="col-md-12">

    <table class="table">
        <tbody>
        <tr>
            <th>Field</th>
            <th>Value</th>
        </tr>
        <tr>
            <td>Id</td>
            <td>{{$doctor->id}}</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>{{$doctor->name}}</td>
        </tr>
        <tr>
            <td>Surname</td>
            <td>{{$doctor->surname}}</td>
        </tr>
        <tr>
            <td>Exp</td>
            <td>{{$doctor->exp}}</td>
        </tr>
        <tr>
            <td>Image</td>
            <td><img src="{{\Illuminate\Support\Facades\Storage::url($doctor->image)}}" height="250" width="250" alt="This doctor has no image"></td>
        </tr>
        <tr>
            <td>@if(! \Illuminate\Support\Facades\Auth::user()->hasLikedDoctor($doctor))
                    <a href="{{route('doctor.like', $doctor->id)}}" class="like">Like</a>
                @else
                    <a href="{{route('doctor.unlike', $doctor->id)}}" class="like">Unlike</a>
                @endif</td>
            <td><p>{{$doctor->likes->count()}} {{Str::plural('like', $doctor->likes->count() )}}</p></td>


        </tr>


        </tbody>
    </table>



</div>
