<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Pokémon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #ffcb05;
            padding: 20px;
        }
        header h1 {
            margin: 0;
            color: #3b4cca;
        }
        .container {
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
        }
        .pokemon-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .pokemon {
            margin: 10px;
            padding: 10px;
            background-color: #e0e0e0;
            border-radius: 10px;
            width: 150px;
            text-align: center;
        }
        .pokemon img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo ao Mundo Pokémon!</h1>
    </header>
    <div class="container">
        <p>Explore o mundo incrível dos Pokémon. Aqui você encontrará informações sobre alguns dos Pokémon mais populares.</p>
        <div class="pokemon-list">
            <div class="pokemon">
                <h3>Pikachu</h3>
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png" alt="Pikachu">
            </div>
            <div class="pokemon">
                <h3>Charmander</h3>
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png" alt="Charmander">
            </div>
            <div class="pokemon">
                <h3>Squirtle</h3>
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png" alt="Squirtle">
            </div>
            <div class="pokemon">
                <h3>Bulbasaur</h3>
                <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png" alt="Bulbasaur">
            </div>
        </div>
    </div>
</body>
</html>