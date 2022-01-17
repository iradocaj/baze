@extends('app')


@section('content')

<table class='table'>
<thead>
    <tr class="table-primary">
        <th>ID</th>
        <th>Genre</th>
        
    </tr>
</thead>

    @foreach ($genres as $genre)
    <tr>
       <td>{{$genre->id}} </td>
       <td>{{$genre->genre}} </td>
       
    </tr>
    @endforeach
</table>

@endsection('content')