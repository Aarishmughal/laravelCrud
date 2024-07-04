@extends('layouts.app')
@section('title', 'Add New Item')
@section('pageTitle', 'Add New Item')
@section('content')
    <div class="row">
        <div class="col">
            <form action="{{ route('addProcess') }}" method="POST">
                @csrf
                <div class="row mb-2">
                    <div class="col-lg">
                        <label for="name" class="form-text">Enter Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ old("name") }}">
                        @error('name')
                        <div class="alert alert-danger p-1 mt-1" style="font-size: 10px">{{ $message }}</div>                            
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-lg">
                        <label for="quantity" class="form-text">Enter Quantity</label>
                        <input type="text" class="form-control" value="{{ old("quantity") }}" name="quantity" id="quantity">
                        @error('quantity')
                        <div class="alert alert-danger p-1 mt-1" style="font-size: 10px">{{ $message }}</div>                            
                        @enderror
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg">
                        <label for="price" class="form-text">Enter Price</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" value="{{ old("price") }}" name="price" id="price">
                        </div>
                        @error('price')
                        <div class="alert alert-danger p-1 mt-1" style="font-size: 10px">{{ $message }}</div>                            
                        @enderror
                    </div>
                </div>
                <hr>
                <div class="row mt-2">
                    <div class="col-lg-8">
                        <button class="btn btn-outline-primary" style="width:100%">Add Item</button>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route("index")}}" class="btn btn-outline-dark" style="width:100%">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
