<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?> <?= $this->endSection() ?>

<?= $this->section('main') ?>
<!-- login -->
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
							<span class="logo"></span>Login
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

                <?php if (session('message') !== null) : ?>
                <div class="alert alert-success" role="alert"><?= session('message') ?></div>
                <?php endif ?>
					<form action="<?= url_to('login') ?>" method="POST">
					<?= csrf_field() ?>
						<div class="form-floating mb-20px">
							<input type="text" class="form-control fs-13px h-45px border-0" name="email" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>" required id="emailAddress" />
							<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Email Address</label>
						</div>
						<div class="form-floating mb-20px">
							<input type="password" class="form-control fs-13px h-45px border-0" name="password" placeholder="<?= lang('Auth.password') ?>"/>
							<label for="emailAddress" class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
						</div>
						<?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                        <div class="form-check mb-20px">
                            <label class="form-check-label fs-13px text-gray-500">
                                <input type="checkbox" name="remember" class="form-check-input border-0" <?php if (old('remember')): ?> checked<?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>
						<div class="mb-20px">
							<button type="submit" name="submit" class="btn btn-success d-block w-100 h-45px btn-lg"><?= lang('Auth.login') ?></button>
						</div>
						<?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                        <p class="text-center"><?= lang('Auth.forgotPassword') ?> <a href="<?= url_to('magic-link') ?>"><?= lang('Auth.useMagicLink') ?></a></p>
                    <?php endif ?>
						<?php if (setting('Auth.allowRegistration')) : ?>
                        <p class="text-center"><?= lang('Auth.needAccount') ?> <a href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
                    <?php endif ?>
					</form>
				</div>
			</div>
		</div>
	</div>
<!--  -->

<?= $this->endSection() ?>
