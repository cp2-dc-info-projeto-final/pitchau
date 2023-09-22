![CadUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/cef94a1f-5827-4091-8ec9-67a4e92caba0)# Documento de Casos de Uso

## Lista dos Casos de Uso
 - [#CDU 01 - Adm](CDU-01): Fazer Cadastro
 - [#CDU 02 - Adm](CDU-02): Fazer Login
 - [#CDU 03 - Adm](CDU-03): Cadastrar Categoria
 - [#CDU 04 - Adm](CDU-04): Atualizar Categoria
 - [#CDU 05 - Adm](CDU-05): Cadastrar Produto
 - [#CDU 06 - Adm](CDU-06): Atualizar Produto
 - [#CDU 07 - Adm](CDU-07): Aumentar Quantidade em Estoque
 - [#CDU 08 - Adm](CDU-08): Subtrair Quantide em Estoque
 - [#CDU 01 - Usr](CDU-01): Fazer Cadastro
 - [#CDU 02 - Usr](CDU-02): Atualizar Cliente
 - [#CDU 03 - Usr](CDU-03): Fazer Login
 - [#CDU 04 - Usr](CDU-04): Pesquisar Produto
 - [#CDU 05 - Usr](CDU-05): Adicionar Produto ao Carrinho
 - [#CDU 06 - Usr](CDU-06): Finalizar Compra

## Lista de Atores
 - Cliente
 - Adminstrador

## Diagrama de Casos de Uso
![DiaCasosUso](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e28634fa-9543-460e-b5a1-6023df51a086)

## Descrição dos Casos de Uso

CDU's - Administrador
 - CDU-01. Fazer Cadastro
   - Fluxo Principal
![CadAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/b27d9857-e775-4891-bb58-4fc23a5febc5)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
     > 5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
     > 6. O sistema direciona o usuário para a página principal da loja.

   - Fluxo Alternativo A - Caso o usuário já esteja cadastrado
![CadAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/23e66ab8-c70d-4623-a22e-d171ec675ad7)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema retorna a mensagem dizendo que o administrador já está cadastrado.
     > 5. O sistema sugere a aba de Fazer login.

 - CDU-02. Fazer Login
   - Fluxo Principal
![LogAdm_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/4cd05ecb-03ab-4ea4-9d9b-e7e06b6daacf)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema verifica se as credenciais são coerentes as do Banco de Dados.
     > 5. O sistema autentica o usuário.
     > 6. O sistema exibe a página principal da loja.

   - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
![LogAdm_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/438c2894-b6ad-4801-8935-9ceae8ce50b2)

     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
     > 5. O sistema sugere a aba de Cadastro

   - Fluxo Alternativo B - Caso a Senha esteja incorreta
![LogAdm_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0681a5a3-a5f1-42c4-a1dd-2e75b52c3411)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema verifica se as credenciais são coerentes as do Banco de Dados.
     > 6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

 - CDU-03. Cadastrar Categoria
   - Fluxo Principal
![CadCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e3bcbf44-60e5-45c1-82af-552780d918b2) 
     > 1. O sistema exibe um formulário solicitando o nome da nova categoria.
     > 2. O administrador preenche a solicitação.
     > 3. O sistema verifica se a categoria já existe.
     > 3. O sistema cadastra a categoria preenchida no Banco de Dados.

   - Fluxo Alternativo A - Caso a Categoria já exista
![CadCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e4b7a84b-0b68-4771-aa6f-9a51ba9f0666)
     > 1. O sistema exibe um formulário solicitando o nome da nova categoria.
     > 2. O administrador preenche a solicitação.
     > 3. O sistema verifica se a categoria já existe.
     > 4. O sistema retorna a mensagem dizendo que a categoria já existe.
     > 5. O sistema sugere atualizar a categoria existente.

4. Atualizar Categoria
   - Fluxo Principal
![UpdCat_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/1f194a93-e0f6-4822-9b56-c8be6081aeea)    
     > 1. O sistema busca em si a categoria selecionado para atualização.
     > 2. O sistema exibe a categoria e suas respectivas informações.
     > 3. O administrador insere as novas informações e envia.
     > 4. O sistema verifica se existe categoria semelhante.
     > 5. O sistema atualiza a categoria.

   - Fluxo Alternativo A - Categoria semelhante a outra
![UpdCat_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3927d7ab-e8b9-4467-85ca-9870637f78e1)
     > 1. O sistema busca em si a categoria selecionado para atualização.
     > 2. O sistema exibe a categoria e suas respectivas informações.
     > 3. O administrador insere as novas informações e envia.
     > 4. O sistema verifica se existe categoria semelhante.
     > 5. O sistema não atualiza a categoria por conter semelhanças a outra categoria.
    
5. Cadastrar Produto
   - Fluxo Principal
![CadProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/0808c59a-97fc-43b2-afe0-296bcabd191a)
     > 1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto, a descrição do produto e imagem do produto.
     > 2. O usuário preenche os dados do produto.
     > 3. O sistema exibe uma lista de categorias existentes para o produto.
     > 4. O usuário seleciona uma categoria da lista.
     > 5. O usuário clica no botão: Enviar.
     > 6. O sistema verifica se o produto já está cadastrado.
     > 7. O produto é inserido ao Banco de dados.
    
   - Fluxo Alternativo A - Caso o Produto já exista
![CadProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5e996305-13c9-4785-b02d-c08f3f9720ef)
     > 1. O sistema exibe um formulário solicitando o nome do produto, o preço do produto, a descrição do produto e imagem do produto.
     > 2. O usuário preenche os dados do produto.
     > 3. O sistema exibe uma lista de categorias existentes para o produto.
     > 4. O usuário seleciona uma categoria da lista.
     > 5. O usuário clica no botão: Enviar.
     > 6. O sistema verifica se o produto já está cadastrado.
     > 7. O sistema retorna uma mensagem dizendo que um produto semelhante já existe, não cadastrando-o.

6. Atualizar Produto
   - Fluxo Principal
![UpdProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e7e52c25-a619-47f9-9d45-56bd2cd6fd42)
     > 1. O sistema busca em si o produto selecionado para atualização.
     > 2. O sistema exibe o produto e suas respectivas informações.
     > 3. O administrador insere as novas informações e envia.
     > 4. O sistema verifica se o produto é semelhante a outro.
     > 5. O sistema atualiza o produto.

   - Fluxo Alternativo A - Produto semelhante a outro
![UpdProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/c551d995-ebb9-4542-befb-0082b9bec375)
     > 1. O sistema busca em si o produto selecionado para atualização
     > 2. O sistema exibe o produto e suas respectivas informações
     > 3. O administrador insere as novas informações e envia
     > 4. O sistema não atualiza o produto por conter semelhanças a outra categoria

   - Fluxo Alternativo  B - Produto com valor inválido
![UpdProd_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/dfadd32c-8973-404b-9d20-9035e26f5214)
     > 1. O sistema busca em si o produto selecionado para atualização
     > 2. O sistema exibe o produto e suas respectivas informações
     > 3. O administrador insere as novas informações e envia
     > 4. O sistema não atualiza o produto por conter valor inválido a outra categoria

7. Aumentar Quantidade em Estoque
   - Fluxo Principal
![InsertProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/e8104bb2-361c-4d6c-8059-06f5626d5f6e)
     > 1. O sistema exibe os produtos junto da quantidade atual no estoque.
     > 2. O usuário seleciona um produto cadastrado.
     > 3. O sistema exibe as opções: Aumentar Quantidade em Estoque de um produto e Subtrair Quantidade em Estoque de um produto.
     > 4. O usuário seleciona a opção de Aumentar quantidade de estoque de um produto.
     > 5. O sistema solicita a quantidade de produtos a serem adicionados ao estoque.
     > 6. O usuário preenche a solicitação com a quantidade de produtos desejada.
     > 7. O usuário encerra a operação, clicando no botão: Finalizar.
     > 8. O sistema adiciona ao estoque do produto escolhido a quantidade informada na solicitação.

   - Fluxo Alternativo A - Quantidade de Produtos maior que Estoque
![InsertProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ac2d8085-c0c0-4871-92cc-2508753b6027)
     > 1. O sistema exibe os produtos junto da quantidade atual no estoque.
     > 2. O usuário seleciona um produto cadastrado.
     > 3. O sistema exibe as opções: Aumentar Quantidade em Estoque de um produto e Subtrair Quantidade em Estoque de um produto.
     > 4. O usuário seleciona a opção de Aumentar quantidade de estoque de um produto.
     > 5. O sistema solicita a quantidade de produtos a serem adicionados ao estoque.
     > 6. O usuário preenche a solicitação com a quantidade de produtos desejada.
     > 7. O usuário encerra a operação, clicando no botão: Finalizar.
     > 8. O sistema não adiciona ao estoque do produto escolhido a quantidade informada na solicitação, por ultrapassar a quantidade máxima.

8. Subtrair Quantidade em Estoque
   - Fluxo Principal
![RemovProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d29b387b-f327-40f3-bb57-410d3ce4f8b2)
     > 1. O sistema exibe os produtos junto da quantidade atual no estoque.
     > 2. O usuário seleciona um produto cadastrado.
     > 3. O sistema exibe as opções: Aumentar Quantidade em Estoque de um produto e Subtrair Quantidade em Estoque de um produto.
     > 4. O usuário seleciona a opção de Subtrair Quantidade em Estoque de um produto.
     > 5. O sistema solicita a quantidade de produtos a serem subtraídos do estoque.
     > 6. O usuário preenche a solicitação com a quantidade de produtos desejada.
     > 7. O usuário encerra a operação, clicando no botão: Finalizar.
     > 8. O sistema subtrai do estoque do produto escolhido a quantidade informada na solicitação.

   - Fluxo Alternativo A - Quantidade de Produtos maior que Estoque
![RemovProd_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ce472f5b-740f-41a7-a2a2-734eb32402e4)
     > 1. O sistema exibe os produtos junto da quantidade atual no estoque.
     > 2. O usuário seleciona um produto cadastrado.
     > 3. O sistema exibe as opções: Aumentar Quantidade em Estoque de um produto e Subtrair Quantidade em Estoque de um produto.
     > 4. O usuário seleciona a opção de Subtrair Quantidade em Estoque de um produto.
     > 5. O sistema solicita a quantidade de produtos a serem subtraídos do estoque.
     > 6. O usuário preenche a solicitação com a quantidade de produtos desejada.
     > 7. O usuário encerra a operação, clicando no botão: Finalizar.
     > 8. O sistema não subtrai do estoque do produto escolhido a quantidade informada na solicitação, por ultrapassar a quantidade presente.

CDU's - Cliente
 - Fazer Cadastro
   - Fluxo Principal
![CadUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/91c8c382-42fd-4cad-bcf4-b993eb6795f6)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema cadastra o e-mail junto da senha no Banco de Dados.
     > 5. O sistema retorna a mensagem que o cadastro foi finalizado com sucesso.
     > 6. O sistema direciona o usuário para a página principal da loja.

   - Fluxo Alternativo A - Caso o usuário já esteja cadastrado
![CadUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/a4f093ec-d4e6-4f53-bbea-7552a6440ebe)
     > 1. O sistema exibe o formulário solicitando e-mail e senha.
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema retorna a mensagem dizendo que o usuário já está cadastrado.
     > 5. O sistema sugere a aba de Fazer login.

2. Atualizar Cliente
   - Fluxo Principal
![UpdUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/30e463f4-22bf-49a2-8333-4b9d84f7043a)
     > 1. O sistema busca em si o cliente logado para atualização
     > 2. O sistema exibe o cliente logado e suas respectivas informações
     > 3. O cliente logado insere as novas informações e envia
     > 4. O sistema atualiza o cliente logado

   - Fluxo Alternativo A - Cliente semelhante
![UpdUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7c4de721-ae84-469a-8589-e4123236ba5d)
     > 1. O sistema busca em si o cliente logado para atualização
     > 2. O sistema exibe o cliente logado e suas respectivas informações
     > 3. O cliente logado insere as novas informações e envia
     > 4. O sistema não atualiza o cliente logado por conter informações semelhantes à outro cliente
    
3. Fazer Login
   - Fluxo Principal
![LogUser_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3f9b38f0-c8ba-4552-9a3b-bd7eef4c55bc)
     > 1. O sistema exibe o formulário solicitando e-mail e senha
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema verifica se credenciais são compatíveis com as do Banco de Dados.
     > 5. O sistema autentica o usuário.
     > 6. O sistema exibe a página principal da loja.

   - Fluxo Alternativo A - Caso o e-mail não esteja cadastrado
![LogUser_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/2bcc0ca8-337f-492d-a956-ad2c68f294db)
     > 1. O sistema exibe o formulário solicitando e-mail e senha
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema retorna a mensagem dizendo que o e-mail não está cadastrado 
     > 5. O sistema sugere a aba de Cadastro

   - Fluxo Alternativo B - Caso a Senha esteja incorreta
![LogUser_DSFA2](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/4ded6499-e631-401f-8f32-f99b20fb89ad)
     > 1. O sistema exibe o formulário solicitando e-mail e senha
     > 2. O usuário preenche as credencias solicitadas.
     > 3. O sistema verifica se o e-mail está cadastrado.
     > 4. O sistema verifica se as credenciais são coerentes as do Banco de Dados.
     > 6. O sistema retorna a mensagem que a senha deste e-mail está incorreta.

4. Pesquisar Produto
   - Fluxo Principal
![PsqzProd_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/71df787b-6a8e-4ebc-acd4-cae3f5f72430)
     > 1. O sistema exibe a página principal do site.
     > 2. O usuário seleciona a aba de pesquisa e digita o nome do produto.
     > 3. O usuário clica no botão "Procurar" após digitar o nome do produto.
     > 3. O sistema procura o produto na qual o usuário digitou o nome no Banco de Dados.
     > 4. O sistema exibe uma lista dos produtos que foram encontrados com o nome solicitado.

5. Adicionando Produtos no Carrinho
   - Fluxo Principal
![AddProdCart_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d22be22c-3525-409c-89d0-4160d4b37319)
     > 1. O usuário seleciona um produto que deseje.
     > 2. O sistema abre a página do produto contendo suas informações como: nome, preço, categoria, descrição e foto.
     > 3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
     > 4. O sistema verifica se há quantidade disponível no estoque do produto selecionado.
     > 5. O sistema adiciona o produto ao Carrinho.
     > 6. O sistema sugere ao usuário a opção de ver o Carrinho.
     > 7. O usuário seleciona a opção de ver o Carrinho.
     > 8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
     > 9. O sistema exibe as opções de: Adicionar mais Quantidade desse Produto ao Carrinho, Diminuir mais Quantidade desse Produto no Carrinho e Exclusão do Produto no Carrinho para cada produto no Carrinho.
     > 10. O usuário seleciona a opção de "Adicionar mais Quantidade desse Produto ao Carrinho".
     > 11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos para serem adicionados ao Carrinho. Onde a quantidade adicionada no final não poderá ser maior que a quantidade no estoque.
     > 12. O usuário escolhe a quantidade de produtos que deseja adicionar no Carrinho.
     > 13. O sistema insere os produtos na quantidade selecionada no Carrinho.

   - Fluxo Alternativo A - Sem estoque do produto
![AddProdCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/5f24a994-2fa6-4894-9095-c951c21d45a0)
     > 1. O usuário seleciona um produto que deseje.
     > 2. O sistema abre a página do produto contendo suas informações como: nome, preço, categoria, descrição e foto.
     > 3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
     > 4. O sistema verifica se há quantidade disponível no estoque do produto selecionado.
     > 5. O sistema retorna a mensagem de que não possui o produto no estoque no momento.

   - Fluxo Alternativo B - Usuário escolhe não ver o carrinho
![AddProdCart_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/d48b3a4c-a785-4f8c-bb74-4f89a6bfa5ef)
     > 1. O usuário seleciona um produto que deseje.
     > 2. O sistema abre a página do produto contendo suas informações como: nome, preço, categoria, descrição e foto.
     > 3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
     > 4. O sistema verifica que possui o produto selecionado possui no estoque.
     > 5. O sistema adiciona o produto ao Carrinho.
     > 6. O sistema sugere ao usuário a opção de ver o Carrinho.
     > 7. O usuário escolhe não ver o carrinho.

   - Fluxo Alternativo C - Diminuir quantidade
     > 1. O usuário seleciona um produto que deseje.
     > 2. O sistema abre a página do produto contendo suas informações como: nome, preço, categoria, descrição e foto.
     > 3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
     > 4. O sistema verifica que possui o produto selecionado possui no estoque.
     > 5. O sistema adiciona o produto ao Carrinho.
     > 6. O sistema sugere ao usuário a opção de ver o Carrinho.
     > 7. O usuário seleciona a opção de ver o Carrinho.
     > 8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
     > 9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho para cada produto no Carrinho.
     > 10. O usuário seleciona a opção de "Diminuir mais quantidade desse produto no Carrinho".
     > 11. O sistema exibe uma lista de números para o usuário escolher a quantidades de produtos que quer retirar no Carrinho. Onde a quantidade retirada no final não poderá ser igual a zero.
     > 12. O usuário escolhe a quantidade de produtos que deseja retirar no Carrinho.
     > 13. O sistema retira os produtos na quantidade selecionada no Carrinho.


   - Fluxo Alternativo D - Remover Produto do Carrinho*
     > 1. O usuário seleciona um produto que deseje.
     > 2. O sistema abre a página do produto contendo suas informações como: nome, preço, descrição e categoria.
     > 3. O usuário seleciona o botão "Adicionar Produto ao Carrinho".
     > 4. O sistema verifica que possui o produto selecionado possui no estoque.
     > 5. O sistema adiciona o produto ao Carrinho.
     > 6. O sistema sugere ao usuário a opção de ver o Carrinho.
     > 7. O usuário seleciona a opção de ver o Carrinho.
     > 8. O sistema abre a página do Carrinho que contem os produtos na qual ele adicionou junto da quantidade no estoque.
     > 9. O sistema exibe as opções de: Adicionar mais quantidade desse produto ao Carrinho, Diminuir mais quantidade desse produto no Carrinho e Exclusão do produto no Carrinho, para cada produto no Carrinho.
     > 10. O usuário seleciona a opção de "Exclusão do produto no Carrinho".
     > 11. O sistema retira do Carrinho o produto no qual o usuário selecionou a opção de Exclusão do produto no Carrinho.

6. Finalizar Compra*
   - Fluxo Principal*
![BuyCart_DSFP](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/3846e652-8336-4407-8e32-2874504c9d92)

     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de crédito.
     > 6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde confirmando a autenticação do cartão.
     > 10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
     > 11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
     > 12. O sistema retorna a mensagem dizendo que a compra no cartão de crédito foi aprovada com sucesso.

   - Fluxo Alternativo A - Cartão não válido - Crédito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7771e1e8-abeb-4156-a427-d5db352051d5)

     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de crédito.
     > 6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde negando a autenticação do cartão.
     > 10. O sistema retorna a mensagem dizendo que o cartão não é válido. 

   - Fluxo Alternativo B - Saldo Insuficiente - Crédito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ce25a260-34e8-434e-95ff-b72a1e3651e8)

     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de crédito.
     > 6. O sistema solicita os dados do cartão de crédito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde confirmando a autenticação do cartão.
     > 10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
     > 11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
     > 12. O sistema retorna a mensagem dizendo que não há saldo suficiente para finalizar a compra.

   - Fluxo Alternativo C - Aprovado - Cartão de Débito*
     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de débito.
     > 6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde confirmando a autenticação do cartão.
     > 10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
     > 11. O Banco responde confirmando o saldo disponível para a compra total do Carrinho.
     > 12. O sistema retorna a mensagem dizendo que a compra no cartão de débito foi aprovada com sucesso.

   - Fluxo Alternativo D - Cartão não válido - Cartão de Débito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/ba88b28a-b554-4b68-aeb2-25220ecf33a7)
    
     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de débito.
     > 6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde negando a autenticação do cartão.
     > 10. O sistema retorna a mensagem dizendo que o cartão não é válido.

   - Fluxo Alternativo E - Saldo Insuficiente - Débito*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/7d9f0192-d056-494b-8c57-a8db7c708e40)

     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via cartão de débito.
     > 6. O sistema solicita os dados do cartão de débito: número do cartão, data de validade e código de segurança.
     > 7. O usuário insere os dados solicitados.
     > 8. O sistema envia uma solicitação ao banco para verificar a autenticidade dos dados.
     > 9. O Banco responde confirmando a autenticação do cartão.
     > 10. O sistema envia uma solicitação ao banco para verificar se possui saldo disponível para a compra.
     > 11. O Banco responde negando o saldo disponível para a compra total do Carrinho.
     > 12. O sistema retorna a mensagem dizendo que não há saldo suficiente para finalizar a compra.

   - Fluxo Alternativo F - Aprovado - Boleto*
     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via Boleto.
     > 6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
     > 7. O cliente imprime ou anota os dados do boleto.
     > 8. O usuário realiza o pagamento do boleto em um banco, lotérica ou via internet banking.
     > 9. O sistema aguarda a confirmação do pagamento por parte do banco.
     > 10. O Banco retorna uma mensagem avisando do recebimento do pagamento
     > 11. O sistema registra a compra e finaliza o pedido.

   - Fluxo Alternativo G - Prazo Vencido - Boleto*
![BuyCart_DSFA](https://github.com/cp2-dc-info-projeto-final/pitchau/assets/95544072/6d1f33fe-80b9-493f-9ff2-c3822aabfbc1)

     > 1. O usuário acessa a página: Carrinho de Compras.
     > 2. O sistema exibe a lista de produtos no carrinho.
     > 3. O sistema exibe o preço de todos os produtos no carrinho juntos.
     > 4. O sistema exibe as opções de pagamento disponíveis: Crédito, débito e boleto.
     > 5. O usuário escolhe a opção de pagamento via Boleto.
     > 6. O sistema gera um boleto com as informações: nome e CNPJ/CPF do beneficiário, o valor a ser pago, a data de vencimento, a descrição do pagamento, o código de barras e a linha digitável.
     > 7. O cliente imprime ou anota os dados do boleto.
     > 8. O usuário excede a data validade do boleto.
     > 9. O sistema retorna a mensagem dizendo que o boleto foi quitado e a compra cancelada.

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
