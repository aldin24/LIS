<br>
<br><br><br><br><br>



<section>
    <div class="container">
        <div class="row justify-content-md-center">

            <div class="col-md-6">
<br><br><br>
                <?= form_open('login/verifylogin') ?>
                    <form>
                        <div class="form-group">
                            <label for="username">Username</label> <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>" placeholder="Username" maxlength="50" required autofocus />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label> <input type="password" name="password" id="password" class="form-control" value="<?= set_value('password') ?>" placeholder="Password" maxlength="32" required />
                        </div>
                        <div style="color:#f00 !important; font-size:14px !important; font-weight:bold !important;">
                            <?= validation_errors() ?>
                        </div>

                        <button class="btn btn-success" style="width: 100%;">
					<span class="glyphicon glyphicon-log-in"></span>&nbsp;
					Login
				</button>



                    </form>
            </div>
            <div class="col-md-6">
                <div class="jumbotron">
                    <h1 class="display-4">Welcome back!</h1>
                    <p class="lead">If you don't have an account you can register by click the register button bellow.</p>
                    <hr class="my-4">

                    <a class="btn btn-primary btn-lg" href="#" role="button">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>
