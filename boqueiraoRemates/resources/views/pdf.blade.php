<!DOCTYPE html>
<html>
<head>
    <title>pdf</title>
    <style type="text/css">
        table{
            border-collapse: collapse;
        }

        table,th,td{
                border:1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Celular</th>
                <th>Estabelecimento</th>
            </tr>
        </thead>
        <tbody>
             @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->tel_celular}}</td>
                    <td>{{$cliente->estabelecimento}}</td>                              
                </tr>                         
            @endforeach    
        </tbody>
    </table>
</body>
</html>
