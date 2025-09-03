<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - CEB</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <style>
        body {
            background: linear-gradient(135deg, #004080, #1b5c83);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem 3rem;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0,0,0,0.4);
            width: 100%;
            max-width: 400px;
        }
        .login-logo {
            display: block;
            margin: 0 auto 1.5rem;
            width: 120px;
            height: auto;
        }
        .form-control {
            border-radius: 0.5rem;
        }
         .btn-primary {
            background-color: #E87B14;
            border: none;
            color: #ffffff;
        }

        .btn-primary:hover {
            background-color: #cc6a10;
            color: #ffffff;
        }

        .btn-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(232, 123, 20, 0.5);
            outline: none;
        }
        .form-label {
            font-weight: 600;
        }
        .text-footer {
            text-align: center;
            margin-top: 1rem;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="login-container">
        
        <img src="images/logo-ceb.png" alt="CEB Logo" class="login-logo" />

        <h3 class="text-center mb-4">Login - Companhia Energética de Brasília</h3>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control @error('email') is-invalid @enderror" placeholder="seu.email@ceb.com.br" />
                @error('email')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Senha</label>
                <input id="password" type="password" name="password" required class="form-control @error('password') is-invalid @enderror" placeholder="••••••••" />
                @error('password')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>
        </form>

        <p class="text-footer">© {{ date('Y') }} Companhia Energética de Brasília - CEB</p>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
