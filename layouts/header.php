<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Static Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary rounded">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <h3>Static Website</h3>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="features.php">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <!-- Registration & Login access -->
                    <span>                    
                        <button type="button" class="btn btn-outline-secondary " data-bs-toggle="modal"
                            data-bs-target="#login">
                            Login
                        </button>

                        <button type="button" class="btn btn-outline-primary me-1" data-bs-toggle="modal"
                            data-bs-target="#regist">
                            Registration
                        </button>
                    </span>
                </div>
            </div>
        </nav>
    </header>