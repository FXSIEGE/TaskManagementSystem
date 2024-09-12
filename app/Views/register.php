   <section>
        <div class="container py-4">
        <form method="post" action="<?php echo base_url();?>register">
        <div class="alert alert-danger" role="alert">
          <?php echo session()->getFlashdata('error');?>
          </div>
        <p>Full name</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Please enter your full name" aria-label="Full name">
          </div>

          <p>Username</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="username" placeholder="Please enter your username" aria-label="Username">
          </div>

          <p>Email</p>
        <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Please enter your email" aria-label="Email">
          </div>

          <p>Password</p>
        <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Please enter your password" aria-label="Password">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>

</form>
    </section>



<?php if (session()->getFlashData('error')) { ?>
<script>
  Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "<?php echo session()->getFlashdata('error');?>"
});</script>
<?php } ?>