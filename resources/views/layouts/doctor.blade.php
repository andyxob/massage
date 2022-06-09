<div class="col -sm-6 col-md-4">
    <div class="thumnail">
        <img src="../../../../../Downloads/artworks-jVAKwcFrkDHsvvLw-PGq6Lg-t500x500.jpg" alt="image" width="150"
             height="150">
        <div class="caption">
            <h3> Name :{{$doctor->name}}</h3>
            <p> Surname :{{ $doctor->surname}}</p>
            <p> Experience : {{$doctor->exp}}</p>

            <div class="inline">
                @if(! \Illuminate\Support\Facades\Auth::user()->hasLikedDoctor($doctor))
                <a href="{{route('doctor.like', $doctor->id)}}" class="like">Like</a>
                @else
                    <a href="{{route('doctor.unlike', $doctor->id)}}" class="like">Unlike</a>
                @endif
                <p>{{$doctor->likes->count()}} {{Str::plural('like', $doctor->likes->count() )}}</p>
            </div>
        </div>
    </div>
</div>
