<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Connexion</title>
    <style>
        /* Reset minimaliste */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ece9e6, #ffffff);
            color: #333;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        .card-body {
            padding: 30px;
        }

        h1 {
            font-size: 1.75rem;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #444;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s;
            margin-bottom: 0.5rem;
        }

        input:focus {
            outline: none;
            border-color: #7a9cc6;
        }

        .invalid-feedback {
            color: #c0392b;
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .form-check-input {
            margin-right: 0.5rem;
            width: 1rem;
            height: 1rem;
        }

        .form-check-label {
            font-size: 0.95rem;
        }

        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .actions a {
            font-size: 0.9rem;
            color: #666;
            text-decoration: none;
            transition: color 0.2s;
        }

        .actions a:hover {
            color: #444;
        }

        .btn {
            background-color: #7a9cc6;
            color: #fff;
            padding: 0.65rem 1.2rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #5d7ba8;
        }

        #session-status {
            background-color: #e6f7e6;
            color: #2d6a2d;
            border: 1px solid #a3d9a5;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            margin-bottom: 1.5rem;
            display: none;
            text-align: center;
        }

        .link-register {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .link-register a {
            color: #7a9cc6;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }

        .link-register a:hover {
            color: #5d7ba8;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="card">
            <div class="card-body">
                <h1>Connexion</h1>

                <form method="POST" action="/connexion">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <!-- Email -->
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required autocomplete="username" />

                    <!-- Mot de passe -->
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" />

                    <!-- Se souvenir -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember" />
                        <label class="form-check-label" for="remember_me">Se souvenir de moi</label>
                    </div>

                    <div class="actions">
                        <a href="/password/reset">Mot de passe oublié&nbsp;?</a>
                        <button type="submit" class="btn">Se connecter</button>
                    </div>
                </form>

                <div class="link-register">
                    Pas encore de compte ? <a href="/register">Inscrivez‑vous</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Exemple d'erreurs simulées
        const errors = {
            email: ["L'email est requis."],
            password: ["Le mot de passe est incorrect."]
        };

        // Affichage des erreurs
        for (const [field, msgs] of Object.entries(errors)) {
            const input = document.getElementById(field);
            const err = document.getElementById(`error-${field}`);
            if (input && err) {
                input.classList.add('is-invalid');
                err.textContent = msgs[0];
            }
        }

        // Affichage du statut de session
        const status = document.getElementById('session-status');
        if (status.textContent.trim() !== "") {
            status.style.display = 'block';
        }
    </script>

</body>

</html>
