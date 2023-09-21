![CadProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/94806b00-9916-4bc3-89ec-8f5fde0957e3)# Documento de Casos de Uso

## Lista dos Casos de Uso
 - [CDU 01 - Adm](CDU-01): Fazer Cadastro
 - [CDU 02 - Adm](CDU-02): Fazer Login
 - [CDU 03 - Adm](CDU-03): Cadastrar Categoria
 - [CDU 04 - Adm](CDU-04): Atualizar Categoria
 - [CDU 05 - Adm](CDU-05): Cadastrar Produto
 - [CDU 06 - Adm](CDU-06): Atualizar Produto
 - [CDU 07 - Adm](CDU-07): Gerenciar Estoque
 - [CDU 01 - Usr](CDU-01): Fazer Cadastro
 - [CDU 02 - Usr](CDU-02): Atualizar Cliente
 - [CDU 03 - Usr](CDU-03): Fazer Login
 - [CDU 04 - Usr](CDU-04): Pesquisar Produto
 - [CDU 05 - Usr](CDU-05): Adicionar Produto ao Carrinho
 - [CDU 06 - Usr](CDU-06): Finalizar Compra

## Lista de Atores
 - Cliente
 - Adminstrador

## Diagrama de Casos de Uso
![DiaCasosUso](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e28634fa-9543-460e-b5a1-6023df51a086)

## Descrição dos Casos de Uso



*CDU's - Administrador*

*CDU-01. Fazer Cadastro*

*Fluxo Principal*
![CadAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6176934b-6c90-4e07-bd81-a752c83e6d55)

    1. O sistema exibe o formulário solicitando e-mail e senha.
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
    5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
    6. O sistema direciona o usuário para a página principal da loja.

*Fluxo Alternativo A - Caso o usuário já esteja cadastrado*
![CadAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/455fb056-9398-4c18-9731-ccf365c662bf)

    1. O sistema exibe o formulário solicitando e-mail e senha.
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema retorna a mensagem dizendo que o e-mail de já está cadastrado.
    5. O sistema sugere a aba de Fazer login.

*CDU-02. Fazer Login*
*Fluxo Principal*
![LogAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/4cd05ecb-03ab-4ea4-9d9b-e7e06b6daacf)

    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
    5. O sistema autentica o usuário.
    6. O sistema exibe a página principal da loja.

*Fluxo Alternativo A - Caso o e-mail não esteja cadastrado*
![LogAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b88dcd71-9cad-4d58-a174-c04b1d22c742)

    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
    5. O sistema sugere a aba de Cadastro

*Fluxo Alternativo B - Caso a Senha esteja incorreta*
![LogAdm_DSFA3](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/17b26f9a-85ee-41ca-834a-0fc2dd037314)

    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
    6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

*CDU-03. Cadastrar Categoria*
*Fluxo Principal*
![CadCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/8fba0e38-a6bf-4636-b4a2-9f1e3f871615)
    
    1. O sistema exibe um formulário solicitando o nome da nova categoria
    2. O administrador preenche a solicitação.
    3. O sistema verifica se a categoria já existe
    3. O sistema cadastra a categoria preenchida no Banco de Dados.

*Fluxo Alternativo A - Caso a Categoria já exista*
![CadCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ae59efd6-ff33-4c65-8b30-1782f9f7159d)
    
    1. O sistema exibe um formulário solicitando o nome da nova categoria
    2. O administrador preenche a solicitação.
    3. O sistema verifica se a categoria já existe
    4. O sistema retorna a mensagem dizendo que a categoria já existe


*4. Atualizar Categoria*
*Fluxo Principal*
![UpdCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d43ab2ee-adb7-44d3-9182-c51e5755b3a8)
    
    1. O sistema busca em si a categoria selecionado para atualização
    2. O sistema exibe a categoria e suas respectivas informações
    3. O administrador insere as novas informações e envia
    4. O sistema atualiza a categoria

*Fluxo Alternativo A - Categoria semelhante a outra*
![UpdCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/edd9aa38-340c-48f3-acb7-243649b7893c)
    
    1. O sistema busca em si a categoria selecionado para atualização
    2. O sistema exibe a categoria e suas respectivas informações
    3. O administrador insere as novas informações e envia
    4. O sistema não atualiza a categoria por conter semelhanças a outra categoria
    
