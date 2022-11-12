@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Change Category</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('m_edit', $category)}}" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Name</span>
                        <input type="text" name="name" class="form-control" value={{old('name', $category->name)}}>
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Surname</span>
                        <input type="text" name="surname" class="form-control" value={{old('surname', $category->surname)}}>
                    </div>
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-secondary mt-4">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection