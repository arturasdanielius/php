@extends('layouts.app')

@section('content')
<div  class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>New Restauran</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('r_store')}}" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Title</span>
                            <input type="text" name="title" class="form-control" value="{{old('title')}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Town</span>
                            <input type="text" name="town" class="form-control" value="{{old('town')}}">
                        </div>
                        <div data-clone class="input-group mt-3">
                            <span class="input-group-text">Address</span>
                            <input type="file" name="address" class="form-control" value="{{old('address')}}">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Work time</span>
                            <input type="text" name="title" class="form-control" value="{{old('workTime')}}">
                        </div>
                        @csrf
                        <button type="submit" class="btn btn-secondary mt-4">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection