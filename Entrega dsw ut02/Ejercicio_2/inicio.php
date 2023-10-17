<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de documentos</title>
    </head>
    <body>
        <h1>Gestor de documentos</h1>
        <form action="comprobacion.php" method="POST" />
        Autor: <input type="text" name="autor" /></br>
        Nombre del documento: <input type="text" name="docname" size="40" /></br>
        <p>Descripcion: <br />
        <textarea name="descripcion" rows="5" cols="50">Descripcion: </textarea>
    <p>
        
        <p>Tipo de documento:</p>
        <select name="tipo">
            <option>Seleccionar tipo</option>
            <option value="Documento">documento</option>
            <option value="Informe">informe</option>
            <option value="Presentacion">presentacion</option>
            <option value="Variados">variados</option>
        </select>
        <br>
        <td>
            Extension del documento: <br />
            <input type="checkbox" name="txt" /> txt<br />
            <input type="checkbox" name="pdf" /> pdf<br />
            <input type="checkbox" name="docx" /> docx<br />
            <input type="checkbox" name="xlsx" /> xlsx<br />
            <input type="checkbox" name="pptxt" /> pptxt</br>
            <input type="checkbox" name="odt" /> odt</br>
        </td>
    
    <br>
        Palabras clave: <input type="text" name="clave" /></br>
        <p>Idioma del documento:</p>
        <select name="idioma">
            <option>Seleccionar tipo</option>
            <option value="Español">español</option>
            <option value="Ingles">ingles</option>
            <option value="Otros">otros</option>
        </select>
        <td>
            Visibilidad:<br>
            <input type="radio" name="vibibilidad" value="Pu" /> publico<br />
            <input type="radio" name="vibibilidad" value="PR" /> privado
        </td>
        <br>
        <td>
            Tematica: <br />
            <input type="checkbox" name="administracion" /> administracion<br />
            <input type="checkbox" name="finanzas" /> finanzas<br />
            <input type="checkbox" name="Negocio" /> negocio<br />
            <input type="checkbox" name="Informatica" /> informatica<br />
            <input type="checkbox" name="Otros" /> otros</br>

        </td>
        <input type="submit" value="Comprobar el formulario">
    </form>
    
    <br>
    </body>
</html>
