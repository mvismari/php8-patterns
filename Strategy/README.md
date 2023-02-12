# Strategy

Uma implementação simples do Strategy Pattern que é um padrão comportamental. Não vou me aprofundar em conceitos. O exemplo prático é o suficiente para que busque e explore a base teórica por trás desse pattern.

1. Classe "Notification.php":
    1.1 Respeita o conceito "aberto-fechado" (SOLID): Fechada para alterações, aberta para extensões;
    1.2 Nesse exemplo é quem vai utilizar o Strategy Pattern;
    1.3 Em resumo, há diferentes variantes de um algoritmo dentro de um objeto que é capaz de mudar de um algoritmo para outro em tempo de execução.

2.  Interface "INotification.php":
    2.1 Uma interface, ou popularmente "contrato", é a entidade abstrata que deve ser implementada pelas extensões;
    2.2 Essa interface também é importante para cumprir com a Dependency Inversion (Inversão de dependência), onde classes devem depender de entidades abstratas invertendo a dependências.

3. Extensões "Modules":
    3.1 Não importa quantas notificações você precise criar. A criação e manutenção de código ficou extremamente fácil;
    3.2 Basta implementar a interface, montar as validações e o sistema já irá entender.

# Aplicações do Strategy
1. Notificações;
2. Integrações com Marketplaces;
3. Pagamentos;
4. Calculos de colaboradores por perfil;

Enfim! A ideia são algoritmos que são "similares" mudando apenas a implementação. O famoso "miolo do código".


