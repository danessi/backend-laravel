
# Backend - Laravel API (Dockerizado)

Este proyecto proporciona una API RESTful construida con **Laravel**, lista para ser ejecutada en contenedores Docker.

## Requisitos

- Docker y Docker Compose instalados en tu máquina.

## Instrucciones de instalación

1. **Clona el repositorio:**

   ```bash
   git clone https://github.com/danessi/backend-laravel.git
   ```

2. **Accede al directorio del proyecto:**

   ```bash
   cd backend-laravel
   ```
3. **Crear el .env a partir de .env.example:**

   copiar el contenido de .env.example en un nuevo archivo .env

4. **Define el nombre de tu empresa:**

   Abre el archivo `docker-compose.yml` y reemplaza todos los valores `xxxx-companyname` por el nombre que desees (por ejemplo, `0001-companyname` o `solarsystem`):
   
   - Reemplaza `xxxx-companyname` por el nombre de tu empresa o identificador único en todos los servicios.
   - Ejemplo: si decides usar `solarsystem`, la entrada en el archivo `docker-compose.yml` quedarían como `solarsystem-backend` y `solarsystem-mysql-db-backend` nombrados los contedores.

   Aplica este cambio de nombre en toda ocurrencia de `xxxx-companyname` para que funcione correctamente.

   Si no se aplica el punto 3 se setaran con el nombre generico xxxx-companyname todos.

5. **Asegurarse de tener instalado Composer en esa carpeta y luego Levanta los contenedores con Docker Compose:**

   Este comando construirá y levantará los contenedores en segundo plano:

   ```bash
   composer install
   docker compose up -d
   ```

6. **Accede al contenedor del backend (Laravel):**

   Una vez que los contenedores estén en ejecución, accede al contenedor de Laravel para realizar los ajustes necesarios:

   ```bash
   docker exec -it <nombre-del-contenedor-backend> bash
   ```

   Asegúrate de reemplazar `<nombre-del-contenedor-backend>` por el nombre real de tu contenedor (ejemplo: `solarsystem-backend`).

7. **Realiza las optimizaciones necesarias para que la aplicación funcione correctamente:**

   Ejecuta estos comandos dentro del contenedor de Laravel para optimizar la configuración y las rutas:

   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan optimize
   ```

8. **Realiza las migraciones de la base de datos:**

   Asegúrate de que la base de datos esté actualizada con las últimas migraciones ejecutando:

   ```bash
   php artisan migrate
   ```

## Rutas disponibles

- `GET /api/test` - Verifica la conexión de la API y devuelve un mensaje de éxito.

## Accesos Url

Acceso principal: http://localhost:8000  
Acceso a la API: http://localhost:8000/api/test