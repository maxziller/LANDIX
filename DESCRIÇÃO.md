Projeto para processo de seleção de estagiário na empresa LANDIX

Banco de dados utilizado: PHPMySql
Trabalho feito disponível em: http://maxpziller.atwebpages.com/home.php

Todos os arquivos estão disponibilizados EXCETO o arquivo com as informações para conexão com o Banco de Dados por questões de haver informações sigilosas.

Dos requisitos:

- Tabelas montadas por comandos no arquivo CriaTabelas.txt; o arquivo inclui os comandos CREATE TABLE e também a criação de duas triggers para geração da chave em formato GUID automaticamente, pois o banco de dados escolhido não permite que valor DEFAULT seja por chamada de função.
- Tela Home com todos os botões para demais telas. Clicar em LANDIX ou no ícone da casinha no header em qualquer página volta para a página inicial. Lado esquerdo da página cria uma tabela com os dados de todos os vendedores. No lado direito, mostra os dados de todos os clientes. Não consegui fazer funcionar alguma função em PHP ou Javascript para alterar o conteúdo da tabela com os dados dos clientes de acordo com a seleção do vendedor, então escolhi deixar sempre todos visíveis.
-  As telas para cadastro de vendedor novo ou manutenção de dados de vendedor já existentes não são as mesmas. O mesmo acontece com o caso dos clientes.
- Tela de cadastro de vendedor recebe os dados e os envia para o banco de dados na função INSERT. Os requisitos para inserção dos dados de acordo com as necessidades do banco de dados, como limite de caracteres ou diferença de formato, são tratados já no input.
- A tela de atualização de cadastro de vendedor dispõe dos nomes dos vendedores cadastrados numa lista. Não consegui atualizar os dados dos inputs para que eles mudassem de acordo com o vendedor selecionado. Tampouco, portanto, aparece a lista de clientes daquele vendedor. 
- A barra do menu com as opções de inserção de novo cliente ou novo vendedor está sempre disponível em todas as páginas.
- A função de deleção não está implementada em nenhuma manutenção pois não consegui colocar dois submit diferentes no mesmo form nem diferenciar os botões no PHP.
- Todos os dados enviados para o banco de dados passam por tratamentos básicos contra ataques como SQL Injection.

Dificuldades encontradas:
- Como poderão verificar, o serviço não ficou completo dentro do prazo.
- No início fiz uma escolha errada: Ou eu faria a aplicação em alguma linguagem de programação com a qual eu não tinha nenhum conhecimento sobre interface gráfica ou faria em formato para web onde eu poderia ter dificuldade em algumas funções pois há muito tempo não mexia com Javascript e PHP. Fiz tudo relacionado ao banco de dados no primeiro dia do prazo, perdi os dois dias seguintes tentando sem sucesso criar uma interface gráfica em Python e, ao final do terceiro dia, decidi voltar-me à interface para web.
- Devido a eu ter ficado sem tempo devido à mudança de ferramenta, o código não está devidamente comentado.
- Apesar das dificuldades, espero ter conseguido cumprir com a maioria dos requisitos solicitados.
