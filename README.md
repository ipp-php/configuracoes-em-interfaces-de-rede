-----------------------------
-  			    -
- ======   =====    =====   -
-   ==     ==   =   ==   =  -
-   ==     =====    =====   -
-   ==     ==       ==      -
- ======   ==       ==      -
-----------------------------

==================================
Estrutura:
==================================
A estrutura do projeto fica localizada na pasta "Projeto v1.2", dentro dessa pasta encontram-se os arquivos referentes ao index (página inicial com login e cadastro) e os arquivos de banco de dados, junto a esses arquivos existem mais dois diretórios: "Windows" e "Imagens".

==================================

= --> Diretório
- --> Arquivos

= Projeto v1.2--------------------------------------
                =  	         =                   -
		= 	         =	             -
                = Imagens        = Windows           - background.css
		- cadastro.jpg	 - about.php         - background2.css
		- fundo 2.jpg	 - config.php	     - cadastro.php
		- fundo 3.jpeg	 - index.php         - config.php
		- Fundo.jpg      - ipconfig.php      - crudUser.php
		- logout.png     - ipconfigall.php   - index.php
		                 - netstat.php	     - indexadmin.php
			         - nslookup.php	     - login.php
			         - ping.php	     - remove.php
			         - route.php	     - sair.php
			         - routeipv4.php     - update.php
				 - routeipv6.php
				 - sair.php
				 - tracert.php	 	

==================================
Na pasta principal Projeto v1.2 encontram-se os arquivos:

background.css --> representa todo o estilo da página de cadastro e login.

background2.css --> representa todo o estilo da página inicial do windows.

cadastro.php --> armazena todo o cadastro dos usuários jogando seus dados no banco de dados.

config.php --> faz a conexão com o banco de dados.

crudUser.php --> funções utilizadas pelo indexadmin.php para formar a tabela de usuários

index.php --> página de cadastro e login.

indexadmin.php --> arquivo que mostra uma tabela referente a todos os usuários cadastrados no sistema.

login.php --> verifica se o usuário esta cadastrado e libera seu acesso ao sistema.

remove.php --> usado pelo indexadmin.php para remover um usuario do sistema.

sair.php --> logout da sessão

update.php --> usado pelo indexadmin.php para renomear o cadastro do usário.

==================================

O diretório "Windows" contém arquivos em .php referente a todas as aplicações implementadas no projeto como: 

about.php --> arquivo referente a informações sobre os colaboradores do projeto.

config.php --> arquivo referente a conexão com o banco de dados.

index.php --> arquivo refrente a página inical do windows.

ipconfig.php --> arquivo referente a execução do ipconfig no prompt de comando.

ipconfigall.php --> arquivo referente a execução do ipconfig com o parâmetro /all no prompt de comando.

netstat.php --> arquivo referente a execução do netstat no prompt de comando.

nslookup.php --> arquivo referente a execução do nslookup no prompt de comando.

ping.php --> arquivo referente a execução do ping no prompt de comando inclusive com alguns parâmetros.

route.php --> arquivo referente a execução do route no prompt de comando.

routeipv4.php --> arquivo referente a execução do route com parâmetros apenas para ipv4 no promt de comando.

routeipv6.php --> arquivo referente a execução do route com parâmetros apenas para ipv6 no promt de comando.

sair.php --> arquivo para realizar o logout da sessão.

tracert.php --> arquivo referente a execução do tracert no promt de comando incluindo o parâmetro para limitar a quantidade de saltos.

O diretório imagens contém as imagens utilizadas para fazer o background da aplicação junto com os menus e os botões de cadastro e logout.

==================================
Funcionalidade
==================================

O site em sí é uma aplicação para ser executada em localhost para facilitar o gerenciamento das interfaces de rede do computador, essa aplicação possui vários menus cada um deles integrado a um comando que nos tras informações sobre a rede a qual estamos conectados.

==================================
Configuração
==================================

Para que a aplicação funcione é preciso ter instalado o Apache, PHP5, MySQL database, PHPmyadmin ou seja um pacote como o WAMP
Colocar o projeto dentro do www 
Criar o banco de dados com o seguinte código

 -- Table `ipp_db`.`user`-- -----------------------------------------------------

CREATE  TABLE IF NOT EXISTS `ipp_db`.`user` (

  `iduser` INT NOT NULL AUTO_INCREMENT ,

  `nome` VARCHAR(45) NULL ,

  `login` VARCHAR(45) NULL ,

  `senha` VARCHAR(45) NULL ,

  PRIMARY KEY (`iduser`) )

ENGINE = InnoDB;

USE `ipp_db` ;

Após a criação do banco de dados entrar no phpmyadmin abrir na tabela user editá-lo para que o login seja único.

Feito isso é so acessar via Browser http://localhost/Projeto v1.2

Fazer o cadastro, fazer o login e desfrutar das informações que essa aplicação irá lhe dar.

==================================
Integrantes
==================================

Nome:			             Matrícula:    Período											

Igor Fernandes de Jesus              20102380230      5º
Paulo Vítor Nascimento de Sousa      20102380362      5º
Pedro Henrique B. A. de Albuquerque  20101380474      5º
