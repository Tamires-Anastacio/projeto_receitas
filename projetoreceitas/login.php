<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Culinária Coreana</title>
    <style>
        .menu-sanduiche {
            font-size: 30px;
            cursor: pointer;
            color: #d12bb0; 
            padding: 20px;
            display: inline-block;
        }

        #menu-lateral {
            height: 100%;
            width: 250px; 
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            background-color: #063940; 
            box-shadow: 2px 0 10px rgba(0,0,0,0.5);
            overflow-x: hidden;
            transition: 0.5s; 
            padding-top: 60px;
        }

        .menu-escondido {
            left: -250px !important; 
        }


        #menu-lateral a {
            padding: 15px 30px;
            text-decoration: none;
            font-size: 1.2rem;
            color: white;
            display: block;
            transition: 0.3s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }


        #menu-lateral a:hover {
            background-color: #d12bb0;
            color: white;
        }


        .btn-fechar {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 36px;
            cursor: pointer;
            color: #ff3333; 
        }
        body {
            background-color: #7d0e51; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            color: white;
        }

        .login-container {
            text-align: center;
            width: 100%;
            max-width: 400px;
            padding: 20px;
        }

        .seta-voltar {
            position: absolute;
            top: 20px;
            left: 20px;
            text-decoration: none;
            color: white;
            font-size: 24px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 50px;
            letter-spacing: 2px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 25px;
            border: none;
            border-radius: 4px; 
            background-color: #f9d4f5;
            color: #7d0e51;
            font-size: 16px;
            box-sizing: border-box;
        }

        input::placeholder {
            color: #b58dae;
        }

        button {
            background: transparent;
            border: 2px solid white;
            color: white;
            padding: 10px 40px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
        }

        button:hover {
            background: white;
            color: #7d0e51;
        }
        .social-login {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .social-icon {
            font-size: 35px;
            color: #f9d4f5;
            text-decoration: none;
            transition: 0.3s;
        }
        .social-icon:hover {
            color: white;
            transform: scale(1.1);
        }
        .fa-facebook:hover { color: #1877F2; } 
        .fa-google:hover { color: #DB4437; } 
    </style>
</head>
<body>
    <header>
        <div class="menu-sanduiche" onclick="toggleMenu()">☰</div>
        <nav id="menu-lateral" class="menu-escondido">
        <span class="btn-fechar" onclick="toggleMenu()">×</span>
        <a href="pagina_inicial.html">Início</a>
        <a href="login.js">Login</a>
        <a href="pratos.html">Pratos e receitas</a>
    </nav>
    </header>

    <a href="pagina_inicial.html" class="seta-voltar">⟶</a>

    <div class="login-container">
        <h1>LOGIN</h1>
        
        <form id="loginForm" action="processa_login.php" method="POST">
            <input type="email" name="email" id="email" placeholder="Email" required>
            <input type="password" name="senha" id="senha" placeholder="Senha" required>
            <button type="submit">ENTRAR</button>
        </form>
    </div>
    <div class="social-login">
            <a href="https://www.facebook.com/login" class="social-icon"><i class="fab fa-facebook"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-google"></i></a>
        </div>

    <script>
        document.getElementById('loginForm').onsubmit = function(event) {
            const email = document.getElementById('email').value;
            const senha = document.getElementById('senha').value;

            if (email === "" || senha === "") {
                alert("Por favor, preencha todos os campos.");
                event.preventDefault();
            }
        };
    </script>
</body>
</html>