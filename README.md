# Gestão de Produtos e Controle de Estoque — Laravel API

Projeto backend completo desenvolvido com Laravel, PostgreSQL, Redis e RabbitMQ, com foco no aprendizado prático de arquitetura moderna, filas, cache, autenticação e boas práticas em APIs RESTful.

---

## 🎯 Objetivo do Projeto

Este projeto foi criado com o propósito de **aprimorar habilidades técnicas** em tecnologias amplamente utilizadas no mercado:

- ✅ **Laravel (PHP)**: criação de APIs RESTful seguindo boas práticas, arquitetura limpa (services, jobs), validação e autenticação.
- ✅ **PostgreSQL**: modelagem relacional, migrations, consultas otimizadas e relacionamentos.
- ✅ **Redis**: uso de cache e controle de concorrência para performance e integridade de dados.
- ✅ **RabbitMQ**: processamento assíncrono com filas para tarefas desacopladas e escaláveis.

Ao desenvolver esse sistema de **gestão de produtos e controle de estoque**, o objetivo é consolidar conceitos de desenvolvimento backend profissional e entender como essas tecnologias se integram em um sistema real.

---

## 🛠️ Tecnologias Utilizadas

- PHP 8.1+  
- Laravel 10  
- PostgreSQL  
- Redis  
- RabbitMQ  
- PHPUnit (testes)

---

## 📦 Funcionalidades

- Cadastro e autenticação de usuários (clientes)  
- Gestão de produtos e controle de estoque  
- Criação e gerenciamento de pedidos  
- Atualização automática de estoque ao criar pedidos  
- Notificações assíncronas de estoque baixo (via fila RabbitMQ)  
- Processamento assíncrono de pedidos para simular envio  
- Cache de produtos com Redis  
- Controle de concorrência com lock Redis para evitar overselling  
- Testes unitários e de integração

---

## 📁 Estrutura do Projeto
- AJEITAR NO FUTURO ESSA ARCH
- `app/Http/Controllers/Api` — Controllers da API  
- `app/Models` — Models Eloquent  
- `app/Services` — Camada de regras de negócio  
- `app/Jobs` — Jobs para RabbitMQ  
- `routes/api.php` — Rotas REST  
- `database/migrations` — Estrutura do banco  
- `database/seeders` — Dados iniciais  
- `tests/` — Testes unitários e de integração

