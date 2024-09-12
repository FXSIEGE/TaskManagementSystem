<body>
<section>

        <div class="container">
            <h1>
                <header>Add New Task</header>
            </h1>

            <div class="card">
                <div class="card-body">
                    <div class="row mb-3"></div>
                    <h5><label class="col-sm-2 col-form-label"><b>Task Details</b></label></h5>
                    <p>Please enter the details of the task you want to add</p>

                    <form method="post" action=<?php echo base_url();?>process_newtask>
                    <div class="col-sm-10">
                    </div>
                    <div class="row mb-3">
                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="title">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="duedate" class="col-sm-2 col-form-label">Due Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="duedate" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary">Add Task</button>
                        <div class="col-sm-6">

                        </div>
</form>
                    </div>
                </div>
            </div>
    </section>
