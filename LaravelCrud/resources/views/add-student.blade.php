<div>


    <h1> Add Students </h1>

  <form action="add" method="post">
    @csrf
    <input type="text" name="name" placeholder="Write your name">
    <br> <br>
    <input type="text" name="email" placeholder="Write your email">
    <br> <br>
    <input type="text" name="phone" placeholder="Write your phone number">
    <br> <br>
    <button> Add Student </button>
</form>

</div>