@extends('base')

@section('main')
<div class="container mt-3">
    <div class="col-xl-10  m-auto">
        <form action="{{ route('ticket.store') }}" method="post">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-primary"> View Ticket </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" class="form-control" placeholder="Ticket Title" name="title" disabled value="{{ $ticket->title }}">
                            </div>
                            <div class="form-group">
                                <label> Ticket Number </label>
                                <input type="text" class="form-control" placeholder="Ticket Number" name="ticket_number" disabled value="{{ $ticket->ticket_number }}">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" class="form-control" placeholder="Write a Short Description" name="description" disabled value="{{ $ticket->description }}">
                            </div>
                            <div class="form-group">
                                <label> Created Date </label>
                                <input type="date" class="form-control" placeholder="Date Created" name="created_date" disabled value="{{ $ticket->created_date }}">
                            </div>
                            <div class="form-group">
                                <label> Completed Date </label>
                                <input type="date" class="form-control" placeholder="Date Completed" name="completed_date" disabled value="{{ $ticket->completed_date }}">
                            </div>
                            <div class="form-group">
                                <label> User assigned </label>
                                <input type="text" class="form-control" placeholder="Assign a User" name="assigned" disabled value="{{ $ticket->assigned }}">
                            </div>
                            <div class="form-group">
                                <label> Ticket Status </label>
                                <select class="form-control" name="status" disabled>
                                    @if($ticket->status == "open")
                                        <option value="open"> Open </option>
                                    @endif
                                    @if($ticket->status == "review")
                                        <option value="review"> In Review </option>
                                    @endif
                                    @if($ticket->status == "closed")
                                        <option value="closed"> Closed </option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{ route('ticket.index') }}" class="btn btn-danger" name="submit"> Exit </a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection