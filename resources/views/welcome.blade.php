Chao {{$name}}!!!!!

<a href="{{route('homeUrl')}}" title="">Ve trang home</a>

<form action="/home" method="post">
    @csrf
    <button type="submit">Submit</button>
</form>