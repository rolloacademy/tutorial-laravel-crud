@foreach($siswa as $s)
    <li>{{$s->user->name}}</li>
@endforeach