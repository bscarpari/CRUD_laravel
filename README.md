# Preparações:

___

## Instalações necessárias

a)
Instalar [xampp!](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.4/xampp-windows-x64-8.2.4-0-VS16-installer.exe) (
apache, php + mysql)

**OBS.:** instale o XAMPP primeiro

a) Instalar [composer](https://getcomposer.org/download/) (gerenciador de pacotes do php)

## Iniciar o projeto (clonando)

a. Instalar todas as dependências

```
composer install

npm install

npm run build
```

b. Criar o banco de dados

```
php artisan migrate --seed
```

3. Iniciar o projeto em: http://127.0.0.1:8000/

```php
php artisan serve
```

## Criação do projeto (do zero)

```
composer global require laravel/installer

laravel new example-app

composer require laravel/ui --dev

npm install bootstrap-icons --save-dev

php artisan ui bootstrap

npm install

npm run dev

npm run build

php artisan migrate --seed (cria o banco de dados e insere os dados)

php artisan serve
```
