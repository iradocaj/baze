@extends('app')


@section('content')

<table class='table'>
<thead>
    <tr class="table-primary">
        <th>Book ID</th>
        <th>User ID</th>
        <th>Score</th>
        <th>Comment</th>
        
    </tr>
</thead>

    @foreach ($reviews as $review)
    <tr>
       <td>{{$review->book_id}} </td>
       <td>{{$review->user_id}} </td>
       <td>{{$review->score}} </td>
       <td>{{$review->comment}} </td>
    
    </tr>
    @endforeach
</table>

@endsection('content')