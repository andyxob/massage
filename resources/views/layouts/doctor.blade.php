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
            <td><img src="{{\Illuminate\Support\Facades\Storage::url($doctor->image)}}" height="250" width="250"></td>
        </tr>
        </tbody>
    </table>
</div>
