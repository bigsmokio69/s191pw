<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Repaso 1</title>
</head>

<body>

    <div class="d-flex flex-column justify-content-center align-items-center full-height">
        <h1>Vista repaso 1</h1>
        <div class="mt-5">
            <!--FORM DE MB A GB-->
            <form method="POST" action="/convertmbgb">
                @csrf
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <select class="form-select" aria-label="xd" name="conv">
                                <option selected value="1">MB a GB</option>
                                <option value="2">GB  a MB</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="cantidad">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-success">Convertir</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="mt-5">
            <!--FORM DE GB A TB-->
            <form method="POST" action="/convertgbtb">
                @csrf
                <div class="container text-center">
                    <div class="row align-items-start">
                        <div class="col">
                            <select class="form-select" aria-label="xd" name="conv2">
                                <option selected value="3">GB a TB</option>
                                <option value="4">TB a GB</option>
                            </select>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" name="cantidad2">
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-outline-success">Convertir</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>