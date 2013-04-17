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
A estrutura do projeto fica localizada na pasta "Projeto v1.2", dentro dessa pasta encontram-se os arquivos referentes ao index (p�gina inicial com login e cadastro) e os arquivos de banco de dados, junto a esses arquivos existem mais dois diret�rios: "Windows" e "Imagens".

==================================

= --> Diret�rio
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

background.css --> representa todo o estilo da p�gina de cadastro e login.

background2.css --> representa todo o estilo da p�gina inicial do windows.

cadastro.php --> armazena todo o cadastro dos usu�rios jogando seus dados no banco de dados.

config.php --> faz a conex�o com o banco de dados.

crudUser.php --> fun��es utilizadas pelo indexadmin.php para formar a tabela de usu�rios

index.php --> p�gina de cadastro e login.

indexadmin.php --> arquivo que mostra uma tabela referente a todos os usu�rios cadastrados no sistema.

login.php --> verifica se o usu�rio esta cadastrado e libera seu acesso ao sistema.

remove.php --> usado pelo indexadmin.php para remover um usuario do sistema.

sair.php --> logout da sess�o

update.php --> usado pelo indexadmin.php para renomear o cadastro do us�rio.

==================================

O diret�rio "Windows" cont�m arquivos em .php referente a todas as aplica��es implementadas no projeto como: 

about.php --> arquivo referente a informa��es sobre os colaboradores do projeto.

config.php --> arquivo referente a conex�o com o banco de dados.

index.php --> arquivo refrente a p�gina inical do windows.

ipconfig.php --> arquivo referente a execu��o do ipconfig no prompt de comando.

ipconfigall.php --> arquivo referente a execu��o do ipconfig com o par�metro /all no prompt de comando.

netstat.php --> arquivo referente a execu��o do netstat no prompt de comando.

nslookup.php --> arquivo referente a execu��o do nslookup no prompt de comando.

ping.php --> arquivo referente a execu��o do ping no prompt de comando inclusive com alguns par�metros.

route.php --> arquivo referente a execu��o do route no prompt de comando.

routeipv4.php --> arquivo referente a execu��o do route com par�metros apenas para ipv4 no promt de comando.

routeipv6.php --> arquivo referente a execu��o do route com par�metros apenas para ipv6 no promt de comando.

sair.php --> arquivo para realizar o logout da sess�o.

tracert.php --> arquivo referente a execu��o do tracert no promt de comando incluindo o par�metro para limitar a quantidade de saltos.

O diret�rio imagens cont�m as imagens utilizadas para fazer o background da aplica��o junto com os menus e os bot�es de cadastro e logout.

==================================
Funcionalidade
==================================

O site em s� � uma aplica��o para ser executada em localhost para facilitar o gerenciamento das interfaces de rede do computador, essa aplica��o possui v�rios menus cada um deles integrado a um comando que nos tras informa��es sobre a rede a qual estamos conectados.

==================================
Configura��o
==================================

Para que a aplica��o funcione � preciso ter instalado o Apache, PHP5, MySQL database, PHPmyadmin ou seja um pacote como o WAMP
Colocar o projeto dentro do www 
Criar o banco de dados com o seguinte c�digo

 -- Table `ipp_db`.`user`-- -----------------------------------------------------

CREATE  TABLE IF NOT EXISTS `ipp_db`.`user` (

  `iduser` INT NOT NULL AUTO_INCREMENT ,

  `nome` VARCHAR(45) NULL ,

  `login` VARCHAR(45) NULL ,

  `senha` VARCHAR(45) NULL ,

  PRIMARY KEY (`iduser`) )

ENGINE = InnoDB;

USE `ipp_db` ;

Ap�s a cria��o do banco de dados entrar no phpmyadmin abrir na tabela user edit�-lo para que o login seja �nico.

Feito isso � so acessar via Browser http://localhost/Projeto v1.2

Fazer o cadastro, fazer o login e desfrutar das informa��es que essa aplica��o ir� lhe dar.

==================================
Integrantes
==================================

Nome:			             Matr�cula:    Per�odo											

Igor Fernandes de Jesus              20102380230      5�
Paulo V�tor Nascimento de Sousa      20102380362      5�
Pedro Henrique B. A. de Albuquerque  20101380474      5�
