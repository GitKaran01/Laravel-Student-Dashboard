<div>

    <h1> Update data </h1>
    <form action="/edit-student/<?php echo e($data->id); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="put" />
        <input type="text" name="name" value="<?php echo e($data->name); ?>" placeholder="Write your name">
        <br> <br>
        <input type="text" name="email" value="<?php echo e($data->email); ?>" placeholder="Write your email">
        <br> <br>
        <input type="text" name="phone" value="<?php echo e($data->phone); ?>" placeholder="Write your phone number">
        <br> <br>
        <button> Update </button>
        <a href="/list"> Cancel </a>
    </form>


</div><?php /**PATH C:\Users\ACER\Desktop\INTERNSHIP PROJECTS\laravelCRUD\resources\views/edit-student.blade.php ENDPATH**/ ?>