<select name="truck_id" class="form-select mt-3">
    @foreach($trucks as $truck)
    <option value="{{$truck->id}}">{{$truck->plate}} {{$truck->maker}}</option>
    @endforeach
</select>