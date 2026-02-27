<div>

  <h1> List of students </h1>

  <form action="search" method="get">
    <?php echo csrf_field(); ?>
    <input type="text" placeholder="Search with name" name="search" value="<?php echo e(@$search); ?>">
    <button> Search </button>
  </form>


  <form action="delete-multi" method="post">
    <?php echo csrf_field(); ?>
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
      <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><input type="checkbox" name="ids[]" value="<?php echo e($student->id); ?>"></td>
        <td> <?php echo e($student->name); ?> </td>
        <td> <?php echo e($student->email); ?> </td>
        <td> <?php echo e($student->phone); ?> </td>
        <td> <?php echo e($student->created_at); ?> </td>
        <td>
          <a href="<?php echo e('delete/'.$student->id); ?>"> Delete </a>

          <a href="<?php echo e('edit/'.$student->id); ?>"> Edit </a>
        </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </table>
  </form>
  <br>
  <br>

  // Applying pagination

  <?php echo e($students->links()); ?>



</div>

<style>
  .w-5.h-5 {
    width: 1px;
  }
</style><?php /**PATH C:\Users\ACER\Desktop\INTERNSHIP PROJECTS\laravelCRUD\resources\views/list-student.blade.php ENDPATH**/ ?>