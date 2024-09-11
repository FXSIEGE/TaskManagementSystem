<body>
    <section>
        <div class="container py-4">
        <p>Full name</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="nama" placeholder="Please enter your full name" value="<?= $nama?>">
          </div>

          <p>Username</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="username" placeholder="Please enter your username" value="<?= $username?>">
          </div>

          <p>Email</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="email" placeholder="Please enter your email" value="<?= $email?>">
          </div>

          <p>Password</p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="password" placeholder="Please enter your password" value="<?= $password?>">
          </div>
          <button type="button" class="btn btn-primary">Submit</button>
          </div>
    </section>
</body>