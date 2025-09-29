# Documentación API - Computers Laravel

## Endpoints Disponibles

### 1. GET /api/computers
**Descripción:** Obtiene todos los computers
**Método:** GET
**URL:** `http://localhost:8000/api/computers`

### 2. POST /api/computers
**Descripción:** Crea un nuevo computer
**Método:** POST
**URL:** `http://localhost:8000/api/computers`
**Body JSON:**
```json
{
    "computer_brand": "Dell",
    "computer_model": "Inspiron 5570",
    "computer_price": 899.99,
    "computer_ram_size": 16,
    "computer_is_laptop": true
}
```

### 3. GET /api/computers/{id}
**Descripción:** Obtiene un computer específico
**Método:** GET
**URL:** `http://localhost:8000/api/computers/1`

### 4. PUT/PATCH /api/computers/{id}
**Descripción:** Actualiza un computer específico
**Método:** PUT o PATCH
**URL:** `http://localhost:8000/api/computers/1`
**Body JSON:**
```json
{
    "computer_brand": "HP",
    "computer_model": "Pavilion 15",
    "computer_price": 1099.99,
    "computer_ram_size": 32,
    "computer_is_laptop": true
}
```

### 5. DELETE /api/computers/{id}
**Descripción:** Elimina un computer específico
**Método:** DELETE
**URL:** `http://localhost:8000/api/computers/1`

## Validaciones Implementadas

- **computer_brand:** Requerido, string, máximo 255 caracteres
- **computer_model:** Requerido, string, máximo 255 caracteres
- **computer_price:** Requerido, numérico, mínimo 0
- **computer_ram_size:** Requerido, entero, mínimo 1 GB
- **computer_is_laptop:** Requerido, booleano (true/false)

## Ejemplos de Respuesta

### Respuesta exitosa (GET /api/computers):
```json
[
    {
        "id_computer": 1,
        "computer_brand": "Dell",
        "computer_model": "Inspiron 1234",
        "computer_price": "1299.99",
        "computer_ram_size": 8,
        "computer_is_laptop": true
    },
    {
        "id_computer": 2,
        "computer_brand": "HP",
        "computer_model": "Pavilion 5678",
        "computer_price": "899.99",
        "computer_ram_size": 16,
        "computer_is_laptop": false
    }
]
```

### Respuesta exitosa (POST /api/computers):
```json
{
    "id_computer": 21,
    "computer_brand": "Dell",
    "computer_model": "Inspiron 5570",
    "computer_price": "899.99",
    "computer_ram_size": 16,
    "computer_is_laptop": true
}
```

### Respuesta de error (404):
```json
{
    "error": "Computer not found"
}
```

### Respuesta de error de validación:
```json
{
    "message": "The computer brand is required. (and 1 more error)",
    "errors": {
        "computer_brand": ["The computer brand is required."],
        "computer_price": ["The computer price is required."]
    }
}
```

## Comandos útiles

Para reiniciar los datos de prueba:
```bash
php artisan migrate:fresh --seed
```

Para iniciar el servidor:
```bash
php artisan serve
```