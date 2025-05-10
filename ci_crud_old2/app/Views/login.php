<!-- Include header -->
<?= view('template/header'); ?>

<div class="container">
        <div class="row justify-content-center align-items-center d-flex" style="height: 100vh;">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login</h3>
                        <?php if (session()->get('success')): ?>
                            <div class="alert alert-success" role="alert">
                               <?= session ()->get('success')?>
                            </div>
                        <?php endif; ?>
                        <form action="login" method="POST">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="row d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary btn-block col-5">Login</button>
                                <a href="/register" class="col-4 text-right">Don't have an account?</a>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
<!-- Include footer -->
<?= view('template/footer'); ?>
