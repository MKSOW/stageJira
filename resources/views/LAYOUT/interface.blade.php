<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYMPA-JIRA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">SYMPA-JIRA</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="#">ACCEUIL</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('PetiteEntreprise.index') }}">PETITE ENTREPRISE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Projets.index') }}">PROJETS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('Taches.index') }}">TACHES</a>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('Employe.index') }}">EMPLOYE</a>
                            </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col">
                    <center><h1 class="mt-5"> BIENVENUE SUR  SYMPA JIRA !!! </h1></center>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container text-center">
            <span class="text-muted">&copy; {{ date('Y') }} SYMPA-JIRA. Tous droits réservés.</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Inclure Bootstrap JS -->
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
