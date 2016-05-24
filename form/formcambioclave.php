<form id="cambioclave" action="GET" >
        <fieldset>
        <legend>Personal information:</legend>
        Clave Actual:<br>
        <input type="text" name="claveactual" id="claveactual"><br>
        Nueva Clave:<br>
            <input type="text" name="clavenueva" id="clavenueva"><br>
            <br>
        Repetir Clave:<br>
            <input type="text" name="repetirclave" id="repetirclave"><br>
            <br>
            <div id="mensaje"></div>
            <input type="button" name="enviar" value ="Enviar" onclick="Cambiar()">
            
        </fieldset>
</form>
