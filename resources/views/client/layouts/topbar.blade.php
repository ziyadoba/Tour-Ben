<div class="container-fluid bg-primary px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-4 ms-auto text-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">
                    <small class="me-3 text-light">
                        <i class="fa fa-user me-2"></i>Inscription
                    </small>
                </a>

                <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                    <small class="me-3 text-light">
                        <i class="fa fa-sign-in-alt me-2"></i>Connexion
                    </small>
                </a>

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle text-light" data-bs-toggle="dropdown"><small><i
                                class="fa fa-home me-2"></i> Tableau de bord</small></a>
                    <div class="dropdown-menu rounded">
                        <a href="#" class="dropdown-item"><i class="fas fa-user-alt me-2"></i> Mon Profil</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-bell me-2"></i> Notifications</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-cog me-2"></i> Paramètres</a>
                        <a href="#" class="dropdown-item"><i class="fas fa-power-off me-2"></i> Deconnection</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Connexion -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Connexion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Votre email" required>
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="motdepasse" placeholder="Votre mot de passe"
                            required>
                    </div>
                    <button type="submit" class="btn btn-secondary rounded-pill text-white w-100">Se connecter</button>
                </form>
                <div class="mt-3 text-center">
                    <small>Pas encore de compte ?
                        <a href="#" data-bs-target="#registerModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Inscrivez-vous ici</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Inscription -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Inscription</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm">
                    <div class="row g-3">
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control" id="nom" placeholder="Votre nom" required>
                            <label for="nom">Nom</label>
                        </div>
                        <div class="col-md-6 form-floating">
                            <input type="text" class="form-control" id="prenom" placeholder="Votre prenom"
                                required>
                            <label for="prenom">Prenom</label>
                        </div>
                        <div class="col-12 form-floating">
                            <input type="email" class="form-control" id="email" placeholder="Votre email"
                                required>
                            <label for="email">Email</label>
                        </div>
                        <div class="col-12 form-floating">
                            <input type="password" class="form-control" id="motdepasse" placeholder="Mot de passe"
                                required>
                            <label for="motdepasse">Mot de passe</label>
                        </div>
                        <div class="col-12 form-floating">
                            <input type="password" class="form-control" id="motdepasseconfirmer"
                                placeholder="Confirmez le mot de passe" required>
                            <label for="motdepasseconfirmer">Confirmation mot de passe</label>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-secondary w-100 py-2">Créer mon compte</button>
                        </div>
                    </div>
                </form>
                <div class="mt-3 text-center">
                    <small>Pas encore de compte ?
                        <a href="#" data-bs-target="#loginModal" data-bs-toggle="modal"
                            data-bs-dismiss="modal">Connectez-vous</a>
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Inclure Bootstrap JS (via CDN ou local) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
