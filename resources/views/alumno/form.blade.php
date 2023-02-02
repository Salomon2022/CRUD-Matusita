<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $alumno->Nombre }}" id="Nombre">
<br>

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{ $alumno->ApellidoPaterno }}" id="ApellidoPaterno">
<br>

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{ $alumno->ApellidoMaterno }}" id="ApellidoMaterno">
<br>

<label for="Grado_Secccion">Grado_Secccion</label>
<input type="text" name="Grado_Seccion" value="{{ $alumno->Grado_Seccion}}" id="Grado_Seccion">
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{ $alumno->Correo }}" id="Correo">
<br>

<label for="Foto">Foto</label>
{{ $alumno->Foto }}
<input type="file" name="Foto" value="" id="Foto">
<br>

<input type="submit" value="Guardar Datos">
<br>