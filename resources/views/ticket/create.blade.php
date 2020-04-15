@extends('base')

@section('main')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title text-primary"> Create Ticket </h4>
        </div>
        <div class="card-body">
            <div class="row">
                {{--  check for a success message and print it  --}}
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                </div>
                @endif
            </div>
            <div class="row">
                <form action="{{ route('ticket.store') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label> Title </label>
                        <input type="text" name="title">

                        <label> Ticket Number </label>
                        <input type="text" name="ticket_number">
                    </div>

                    <div class="form-group">
                        <label> Description </label>
                        <input type="text" name="description">

                        <label> User assigned </label>
                        <input type="text" name="assigned">
                    </div>

                    <div class="form-group">
                        <label> Created Date </label>
                        <input type="date" name="created_date">

                        <label> Completed Date </label>
                        <input type="date" name="completed_date">
                    </div>

                    <div class="form-group">
                        <label> Ticket Status </label>
                        <input type="text" name="status">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="submit"> Create Ticket </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection