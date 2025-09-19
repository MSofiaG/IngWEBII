
# Proyecto WEB2 (Flat + MVC + Pages + Actions)

## 1) Flat (según enunciado del profesor)
- Carpeta `version_flat/` con `index.html`, `estilos.css`, `conexion.php`, `registro.php`, `listar.php`, `editar.php`, `eliminar.php`, `login.php`, `protegido.php`, `schema.sql`.

## 2) MVC
- Carpeta `mvc-app/` con `model/`, `view/`, `controller/`, `index.php`, `public/style.css`, `.env.example`, `schema.sql`.
- Flujo CSRF + sesiones + CRUD con prepared statements.

## 3) Frontend estático (Pages)
- Carpeta `frontend-pages/` con `index.html` y `style.css`.

## 4) Despliegue backend (Actions)
- `mvc-app/.github/workflows/deploy.yml` (usa secrets: `SERVER_HOST`, `SERVER_USER`, `SERVER_SSH_KEY`).

## Puesta en marcha rápida
- Flat:
  ```bash
  mysql -u root -p < version_flat/schema.sql
  php -S 127.0.0.1:8000 -t version_flat
  # Navega a http://127.0.0.1:8000/index.html
  ```
- MVC:
  ```bash
  mysql -u root -p < mvc-app/schema.sql
  php -S 127.0.0.1:8000 -t mvc-app
  # Login: http://127.0.0.1:8000/index.php?route=login
  ```
