<h1># {{$session->id}}</h1>

<h1>Doctor: {{$session->doctor->name ." " . $session->doctor->surname}} </h1>
<h2>Massage: {{$session->massage->name}}</h2>
<h2>Time: {{$session->time->time}}</h2>
<h3>Is done: {{$session->is_done}}</h3>

