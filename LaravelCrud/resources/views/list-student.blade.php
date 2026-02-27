<div>

  <h1> List of students </h1>

  <form action="search" method="get">
    @csrf
    <input type="text" placeholder="Search with name" name="search" value="{{@$search}}">
    <button> Search </button>
  </form>


  <form action="delete-multi" method="post">
    @csrf
    <button> Delete </button>

        <table border="1">

      <tr>
        <td> Section</td>
        <td> Name </td>
        <td> Email </td>
        <td> Phone </td>
        <td> Created_at </td>
        <td>Operation </td>

      </tr>
      @foreach($students as $student)
      <tr>
        <td><input type="checkbox" name="ids[]" value="{{$student->id}}"></td>
        <td> {{$student->name}} </td>
        <td> {{$student->email}} </td>
        <td> {{$student->phone}} </td>
        <td> {{$student->created_at}} </td>
        <td>
          <a href="{{'delete/'.$student->id}}"> Delete </a>

          <a href="{{'edit/'.$student->id}}"> Edit </a>
        </td>
      </tr>
      @endforeach

      </table>
  </form>
  <br>
  <br>

  // Applying pagination

  {{$students->links()}}


</div>

<style>
  .w-5.h-5 {
    width: 1px;
  }
</style>