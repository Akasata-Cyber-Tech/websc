<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.register') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>
<!-- register -->
<div id="app" class="app">
		<div class="login login-v2 fw-bold">
			<div class="login-cover">
				<div class="login-cover-img" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
				<div class="login-cover-bg"></div>
			</div>
			

			<div class="login-container">
				<div class="login-header">
					<div class="brand">
						<div class="d-flex align-items-center">
							<span class="logo"></span>Register
						</div>
					</div>
				</div>
				
				<div class="login-content">
                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?>
                                <br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

					<form action="<?= url_to('register') ?>" method="POST">
					<?= csrf_field() ?>
                    <!-- email -->
						<div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px border-0" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required/>
							<label class="d-flex align-items-center text-gray-600 fs-13px">Email Address</label>
						</div>

                    <!-- username -->
                    <div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px border-0" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>" required />
							<label class="d-flex align-items-center text-gray-600 fs-13px">Username</label>
					</div>

                    <!-- password -->
						<div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" name="password" placeholder="<?= lang('Auth.password') ?>"/>
							<label class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
						</div>
                        <div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" name="password_confirm" placeholder="<?= lang('Auth.passwordConfirm') ?>"/>
							<label class="d-flex align-items-center text-gray-600 fs-13px">Confirm Password</label>
						</div>

						<div class="mb-20px">
							<button type="submit" name="submit" class="btn btn-success d-block w-100 h-45px btn-lg"><?= lang('Auth.register') ?></button>
						</div>

                        <p class="text-center"><?= lang('Auth.haveAccount') ?> <a href="<?= url_to('login') ?>"><?= lang('Auth.login') ?></a></p>
					
					</form>
				</div>
			</div>
		</div>
	</div>

<!-- end register -->

<?= $this->endSection() ?>
