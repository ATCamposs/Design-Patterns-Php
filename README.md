SINGLETON:
Quando sua classe PRECISA ter uma unica instancia e essa instancia geralmente tem acesso global.

FACADE:
Esconde a complexidade de um subsistema deixando o codigo mais limpo e com menos repetição.

FACTORY:
Padrão utilizado para centralizar o processo e criar objetos em um lugar único.

STRATEGY:
Evita que você precise fazer chamadas específicas(exemplo escolher entre 1 banco de dados só no sistema todo). na hora de dar suporte para uma troca, todo o sistema precisaria ser trocado. já utilizando o strategy, não precisariamos fazer essa mudança

COMPOSITE:
Compões objetos em uma arvore para representar uma hierarquia completa.
Define relacionamentos entre objetos, geralmente relacionamentos um para muitos (one to many)

ADAPTER:
exemplo:
você pode fazer uma tomada(metodo/classe) de 2 pinos lisa caber dentro de uma tomada de 3 pinos redonda usando um adaptador(classe) que faz a conexão.
Um adaptador é basicamente um classe que separa o cliente do método, fazendo com que você possa adaptar metodos com saidas "diferentes" para serem usados pelo cliente.

OBSERVABLE:
Se baseia na premissa de que uma classe observable(observável) tem que ter uma classe observer(observador) que é quem aqueles que querem o resultado da observable devem perguntar sobre mudanças na classe para evitar pooling

