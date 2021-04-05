@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
    @csrf
    <p><input type="file" name="image" accept="image/png, image/jpeg"></p>
    <p><input type="text" name="comment"></p>
    <p><input type="submit" value="post"></p>
</form>


