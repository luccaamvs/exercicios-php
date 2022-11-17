<?php
/* Definicao de Classe, Atributos e Metodos.

Classes sao declaracoes de que contem comportamentos onde sao armazenadas propriedades e metodos.
Atributos sao as caracteristicas de um objeto.
Metodos sao as acoes que um objeto pode exercer quando chamados. */

 class Teste{           //Classe

    const nome = 'Lucca';    //Atributo
    function __construct() { //Metodo
        print nome;
    }
}

/* Definicao de Interface

Serve para especificar quais metodos uma classe deve implementar antes dela ser usada propriamente. */

interface iTemplate{
    public function teste1($name, $var);
}

class teste1 implements iTemplate{
    public function teste1($name, $var)
    {
        $this->vars[$name] = $var;
    }
}

/* Definicao de Classe Abstrata

São classes q n podem ser instanciadas, apenas herdada. 
São muito uteis quando não queremos criar um objeto a partir de uma classe mas sim de suas subclasses.*/
abstract class nome__da_classe{
    public function __construct(){
         }
  }

  /* Funcão sem retorno vs Funcão com Retorno

Funções void apenas executam comandos sem devolver um valor.
Funções com retorno resultam em um valor a ser retornado.*/
function soma($a, $b): void {
    $soma = $a + $b;
} 

function recursion($a){
    if ($a < 20) {
        echo "$a";
        recursion($a + 1);
    }
}

/*  S.O.L.I.D: Os 5 princípios da POO
S — Single Responsiblity Principle (Princípio da responsabilidade única)
O — Open-Closed Principle (Princípio Aberto-Fechado)
L — Liskov Substitution Principle (Princípio da substituição de Liskov)
I — Interface Segregation Principle (Princípio da Segregação da Interface)
D — Dependency Inversion Principle (Princípio da inversão da dependência) */


/* Diagrama de Caso de Uso
Faz uma representação do sistema a partir da visão do usuário,
 ou seja, mostra de forma simples o que é feito no sistema e suas interações com o usuário.
É composto por cenário, ator, use case(tarefa) e comunicação(linhas).
-
Diferente do caso de uso, o Diagrama de Classe mostra a visão do analista para o programador,
definindo assim as classes(entidades), atributos, chaves, métodos e relações entre classes.*/


/* Polimorfismo é a capacidade que uma classe tem de sobrepor métodos da classe abstrata,
 modificando-os. Para tanto, é necessário que ela possua a mesma assinatura de método. */
 
 class Mamifero extends Animal{

     public function locomover(){
         echo "Mamíferos correm!";
     }
 }

 /* Herança estende uma classe e a subclasse herda todos os métodos públicos e protegidos da classe pai.*/

 class MinhaClasse {
    public $teste = 'teste';

    public function ola()
    {
        echo teste;
    }
}

class SubClasse extends SuperClasse {
}

/* Composicao vs Agregacao

Toda vez que temos composição, significa que a parte não existe sem o todo.

Toda vez que temos agregação, significa que a parte pode ser compartilhada entre vários objetos.*/




/* Injeção de Dependência vs Inverção de Dependência

Injeção de Dependência é uma das formas de se realizar a Inversão de Controle.

A técnica consiste em passar a dependência (o serviço) para o dependente (o cliente).
O importante é entender que injetamos o serviço no cliente, ao invés de o próprio cliente procurar e construir o serviço que irá utilizar.

Já com a Inversão de Dependencia, a ideia é reduzir essa dependência para que, quando uma classe for alterada,
não seja necessário mexer em muitas outras classes por elas terem algum tipo de dependência com a primeira.
*/

class Notification{
    public function send(){
    }
}

class UserCommand{
    protected $notification;

    public function __construct(Notification $notification){
        $this->notification = $notification;
    }

    public function handle(){
        $this->notification->send();
    }
}