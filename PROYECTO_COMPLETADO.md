# Proyecto Laravel API - Computers 📱💻

## ✅ Resumen de Implementación

Este proyecto cumple **completamente** con todos los requisitos solicitados:

### 1. ✅ Migración de Base de Datos
- **Archivo:** `database/migrations/2025_09_29_023843_create_computers_table.php`
- **Tabla:** `computers`
- **Columnas implementadas exactamente como en la imagen:**
  - `id_computer` (bigint, PK, auto_increment)
  - `computer_brand` (varchar 255, not null)
  - `computer_model` (varchar 255, not null)
  - `computer_price` (double, not null, default: 0.0)
  - `computer_ram_size` (integer, not null, default: 4)
  - `computer_is_laptop` (boolean, not null, default: false)
- **Sin timestamps** (tal como aparece en la imagen)

### 2. ✅ Modelo Eloquent
- **Archivo:** `app/Models/Computer.php`
- **Características:**
  - Propiedad `$fillable` definida con todas las columnas
  - Primary key personalizada: `id_computer`
  - Tabla personalizada: `computers`
  - Casting de tipos de datos
  - HasFactory trait incluido

### 3. ✅ Controlador API Resource
- **Archivo:** `app/Http/Controllers/ComputerController.php`
- **Métodos implementados:**
  - `index()` - Listado de todos los computers
  - `store()` - Crear nuevo computer
  - `show()` - Mostrar computer específico
  - `update()` - Actualizar computer
  - `destroy()` - Eliminar computer
- **Respuestas en formato JSON estructurado**
- **Manejo de errores 404**

### 4. ✅ Form Requests con Validaciones
- **Archivos:**
  - `app/Http/Requests/StoreComputerRequest.php`
  - `app/Http/Requests/UpdateComputerRequest.php`
- **Validaciones implementadas:**
  - `computer_brand`: required, string, max:255
  - `computer_model`: required, string, max:255
  - `computer_price`: required, numeric, min:0
  - `computer_ram_size`: required, integer, min:1
  - `computer_is_laptop`: required, boolean
- **Mensajes de error personalizados**

### 5. ✅ Rutas API Resource
- **Archivo:** `routes/api.php`
- **Rutas disponibles:**
  - `GET /api/computers` - Listar todos
  - `POST /api/computers` - Crear nuevo
  - `GET /api/computers/{id}` - Mostrar específico
  - `PUT/PATCH /api/computers/{id}` - Actualizar
  - `DELETE /api/computers/{id}` - Eliminar

### 6. ✅ Factory para Datos Falsos
- **Archivo:** `database/factories/ComputerFactory.php`
- **Características:**
  - Marcas reales: Dell, HP, Lenovo, Asus, Acer, Apple, MSI, etc.
  - Modelos variados con números aleatorios
  - Precios realistas ($300 - $5000)
  - Tamaños de RAM comunes (4, 8, 16, 32, 64 GB)
  - 70% probabilidad de ser laptop

### 7. ✅ Seeder Implementado
- **Archivo:** `database/seeders/ComputerSeeder.php`
- **Funcionalidad:**
  - Crea 20 registros automáticamente
  - Utiliza el Factory para generar datos
  - Registrado en `DatabaseSeeder.php`

## 🗄️ Base de Datos
- **Motor:** PostgreSQL
- **Host:** 127.0.0.1:5432
- **Base de datos:** laravel
- **✅ Conexión exitosa y migraciones ejecutadas**
- **✅ 20 registros de prueba creados**

## 🚀 Comandos Útiles

```bash
# Ejecutar migraciones
php artisan migrate

# Ejecutar seeders
php artisan db:seed

# Refrescar base de datos con datos
php artisan migrate:fresh --seed

# Iniciar servidor
php artisan serve

# Ver rutas API
php artisan route:list
```

## 📡 Endpoints API Disponibles

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/api/computers` | Lista todos los computers |
| POST | `/api/computers` | Crea un nuevo computer |
| GET | `/api/computers/{id}` | Muestra un computer específico |
| PUT/PATCH | `/api/computers/{id}` | Actualiza un computer |
| DELETE | `/api/computers/{id}` | Elimina un computer |

## 🎯 Estado del Proyecto

**✅ COMPLETADO AL 100%**

Todos los requisitos han sido implementados exitosamente:
- ✅ Migración con restricciones de tipos de datos
- ✅ Modelo con $fillable definido  
- ✅ Controlador API Resource con 5 métodos
- ✅ Form Requests con validaciones
- ✅ Rutas apiResource
- ✅ Factory funcional
- ✅ Seeder que utiliza el factory
- ✅ Conexión a PostgreSQL establecida
- ✅ Datos de prueba generados (20 registros)

El proyecto está listo para ser probado y utilizado como API REST para gestión de computers.