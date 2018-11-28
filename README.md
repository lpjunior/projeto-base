# Projeto template em _PHP 7_ utilizando as tecnologias **Bootstrap 4**, **PDO**, **RainTPL** e micro framework **Slim**

[![PHP Version](./svg/php-version.svg)](http://php.net/downloads.php)
[![Bootstrap](./svg/bootstrap.svg)](https://getbootstrap.com/docs/4.1/getting-started/download/)
[![RainTPL](./svg/raintpl-version.svg)](https://github.com/feulf/raintpl3)
[![Slim](./svg/slim-version.svg)](https://www.slimframework.com/)
[![Composer](./svg/composer-version.svg)](https://getcomposer.org/download/)
[![Latest Unstable Version](./svg/unstable.svg)](./svg/unstable.svg)
[![License](./svg/license.svg)](./svg/license.svg)

Este projeto tem por finalidade ser um modelo de embasamento ao PHP 7 com utilização de frameworks e micro frameworks aos alunos
dos cursos de Técnico em Informática e Programador Web do Senac Rio.

## Por que usar o PHP 7 com frameworks?

Usar frameworks é algo que já faz parte do dia a dia da maioria dos desenvolvedores, especialmente de quem trabalha com um grande número de projetos que usam funções similares. Afinal, a possibilidade de reutilizar códigos com poucas alterações ajuda a poupar tempo.

Isso porque, o framework dá uma caixa de ferramentas para o programador que vai além do que é oferecido pela linguagem. Seu conceito, porém, pode ser confuso em relação a outras formas de aproveitar códigos em vários projetos, como a orientação a objetos e as classes, por exemplo.

A grande diferença é que o método opera de forma muito mais profunda, com vantagens e desvantagens. Por isso, neste post  explicamos o que é framework e qual é seu impacto no desenvolvimento de projetos.

## Framework

Basicamente, é um _template_ com diversas funções que podem ser usadas pelo desenvolvedor. Com ele, é desnecessário gastar tempo para reproduzir a mesma função em diferentes projetos.

Uma boa comparação é a da **caixa de ferramentas**. Só que, em vez de _chaves de fenda_ e _martelos_, há bases para _formulários de login_, _validação de campos_ e _conexão com bancos de dados_.

Nesse sentido, como parte da tendência de buscar reduzir custos e aumentar a produtividade, o uso desse recurso tem se tornado cada vez mais popular. Hoje, já existe uma grande variedade de soluções disponíveis para as mais diversas linguagens, com comunidades que testam e a criam diferentes funções. [Leia mais][https://gaea.com.br/entenda-o-que-e-framework/]

## Micro Framework

Um microframework é um termo usado para se referir a estruturas de aplicativos da Web minimalistas. É contrastado com estruturas full-stack. Falta a maior parte da funcionalidade que é comum esperar em uma estrutura de aplicativos da Web completa. [Leia mais][https://en.wikipedia.org/wiki/Microframework]

## Bootstrap 4

O Bootstrap é uma ferramenta gratuita para desenvolvimento HTML, CSS e JS. Com ele criamos protótipos rápidamente ou aplicações completas com variáveis e mixins Sass, sistemas de grid responsivo, componentes pré-construídos e poderosos plugins com jQuery. [Leia mais][https://getbootstrap.com.br/docs/4.1/getting-started/introduction/]

## PDO

PDO é uma classe desenvolvida especificamente para trabalhar com procedimentos relacionados a Banco de Dados. O interessante em utilizar este tipo de classe é a abstração de qual banco utilizamos e a segurança extra que esta classe nos oferece. [Leia mais][http://php.net/manual/pt_BR/book.pdo.php]

## RainTPL

Mecanismo de template fácil e rápido para PHP. O RainTPL facilita a criação de aplicativos e permite que designers/desenvolvedores trabalhem melhor em conjunto. Ele carrega um template HTML para separar a apresentação da lógica. [Leia mais][https://github.com/feulf/raintpl3]

## Slim Framework

O Slim é um micro-framework PHP que ajuda você a escrever rapidamente aplicações web e APIs simples, porém poderosas. [Leia mais][https://www.slimframework.com/]

- **Roteador HTTP**. O Slim fornece um roteador rápido e poderoso que mapeia os retornos de chamadas de rota para métodos de solicitação de HTTP e URIs específicos. Suporta parâmetros e correspondência de padrões.

- **Middleware**. Construa seu aplicativo com middleware concêntrico para ajustar os objetos de solicitação e resposta HTTP em torno do seu aplicativo Slim.

- **Suporte PSR-7**. O Slim suporta qualquer implementação de mensagem HTTP do PSR-7 para que você possa inspecionar e manipular o método, o status, o URI, os cabeçalhos, os cookies e o corpo da mensagem HTTP.

- **Injeção de dependência**. O Slim suporta injeção de dependência para que você tenha controle total de suas ferramentas externas. Use qualquer contêiner Container-Interop.

## Licença

[MIT License](./LICENSE).