<div>

    <h1> Update data </h1>
    <form action="/edit-student/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" value="{{$data->name}}" placeholder="Write your name">
        <br> <br>
        <input type="text" name="email" value="{{$data->email}}" placeholder="Write your email">
        <br> <br>
        <input type="text" name="phone" value="{{$data->phone}}" placeholder="Write your phone number">
        <br> <br>
        <button> Update </button>
        <a href="/list"> Cancel </a>
    </form>


</div>