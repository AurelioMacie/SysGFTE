<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">    
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nabar-nav">
                          
                            <!-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Home</a> -->
                          
                            @if (Route::has('login'))
                                @auth
                                    
                                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Home</a>
                                    
                                    @else
                                    
                                            <a href="/login" class="navbar-link">Entrar</a>
                                    
                                    @if (Route::has('register'))
                                        
                                            <a href="/register" class="navbar-link">Cadastrar</a>
                                       
                                    @endif
                                @endif
                            @endif
                        </ul>
                
                </div>
            </nav>
        </header>

            <div class="conteudo">
                @yield('conteudo')
            </div>

        <footer>
            <p>SGFTE - Sistema de Gestão de Frota de Transporte Escolar &copy; 2023</p>
        </footer>
    </body>
</html>
