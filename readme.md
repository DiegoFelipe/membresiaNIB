## Sobre

MembresiaNIB é um sistema opensource que ajuda a ter rápidas informações sobre os membros das Nova Igreja Batista.

## Funcionalidades

- Informa o grupo pequeno(s), Ministério(s) e Matéria(s) que os membros participam.

## Stack:

- Laravel
- Mysql
- Reactjs
- GraphQL

## Instalação

### 1 - Clone o repositório
```
git clone https://github.com/DiegoFelipe/membresiaNIB.git
```
### 2 - Composer install
```
composer install
```
### 3 - Gerar chave
```
php artisan key:generate
```
### 4 - NPM install
```
npm install && npm run dev
```
### 5 - Publicar os assets do adminlte
```
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=assets
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=config
php artisan vendor:publish --provider="JeroenNoten\LaravelAdminLte\ServiceProvider" --tag=views
```
