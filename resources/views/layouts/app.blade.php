<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Sistema de Contratos - CEB')</title>
    
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    
    
    <style>
        body {
            background-color: #1b5c83; 
            color: #fff;
        }
        .navbar {
            background-color: #1b5c83; 
        }
        .btn-primary {
            background-color: #E87B14; 
            border: none;
            color: #004b87;
        }
        .btn-primary:hover {
            background-color: #E87B14;
            color: #1b5c83;
        }
        .container {
            margin-top: 2rem;
            background: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            color: #1b5c83;
        }
        footer {
            margin-top: 2rem;
            padding: 1rem 0;
            background-color: #1b5c83;
            color: #ffffff;
            text-align: center;
        }
       
        .logo-ceb {
            height: 40px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center">
                <img src="{{ asset('images/logo-ceb.png') }}" alt="CEB Logo" class="logo-ceb me-2" />
                <span>Sistema de Contratos CEB</span>
            </a>

            <div class="ms-auto">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-warning">Sair</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        © {{ date('Y') }} Companhia Energética de Brasília - CEB
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
