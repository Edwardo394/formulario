
<html>
<head>
<meta charset="UTF-8">
    <title>Formulario</title> 
    <link rel="stylesheet" href="css/bulma.min.css">
    <style type="text/css">
    *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
    }

    header{
        background-color: #069;
        padding:8px 10px;
        text-align: center;
    }

    a{
        display: inline-block;
        margin: 0 10px;
        color: white;
        font-size: 17px;
    }
    section{
        max-width: 960px;
        margin: 20px auto;
        padding: 0 2%;
    }

    h2{
        background-color: #069;
        color: white;
        padding: 8px 10px;    
    }
    </style>
</head>

<body>
    <section>
        <h2>
            <?php
            $pagina = "Os itens da tabela abaixo foram adicionados ao banco de dados";                 
            echo ucfirst($pagina);
            ?>
        </h2>
    </section>
</body>
</html>

<?php
#https://www.w3schools.com/php/php_mysql_select.asp & Tutorial youtube danki code html+css+php
$server_name = "localhost";
$user_name = "root";
$password = "";
$DbName = "respostas_form";
$connection = mysqli_connect($server_name, $user_name, $password, $DbName);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($connection, "SELECT * FROM  respostas");
echo "<table border='3'>
<tr>
<th>nome</th>
<th>email</th>
<th>motivo</th>
<th>mensagem</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['nome'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['motivo'] . "</td>";
echo "<td>" . $row['mensagem'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
