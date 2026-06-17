# Aplicación de Registro de Empleados

## Descripción

Aplicación web desarrollada en PHP para el registro de empleados de una empresa.

Permite introducir los datos de un empleado mediante un formulario web, realizar validaciones de los datos introducidos y mostrar un resumen de la información registrada.

Esta aplicación ha sido desarrollada como parte de la práctica de Implantación de Aplicaciones Web y Computación en la Nube con IaaS.

---

## Funcionalidades

* Alta de empleados mediante formulario.
* Validación de DNI.
* Validación de correo electrónico.
* Validación de teléfono.
* Sanitización de entradas.
* Selección de provincia, sede y departamento mediante desplegables.
* Visualización de un resumen con los datos introducidos.

---

## Estructura del proyecto

empleados-app/

├── public/

│ └── index.php

├── src/

│ ├── datos.php

│ └── validaciones.php

└── README.md

### Archivos principales

**public/index.php**

Contiene el formulario HTML y la lógica principal de procesamiento.

**src/datos.php**

Almacena los arrays de provincias, sedes y departamentos.

**src/validaciones.php**

Incluye las funciones de validación y limpieza de datos.

---

## Requisitos

* PHP 8 o superior.
* Servidor Apache (XAMPP, Laragon o similar).

---

## Ejecución

1. Clonar el repositorio:

git clone URL_DEL_REPOSITORIO

2. Copiar el proyecto dentro del directorio del servidor web.

3. Iniciar Apache.

4. Acceder desde el navegador a:

http://localhost/empleados-app/public/index.php

IES Politécnico Jesús Marín
