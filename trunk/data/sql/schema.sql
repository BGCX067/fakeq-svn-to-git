CREATE TABLE acessos (cod_acessos INT AUTO_INCREMENT, acesso VARCHAR(1), cod_menu INT, PRIMARY KEY(cod_acessos, cod_menu)) ENGINE = INNODB;
CREATE TABLE agenda (idagenda INT AUTO_INCREMENT, nome VARCHAR(45), telefone VARCHAR(45), placa VARCHAR(45), modelo VARCHAR(45), horario_status VARCHAR(45), data_cadastro DATE, PRIMARY KEY(idagenda)) ENGINE = INNODB;
CREATE TABLE funcao (cod_funcao INT AUTO_INCREMENT, nome_funcao VARCHAR(45), PRIMARY KEY(cod_funcao)) ENGINE = INNODB;
CREATE TABLE grupo_acesso (cod_acesso INT NOT NULL, cod_funcao INT NOT NULL, cod_grupo INT AUTO_INCREMENT, INDEX cod_acesso_idx (cod_acesso), INDEX cod_funcao_idx (cod_funcao), PRIMARY KEY(cod_grupo)) ENGINE = INNODB;
CREATE TABLE imagens (idimagens INT AUTO_INCREMENT, endereco_imagens VARCHAR(45), PRIMARY KEY(idimagens)) ENGINE = INNODB;
CREATE TABLE material_apoio (cod_mat_apoio INT AUTO_INCREMENT, titulo_mat_apoio VARCHAR(45), desc_mat_apoio VARCHAR(45), data_mat_apoio DATE, endereco_mat_apoio VARCHAR(45), PRIMARY KEY(cod_mat_apoio)) ENGINE = INNODB;
CREATE TABLE mensagem (idmensagem INT AUTO_INCREMENT, cod_conversa INT, conversa VARCHAR(45), data_cadastro DATE, detalhe_orcamento VARCHAR(45), cod_usuario INT NOT NULL, cod_imagem INT NOT NULL, INDEX cod_imagem_idx (cod_imagem), PRIMARY KEY(idmensagem)) ENGINE = INNODB;
CREATE TABLE menu (cod_menu INT AUTO_INCREMENT, descricao VARCHAR(45), PRIMARY KEY(cod_menu)) ENGINE = INNODB;
CREATE TABLE metas (idmetas INT AUTO_INCREMENT, ano_metas INT, mes_metas INT, meta_metas FLOAT(18, 2), cod_grupo INT, PRIMARY KEY(idmetas)) ENGINE = INNODB;
CREATE TABLE noticia (cod_noticia INT AUTO_INCREMENT, titulo_noticia VARCHAR(45), noticia VARCHAR(45), data_publicacao DATE, endereco_imagem VARCHAR(45), PRIMARY KEY(cod_noticia)) ENGINE = INNODB;
CREATE TABLE reparo (id_reparo INT AUTO_INCREMENT, cliente VARCHAR(45), veiculo VARCHAR(45), placa VARCHAR(45), status VARCHAR(45), descricao VARCHAR(45), previsao VARCHAR(45), cod_imagem INT NOT NULL, valor_reparo_idvalor_reparo INT NOT NULL, INDEX cod_imagem_idx (cod_imagem), INDEX valor_reparo_idvalor_reparo_idx (valor_reparo_idvalor_reparo), PRIMARY KEY(id_reparo)) ENGINE = INNODB;
CREATE TABLE usuario (cod_usuario INT AUTO_INCREMENT, nome VARCHAR(45), login VARCHAR(45), senha VARCHAR(45), cod_funcao INT, data_aniversario DATE, ativo VARCHAR(1), INDEX cod_funcao_idx (cod_funcao), PRIMARY KEY(cod_usuario)) ENGINE = INNODB;
CREATE TABLE valor_reparo (idvalor_reparo INT AUTO_INCREMENT, valor FLOAT(18, 2), pecas_veiculo VARCHAR(45), modelo VARCHAR(45), PRIMARY KEY(idvalor_reparo)) ENGINE = INNODB;
ALTER TABLE acessos ADD CONSTRAINT acessos_cod_menu_menu_cod_menu FOREIGN KEY (cod_menu) REFERENCES menu(cod_menu);
ALTER TABLE acessos ADD CONSTRAINT acessos_cod_acessos_grupo_acesso_cod_acesso FOREIGN KEY (cod_acessos) REFERENCES grupo_acesso(cod_acesso);
ALTER TABLE grupo_acesso ADD CONSTRAINT grupo_acesso_cod_funcao_funcao_cod_funcao FOREIGN KEY (cod_funcao) REFERENCES funcao(cod_funcao);
ALTER TABLE mensagem ADD CONSTRAINT mensagem_cod_imagem_imagens_idimagens FOREIGN KEY (cod_imagem) REFERENCES imagens(idimagens);
ALTER TABLE reparo ADD CONSTRAINT reparo_valor_reparo_idvalor_reparo_valor_reparo_idvalor_reparo FOREIGN KEY (valor_reparo_idvalor_reparo) REFERENCES valor_reparo(idvalor_reparo);
ALTER TABLE reparo ADD CONSTRAINT reparo_cod_imagem_imagens_idimagens FOREIGN KEY (cod_imagem) REFERENCES imagens(idimagens);
ALTER TABLE usuario ADD CONSTRAINT usuario_cod_funcao_funcao_cod_funcao FOREIGN KEY (cod_funcao) REFERENCES funcao(cod_funcao);
CREATE TABLE clientes (cod_clientes INT, nome VARCHAR(45), rg VARCHAR(45), cpf VARCHAR(45), email VARCHAR(45), status VARCHAR(45), estado VARCHAR(45), cidade VARCHAR(45), rua VARCHAR(45), numero VARCHAR(45), bairro VARCHAR(45), cep VARCHAR(45), complemento VARCHAR(45), PRIMARY KEY(cod_clientes)) ENGINE = INNODB;
CREATE TABLE email (cod_email INT, assunto VARCHAR(45), descricao VARCHAR(45), numero_os INT, vod_cliente INT NOT NULL, cod_veiculo INT NOT NULL, INDEX cod_veiculo_idx (cod_veiculo), INDEX vod_cliente_idx (vod_cliente), PRIMARY KEY(cod_email)) ENGINE = INNODB;
CREATE TABLE erps (cod_erps INT AUTO_INCREMENT, nome VARCHAR(45), rg VARCHAR(45), cpf VARCHAR(45), email VARCHAR(45), status VARCHAR(45), estado VARCHAR(45), cidade VARCHAR(45), rua VARCHAR(45), numero VARCHAR(45), bairro VARCHAR(45), cep VARCHAR(45), complemento VARCHAR(45), PRIMARY KEY(cod_erps)) ENGINE = INNODB;
CREATE TABLE item (cod_item INT, descricao VARCHAR(45), valor_venda FLOAT(18, 2), valor_custo FLOAT(18, 2), PRIMARY KEY(cod_item)) ENGINE = INNODB;
CREATE TABLE mecanico (cod_mecanico INT, nome VARCHAR(45), expediente VARCHAR(45), status VARCHAR(45), produtividade FLOAT(18, 2), PRIMARY KEY(cod_mecanico)) ENGINE = INNODB;
CREATE TABLE os (numero_os INT, data_abertura DATE, data_fechamento DATE, prometida DATE, status CHAR(1), tipo_os CHAR(1), cod_veiculo INT NOT NULL, cod_cliente INT NOT NULL, INDEX cod_cliente_idx (cod_cliente), INDEX cod_veiculo_idx (cod_veiculo), PRIMARY KEY(numero_os)) ENGINE = INNODB;
CREATE TABLE os_servicos (cod_servico INT, valor FLOAT(18, 2), status CHAR(1), servico VARCHAR(45), tempo_padrao FLOAT(18, 2), tempo_pago FLOAT(18, 2), tempo_trabalhado FLOAT(18, 2), cod_mecanico INT NOT NULL, numero_os INT NOT NULL, INDEX cod_mecanico_idx (cod_mecanico), INDEX numero_os_idx (numero_os), PRIMARY KEY(cod_servico)) ENGINE = INNODB;
CREATE TABLE veiculo (cod_veiculo INT, placa VARCHAR(45), chassi VARCHAR(45), marca VARCHAR(45), modelo VARCHAR(45), cor VARCHAR(45), ano INT, PRIMARY KEY(cod_veiculo)) ENGINE = INNODB;
CREATE TABLE vendas (cod_venda INT, data_venda DATE, valor_venda FLOAT(18, 2), cod_cliente INT NOT NULL, cod_item INT NOT NULL, INDEX cod_cliente_idx (cod_cliente), INDEX cod_item_idx (cod_item), PRIMARY KEY(cod_venda)) ENGINE = INNODB;
ALTER TABLE email ADD CONSTRAINT email_vod_cliente_clientes_cod_clientes FOREIGN KEY (vod_cliente) REFERENCES clientes(cod_clientes);
ALTER TABLE email ADD CONSTRAINT email_cod_veiculo_veiculo_cod_veiculo FOREIGN KEY (cod_veiculo) REFERENCES veiculo(cod_veiculo);
ALTER TABLE os ADD CONSTRAINT os_cod_veiculo_veiculo_cod_veiculo FOREIGN KEY (cod_veiculo) REFERENCES veiculo(cod_veiculo);
ALTER TABLE os ADD CONSTRAINT os_cod_cliente_clientes_cod_clientes FOREIGN KEY (cod_cliente) REFERENCES clientes(cod_clientes);
ALTER TABLE os_servicos ADD CONSTRAINT os_servicos_numero_os_os_numero_os FOREIGN KEY (numero_os) REFERENCES os(numero_os);
ALTER TABLE os_servicos ADD CONSTRAINT os_servicos_cod_mecanico_mecanico_cod_mecanico FOREIGN KEY (cod_mecanico) REFERENCES mecanico(cod_mecanico);
ALTER TABLE vendas ADD CONSTRAINT vendas_cod_item_item_cod_item FOREIGN KEY (cod_item) REFERENCES item(cod_item);
ALTER TABLE vendas ADD CONSTRAINT vendas_cod_cliente_clientes_cod_clientes FOREIGN KEY (cod_cliente) REFERENCES clientes(cod_clientes);