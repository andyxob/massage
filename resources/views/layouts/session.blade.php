<div @if($session->isDone()) class="alert alert-success" @else class="alert alert-warning" @endif>

    <h1># {{$session->id}}</h1>

    <h2>Doctor: {{$session->doctor->name ." " . $session->doctor->surname}} </h2>
    <h2>Massage: {{$session->massage->name}}</h2>
    <h3>Date: {{$session->date}}</h3>
    <h3>Time : {{\Carbon\Carbon::createFromFormat('H:i:s', $session->time->time)->format('h:i A')}}</h3>
    <h4>Is done:
        @if($session->is_done == 1)
            Yes
        @else
            No
        @endif</h4>
</div>
