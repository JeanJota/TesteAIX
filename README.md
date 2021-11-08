<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## Sobre o Teste

Objetivo:
Criar uma área administrativa podendo utilizar um template admin.
Implementar área de login, pesquisa por aluno, cadastro, edição e exclusão do aluno,
importar cursos via XML
Implementar as seguintes funcionalidades:
1. Tela de login
E-mail e senha
2. Tela de listagem dos alunos com campo para busca
Busca por id/código do aluno
Paginação para listagem do aluno
3. Tela de cadastro/edição/exclusão de curso
Nome do curso
Código do curso
3. Tela de cadastro/edição/exclusão do aluno
Nome do aluno
Código do aluno (matricula)
Situação do Aluno (ativo, inativo)
Endereço do aluno (Consumir uma API online que a partir do fornecimento do cep
retorne as informações logradouro. Campos - CEP, Cidade, Estado, Bairro, Número,
Complemento)
Exemplo de Api de nosso servidor:
GET Http 1.1 http://serviceweb.aix.com.br/aixapi/api/cep/30110012

Informar o curso do aluno, turma e data de matrícula.
Imagem do aluno - Upload de imagem da foto do aluno
4. Tela para importar cursos consumidos via XML
Importar somente as informações disponíveis no cadastro do curso (Arquivo
cursos.xml enviado no e-mail)

5. Versionamento
Versionar o projeto no github e enviar a url para avaliação.