#Diagrama de Casos de Uso

## Lista de Casos de Uso
 - [CDU 01](#CDU-01-Fazer-Cadastro): Adm-Fazer Cadastro
 - [CDU 02](#CDU-02-Fazer-Login): Adm-Fazer Login
 - [CDU 03](#CDU-03-Cadastrar-Categoria): Adm-Cadastrar Categoria
 - [CDU 04](#CDU-04-Atualizar-Categoria): Adm-Atualizar Categoria
 - [CDU 05](#CDU-05-Cadastrar-Produto): Adm-Cadastrar Produto
 - [CDU 06](#CDU-06-Atualizar-Produto): Adm-Atualizar Produto
 - [CDU 07](#CDU-07-Gerenciar-Estoque): Adm-Gerenciar Estoque
 - [CDU 08](#CDU-08-Fazer-Cadastro): Usr-Fazer Cadastro
 - [CDU 09](#CDU-09-Atualizar-Cliente): Usr-Atualizar Cliente
 - [CDU 10](#CDU-10-Fazer-Login): Usr-Fazer Login
 - [CDU 11](#CDU-11-Pesquisar-Produto): Usr-Pesquisar Produto
 - [CDU 12](#CDU-12-Adicionando-Produtos-no-Carrinho): Usr-Adicionando Produtos no Carrinho
 - [CDU 13](#CDU-13-Finalizar-Compra): Usr-Finalizar Compra

## Lista de Atores
 - [Cliente](#CDUs-Cliente)
 - [Adminstrador](#CDUs-Administrador)

## Diagrama de Casos de Uso
![DiaCasosUso](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e28634fa-9543-460e-b5a1-6023df51a086)

## Descrição dos Casos de Uso
       1. O visitante se cadastra como cliente
       2. O visitante realiza o seu login.
       3. O cliente pesquisa por produtos.
       4. O cliente pesquisa usando categorias.
       5. O cliente adiciona produtos ao seu carrinho.
       6. O cliente visualiza seu carrinho.
       7. O cliente compra o seu carrinho.
       8. O cliente visualisa todas as sua compras já realizadas.
       9. O administrador cadastra outro aministrador.
       10. O adminstrador cadastra categorias;
       11. O aminsitrador atualiza categorias.
       12. O aministraador cadastra produtos.
       13. O administrador atualiza produtos.
       14. O aministrador visualiza as compras de todos os cliente.


### CDUs Administrador
#### CDU-01 Fazer Cadastro
 - Fluxo Principal
![CadAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7abe13c3-7343-4e90-9899-74aad5d86948)
   
          1. O sistema exibe o formulário solicitando e-mail e senha.
          2. O usuário preenche as credencias solicitadas.
          3. O sistema verifica se o e-mail está cadastrado.
          4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
          5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
          6. O sistema direciona o usuário para a página principal da loja.

 - Fluxo Alternativo A - Caso o usuário já esteja cadastrado
![CadAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/89b59f66-b7e7-47f0-9b99-e2be03ae933a)

       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem dizendo que o e-mail de já está cadastrado.
       5. O sistema sugere a aba de Fazer login.

#### CDU-02. Fazer Login
 - Fluxo Principal
![LogAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b22580bb-7cc0-4966-94d6-667f5261b34c)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       5. O sistema autentica o usuário.
       6. O sistema exibe a página principal da loja.

 - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
![LogAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3a3011bb-dc36-45b1-80a5-7bc59a313fed)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
       5. O sistema sugere a aba de Cadastro

 - Fluxo Alternativo B - Caso a Senha esteja incorreta
![LogAdm_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/dfdd0b03-5db2-42f8-ad76-28b92ec19525)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

#### CDU-03. Cadastrar Categoria
 - Fluxo Principal
![CadCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/767c373b-e1b3-4af2-b7ff-95f0abc1afd5)

       1. O sistema exibe um formulário solicitando o nome da nova categoria
       2. O administrador preenche a solicitação.
       3. O sistema verifica se a categoria já existe
       3. O sistema cadastra a categoria preenchida no Banco de Dados.

 - Fluxo Alternativo A - Caso a Categoria já exista
[CadCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/f18ca598-1c44-4a9c-8f2f-eddbdce46e86)

       1. O sistema exibe um formulário solicitando o nome da nova categoria
       2. O administrador preenche a solicitação.
       3. O sistema verifica se a categoria já existe
       4. O sistema retorna a mensagem dizendo que a categoria já existe


#### CDU-04. Atualizar Categoria
 - Fluxo Principal
![UpdCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/235a3c8f-8f66-4d2b-89d6-dc71f37c2163)

       1. O sistema busca em si a categoria selecionado para atualização
       2. O sistema exibe a categoria e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema atualiza a categoria

 - Fluxo Alternativo A - Categoria semelhante a outra
![UpdCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b70dbc9d-f5fe-441b-9ab2-ff27a64a7034)

       1. O sistema busca em si a categoria selecionado para atualização
       2. O sistema exibe a categoria e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema não atualiza a categoria por conter semelhanças a outra categoria
    
#### CDU-05. Cadastrar Produto
 - Fluxo Principal
![CadProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5014a12c-a6cd-46cd-807e-9119bfd484cd)

       1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto e a descrição do produto.
       2. O usuário preenche os dados do produto.
       3. O sistema exibe uma lista de categorias existentes para o produto.
       4. O usuário seleciona uma categoria da lista.
       5. O usuário clica no botão: Enviar.
       6. O sistema verifica se o produto já está cadastrado.
       7. O produto é inserido ao Banco de dados.
    
 - Fluxo Alternativo A - Caso o Produto já exista
![CadProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/47f2d398-c927-47ad-a5f1-6e8bf293b22c)

       1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto e a descrição do produto.
       2. O usuário preenche os dados do produto.
       3. O sistema exibe uma lista de categorias existentes para o produto.
       4. O usuário seleciona uma categoria da lista.
       5. O usuário clica no botão: Enviar.
       6. O sistema verifica se o produto já está cadastrado.
       7. O sistema retorna uma mensagem dizendo que o produto que está sendo cadastrado já existe.

#### CDU-06. Atualizar Produto
 - Fluxo Principal
![UpdProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6d6b1270-6377-4f10-86ce-c5ce733f5d6d)

       1. O sistema busca em si o produto selecionado para atualização
       2. O sistema exibe o produto e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema atualiza o produto

 - Fluxo Alternativo A - Produto semelhante a outro
![UpdProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/720a9376-c007-46b8-82e6-17488710b9b9)

       1. O sistema busca em si o produto selecionado para atualização
       2. O sistema exibe o produto e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema não atualiza o produto por conter semelhanças a outra categoria

 - Fluxo Alternativo  B - Produto com valor inestimado
![UpdProd_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5262476c-1023-49d9-a08c-f431b330ab2a)

       1. O sistema busca em si o produto selecionado para atualização
       2. O sistema exibe o produto e suas respectivas informações
       3. O administrador insere as novas informações e envia
       4. O sistema não atualiza o produto por conter valor inestimado(inválido) a outra categoria

#### CDU-07 Adicionar Quantidade de Produto em Estoque
 - Fluxo Principal
![InsertProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e2f739f5-452d-4f09-a08f-17b452b19dbc)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Aumentar Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser adicionados ao estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema adiciona ao estoque do produto escolhido a quantidade informada na solicitação.

Fluxo Alternativo A - Inserção maior que possível do estoque
![InsertProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0ce043d4-7e40-46b3-9781-76359b317936)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Aumentar Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser adicionados ao estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema não adiciona ao estoque do produto escolhido a quantidade informada na solicitação, pois ultrapassa o limite do estoque.

#### CDU-07. Remover Quantidade de Produto em Estoque
 - Fluxo Principal
![RemovProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6b7b899e-47ee-4db5-b88c-3b43c4f5a3a3)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Diminuir Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser removida do estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema remove do estoque do produto escolhido a quantidade informada na solicitação.

Fluxo Alternativo A - Remoção maior que possível do estoque
![RemovProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/cd1ba229-68cd-4b68-a1ca-566957e3841d)

       1. O sistema exibe os produtos junto da quantidade atual no estoque.
       2. O administrador seleciona um produto cadastrado.
       3. O sistema exibe as opções: Aumentar Quantidade de Estoque e Diminuir Quantidade de Estoque.
       4. O administrador seleciona a opção de Diminuir Quantidade de Estoque.
       5. O sistema solicita a quantidade do produto a ser removida do estoque.
       6. O adminstrador preenche a solicitação com a quantidade de produtos desejada.
       7. O usuário encerra a operação, clicando no botão: Finalizar.
       8. O sistema não rmeove do estoque do produto escolhido a quantidade informada na solicitação, pois ultrapassa o limite do estoque.


#### CDUs Cliente
#### CDU-08. Fazer Cadastro
 - Fluxo Principal
![CadUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5cc506fb-484f-4fc8-8ba4-d718457041f2)
    ![CadUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d398a2de-1d5d-412e-b803-09641c5cfcbe)

       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
       5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
       6. O sistema direciona o usuário para a página principal da loja.

 - Fluxo Alternativo A - Caso o usuário já esteja cadastrado
![CadUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0e5d122d-0761-45df-978f-60717bc76df3)
    ![CadUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/08f7d6cd-63d3-4966-9caa-8d792e933784)

       1. O sistema exibe o formulário solicitando e-mail e senha.
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem dizendo que o e-mail de já está cadastrado.
       5. O sistema sugere a aba de Fazer login.

#### CDU-09. Atualizar Cliente
 - Fluxo Principal
![UpdUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1fd4aa88-779a-45fe-b2f3-e16daf41ab2e)
    ![UpdUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/f8ecc198-3ec0-4e23-9f7a-b5dffeaa5f20)

       1. O sistema busca em si o cliente logado para atualização
       2. O sistema exibe o cliente logado e suas respectivas informações
       3. O cliente logado insere as novas informações e envia
       4. O sistema atualiza o cliente logado

 - Fluxo Alternativo A - Cliente semelhante
![UpdUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/45aec9b5-2b17-402f-9105-475edcb6e0f8)
    ![UpdUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ec744fe9-dab2-458a-9844-310abdf98e95)

       1. O sistema busca em si o cliente logado para atualização
       2. O sistema exibe o cliente logado e suas respectivas informações
       3. O cliente logado insere as novas informações e envia
       4. O sistema não atualiza o cliente logado por conter informações semelhantes à outro cliente
    
#### CDU-10. Fazer Login
 - Fluxo Principal
![LogUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5c36ecdd-be7b-4a2c-b0fc-7d6c77913734)
    ![LogUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f49d177-47a0-48eb-98da-f5126450bf41)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       5. O sistema autentica o usuário.
       6. O sistema exibe a página principal da loja.

 - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/fab02e02-a211-44d1-b528-a6283ae1cc48)
    ![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1f6b6b2c-9a85-4581-b2af-196dc710a984)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
       5. O sistema sugere a aba de Cadastro

 - Fluxo Alternativo B - Caso a Senha esteja incorreta
![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/404ef176-fba1-43d1-ba08-8a3a4c05d3dd)
    ![LogUser_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6b35bb56-ff2e-4ebb-87db-e66b99703af7)

       1. O sistema exibe o formulário solicitando e-mail e senha
       2. O usuário preenche as credencias solicitadas.
       3. O sistema verifica se o e-mail está cadastrado.
       4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
       6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

#### CDU-11. Pesquisar Produto
 - Fluxo Principal
![PsqzProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1566e8ad-2ae8-4fde-aef6-84120507e715)

       1. O sistema exibe a página principal do site.
       2. O usuário seleciona a aba de pesquisa e digita o nome do produto.
       3. O usuário clica no botão "Procurar" após digitar o nome do produto.
       3. O sistema procura o produto na qual o usuário digitou o nome no Banco de Dados.
       4. O sistema exibe uma lista dos produtos que foram encontrados com o nome solicitado.

#### CDU-12. Adicionando Produtos no Carrinho
 - Fluxo Principal

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

 - Fluxo Alternativo A - Sem estoque do produto
![AddProdCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f8f62eb-e2cc-4b75-8a88-385664fcfdc8)
    ![AddProdCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/60935c18-e2a2-43ac-83a5-6f149df93f98)

       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema retorna a mensagem de que não possui o produto no estoque no momento.

 - Fluxo Alternativo B - Usuário escolhe não ver o carrinho
       1. O usuário seleciona um produto que deseje.
       2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
       3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
       4. O sistema verifica que possui o produto selecionado possui no estoque.
       5. O sistema adiciona o produto ao Carrinho.
       6. O sistema sugere ao usuário a opção de ver o Carrinho.
       7. O usuário escolhe não ver o carrinho.


#### CDU-13. Reduzir Quantidade do Produto no Carrinho
 - Fluxo Principal
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

 - Fluxo Alternativo A - Remover Produto do Carrinho
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

 - Fluxo Alternativo B - Cancelar Operação
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


#### CDU-14. Aumentar Quantidade do Produto no Carrinho
 - Fluxo Principal

#### CDU-15. Finalizar Compra
 - Fluxo Principal
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

 - Fluxo Alternativo A - Cartão não válido - Crédito
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

 - Fluxo Alternativo B - Saldo Insuficiente - Crédito
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

 - Fluxo Alternativo C - Aprovado - Cartão de Débito
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

 - Fluxo Alternativo D - Cartão não válido - Cartão de Débito
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

 - Fluxo Alternativo E - Saldo Insuficiente - Débito
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

 - Fluxo Alternativo F - Aprovado - Boleto
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

 - Fluxo Alternativo G - Prazo Vencido - Boleto
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
