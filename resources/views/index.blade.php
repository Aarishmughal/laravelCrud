@extends('layouts.app')
@section('title', 'CRUD App V2')
@section('pageTitle', 'CRUD App V2')
@section('content')
    <div class="row mb-3">
        <div class="col">
            <a href="{{ route('add') }}" class="btn btn-primary" title="Add New Item">Add New Item</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-secondary table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Options</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

@endsection
