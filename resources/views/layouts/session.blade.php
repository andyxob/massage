<div @if($session->isDone()) class="alert alert-success" @else class="alert alert-warning" @endif>

    <h1># {{$session->id}}</h1>

    <h1>Doctor: {{$session->doctor->name ." " . $session->doctor->surname}} </h1>
    <h2>Massage: {{$session->massage->name}}</h2>
    <h2>Time : {{\Carbon\Carbon::createFromFormat('H:i:s', $session->time->time)->format('h:i')}}</h2>
    <h3>Is done:
        @if($session->is_done == 1)
            Yes
        @else
            No
        @endif</h3>
</div>
