<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencias</title>
</head>
<body>
    <div>
        <a href="index.php" style="text-align: center; text-decoration:none; color:black"><h1>Escuela Generica</h1></a>
        <h3 style="text-align: center">Asistencias</h3>
    </div><br>
    <div>
        <center>
        <table border="1" style="text-align: center">
            <tr>
                <th>Cod</th>
                <th>Fecha</th>
                <th>Grado</th>
                <th>Alumno</th>
                <th>Asistencia</th>
                <th>Permiso</th>
                <th>Llego tarde</th>
                <th>Se fue antes</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2020-03-04</td>
                <td>Primero Primaria</td>
                <td>Juan</td>
                <td>Si</td>
                <td></td>
                <td>No</td>
                <td>No</td>
                <td><button>B</button><button>E</button></td>
            </tr>
        </table>
        </center>
    </div><br>
    <button>1ro Primeria</button><button>2do Primeria</button><button>3ro Primeria</button>
    <fieldset>
    <h3>Formulario Asistencia</h3>
    <form action="crearprofesores.php" method="post">
        <div class="form-group">
            <input type="date" name="NA" placeholder="Fecha" required>
            <select name="Grado" required>
                <option value='' selected>Grado</option>                
            </select>
            <select name="Grado" required>
                <option value='' selected>Alumno</option>                
            </select>
            <input type="radio" name="juan" value="0"> Asistencia
            <input type="text" name="Permiso" placeholder="Razon de falta">
            <input type="radio" name="ylaptademdio" value="0"> Llega tarde
            <input type="radio" name="pedro" value="0"> Se fue Antes
            <button type="submit">Guardar</button>
        </div>
    </form>
    </fieldset><br>
</body>
</html>