*5. Cadastrar Produto*
*Fluxo Principal*
![CadProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/8ad31825-d076-40b0-9d05-134cdd2611b8)
    
    1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto e a descrição do produto.
    2. O usuário preenche os dados do produto.
    3. O sistema exibe uma lista de categorias existentes para o produto.
    4. O usuário seleciona uma categoria da lista.
    5. O usuário clica no botão: Enviar.
    6. O sistema verifica se o produto já está cadastrado.
    7. O produto é inserido ao Banco de dados.
    
*Fluxo Alternativo A - Caso o Produto já exista*
![CadProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/4f8a62ef-95a7-4cbd-b2af-b48a72d3a649)
    
    1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto e a descrição do produto.
    2. O usuário preenche os dados do produto.
    3. O sistema exibe uma lista de categorias existentes para o produto.
    4. O usuário seleciona uma categoria da lista.
    5. O usuário clica no botão: Enviar.
    6. O sistema verifica se o produto já está cadastrado.
    7. O sistema retorna uma mensagem dizendo que o produto que está sendo cadastrado já existe.

*6. Atualizar Produto*
*Fluxo Principal*
![UpdProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/9cd7b485-2dff-48ed-a79d-de2a1a25f373)
    
    1. O sistema busca em si o produto selecionado para atualização
    2. O sistema exibe o produto e suas respectivas informações
    3. O administrador insere as novas informações e envia
    4. O sistema atualiza o produto

*Fluxo Alternativo A - Produto semelhante a outro*
![UpdProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e2a3553b-3e88-4c9e-a1b6-59c53e40d3c8)
    
    1. O sistema busca em si o produto selecionado para atualização
    2. O sistema exibe o produto e suas respectivas informações
    3. O administrador insere as novas informações e envia
    4. O sistema não atualiza o produto por conter semelhanças a outra categoria

*Fluxo Alternativo  B - Produto com valor inestimado*
![UpdProd_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/9d3e4d5f-163a-4ffd-b819-99079b48d3b3)
    
    1. O sistema busca em si o produto selecionado para atualização
    2. O sistema exibe o produto e suas respectivas informações
    3. O administrador insere as novas informações e envia
    4. O sistema não atualiza o produto por conter valor inestimado(inválido) a outra categoria

*7. Gerenciar Estoque*
*Fluxo Principal*
    1. O sistema exibe os produtos junto da quantidade atual no estoque.
    2. O usuário seleciona um produto cadastrado.
    3. O sistema exibe as opções: Aumentar quantidade de estoque de um produto e Diminuir quantidade de estoque de um produto.
    4. O usuário seleciona a opção de Aumentar quantidade de estoque de um produto.
    5. O sistema solicita a quantidade de produtos a serem adicionados ao estoque.
    6. O usuário preenche a solicitação com a quantidade de produtos desejada.
    7. O usuário encerra a operação, clicando no botão: Finalizar.
    8. O sistema adiciona ao estoque do produto escolhido a quantidade informada na solicitação.

*Fluxo Alternativo A - Diminuir Quantidade de Produtos no Estoque
    1. O sistema exibe os produtos junto da quantidade atual no estoque.
    2. O usuário seleciona um produto cadastrado.
    3. O sistema exibe as opções: Aumentar quantidade de estoque de um produto e Diminuir quantidade de estoque de um produto.
    4. O usuário seleciona a opção de Diminuir quantidade de estoque de um produto.
    5. O sistema solicita a quantidade de produtos à serem retirados do estoque.
    6. O usuário preenche a solicitação com a quantidade de produtos desejada.
    7. O usuário encerra a operação, clicando no botão: Finalizar.
    8. O sistema retira do estoque do produto escolhido a quantidade informada na solicitação.

*CDU's - Cliente*
*1. Fazer Cadastro*
*Fluxo Principal*
![CadUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5cc506fb-484f-4fc8-8ba4-d718457041f2)
    
    1. O sistema exibe o formulário solicitando e-mail e senha.
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
    5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
    6. O sistema direciona o usuário para a página principal da loja.

*Fluxo Alternativo A - Caso o usuário já esteja cadastrado*
![CadUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0e5d122d-0761-45df-978f-60717bc76df3)
    
    1. O sistema exibe o formulário solicitando e-mail e senha.
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema retorna a mensagem dizendo que o e-mail de já está cadastrado.
    5. O sistema sugere a aba de Fazer login.

