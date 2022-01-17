@extends('app')


@section('content')
<table class="table">
<thead>
    <tr class="table-primary">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Tel</th>
    </tr>
</thead>

    @foreach ($authors as $author)
    <tr>
       <td>{{$author->id}} </td>
       <td>{{$author->f_name . ' ' . $author->l_name}} </td>
       <td>{{$author->email}} </td>
       <td>{{$author->tel}} </td>
    </tr>
    @endforeach
</table>

@endsection('content')


