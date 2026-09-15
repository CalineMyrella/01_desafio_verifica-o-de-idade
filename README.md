# 🔐 Verificação de Idade e Registro de Log em PHP

Este projeto contém a solução do **Desafio 1** (`5a_desafio1.php`), onde um formulário web recebe os dados do usuário, calcula a idade dinamicamente e realiza o registro de acessos autorizados em um arquivo de texto local.


# 📌 Funcionalidades da Aplicação

- **Entrada de Dados:** Form HTML simples para captura de `Nome` e `Ano de Nascimento` com validação de campos obrigatórios (`required`).
- **Cálculo de Idade:** Processamento dinâmico obtendo o ano atual via função `date("Y")` do PHP.
- **Validação de Maioridade:**
  - **$\ge$ 18 anos:** Exibe mensagem de boas-vindas na tela, gera um *alert* JavaScript de confirmação e registra a sessão no log.
  - **< 18 anos:** Exibe um *alert* JavaScript de acesso negado sem gravar dados.
- **Persistência em Log (`log_acessos.txt`):** Gravação de dados no formato `Nome;Idade` utilizando manipulação nativa de arquivos (`fopen`, `fwrite`, `fclose`) no modo de escrita incremental (`'a'`).


# 🛠️ Tecnologias Utilizadas

- **HTML5** (Estrutura do formulário)


# 📂 Estrutura do Repositório

```text
.
├── 5a_desafio1.php      # Script principal (Formulário + Lógica de validação)
├── log_acessos.txt      # Gerado automaticamente ao autorizar um acesso
└── README.md            # Documentação do repositório
