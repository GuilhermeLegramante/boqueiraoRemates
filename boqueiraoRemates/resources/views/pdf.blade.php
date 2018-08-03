<!DOCTYPE html>
<html>
<head>
    <title>Dados do Cliente</title>
    <style type="text/css">
        body {
        background: rgb(204,204,204); 
        }
        page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        padding-top: 20px;
        padding-right: 25px;
        padding-bottom: 20px;
        padding-left: 20px;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        page[size="A4"] {  
        width: 21cm;
        height: 29.7cm; 
        }
        img.cabecalho{
            align: right;
        }
        table.cabecalho{
            background: rgb(194, 194, 163);
            padding-left: 8px;
            padding-right: 8px;
            width: 100%;  
            font-family: "Calibri", Arial, Helvetica, sans-serif;
        }
        #customers {
        font-family: "Calibri", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even){background-color: #f2f2f2;}

        #customers tr:hover {background-color: #ddd;}

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
        .footer {
        position:absolute;
        bottom:0;
        width:100%;
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
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>{{$cliente->tel_celular}}</td>
                    <td>{{$cliente->estabelecimento}}</td>                              
                </tr>                         
        </tbody>
    </table>
</body>
</html>
