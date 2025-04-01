# phpstart

# Practica de php 

# Proyecto de Carga de Archivos y Operaciones Básicas en PHP

Este proyecto tiene como objetivo crear una aplicación PHP que permita realizar operaciones matemáticas básicas, como suma, resta y división. Además, la aplicación incluye una funcionalidad para cargar archivos, con validaciones para evitar errores como la división por cero.

## Funcionalidades
1. **Operaciones Básicas**: El usuario puede elegir entre varias operaciones matemáticas.
2. **Cargar Archivos**: Permite a los usuarios cargar archivos al servidor.
3. **Acceso en Red Local**: Se configura la aplicación para que sea accesible en la red local usando la dirección IP de la máquina, lo que permite acceder desde otros dispositivos en la misma red.

## Pasos para ejecutar el proyecto

### 1. Realizar operaciones matemáticas básicas
Primero, creamos un formulario en HTML donde los usuarios pueden elegir entre varias operaciones matemáticas. Las operaciones disponibles son:

- **Sumar**
- **Restar**
- **Dividir** (con validaciones para evitar dividir por cero o dividir por el mismo número)

#### Validación de la operación de división:
Si el usuario selecciona la operación de división, el sistema valida lo siguiente:
- Si el número divisor es cero, se muestra un mensaje de error.
- Si el número es dividido por sí mismo, el resultado es 1.
- Si la división es válida, se muestra el resultado.

#### Ejemplo del formulario:
```html
<form action="proceso.php" method="post">
    <select name="option">
        <option value="sum">Sumar</option>
        <option value="rest">Restar</option>
        <option value="mult">Multiplicar</option>
        <option value="div">Dividir</option>
    </select>
    <input type="number" name="numero1">
    <input type="number" name="numero2">
    <button type="submit">Operar</button>
</form>
```

# 3. Ejecutar la aplicación en tu máquina local

- Inicialmente, puedes ejecutar la aplicación en tu máquina local usando el servidor PHP embebido. 
- Para ello, en la terminal, navega al directorio donde se encuentra tu aplicación y ejecuta el siguiente comando:
- php -S localhost:8000 Esto hará que tu aplicación esté disponible en http://localhost:8000, accesible solo en tu máquina local.
# 4. Acceder a la aplicación desde otros dispositivos en la misma red

- Para acceder a tu aplicación desde otros dispositivos de la misma red local, necesitas usar la dirección IP local de tu máquina.
- Para obtenerla, usa el siguiente comando en la terminal:
```html
ip a
```
- Busca la IP de tu interfaz de red (por ejemplo, enp1s0), que podría ser algo como 10.0.80.6. Luego, ejecuta el servidor PHP con la siguiente IP:
```html
php -S 10.0.80.6:8000
```
- Ahora, cualquier dispositivo conectado a la misma red local podrá acceder a tu aplicación mediante la URL http://10.0.80.6:8000