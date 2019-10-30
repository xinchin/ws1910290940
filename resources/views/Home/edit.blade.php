<form action="/home/test/store" method="POST">
    @csrf
<input type="text" name="name" id="">
<button type="submit">submit</button>
</form>
@if ($errors->has('name'))
    {{ $errors->first('name') }}
@endif
