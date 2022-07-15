<h1>{{ $modo }} vuelo</h1>
<label for="Nombre">Origen: </label>
<input type="text" name="Origen" value="{{isset($gestion_vuelos->Origen)?$gestion_vuelos->Origen:'' }}" id="Origen"> 
<br><br>
<label for="Nombre">Destino: </label>
<input type="text" name="Destino" value="{{isset($gestion_vuelos->Destino)?$gestion_vuelos->Destino:'' }}" id="Destino"> 
<br><br>
<label for="Nombre">Aereolinea: </label>
<input type="text" name="Aereolinea" value="{{isset($gestion_vuelos->Aereolinea)?$gestion_vuelos->Aereolinea:'' }}" id="Aereolinea"> 
<br><br>
<label for="Nombre">Hora: </label>
<input type="time" name="Hora" value="{{isset($gestion_vuelos->Hora)?$gestion_vuelos->Hora:'' }}" id="Hora"> 
<br><br>
<label for="Nombre">Fecha: </label>
<input type= "date" name= "Fecha" value="{{isset($gestion_vuelos->Fecha)?$gestion_vuelos->Fecha:'' }}" id="Fecha"> 
<br><br>
<label for="Nombre">Clase: </label>
<input type="text" name="Clase" value="{{isset($gestion_vuelos->Clase)?$gestion_vuelos->Clase:'' }}" id="Clase"> 
<br><br>
<label for="Nombre">Precio: </label>
<input type="number" name="Precio" value="{{isset($gestion_vuelos->Precio)?$gestion_vuelos->Precio:'' }}" id="Precio"> 
<br><br>
<input type="submit" value="{{ $modo }} datos">
<a href="{{ url('vuelos/')}}">Regresar</a>