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

  
    .pagination {
        display: flex;
        justify-content: center;
        padding-left: 0;
        list-style: none;
        border-radius: 0.375rem;
    }

    .pagination .page-item .page-link {
        color: #E87B14;
        border: 1px solid #E87B14;
        padding: 0.5rem 0.75rem;
        margin: 0 2px;
        background-color: #fff;
        transition: all 0.3s ease-in-out;
    }

    .pagination .page-item.active .page-link {
        background-color: #E87B14;
        border-color: #E87B14;
        color: #fff;
    }

    .pagination .page-item .page-link:hover {
        background-color: #e87b14cc;
        color: #fff;
    }

    .pagination .page-item.disabled .page-link {
        color: #ccc;
        pointer-events: none;
        background-color: #f8f9fa;
        border-color: #dee2e6;
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
