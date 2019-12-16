<select id="{{$field ?? 'channel_id' }}" class="form-control" name="{{$field ?? 'channel_id' }}">
    @foreach ($channels as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
    <option> </option>
</select>