@extends('base')

@section('main')
<div class="container mt-3">
    <div class="col-xl-10  m-auto">
        <form action="{{ route('ticket.store') }}" method="post">
        @csrf
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
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                         </ul>
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="form-group">
                                <label> Title </label>
                                <input type="text" class="form-control" placeholder="Ticket Title" name="title">
                            </div>
                            <div class="form-group">
                                <label> Ticket Number </label>
                                <input type="text" class="form-control" placeholder="Ticket Number" name="ticket_number">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" class="form-control" placeholder="Write a Short Description" name="description">
                            </div>
                            <div class="form-group">
                                <label> Created Date </label>
                                <input type="date" class="form-control" placeholder="Date Creeated" name="created_date">
                            </div>
                            <div class="form-group">
                                <label> Completed Date </label>
                                <input type="date" class="form-control" placeholder="Date Completed" name="completed_date">
                            </div>
                            <div class="form-group">
                                <label> User assigned </label>
                                <input type="text" class="form-control" placeholder="Assign a User" name="assigned">
                            </div>
                            <div class="form-group">
                                <label> Ticket Status </label>
                                <select class="form-control" name="status">
                                    <option disabled selected> Select Status </option>
                                    <option value="open"> Open </option>
                                    <option value="review"> In Review </option>
                                    <option value="closed"> Closed </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="submit"> <i class="fas fa-caret-square-up"></i> Create Ticket </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection