<!-- resources/views/personas/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Persona</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Persona</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('personas.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="nombre1">Primer Nombre</label>
                                <input type="text" class="form-control" id="nombre1" name="nombre1" required>
                            </div>

                            <div class="form-group">
                                <label for="nombre2">Segundo Nombre</label>
                                <input type="text" class="form-control" id="nombre2" name="nombre2">
                            </div>

                            <div class="form-group">
                                <label for="apellido1">Primer Apellido</label>
                                <input type="text" class="form-control" id="apellido1" name="apellido1" required>
                            </div>

                            <div class="form-group">
                                <label for="apellido2">Segundo Apellido</label>
                                <input type="text" class="form-control" id="apellido2" name="apellido2">
                            </div>

                            <div class="form-group">
                                <label for="edad">Edad</label>
                                <input type="number" class="form-control" id="edad" name="edad" required>
                            </div>

                            <div class="form-group">
                                <label for="rut">RUT</label>
                                <input type="text" class="form-control" id="rut" name="rut" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
