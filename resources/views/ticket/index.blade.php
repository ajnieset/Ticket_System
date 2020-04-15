@extends('base')

@section('main')
<link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <a href="{{ url('ticket/create') }}" class="btn btn-info"> <i class="fas fa-plus-circle"></i> Create Ticket </a>
        </div>
    </div>

    <table class="table table-striped table-bordered mt-4 bg-white">
        <thead>
            <th> Title </th>
            <th> Ticket Number </th>
            <th> Description </th>
            <th> User Assigned </th>
            <th> Created Date </th>
            <th> Completed Date </th>
            <th> Status </th>
            <th> Options </th>
        </thead>

        <tbody>
            @foreach($tickets as $ticket)
            <tr>
                <td> {{ $ticket->title }} </td>
                <td> {{ $ticket->ticket_number }} </td>
                <td> {{ $ticket->description }} </td>
                <td> {{ $ticket->assigned }} </td>
                <td> {{ $ticket->created_date }} </td>
                <td> {{ $ticket->completed_date }} </td>
                <td> {{ $ticket->status }} </td>
                <td> 
                    <form action="{{ route('ticket.destroy', $ticket->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('DELETE')
                        <button class="badge btn-danger" type="submit"> Delete </button>
                   </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection