<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel='shortcut icon' href='/favicon.ico' />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
        <style type='text/css'>
            body { font-size:62.5%; margin:0; padding:0; }
            #menuLog { font-size:1.4em; margin:20px; }
            .hidden { position:absolute; top:0; left:-9999px; width:1px; height:1px; overflow:hidden; }

            .fg-button { clear:left; padding: .4em 1em; text-decoration:none !important; cursor:pointer; position: relative; text-align: center; zoom: 1; }
            .fg-button .ui-icon { position: absolute; top: 50%; margin-top: -8px; left: 50%; margin-left: -8px; }
            button.fg-button { width:auto; overflow:visible; } /* removes extra button width in IE */

            .fg-button-icon-left { padding-left: 2.1em; }
            .fg-button-icon-right { padding-right: 2.1em; }
            .fg-button-icon-left .ui-icon { right: auto; left: .2em; margin-left: 0; }
            .fg-button-icon-right .ui-icon { left: auto; right: .2em; margin-left: 0; }
            .fg-button-icon-solo { display:block; text-indent: -9999px; }	 /* solo icon buttons must have block properties for the text-indent to work */	

            .fg-button.ui-state-loading .ui-icon { background: url(spinner_bar.gif) no-repeat 0 0; }
            /*demo page css*/
            body{ font: 62.5% 'Trebuchet MS', sans-serif;}
            .demoHeaders { margin-top: 2em; }
            #dialog_link {padding: .4em 1em .4em 20px;text-decoration: none;position: relative;}
            #dialog_link span.ui-icon {margin: 0 5px 0 0;position: absolute;left: .2em;top: 50%;margin-top: -8px;}
            ul#icons {margin: 0; padding: 0;}
            ul#icons li {margin: 2px; position: relative; padding: 4px 0; cursor: pointer; float: left;  list-style: none;}
            ul#icons span.ui-icon {float: left; margin: 0 4px;}
        </style>
        <script type='text/javascript'>    
            $(function(){
                $.get('<?php echo url_for('menu/cadastro') ?>', function(data){ // grab content from another page
                    $('#cadastro').menu({ content: data, flyOut: true });
                });
                $.get('<?php echo url_for('menu/ferramentas') ?>', function(data){ // grab content from another page
                    $('#ferramentas').menu({ content: data, flyOut: true });
                });
                $.get('<?php echo url_for('menu/relatorio') ?>', function(data){ // grab content from another page
                    $('#relatorios').menu({ content: data, flyOut: true });
                });
                $.get('<?php echo url_for('menu/servicos') ?>', function(data){ // grab content from another page
                    $('#servicos').menu({ content: data, flyOut: true });
                });
                $.get('<?php echo url_for('menu/clientes') ?>', function(data){ // grab content from another page
                    $('#clientes').menu({ content: data, flyOut: true });
                });
                
            });
            jQuery(function($){
                $.datepicker.regional['pt-BR'] = {
                    closeText: 'Fechar',
                    prevText: '&#x3c;Anterior',
                    nextText: 'Pr&oacute;ximo&#x3e;',
                    currentText: 'Hoje',
                    monthNames: ['Janeiro','Fevereiro','Mar&ccedil;o','Abril','Maio','Junho',
                        'Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                    monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun',
                        'Jul','Ago','Set','Out','Nov','Dez'],
                    dayNames: ['Domingo','Segunda-feira','Ter&ccedil;a-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'],
                    dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
                    dayNamesMin: ['Dom','Seg','Ter','Qua','Qui','Sex','Sab'],
                    weekHeader: 'Sm',
                    dateFormat: 'dd/mm/yy',
                    firstDay: 0,
                    isRTL: false,
                    showMonthAfterYear: false,
                    yearSuffix: ''};
                $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
            });
            $.datepicker.setDefaults($.datepicker.regional['pt-BR']);
            
            
        </script>
    </head>
    <body>
        <div id='container' >
            <div id='header'>
                <table style='width: 16%;'>
                    <tr>
                        <td style='border:0'>
                            <?php echo link_to(image_tag('FakeQ.png', array('width' => '80px')), 'login/index') ?>
                        </td>

                        <td style='border:0'>
                            <?php echo link_to('<h2>Intranet</h2>', 'home/index') ?>
                        </td>
                    </tr>
                </table>




                <div id='topmenu'>
                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='cadastro'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Cadastro</a>

                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='ferramentas'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Ferramentas</a>

                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='relatorios'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Relatórios</a>

                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='servicos'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Pós-Vendas</a>

                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='clientes'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Clientes</a>

                    <a tabindex='0' href='#' class='fg-button fg-button-icon-right ui-widget ui-state-default ui-corner-all' id='sair'>
                        <span class='ui-icon ui-icon-triangle-1-s'></span>Sair</a>
                </div>
            </div>
            <div id='sidebar'>
                <ul>
                    <li><h3><a href='#' class='group_user'>Usuarios</a></h3>
                        <ul>
                            <li><h3><a href='#'>Online</a></h3>
                                <ul>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')"  class='user'>José</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Renato</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Andre</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Ricardo</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Anderson</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Nicolas</a></li>
                                    <li><a  href='#' onclick="window.open('/images/chat.png', 'teste','width=300,height=400,scrollbars=NO')" class='user'>Japa</a></li>
                                </ul>
                            </li>
                            <li><h3><a href='#'>Offline</a></h3>
                                <ul>
                                    <li><a class='user_off'>José</a></li>
                                    <li><a class='user_off'>Renato</a></li>
                                    <li><a class='user_off'>Andre</a></li>
                                    <li><a class='user_off'>Ricardo</a></li>
                                    <li><a class='user_off'>Anderson</a></li>
                                    <li><a class='user_off'>Nicolas</a></li>
                                    <li><a class='user_off'>Japa</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div id='noticia' style='float: right;width:250px;'>

            </div>
            <div id='infobox'>
                <?php echo $sf_content ?>
            </div> 
        </div>
        <script>
            $("#noticia").load("<?php echo url_for('noticia/show') ?>");
        </script>
    </body>
</html>