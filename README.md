# Laravel Store Management API

API backend para gerenciamento de produtos, estoque e pedidos de uma loja online, construída com Laravel, PostgreSQL, Redis e RabbitMQ.

---

## Funcionalidades

- Cadastro e autenticação de usuários (clientes)  
- Gestão de produtos e controle de estoque  
- Criação e gerenciamento de pedidos  
- Atualização automática do estoque ao criar pedidos  
- Notificações assíncronas para estoque baixo via filas (RabbitMQ)  
- Processamento assíncrono de pedidos via filas  
- Cache de produtos com Redis para performance  
- Controle de concorrência para evitar overselling no estoque  
- Testes unitários e de integração  

---

## Estrutura do Projeto

- `app/Http/Controllers/Api` — Controllers da API REST  
- `app/Models` — Models Eloquent para entidades do banco  
- `app/Services` — Lógica de negócio separada em services  
- `app/Jobs` — Jobs para filas (RabbitMQ)  
- `database/migrations` — Migrations para criar tabelas no PostgreSQL  
- `database/seeders` — Seeds para popular dados iniciais  
- `routes/api.php` — Rotas da API REST  
- `tests/` — Testes unitários e de integração  

---
Objetivo do Projeto
Este projeto foi criado com o propósito principal de aprendizado e evolução técnica nas seguintes áreas:

Laravel Framework: para aprofundar o conhecimento na construção de APIs RESTful robustas, utilizando boas práticas, arquitetura limpa, validação, autenticação e organização de código.

PostgreSQL: para entender modelagem relacional, uso de migrations, índices, relacionamentos e operações complexas com um banco de dados relacional poderoso.

Redis: para aplicar caching eficiente e controle de concorrência, melhorando performance e garantindo integridade dos dados em cenários concorrentes.

RabbitMQ: para aprender a implementar filas de processamento assíncrono, desacoplando processos demorados da requisição principal e aumentando a escalabilidade do sistema.
