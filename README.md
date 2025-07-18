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

> ⚠️ **AJEITAR NO FUTURO ESSA ARCH** — Esta estrutura ainda será revisada e melhorada conforme o projeto evoluir.

- `app/Http/Controllers/Api/` — Controllers da API RESTful, responsáveis por lidar com requisições HTTP.
- `app/Models/` — Models Eloquent que representam e interagem com as tabelas do banco de dados.
- `app/Services/` — Camada de regras de negócio, separando a lógica dos controllers.
- `app/Jobs/` — Jobs para execução assíncrona, como envios via RabbitMQ.
- `app/Http/Dto/` — DTOs (Data Transfer Objects), utilizados para transferir dados entre camadas de forma segura.
- `app/Interface/` — Interfaces que definem contratos para serviços, repositórios e outras abstrações.
- `routes/api.php` — Arquivo de definição das rotas REST da API.
- `database/migrations/` — Arquivos de versionamento da estrutura do banco de dados.
- `database/seeders/` — Carga inicial de dados no banco, usada para desenvolvimento e testes.
- `tests/` — Testes unitários e de integração que garantem a estabilidade do código.

