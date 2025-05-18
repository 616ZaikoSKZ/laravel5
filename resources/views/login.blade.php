<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ciberseguridad</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap');

        body {
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            background: #1a1a2e;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Lato', sans-serif;
        }

        .container {
            background: #162447;
            width: 100%;
            height: 100%;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .left-semicircle {
            position: absolute;
            width: 600px; 
            height: 500px;
            background: linear-gradient(to right, #0f3460 50%, #1a73e8 80%, #1e90ff 100%);
            border-radius: 50%;
            bottom: -42px;
            left: -70px;
            filter: blur(25px);
        }

        .middle-circle {
            width: 150px;
            height: 150px;
            background: linear-gradient(to right, #0f3460 50%, #1a73e8 100%);
            border-radius: 50%;
            position: absolute;
            left: 750px;
            top: 130px;
            filter: blur(25px);
        }

        .right {
            width: 150px;
            height: 100%;
            background: #1a73e8;
            position: absolute;
            right: -50px;
            filter: blur(75px);
        }

        .login-container {
            width: 50%;
            height: 70%;
            background: linear-gradient(to top right, rgba(30, 144, 255, 0.3) 20%, rgba(255, 255, 255, 0.15) 30%);
            position: absolute;
            border: 1px solid rgb(30 144 255 / 50%);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            display: flex;
            flex-direction: row;
        }

        .login-form {
            width: 65%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-deco-container {
            width: 35%;
            background: #0f3460;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        .login-deco-container i {
            font-size: 5em;
            color: #1a73e8;
        }

        .login-form-items {
            width: 60%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        span.login-label {
            color: #ffffff;
            font-weight: 900;
            font-size: 1.6em;
            letter-spacing: 2px;
            margin-bottom: 30px;
        }

        .text-input-container {
            width: 200px;
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }

        .form-label {
            color: #ffffff;
            font-weight: 300;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        input.text-style {
            border-radius: 20px;
            height: 20px;
            background: none;
            border: 2px solid rgba(30, 144, 255, 0.5);
            padding-left: 10px;
            color: #ffffff;
        }

        button.login-btn {
            width: 200px;
            background: #1a73e8;
            border-radius: 20px;
            border: none;
            padding: 8px 0;
            color: #ffffff;
            font-weight: 700;
            font-size: 12px;
            letter-spacing: 2px;
            margin-bottom: 20px;
            cursor: pointer;
            box-shadow: 0 8px 10px 0 rgba(0,0,0,0.15);
            margin-top: 50px;
        }
        button.login-btn:hover {
            background-color: #1e90ff;
            color: #ffffff;
        }

        span.footer {
        position: absolute;
        bottom: 15px;
        color:rgb(220, 228, 237);
        font-weight: 100;
        font-size: 14px; 
        }

        input:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-semicircle"></div>
        <div class="middle-circle"></div>
        <div class="right"></div>
        <div class="login-container">
            <div class="login-form">
                <div class="login-form-items">
                    <span class="login-label">INICIAR SESIÓN</span>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="text-input-container">
                            <label class="form-label">Correo Electrónico</label>
                            <input type="email" name="email" class="text-style" placeholder="Ingresa tu correo" required>
                        </div>
                        <div class="text-input-container">
                            <label class="form-label">Contraseña</label>
                            <input type="password" name="password" class="text-style" placeholder="Ingresa tu contraseña" required>
                        </div>
                        <button type="submit" class="login-btn">INGRESAR</button>
                    </form>
                </div>
            </div>
            <div class="login-deco-container">
                <i class="fas fa-lock"></i>
                <span class="footer">CIBERSEGURIDAD</span>
            </div>
        </div>
    </div>
</body>
</html>