*2. Atualizar Cliente*
*Fluxo Principal*
![UpdUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1fd4aa88-779a-45fe-b2f3-e16daf41ab2e)
    
    1. O sistema busca em si o cliente logado para atualização
    2. O sistema exibe o cliente logado e suas respectivas informações
    3. O cliente logado insere as novas informações e envia
    4. O sistema atualiza o cliente logado

*Fluxo Alternativo A - Cliente semelhante*
![UpdUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/45aec9b5-2b17-402f-9105-475edcb6e0f8)
    
    1. O sistema busca em si o cliente logado para atualização
    2. O sistema exibe o cliente logado e suas respectivas informações
    3. O cliente logado insere as novas informações e envia
    4. O sistema não atualiza o cliente logado por conter informações semelhantes à outro cliente
    
*3. Fazer Login*
*Fluxo Principal*
![LogUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5c36ecdd-be7b-4a2c-b0fc-7d6c77913734)
    
    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
    5. O sistema autentica o usuário.
    6. O sistema exibe a página principal da loja.

*Fluxo Alternativo A - Caso o e-mail não esteja cadastrado*
![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/fab02e02-a211-44d1-b528-a6283ae1cc48)
    
    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
    5. O sistema sugere a aba de Cadastro

*Fluxo Alternativo B - Caso a Senha esteja incorreta*
![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/404ef176-fba1-43d1-ba08-8a3a4c05d3dd)
    
    1. O sistema exibe o formulário solicitando e-mail e senha
    2. O usuário preenche as credencias solicitadas.
    3. O sistema verifica se o e-mail está cadastrado.
    4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
    6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

*4. Pesquisar Produto*
*Fluxo Principal*
    1. O sistema exibe a página principal do site.
    2. O usuário seleciona a aba de pesquisa e digita o nome do produto.
    3. O usuário clica no botão "Procurar" após digitar o nome do produto.
    3. O sistema procura o produto na qual o usuário digitou o nome no Banco de Dados.
    4. O sistema exibe uma lista dos produtos que foram encontrados com o nome solicitado.

*5. Adicionando Produtos no Carrinho*
*Fluxo Principal*
![AddProdCart_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b9b99c9d-0651-4dc8-8df3-ce28be952602)
    
    1. O usuário seleciona um produto que deseje.
    2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
    3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
    4. O sistema verifica que possui o produto selecionado possui no estoque.
    5. O sistema adiciona o produto ao Carrinho.
    6. O sistema sugere ao usuário a opção de ver o Carrinho.
    7. O usuário seleciona a opção de ver o Carrinho.
    8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
    9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e exclusão do produto no Carrinho para cada produto no Carrinho.
    10. O usuário seleciona a opção de "Adicionar mais quantidade desse produto ao Carrinho".
    11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos para serem adicionados ao Carrinho. Onde a quantidade adicionada no final não poderá ser maior que a quantidade no estoque.
    12. O usuário escolhe a quantidade de produtos que deseja adicionar no Carrinho.
    13. O sistema insere os produtos na quantidade selecionada no Carrinho.

*Fluxo Alternativo A - Sem estoque do produto*
![AddProdCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f8f62eb-e2cc-4b75-8a88-385664fcfdc8)
    
    1. O usuário seleciona um produto que deseje.
    2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
    3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
    4. O sistema verifica que possui o produto selecionado possui no estoque.
    5. O sistema retorna a mensagem de que não possui o produto no estoque no momento.

*Fluxo Alternativo B - Usuário escolhe não ver o carrinho*
    1. O usuário seleciona um produto que deseje.
    2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
    3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
    4. O sistema verifica que possui o produto selecionado possui no estoque.
    5. O sistema adiciona o produto ao Carrinho.
    6. O sistema sugere ao usuário a opção de ver o Carrinho.
    7. O usuário escolhe não ver o carrinho.

*Fluxo Alternativo C - Diminuir quantidade*
    1. O usuário seleciona um produto que deseje.
    2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
    3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
    4. O sistema verifica que possui o produto selecionado possui no estoque.
    5. O sistema adiciona o produto ao Carrinho.
    6. O sistema sugere ao usuário a opção de ver o Carrinho.
    7. O usuário seleciona a opção de ver o Carrinho.
    8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
    9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho para cada produto no Carrinho.
    10. O usuário seleciona a opção de "Diminuir mais quantidade desse produto no Carrinho".
    11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos que quer retirar no Carrinho. Onde a quantidade retirada no final não poderá ser igual a zero.
    12. O usuário escolhe a quantidade de produtos que deseja retirar no Carrinho.
    13. O sistema retira os produtos na quantidade selecionada no Carrinho.


