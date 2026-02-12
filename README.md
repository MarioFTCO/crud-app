# CRUD App - Laravel

Aplicación CRUD (Create, Read, Update, Delete) desarrollada con Laravel 12, que permite gestionar usuarios de forma sencilla y eficiente.

## Descripción

Este proyecto es una aplicación web completa que implementa operaciones CRUD para la gestión de usuarios. Utiliza Laravel como framework backend, Tailwind CSS para el diseño frontend, y BladeWind como librería de componentes UI.

## Requisitos del Sistema

Antes de instalar y ejecutar este proyecto, asegúrate de tener instalados los siguientes requisitos:

### Software Requerido

- **PHP** >= 8.2
- **Composer** >= 2.0
- **Node.js** >= 18.x
- **npm** >= 9.x
- **PostgreSQL** >= 14.x (o MySQL/SQLite como alternativa)
- **Git**

### Extensiones de PHP Requeridas

- OpenSSL
- PDO
- Mbstring
- Tokenizer
- XML
- Ctype
- JSON
- BCMath
- Fileinfo
- pgsql (para PostgreSQL) o mysql (para MySQL)

## Tecnologías Utilizadas

- **Laravel** 12.0 - Framework PHP
- **PHP** 8.2+
- **Vite** 7.x - Build tool para frontend
- **TailwindCSS** 4.1 - Framework CSS
- **PostgreSQL** - Base de datos principal
- **Laravel Breeze** - Autenticación

## Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/MarioFTCO/crud-app.git
cd crud-app
```

### 2. Instalar dependencias de PHP

```bash
composer install
```

### 3. Instalar dependencias de Node.js

```bash
npm install
```

### 4. Configurar variables de entorno

Copia el archivo de ejemplo `.env.example` y renómbralo a `.env` si es necesario.:

```bash
cp .env.example .env
```

Luego edita el archivo `.env` y configura los siguientes parámetros:

```env
APP_NAME="CRUD App"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=crud_app
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```

### 5. Generar la clave de aplicación

```bash
php artisan key:generate
```

### 6. Crear la base de datos

Crea una base de datos PostgreSQL con el nombre especificado en `DB_DATABASE` del env:

```sql
CREATE DATABASE crud_app o crud;
```

### 7. Ejecutar migraciones

```bash
php artisan migrate
```

### 8. Compilar assets frontend

Para desarrollo:
```bash
npm run dev
```

## Cómo Ejecutar el Proyecto

### Método 1: Usando el script automatizado (Recomendado)

Ejecuta todos los servicios necesarios simultáneamente:

```bash
composer run dev
```

Este comando iniciará:
- Servidor Laravel (http://localhost:8000)
- Worker de colas
- Visualizador de logs (Pail)
- Servidor de desarrollo Vite

### Método 2: Manualmente

Si prefieres ejecutar cada servicio por separado:

```bash
# Terminal 1 - Servidor Laravel
php artisan serve

# Terminal 2 - Vite (assets frontend)
npm run dev

# Terminal 3 - Worker de colas (opcional)
php artisan queue:listen

# Terminal 4 - Logs (opcional)
php artisan pail
```

## Acceder a la Aplicación

Una vez iniciado el servidor, abre tu navegador y visita:

```
http://localhost:8000
```

## Scripts Disponibles

### Composer

- `composer run setup` - Instalación completa del proyecto (dependencias, configuración, migraciones)
- `composer run dev` - Inicia todos los servicios de desarrollo

### NPM

- `npm run dev` - Inicia Vite en modo desarrollo
- `npm run build` - Compila assets para producción

### Artisan

- `php artisan serve` - Inicia el servidor de desarrollo
- `php artisan migrate` - Ejecuta las migraciones
- `php artisan migrate:fresh` - Reinicia la base de datos y ejecuta migraciones
- `php artisan test` - Ejecuta los tests con Pest
- `php artisan pail` - Visualiza logs en tiempo real
- `php artisan queue:listen` - Inicia el worker de colas

## Estructura del Proyecto

```
crud-app/
├── app/                    # Código de la aplicación
│   ├── Http/              # Controllers y Requests
│   └── Models/            # Modelos Eloquent
├── database/              # Migraciones y seeders
├── resources/             # Vistas Blade, CSS y JS
│   ├── views/            # Plantillas Blade
│   ├── css/              # Archivos CSS
│   └── js/               # Archivos JavaScript
├── routes/                # Definición de rutas
├── public/                # Archivos públicos
└── tests/                 # Tests automatizados
```

## Testing

Ejecutar todos los tests:

```bash
php artisan test
```

O usando Pest directamente:

```bash
./vendor/bin/pest
```

## Problemas Comunes

### Error de conexión a la base de datos

Verifica que PostgreSQL esté ejecutándose y que las credenciales en `.env` sean correctas.

```bash
# Windows
# Verifica el servicio PostgreSQL en Servicios
```

### Assets no se cargan

Asegúrate de que Vite esté ejecutándose:

```bash
npm run dev
```
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.
