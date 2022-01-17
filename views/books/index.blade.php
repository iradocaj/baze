@extends('app')


@section('content')

<table class='table'>
<thead>
    <tr class="table-primary">
        <th>id</th>
        <th>Title</th>
        <th>Release year</th>
        <th>ISBN</th>
        <th>Genre ID</th>
    </tr>
</thead>

    @foreach ($books as $book)
    <tr>
       <td>{{$book->id}} </td>
       <td>{{$book->title}} </td>
       <td>{{$book->year}} </td>
       <td>{{$book->isbn}} </td>
       <td>{{$book->genre_id}} </td>
    </tr>
    @endforeach
</table>
@endsection('content')