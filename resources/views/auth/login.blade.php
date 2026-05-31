<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login - Sistema RSU José Leonardo Ortiz</title>
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            overflow-x: hidden;
        }
        .login-container {
            display: flex;
            width: 100vw;
            height: 100vh;
            min-height: 100vh;
        }
        .login-left {
            flex: 0 0 40%;
            max-width: 40%;
            background: #27ae60;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }
        .login-left i {
            font-size: 90px;
            margin-bottom: 25px;
        }
        .login-left h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .login-left p {
            font-size: 18px;
            opacity: 0.9;
            line-height: 1.6;
            max-width: 450px;
        }
        .login-right {
            flex: 0 0 60%;
            max-width: 60%;
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: #ffffff;
        }
        .login-form-wrapper {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
        }
        .login-right h3 {
            color: #2c3e50;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .login-right p {
            color: #7f8c8d;
            margin-bottom: 35px;
            font-size: 15px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 8px;
            display: block;
        }
        .input-group {
            position: relative;
        }
        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #95a5a6;
            z-index: 10;
        }
        .form-control {
            padding: 12px 15px 12px 45px;
            border: 2px solid #ecf0f1;
            border-radius: 10px;
            font-size: 14px;
            transition: all 0.3s;
            height: auto;
        }
        .form-control:focus {
            border-color: #2ecc71;
            box-shadow: none;
        }
        .custom-checkbox {
            margin-bottom: 20px;
        }
        .custom-checkbox label {
            color: #7f8c8d;
            font-weight: normal;
            cursor: pointer;
        }
        .btn-login {
            width: 100%;
            padding: 14px;
            background: #27ae60;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.4);
        }
        .forgot-password {
            text-align: center;
            margin-top: 15px;
        }
        .forgot-password a {
            color: #2ecc71;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s;
        }
        .forgot-password a:hover {
            color: #27ae60;
            text-decoration: underline;
        }
        .alert {
            border-radius: 10px;
            margin-bottom: 20px;
        }
        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
                height: auto;
                min-height: 100vh;
            }
            .login-left, .login-right {
                flex: 0 0 100%;
                max-width: 100%;
                padding: 40px 20px;
            }
            .login-left {
                padding: 60px 20px;
            }
            .login-left i {
                font-size: 70px;
            }
            .login-left h2 {
                font-size: 28px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">


        <div class="login-left">
            <i class="fas fa-recycle"></i>
            <h2>Sistema de Gestión RSU</h2>
            <p>Plataforma integral para la gestión de residuos sólidos urbanos del distrito de José Leonardo Ortiz, Chiclayo</p>
        </div>

        <div class="login-right">
            <div class="login-form-wrapper">
                <h3 style="text-align:center">Iniciar Sesión</h3>
                <p style="text-align:center">Ingrese sus credenciales para acceder al sistema</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <strong>¡Error!</strong> Por favor verifique sus credenciales.
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <div class="input-group">
                            <i class="fas fa-envelope"></i>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="usuario@jlo.gob.pe" required autofocus autocomplete="username">
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <div class="input-group">
                            <i class="fas fa-lock"></i>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Ingrese su contraseña" required autocomplete="current-password">
                        </div>
                        @error('password')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                   
                    <button type="submit" class="btn-login">
                        <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
                    </button>
                    @if (Route::has('register'))
                        <div class="forgot-password">
                            <span class="text-muted" style="font-size: 14px;">¿No tiene una cuenta?</span>
                            <a href="{{ route('register') }}">
                                <i class="fas fa-user-plus"></i> Regístrese aquí
                            </a>
                        </div>
                    @endif
                    @if (Route::has('password.request'))
                        <div class="forgot-password">
                            <a href="{{ route('password.request') }}">
                                <i class="fas fa-key"></i> ¿Olvidó su contraseña?
                            </a>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>
</html>
