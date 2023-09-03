# Instruções

Bem-vindo ao projeto final do nível 3. Neste projeto estaremos aplicando os conhecimentos adquiridos ao longo do nível. Siga as instruções deste arquivo para concluir o projeto e lembre-se que estas serão levadas em consideração para a avaliação final do projeto.

## Instruções gerais

Tem uma universidade que quer criar sua plataforma virtual. O design da página web não está finalizado, mas existem algumas visualizações que podem servir de referência que deixaremos para vocês neste repositório. De acordo com as instruções que o cliente nos deu, darei-lhe as instruções necessárias para concluir o projeto.

## Instruções do projeto

Para este projeto, você precisa criar uma plataforma com um sistema de funções. Existem três especificamente: administrador, professor e aluno. Cada um terá as seguintes funcionalidades:

### ADMIN.

- Criar, ler, atualizar e excluir registros de professores (CRUD).
- Criar, ler, atualizar e excluir registros de alunos (CRUD).
- Criar, Ler, Atualizar e Excluir turmas/disciplinas/cursos cadastrados (CRUD).
- Relacionar um professor a um curso (ou mais, se quiser).
- A exclusão de professores não exige que o referido professor não tenha disciplinas atribuídas, um professor pode ser excluído sem a necessidade da referida comprovação.
- Alterar a função de cada usuário (não é permitido criar novas funções).

### PROFESSOR

- Veja a turma para a qual você foi designado como professor.
- Visualize os dados de seus alunos.

### ESTUDANTE

- Visualize e altere as turmas em que você está matriculado.

## Arquivos fornecidos neste repositório

Neste repositório, fornecemos os seguintes arquivos:

- Na pasta `assets` você encontrará um arquivo chamado `logo.jpg` que é o logotipo da universidade em questão.
- Na pasta `design` você encontrará três pastas: `admin`, `student` e `teacher`. Em cada um estão as respectivas capturas de tela que ilustram a funcionalidade do projeto. Lembre-se que <b>NÃO</b> é 100% obrigatório usar o mesmo design. No entanto, você ainda deve **respeitar a funcionalidade e as cores do logotipo que fornecemos a você**.

## Considerações sobre qualificação

Abaixo apresentaremos os pontos que serão levados em consideração para a qualificação do projeto:

- Daremos a você uma ideia de UI como sugestão. Porém, não é obrigatório seguir rigorosamente essa mesma interface. Você pode alterar as cores, tamanhos de fonte, etc. de acordo com sua preferência. Mas você deve respeitar as cores do logotipo da universidade ou procurar outras que combinem com elas.
- A interface do usuário (UI) deve conter o logotipo da universidade.
- Cada função deve ter a funcionalidade especificada.
- O projeto deve ser feito com Tailwind CSS e este deve ser instalado através da linha de comando ou do terminal, não deve utilizar o CDN.
- O projeto deve ser estruturado de forma que seja de fácil compreensão e manutenção.
- Você deve enviar os arquivos do seu projeto para um repositório no GitHub e este deve ter mais de um commit.
- Caso haja algum requisito extra que tenha sido feito (da lista de considerações opcionais ou de sua própria iniciativa), você deve deixar uma nota no arquivo README.md do seu repositório GitHub especificando cada um.

## Considerações OPCIONAIS que agregam pontos:

- O design deve ser 100% responsivo.
- Ativar ou desativar um usuário no painel do administrador (significa que se um usuário foi desativado, ele não poderá acessar com suas credenciais até que seja ativado novamente).
- As tabelas possuem botões que permitem exportar seus dados em PDF, Excel, etc.
- As tabelas são paginadas.
- O administrador pode ver a quantidade de alunos matriculados em cada turma.
- Cada professor pode criar, ler, atualizar e excluir notas e comentários de seus alunos.
- O aluno poderá visualizar na aba “Ver Notas” uma mensagem deixada pelo professor e a nota de cada curso.
- Use o plugin Datatables (https://datatables.net/).
- Desenvolva toda a interface do usuário (UI) do zero.
- Algumas outras funcionalidades de acordo com a lógica de negócio.