<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Documentos</title>
</head>
<body>
    <h1>Formulario de Registro de Documentos</h1>
    <form action="procesar_documentos.php" method="post" enctype="multipart/form-data">
        <label for="autores">Autor/es:</label>
        <input type="text" name="autores" required><br>

        <label for="nombre_documento">Nombre de documento:</label>
        <input type="text" name="nombre_documento" required><br>

        <label for="descripcion">Descripción de documentos:</label>
        <textarea name="descripcion" required></textarea><br>

        <label for="tipo_documento">Tipo documento:</label>
        <select name="tipo_documento" required>
            <option value="Documento">Documento</option>
            <option value="Informe">Informe</option>
            <option value="Presentación">Presentación</option>
            <option value="Variados">Variados</option>
        </select><br>

        <label>Extensión de archivo:</label><br>
        <input type="checkbox" name="extension[]" value="txt"> txt
        <input type="checkbox" name="extension[]" value="pdf"> pdf
        <input type="checkbox" name="extension[]" value="docx"> docx
        <input type="checkbox" name="extension[]" value="xlsx"> xlsx
        <input type="checkbox" name="extension[]" value="pptx"> pptx
        <input type="checkbox" name="extension[]" value="odt"> odt<br>

        <label for="palabras_clave">Palabras Clave:</label>
        <input type="text" name="palabras_clave" required><br>

        <label for="idioma">Idioma:</label>
        <select name="idioma" required>
            <option value="Español">Español</option>
            <option value="Inglés">Inglés</option>
            <option value="Otros">Otros</option>
        </select><br>

        <label>Visibilidad:</label><br>
        <input type="radio" name="visibilidad" value="Público" required> Público
        <input type="radio" name="visibilidad" value="Privado" required> Privado<br>

        <label>Temática:</label><br>
        <input type="checkbox" name="tematica[]" value="Administración"> Administración
        <input type="checkbox" name="tematica[]" value="Finanzas"> Finanzas
        <input type="checkbox" name="tematica[]" value="Negocio"> Negocio
        <input type="checkbox" name="tematica[]" value="Informática"> Informática
        <input type="checkbox" name="tematica[]" value="Otros"> Otros<br>

        <label for="documento1">Subir documentos (máximo 3):</label><br>
        <input type="file" name="documento1" accept=".txt, .pdf, .docx, .xlsx, .pptx, .odt" required><br>
        <input type="file" name="documento2" accept=".txt, .pdf, .docx, .xlsx, .pptx, .odt"><br>
        <input type="file" name="documento3" accept=".txt, .pdf, .docx, .xlsx, .pptx, .odt"><br>

        <input type="submit" value="Registrar Documentos">
    </form>
</body>
</html>
