# Proyecto de Gestión de Usuarios

Este proyecto es una aplicación web para la gestión de usuarios, grupos y artículos. Permite realizar operaciones CRUD (Crear, Leer, Actualizar, Eliminar) sobre usuarios y manejar diferentes funcionalidades a través de una interfaz de usuario amigable.

## Características

- **Autenticación de Usuarios:** Permite a los usuarios autenticarse en el sistema.
- **Gestión de Usuarios:** Crear, leer, actualizar y eliminar usuarios.
- **Gestión de Grupos:** Administración de grupos de usuarios.
- **Gestión de Artículos:** Crear, leer, actualizar y eliminar artículos.
- **Configuración de la Aplicación:** Ajustes de la aplicación para personalizar la experiencia del usuario.

## Tecnologías Utilizadas

- **Backend:**
  - PHP
  - MySQL

- **Frontend:**
  - HTML
  - CSS
  - JavaScript
  - jQuery

- **Otros:**
  - Bootstrap
  - FontAwesome
  - SweetAlert2


## Estructura del Proyecto

El proyecto tiene la siguiente estructura de directorios:

├── controllers
│ ├── action
│ │ ├── login.php
│ │ ├── ...
│ ├── actionadmin
│ │ ├── ver-usuarios.php
│ │ ├── verUsuarioPorId.php
│ │ ├── eliminarUsuario.php
│ │ ├── editarUsuario.php
│ │ ├── ...
├── mdb
│ ├── mdbUser.php
│ ├── mdbPrograma.php
│ ├── mdbRol.php
│ ├── ...
├── models
│ ├── entities
│ │ ├── Usuario.php
│ │ ├── Persona.php
│ │ ├── ...
├── public
│ ├── css
│ │ ├── styles.css
│ ├── js
│ │ ├── main.js
│ │ ├── login.js
│ │ ├── ...
├── views
│ ├── login.php
│ ├── register.php
│ ├── dashboard.php
│ ├── ...
└── index.php