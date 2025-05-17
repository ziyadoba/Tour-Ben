<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Inscription</title>
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

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.2s;
            margin-bottom: 1rem;
        }

        input:focus {
            outline: none;
            border-color: #7a9cc6;
        }

        .invalid-feedback {
            color: #c0392b;
            font-size: 0.875rem;
            margin-top: -0.75rem;
            margin-bottom: 1rem;
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
            width: 100%;
            margin-top: 0.5rem;
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

        .link-login {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .link-login a {
            color: #666;
            text-decoration: none;
            transition: color 0.2s;
        }

        .link-login a:hover {
            color: #444;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="card">
            <div class="card-body">
                <h1>Inscription</h1>

                <form method="POST" action="/register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                    <!-- Nom -->
                    <label for="name">Nom</label>
                    <input id="name" type="text" name="name" required autofocus autocomplete="name" />

                    <!-- Email -->
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" required autocomplete="username" />

                    <!-- Mot de passe -->
                    <label for="password">Mot de passe</label>
                    <input id="password" type="password" name="password" required autocomplete="new-password" />

                    <!-- Confirmation -->
                    <label for="password_confirmation">Confirmation</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        autocomplete="new-password" />

                    <button type="submit" class="btn">S'inscrire</button>
                </form>

                <div class="link-login">
                    Déjà un compte ? <a href="/login">Connectez-vous</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Simulation d'erreurs renvoyées par le serveur
        const errors = {
            name: ["Le nom est requis."],
            email: ["L'email est invalide."],
            password: ["Le mot de passe doit faire au moins 8 caractères."],
            password_confirmation: ["Les mots de passe ne correspondent pas."]
        };

        // Affichage des erreurs
        for (const [field, messages] of Object.entries(errors)) {
            const input = document.getElementById(field);
            const errDiv = document.getElementById(`error-${field}`);
            if (input && errDiv) {
                input.classList.add('is-invalid');
                errDiv.textContent = messages[0];
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
