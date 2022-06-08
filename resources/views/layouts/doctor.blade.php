<div class="col -sm-6 col-md-4">
    <div class="thumnail">
        <img src="../../../../../Downloads/artworks-jVAKwcFrkDHsvvLw-PGq6Lg-t500x500.jpg" alt="image" width="150" height="150">
        <div class="caption">
            <h3> Name :{{$doctor->name}}</h3>
            <p> Surname :{{ $doctor->surname}}</p>
            <p> Experience : {{$doctor->exp}}</p>

            <div class="inline">
            <form action="{{ route('doctor.like', $doctor->id) }}" method="post">
                @csrf
                <button class="{{ $doctor->liked() ? 'bg-blue-600' : '' }} px-4 py-2 text-white bg-gray-600">
                    like
                </button>
            </form>

            <form action="{{ route('doctor.unlike', $doctor->id) }}"
                  method="post">
                @csrf
                <button
                    class="{{ $doctor->liked() ? 'block' : 'hidden'  }} px-4 py-2 text-white bg-red-600">
                    unlike
                </button>
            </form>
            </div>


        </div>
    </div>
</div>
