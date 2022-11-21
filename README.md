## CRUD LARAVEL9

Primer acercamiento al framework Laravel 9

#### Ejecución en local
1. Copiar el repositorio de github
```sh
git clone https://github.com/avi1ruiz/tasks-crud-laravel.git
```
2. Acceder al directorio 'src' con el proyecto
3. Instalar las dependencias del proyecto
```sh
composer install
```
4. Copiar el archivo de variables de entorno
```sh
cp .env.example .env
```
5. Configurar conexion a base de datos MySql en el archivo punto .env
6. Crear la base de datos, yo la nombre 'TasksLaravel', pero eres libre de cambiarlo
```sql
CREATE DATABASE [Nombre];
```
7. Ejecutar el servidor del proyecto(nota: La ejecución del servidor se realiza desde src/)
```sh
php artisan serve
```