# roadmap_dinamico
Proyecto creado para la prueba técnica propuesta por el equipo de Abroad,
proyecto relativamente sencillo y si mucha funcionalidad a nivel de backend,
pero con un front complejo en cuanto a maquetación y diseño; al menos desde 
mi punto de vista como desarrollador especializado en el backend.

# Aclaración 
Como bien comente, no soy un desarrollador que se especializa para nada en el
front, por lo que los estilos y el diseño son sumamente sencillos seguramente en
comparación con otros candidatos, mi enfoque fue más llevado tanto a demostrar
mis capacidades como backend, como también a desmostrar mi alta capacidad de
adaptabilidad según los escenarios que se presenten.

Sin embargo el resultado es lo suficientemente solido como para decir que es un
diseño sencillo, simple y que va al grano, con buen rendimiento, estable, simple
de utilizar y modificar y enfocado en un buen performance y seguir en la medida
de lo posible los principios de diseño y desarrollo de react.

También debo comentar que busque sacar el proyecto lo más rápido posible para
mostrar mis tiempos de respuesta y la calidad de resultados que puedo demostrar
en poco tiempo.

# Instalación
Para este proyecto opte por utilizar contenedores sin embargo en la guía cubrire
lo necesario para correr el proyecto sin la necesidad de los mismos, sin embargo
recomiendo correrlo mediante los contenedores para garantizar que el ambiente
corrar de forma homogenea y evitar problemas de que no corre en la maquina de
alguien por alguna razón.

## Instalación mediante contenedores (recomendado)

### Requisitos para instalación vía contenedores

- Docker o Podman (este proyecto lo cree mediante podman)
- Git

Guías de instalación de cada herramienta:
- [Podman](https://podman.io/docs/installation)
- [Docker](https://docs.docker.com/get-started/get-docker/)
- [GIT](https://git-scm.com/downloads)

Estos son los enlaces a las webs oficiales de cada herramienta, concretamente al
apartado de instalación de cada una.

### Proceso para levantar la aplicación

1. Clonar el repositorio

```bash
git clone https://github.com/ArchMaster2024/roadmap_dinamico.git
```
o, si utilizas llaves ssh usa el método 2

```bash
git clone git@github.com:ArchMaster2024/roadmap_dinamico.git
```
2. Copiar el .env.example y definir las variables de base de datos

```bash
cp .env.example .env
```

3. Levantar los contenedores
=======

```bash
docker compose -f compose.yaml up -d --build
```

o si usas podman


```bash
podman-compose -f compose.yaml up -d --build
```

o, si tienes docker por debajo junto con la herramienta para que podman use el
docker compose

```bash
podman compose -f compose.yaml up -d --build
```

## Instalación manual (no recomendado)

Si no deseas utilizar los contenedores para levantar la applicación, puedes
hacer una instalación manual y utilizar los servidores de desarrollo de cada
herramienta, ya que aunque puedan correr perfectamente bien en producción y
tenga los requerimiento mínimos de seguridad, es preferible correr este proyecto
en local, aun así si desea correrlo en un servidor propio también se tocará esto
más alante en la guía.

## Requisitos para instalación manual

### Requisitos para el backend

- PHP superior a 8.2 preferiblemente 8.4
- Extensión de PHP Ctype
- Extensión de PHP cURL
- Extensión de PHP DOM
- Extensión de PHP Fileinfo
- Extensión de PHP Filter
- Extensión de PHP Hash
- Extensión de PHP MBString
- Extensión de PHP OpenSSL
- Extensión de PHP PDO PCRE
- Extensión de PHP PDO
- Extensión de PHP Session
- Extensión de PHP Tokenizer
- Extensión de PHP XML
- Tener instalado Composer
- Una base de datos relacional con extensión de PDO (recomiendo MySQL/MariaDB
por ser sencilla, pequeña y fácil de instalar)
- Un servidor web con extensión de PHP (recomiendo Nginx, sin embargo es libre
de usar Apache o Caddy)
- GIT

### Requisitos para el frontend

- NodeJs superior a 20 (recomiendo la 22 lts, pero a partir de la 20 debe correr
sin problemas)

### Proceso para correr la aplicación

1. Clonar el repositorio

```bash
git clone https://github.com/ArchMaster2024/roadmap_dinamico.git
```
o, si utilizas llaves ssh usa el método 2

```bash
git clone git@github.com:ArchMaster2024/roadmap_dinamico.git
```

2. Instalar dependencias

2.1 Instalar dependencias del backend

```bash
composer install
```

2.2 Instalar dependencias del frontend

```bash
cd frontend

npm install
```

3. Generar API Key del backend

```bash
php artisan key:generate
```

4. Copiar .env.example en un .env y configurar el .env

```bash
cp .env.example .env
```

5. Crear una base de datos

6. Correr las migraciones y los seeders

```bash
php artisan migrate --seed
```
Hasta aquí estaría lo básico, si deseas correr el proyecto lo siguiente sería
dependiendo de si decidiste utilizar el proyecto en local o si lo quieres
levantar como si fuese producción.

### Estilo local

1. Correr el comando para levantar el servidor de desarrollo del backend

```bash
php artisan serve
```

2. Correr el comando para levantar el servidor de desarrollo del frontend

2.1 Entrar a la carpeta del frontend

```bash
cd frontend
```
2.2 Correr el servidor de desarrollo

```bash
npm run dev
```

Y listo, tendrías corriendo el proyecto en local.

### Estilo de producción

1. Crear un virtual host en nginx, apache o caddy (naturalmente compilar los
   archivos del frontend para que el servidor los sirva)
2. Ubicar el proyecto en la carpeta que esta viendo el virtual host
3. Listo, tu proyecto esta corriendo

# Contribución
Si deseas contribuir a este proyecto, por favor haz un fork del mismo y luego
cuando tengas las cosas con las que vas a colaborar lanza un pull request, lo
veré en lo que tenga tiempo, también puedes levantar un issue si deseas, bien
sea para sugerencias o reportar un bug o algo roto.

# Conclusión
Debo decir que ha sido un proyecto bastante interesante a nivel de frontend, más
que todo porque principalmente trabajo bien sea con vue o con livewire
dependiendo del proyecto y equipo de trabajo, por lo que ha sido bastante bueno
para ingresar al ecosistema de react (en lo personal creo que es algo confuso,
pero me gusta).
