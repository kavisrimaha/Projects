<!-- Include header -->
<?= view('template/header'); ?>

<div class="container">
    <div class="row justify-content-center align-items-center d-flex" style="height: 100vh;">
        <div class="col-auto">
           <div class="card p-4" style="min-width: 500px;"> <!-- Added padding inside card -->
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Register</h3>
                    <form action="/register" method="post">
                        <div class="mb-3">
                            <label for="firstame" class="form-label">First Name:</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" required >
                        </div>

                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name:</label>
                            <input type="text" id="lastname" name="lastname" class="form-control"required  >
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" name="email" class="form-control"required  >
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" id="password" name="password" class="form-control" required  >
                        </div>

                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password:</label>
                            <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required >
                        </div>
                            <?php if (isset($validation)): ?>
                                    <div class="alert alert-danger">
                                        <?= $validation->listErrors() ?>
                                    </div>
                             <?php endif; ?>

                        <div class="d-grid">
                            <input type="submit" value="Register" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include footer -->
<?= view('template/footer'); ?>
