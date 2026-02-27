<div>


    <h1> Add Students </h1>

  <form action="add" method="post">
    <?php echo csrf_field(); ?>
    <input type="text" name="name" placeholder="Write your name">
    <br> <br>
    <input type="text" name="email" placeholder="Write your email">
    <br> <br>
    <input type="text" name="phone" placeholder="Write your phone number">
    <br> <br>
    <button> Add Student </button>
</form>

</div><?php /**PATH D:\LEARN PROGRAMMING\LARAVEL\Part 8\laravelCRUD\resources\views/add-student.blade.php ENDPATH**/ ?>