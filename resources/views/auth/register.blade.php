<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Sistema RSU</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #ffffff;
        }

        .login-container {
            display: flex;
            width: 100vw;
            height: 100vh;
        }

        .login-left {
            flex: 0 0 40%;
            background: #27ae60;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .login-right {
            flex: 0 0 60%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
            overflow-y: auto;
        }

        .login-form-wrapper {
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
        }

        .form-control {
            padding: 12px 15px 12px 45px;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
            z-index: 10;
        }

        .btn-register {
            width: 100%;
            padding: 14px;
            background: #27ae60;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: bold;
        }

        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
                height: auto;
            }

            .login-left {
                flex: 0 0 100%;
            }

            .login-right {
                flex: 0 0 100%;
            }
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <i class="fas fa-recycle" style="font-size: 80px; margin-bottom: 20px;"></i>
            <h2>Registro de Usuario</h2>
            <p>Únase al sistema de gestión de Residuos Sólidos Urbanos de JLO.</p>
        </div>

        <div class="login-right">
            <div class="login-form-wrapper">
                <h3>Crear cuenta</h3>
                <p>Complete el formulario para registrarse en el sistema.</p>

                

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label>Nombre</label>
                        <div class="input-group">
                            <i class="fas fa-user"></i>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Nombre completo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="ejemplo@jlo.gob.pe">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Contraseña</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control" name="password" required placeholder="********">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Confirmar Contraseña</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control" name="password_confirmation" required placeholder="********">
                        </div>
                    </div>

                    <button type="submit" class="btn-register">
                        <i class="fas fa-user"></i> Registrarse
                    </button>

                    <div class="text-center mt-3">
                        <a href="{{ route('login') }}" class="text-muted">¿Ya tiene una cuenta? Inicie sesión</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
