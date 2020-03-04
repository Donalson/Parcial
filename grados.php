<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grados</title>
</head>
<body>
    <div>
        <a href="index.php" style="text-align: center; text-decoration:none; color:black"><h1>Escuela Generica</h1></a>
        <h3 style="text-align: center">Grados</h3>
    </div><br>
    <div>
        <center>
        <table border="1" style="text-align: center">
            <tr>
                <th>Cod</th>
                <th>Grado</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Primero</td>
                <td>Primaria</td>
                <td><button>B</button><button>E</button></td>
            </tr>
        </table>
        </center>
    </div><br>
    <fieldset>
    <h3>Formulario Grado</h3>
    <form action="creargrado.php" method="post">
        <div class="form-group">
            <input type="text" name="NA" placeholder="Grado" required>
            <input type="text" name="NA" placeholder="Descripcion" required>
            <button type="submit">Guardar</button>
        </div>
    </form>
    </fieldset><br>
</body>
</html>