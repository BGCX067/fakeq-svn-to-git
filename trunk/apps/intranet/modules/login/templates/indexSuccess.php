<div style="display: block" id="login" title="Login" >
        <table>
            <tr>
            <th>
                Login:
            </th>
            <td>
                <input type="text" name="login"/>
            </td>
            </tr>  
            <tr>    
                <th>
                    Senha
                </th>
                <td>
                    <input type="password" name="senha"/>
                </td>
            </tr>
        </table>

    </div>
<script>  
    $('#login').dialog({
        // autoOpen: false,
        width: 280,
        modal:true,
                buttons: { "Logar": function() {
                        $(this).dialog('logar');
                        $(this).remove();
                    } },
   closeOnEscape: false, 
   open: function(event, ui) { $(".ui-dialog-titlebar-close").hide(); } 
       
    }); 
</script>