*Fluxo Alternativo D - Remover Produto do Carrinho*
    1. O usuário seleciona um produto que deseje.
    2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
    3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
    4. O sistema verifica que possui o produto selecionado possui no estoque.
    5. O sistema adiciona o produto ao Carrinho.
    6. O sistema sugere ao usuário a opção de ver o Carrinho.
    7. O usuário seleciona a opção de ver o Carrinho.
    8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
    9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho, para cada produto no Carrinho.
    10. O usuário seleciona a opção de "Exclusão do produto no Carrinho".
    11. O sistema retira do Carrinho o produto no qual o usuário selecionou a opção de Exclusão do produto no Carrinho.

*6. Finalizar Compra*
*Fluxo Principal*
![BuyCart_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3846e652-8336-4407-8e32-2874504c9d92)

    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de crédito.
    6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde confirmando a autenticação do cartão.
    10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
    11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
    12. O sistema retorna a mensagem dizendo que a compra no cartão de crédito foi aprovada com sucesso.

*Fluxo Alternativo A - Cartão não válido - Crédito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7771e1e8-abeb-4156-a427-d5db352051d5)

    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de crédito.
    6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde negando a autenticação do cartão.
    10. O sistema retorna a mensagem dizendo que o cartão não é válido. 

*Fluxo Alternativo B - Saldo Insuficiente - Crédito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ce25a260-34e8-434e-95ff-b72a1e3651e8)

    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de crédito.
    6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde confirmando a autenticação do cartão.
    10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
    11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
    12. O sistema retorna a mensagem dizendo que não há saldo suficiente para finalizar a compra.

*Fluxo Alternativo C - Aprovado - Cartão de Débito*
    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de débito.
    6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde confirmando a autenticação do cartão.
    10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
    11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
    12. O sistema retorna a mensagem dizendo que a compra no cartão de débito foi aprovada com sucesso.

*Fluxo Alternativo D - Cartão não válido - Cartão de Débito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ba88b28a-b554-4b68-aeb2-25220ecf33a7)
    
    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de débito.
    6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde negando a autenticação do cartão.
    10. O sistema retorna a mensagem dizendo que o cartão não é válido.

*Fluxo Alternativo E - Saldo Insuficiente - Débito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7d9f0192-d056-494b-8c57-a8db7c708e40)

    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via cartão de débito.
    6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
    7. O usuário insere os dados solicitados.
    8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
    9. O Banco responde confirmando a autenticação do cartão.
    10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
    11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
    12. O sistema retorna a mensagem dizendo que não há saldo suficiente para finalizar a compra.

*Fluxo Alternativo F - Aprovado - Boleto*
    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via Boleto.
    6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
    7. O cliente imprime ou anota os dados do boleto.
    8. O usuário realiza o pagamento do boleto em um banco, lotérica ou via internet banking.
    9. O sistema aguarda a confirmação do pagamento por parte do banco.
    10. O Banco retorna uma mensagem avisando do recebimento do pagamento
    11. O sistema registra a compra e finaliza o pedido.

*Fluxo Alternativo G - Prazo Vencido - Boleto*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6d1f33fe-80b9-493f-9ff2-c3822aabfbc1)

    1. O usuário acessa a página: Carrinho de Compras.
    2. O sistema exibe a lista de produtos no carrinho.
    3. O sistema exibe o preço de todos os produtos no carrinho juntos.
    4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
    5. O usuário escolhe a opção de pagamento via Boleto.
    6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
    7. O cliente imprime ou anota os dados do boleto.
    8. O usuário excede a data validade do boleto.
    9. O sistema retorna a mensagem dizendo que o boleto foi quitado e a compra cancelada.

    >#### Caso o Banco Rejeitasse a Compra
            - O sistema retorna uma mensagem dizendo que a compra foi rejeitada.

    >#### O usuário seleciona boleto como forma de pagamento
            - O usuário escolhe a opção de pagamento via boleto.
            - O sistema gera um boleto com os detalhes da compra e um código de barras.
            - O usuário realiza o pagamento do boleto em um banco, lotérica ou via internet banking.
            - O sistema aguarda a confirmação do pagamento por parte do banco.
            - O sistema quando confirma o pagamento, regista a compra e finaliza o pedido.
    >#### Caso o pagamento não for confirmado dentro do prazo
            - O sistema retorna uma mensagem dizendo que o pagamento não foi realizado dentro do prazo.
            - O sistema cancela o pedido.
