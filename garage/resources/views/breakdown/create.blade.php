<div id="breakdown" class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Register new breakdown</h2>
                </div>
                <div class="card-body">

                    <select name="mechanic_id" class="form-select mt-3">
                        <option value="0">Choose mechanic</option>
                        @foreach($mechanics as $mechanic)
                        <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                        @endforeach
                    </select>

                    <div id="trucks-list"></div>


                    <button type="submit" class="btn btn-secondary mt-4">Create</button>

                </div>
            </div>
        </div>
    </div>
</div>