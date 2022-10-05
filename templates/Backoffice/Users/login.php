<div class="d-none d-lg-flex col-sm-4 align-items-center p-5">
</div>
<div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
    <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
        <h2 class="card-title fw-bold mb-1" style="margin-top: 50px;text-align: center;">Espace membre</h2>
        <p class="card-text mb-2" style="text-align:center">Connectez-vous pour pouvoir accéder à vos favoris et commentez les articles.</p>
        <?= $this->Form->create(null, ['class' => 'auth-login-form mt-2']) ?>
            <div class="mb-1">
                <label class="form-label" for="login-email">E-mail</label>
                <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control', 'placeholder' => 'john@example.com', 'required' => true]) ?>
            </div>
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="login-password">Password</label><a href="<?= $this->Url->build('/backoffice/mot-de-passe-oublie'); ?>"><small>Mot de passe oublié?</small></a>
                </div>
                <div class="input-group input-group-merge form-password-toggle">
                    <?= $this->Form->control('password', ['templates' => 'app_form', 'label' => false, 'class' => 'form-control form-control-merge', 'placeholder' => '....................', 'required' => true]) ?> 
                    
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
            
                </div>
            </div>
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="remember-me" type="checkbox" tabindex="3" />
                    <label class="form-check-label" for="remember-me"> Se souvenir de moi</label>
                </div>
            </div>
            <button class="btn btn-primary w-100" tabindex="4">Connexion</button>
            <?= $this->Form->end() ?>
        </form>
        <p class="text-center mt-2"><span>Un problème pour se connecter ?</span><a href="<?= $this->Url->build('/backoffice/report'); ?>"><span>&nbsp;Contactez moi.</span></a></p> </div>
</div>