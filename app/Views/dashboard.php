<header class=" text-black text-center py-5">
        <div class="container">
            <h1>Welcome to Task Management System</h1>
            <p class="lead">Manage your tasks effectively and efficiently</p>
        </div>
        <a href="<?php echo base_url(); ?>newtask" class="btn btn-primary btn-lg">Add New Task</a>
    </header>
    
    <section>
        <div class="container">
        <h2>Your Tasks</h2>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Due Date</th>
                <th scope="col">Status</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            <?php 
                     $id = 1;
                    foreach ($tasks as $task): 
                       
                        ?>
                        <tr>
                            <td><?=$id?></td>
                            <td><?= $tasks['title'] ?></td>
                            <td><?= $tasks['description'] ?></td>

                            <td><?=$tasks['due_date']?></td>
                            <td><?php echo $status[$tasks['status']]; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>update/<?= $task['id'] ?>" class="btn btn-warning btn-sm">Update</a>
                                <a href="<?php echo base_url();?>delete/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <?php $id++; endforeach;?>
            </tbody>
          </table>
          </div>
    </section>
    
    <?php if (session()->getFlashdata('success')): ?>
                   
                   <script>
                       Swal.fire({
                 title: "Success!!",
                 text: "<?php echo session()->getFlashdata('success'); ?>",
                 icon: "success"
               });
               </script>
                               <?php endif; ?>

</body>