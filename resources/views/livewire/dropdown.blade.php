<div>
    <div class="input-group mb-3">
        <label class="input-group-text bg-info" style="font-size: inherit !important;" for="inputGroupSelect{{$type}}">{{$title}}</label>
        <select class="form-select" id="inputGroupSelect{{$type}}">
            <option selected disabled>Choose...</option>
            <!-- @foreach ($options as $option) -->
            <option value="{{$option}}">{{$option}}</option>
            <!-- @endforeach -->
        </select>
    </div>
</div>