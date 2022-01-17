@extends('app')


@section('content')
<table class='table'>
<thead>
    <tr class="table-primary">
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>Username</th>
        
    </tr>
</thead>

    @foreach ($users as $user)
    <tr>
       <td>{{$user->id}} </td>
       <td>{{$user->f_name . ' ' . $user->l_name}} </td>
       <td>{{$user->email}} </td>
       <td>{{$user->username}} </td>
      
    </tr>
    @endforeach
</table>

@endsection('content')