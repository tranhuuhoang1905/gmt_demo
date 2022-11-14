<form action="{{route('login')}}" method="post">
    @csrf
    <input type="text" name="name">
    <input type="text" name="passwords">
    <input type="submit">
</form>