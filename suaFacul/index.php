<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuaFacul</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">SuaFacul</div>
            <nav>
                <a href="#">Vestibulares</a>
                <a href="#">Programas governamentais</a>
                <a href="#">Faculdades</a>
                <a href="#">Sobre nós</a>
                <button class="btn-entrar">Entrar</button>
            </nav>
        </div>
    </header>
    <main>
        <section class="hero">
            <h1>Seu futuro em um só lugar.</h1>
            <div class="container">
                <label for="curso"> Qual curso deseja estudar?</label>
                <input type="text" placeholder="Digite o curso">
                <label for="faculdade"> Alguma faculdade em mente?</label>
                <input type="text" placeholder="Digite a faculdade">
                <label for="cidade">Próximo a que cidade?</label>
                <input type="text" placeholder="Digite a cidade">
                <div class="filtros">
                    <label><input type="checkbox"> Presencial</label>
                    <label><input type="checkbox"> Semi</label>
                    <label><input type="checkbox"> EaD</label>
                    <label><input type="radio" name="type"> Pública</label>
                    <label><input type="radio" name="type"> Particular</label>
                </div>
                <button class="btn-buscar">Buscar</button>
            </div>
        </section>
        <section class="vestibulares">
            <h2>Próximos vestibulares</h2>
            <div class="vestibulares-lista">
                <div class="vestibular">
                    <h3>Fuvest</h3>
                    <p>24/11</p>
                    <p>Universidade de São Paulo</p>
                    <a href="#">Saiba mais</a>
                </div>
                <div class="vestibular">
                    <h3>Comvest</h3>
                    <p>14/11</p>
                    <p>Universidade de Campinas</p>
                    <a href="#">Saiba mais</a>
                </div>
                <div class="vestibular">
                    <h3>FATEC</h3>
                    <p>17/11</p>
                    <p>Todas as FATECs</p>
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </section>
        <section class="featured-courses">
            <h2>Cursos em alta</h2>
            <div class="course">
                <h3>Ciência da computação</h3>
                <p>Áreas de atuação: Engenheiro de Software, Desenvolvedor web, Cientista de Dados...</p>
                <a href="#">Saiba mais</a>
            </div>
            <div class="course-image">
                <img src="path-to-image.jpg" alt="Imagem de Ciência da computação">
            </div>
        </section>
        <section class="discover-more">
            <button class="btn-discover">Descobrir mais cursos</button>
        </section>
    </main>
</body>
</html>
