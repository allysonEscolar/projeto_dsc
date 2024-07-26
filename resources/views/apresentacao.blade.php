<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação</title>
</head>

<body>
    <table>
        <tr>
            <th>
                NOME
            </th>
            <th>
                IDADE
            </th>
        </tr>

        @foreach($objetos as $objeto)
        <tr>
            <td> {{$objeto['nome']}} </td>
            <td> {{$objeto['idade']}} </td>
        </tr>
        @endforeach

    </table>
</body>

</html>