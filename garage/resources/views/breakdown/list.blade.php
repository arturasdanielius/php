<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>BreakDowns</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($breakdowns as $breakdown)
                        <li class="list-group-item">
                            <div class="breakdowns-list">
                                <div class="content">
                                    <h2>{{$breakdown->title}}</h2>
                                    <h4><span>status: </span>{{$status[$breakdown->status]}}</h4>
                                </div>
                                <div class="buttons">
                                    <button data-id="{{$breakdown->id}}" type="button" class="btn btn-success edit--button">Edit</button>
                                    <button data-id="{{$breakdown->id}}" type="button" class="btn btn-danger delete--button">Delete</button>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No breakdowns found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>