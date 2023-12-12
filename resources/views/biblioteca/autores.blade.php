<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Listar Autores</title>
</head>
<body class="#90caf9 blue lighten-3">
    <div class="white container">
        <h1>Listar Autores</h1>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nacionalidade</th>
                        <th>Ano de Nascimento</th>
                        <th>Ano de Morte</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($autores as $autor)
                    <tr>
                        <td>{{$autor->nome}}</td>
                        <td>{{$autor->nacionalidade}}</td>
                        <td>{{$autor->AnoNascto}}</td>
                        <td>{{$autor->anoMorte}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </body>
</html>
