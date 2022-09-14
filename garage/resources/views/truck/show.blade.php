@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Mechanic</h2>
                </div>
                <div class="card-body">
                    <h5>{{$mechanic->title}}</h5>
                    <p>{{$mechanic->post}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection