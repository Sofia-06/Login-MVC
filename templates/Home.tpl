{include file="templates/Cabeceras/Header.tpl"}
    <h1>Hola 5to. diver</h1>

    <!--
    {foreach from=$datos item=$d }
        <p>{$d['nombre']}--{$d['pass']}</p>
    {/foreach}

    <div class="container">
        <table>
            <tr>
                <td>Nombre</td>
                <td>Pass</td>
            </tr>
            {foreach from=$datos item=$d }
                <tr>
                    <td>{$d['nombre']}</td>
                    <td>{$d['pass']}</td>
                </tr>
            {/foreach}
        </table>
    </div>
    -->

    <div class="container">
        <form method="post" action="?class=user&method=login">
            <div class="row">
            <div class="input-field col s6">
                <input name="nombre" id="first_name2" type="text" class="validate">
                <label class="active" for="first_name2">Nombre</label>
            </div>

            <div class="input-field col s6">
                <input name="pass" id="first_name3" type="password" class="validate">
                <label class="active" for="first_name3">Password</label>
            </div>
         </div>
         <div>
            <input type="submit" value="Enviar"≥
         </div>
        </form>
    </div>

{include file="templates/Cabeceras/footer.tpl"}