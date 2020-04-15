@extends('base')

@section('main')
<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <a href="{{ url('ticket/create') }}" class="btn btn-info"> <i class="fas fa-plus-circle"></i>Create Ticket </a>
        </div>
    </div>
</div>