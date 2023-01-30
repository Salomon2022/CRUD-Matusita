<label for="Nombre"> Nombre </label>
<input type="text" name="Nombre" value="{{ $gatito->Nombre }}"id="Nombre">
<br>

<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" name="ApellidoPaterno" value="{{ $gatito->ApellidoPaterno }}"id="ApellidoPaterno">>
<br>

<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" name="ApellidoMaterno" value="{{ $gatito->ApellidoMaterno }}"id="ApellidoMaterno">>
<br>

<label for="Grado_Secccion">Grado_Secccion</label>
<input type="text" name="Grado_Seccion" value="{{ $gatito->Grado_Seccion}}"id="Grado_Seccion">>
<br>

<label for="Correo">Correo</label>
<input type="text" name="Correo" value="{{ $gatito->Correo }}"id="Correo">>
<br>

<label for="Foto">Foto</label>
<input type="file" name="Foto" value="{{ $gatito->Foto }}"id="Foto">>
<br>

<input type="submit" value="Guardar Datos">
<br>