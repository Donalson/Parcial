<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
</head>
<body>
    <div>
        <a href="index.php" style="text-align: center; text-decoration:none; color:black"><h1>Escuela Generica</h1></a>
        <h3 style="text-align: center">Alumnos</h3>
    </div><br>
    <div>
        <center>
        <table border="1" style="text-align: center">
            <tr>
                <th>Cod</th>
                <th>Alumno</th>
                <th>Grado</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Juan</td>
                <td>Primero Primaria</td>
                <td><button>B</button><button>E</button></td>
            </tr>
        </table>
        </center>
    </div><br>
    <fieldset>
    <h3>Formulario Alumnos</h3>
    <form action="Crearalumno.php" method="post">
        <div class="form-group">
            <input type="text" name="NA" placeholder="Nombre Alumno" required>
            <select name="Grado" required>
                <option value='' selected>Grado</option>                
            </select>
            <button type="submit">Guardar</button>
        </div>
    </form>
    </fieldset><br>
</body>
</html>