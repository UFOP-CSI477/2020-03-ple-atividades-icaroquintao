# **CSI477-2020-03 - PLE - Trabalho Final - Resultados**
## *Aluna(o): Icaro Bicalho Quintão*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

  Este trabalho tem como finalidade desenvolver um sistema para a disciplina de Sistemas Web I (CSI477), durante o período letivo especial de 2020 em função da COVID-19. O projeto consiste no gerenciamento de estágios e processos de trainee para os alunos do ICEA. Unindo empresas e alunos para o desenvolvimento profissional do estudante.

### 1. Funcionalidades implementadas
<!-- Descrever as funcionalidades que eram previstas e foram implementas. -->
As seguintes funcionalidades eram previstas e foram implementadas: o usuário pode entrar em sua conta, ele pode ver vagas de estágio e trainee, filtrar por localidade e modalidade (se é estágio ou trainee), acessar o link da vaga de seu interesse e sugerir adição de novos processos, estes só serão adicionados a página de vagas, caso o administrador aceite. O usuário pode também verificar processos encerrados.
  
### 2. Funcionalidades previstas e não implementadas
<!-- Descrever as funcionalidades que eram previstas e não foram implementas, apresentando uma breve justificativa do porquê elas não foram incluídas -->
A seguinte funcionalidade era prevista e não foi implementada: favoritar vagas. O problema foi que eu começei a embolar muito como ia funcionar para o cliente favoritar uma vaga, teria que existir uma lista de id's de vagas para cada usuário e não consegui fazer com que fosse algo dinâmico, como um checkbox onde o user ao clicar nele já teria aquela vaga como favorita, portanto desisti dessa implementação, tento em vista também que não alterave em nada o projeto em si.

### 3. Outras funcionalidades implementadas
<!-- Descrever as funcionalidades implementas além daquelas que foram previstas, caso se aplique.-->
As seguintes funcionalidades não eram previstas e foram implementadas: 
1) O usuário pode filtar por titúlo de vaga.
2) Ao enviar uma sugestão de vaga o usuário não pode alterar o email de usuário atrelado à vaga, aqui também foi implementado verificação se os dados estão no formato correto, como por exemplo, se um link é verdadeiro.
3) Todos os usuários novos são criados como usuários normais, sem permissão de adminstrador, existem apenas dois administradores já definidos anteriormente.
4) Foi implementada uma área administrativa, onde somente administradores tem acesso, caso um usuário comum tente entrar em alguma página vinculada aos adminstradores uma janela aparece dizendo que ele não tem tal permissão, se caso o usuário nem estiver logado aparece a pagina de login.
5) Foi adicionado um relatório de usuários, mostrando os dados e qual o tipo de permissão que esse usuário possui.

### 4. Principais desafios e dificuldades
<!-- Descrever os principais desafios encontrados no desenvolvimento do trabalho, quais foram as dificuldades e como elas foram superadas e resolvidas. -->
Todo o projeto foi elaborado em cima das aulas de Sistemas Web I, e como já desenvolvemos trabalhos relacionados, no sentido de desenvolvimento utilizando Laravel, SQLite, Bootstrap e JS, a implementação foi bem tranquila, exibir os dados de maneira diferente como nos cards e como desabilitá-los foi bem bacana também. 
### 5. Instruções para instalação e execução
<!-- Descrever o que deve ser feito para instalar (ou baixar) a aplicação, o que precisa ser configurando (parâmetros, banco de dados e afins) e como executá-la. -->
Frameworks e tecnologias: Laravel + Bootstrap 4 + JS 
Editor de código fonte: VS Code
Navegador: Google Chrome versão 85.0.4183.121 (64 bits) (Windows 10)
Para Vizualizar os elementos: XAMPP v3.2.4 (Apache){Apache/2.4.41 (Win64) OpenSSL/1.1.1c PHP/7.4.3 Server at localhost Port 80}
BD: SQLite (C:/xampp/htdocs/2020-03-ple-atividades-icaroquintao/Projeto/iceavagas/database/iceavagas.sqlite)
Para executar deve-se instalar o laravel e configurar o banco de dados de maneira correta no arquivo .env
### 6. Referências
<!-- Referências podem ser incluídas, caso necessário. Utilize o padrão ABNT. -->
STACK OVERFLOW. Bootstrap 4: filter cards based on title (.card-title) and tag (.badge). , 2019. Disponível em: <http://https://stackoverflow.com/questions/55668287/bootstrap-4-filter-cards-based-on-title-card-title-and-tag-badge>. Acesso em: 05 oct. 2020.

STACK OVERFLOW. Validação campo e-mail's. , 2020. Disponível em: <http://https://pt.stackoverflow.com/questions/291974/valida%C3%A7%C3%A3o-campo-e-mails>. Acesso em: 05 oct. 2020.

STACK OVERFLOW. Como verificar se uma url é verdadeira. , 2020. Disponível em: <https://pt.stackoverflow.com/questions/317833/como-verificar-se-a-url-%C3%A9-verdadeira>. Acesso em: 05 oct. 2020.

BOOTSTRAP. Bootstrap 4 Exemples Carousel. , 2020. Disponível em: <https://getbootstrap.com/docs/4.0/examples/carousel/>. Acesso em: 05 oct. 2020.