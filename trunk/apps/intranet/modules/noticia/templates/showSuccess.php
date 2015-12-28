<ul>
    <li><h3><a href='#' class='group_user'>Notícias</a></h3>

        <ul>
            <?php foreach ($noticias as $noticia): ?>
                <li><h3><a href='#'><?php echo $noticia->getTituloNoticia() ?> - <?php echo $noticia->getDataPublicacao() ?></a></h3>
                    <ul>
                        <li><a><?php echo $noticia->getNoticia() ?></a></li>
                        <li><a><?php echo $noticia->getEnderecoImagem() ?></a></li>
                    </ul>
                </li>
            <?php endforeach; ?>

            <li><h3>
                    <a href="<?php echo url_for('noticia/index') ?>">
                        <ul class="ui-widget ui-helper-clearfix" id="icons">
                            <li title="Mais Notícias" class="ui-state-default ui-corner-all" style="float: right;">
                                <span class="ui-icon ui-icon-circle-plus"></span>
                            </li>
                        </ul>
                    </a>
                </h3>
            </li>
        </ul>
    </li>
</ul>