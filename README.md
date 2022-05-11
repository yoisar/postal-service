## English ##

**Backbone Challenge Senior Backend Developer**

To replicate the API functionality [https://jobs.backbonesystems.io/api/zip-codes/01210](https://jobs.backbonesystems.io/api/zip-codes/01210)  as requested in the challenge.

1. **I developed a REST API in Laravel inside a Docker container with**:

- Laravel Framework 9.11.0
- PHP 8.1.5
- Node version v14.19.2
- Composer version 2.3.5 2022-04-13 16:43:00
- MarinaDB:10.6


2. **Docker environment configuration**
I downloaded docker-compos.yml file from : [https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml](https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml) and set up my environment and  exposing ports 8100 and 3310 for base and api access MarinaDB data respectively.


3. **Subdomain and DNS configuration for API access**
    - Create a challenger A record in DNS owned by me and the challenger.lugaronline.com subdomain.


4. **Database**
   - Import data downloaded from [https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/Descarga.aspx](https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/Descarga.aspx) into a table called zip_codes within the MarinaDB engine. The migration files are duly created within app/databas/migrations.


5. **Response time tests**
   - The times tested on the https://reqbin.com/ site do not exceed 200ms in most cases.


6. **Resources**
 - API URL: http://challenges.lugaronline.com:8100/api/zip-codes
 - Challenge repository: https://github.com/yoisar/postal-service

## Español ##

Para replicar el la funcionalidad la API [https://jobs.backbonesystems.io/api/zip-codes/01210](https://jobs.backbonesystems.io/api/zip-codes/01210)  como se solicita en el reto. 

1.	**Desarrollé una REST API  en Laravel   dentro un contenedor Docker con:**
 - Laravel Framework 9.11.0
 - PHP 8.1.5 
 - Node version v14.19.2
 - Composer version 2.3.5 2022-04-13 16:43:00
 - MarinaDB:10.6


2.	**Configuración de entorno Docker**
Descargué archivo docker-compos.yml desde https://raw.githubusercontent.com/bitnami/bitnami-docker-laravel/master/docker-compose.yml y configure mi entorno exponiendo los puertos 8100 y 3310 para acceso a la api y base de datos MarinaDB respectivamente. 


3.	**Configuración de subdominio y DNS para acceso API**
 - Cree un registro A challenger en DNS de mi propiedad y el subdominio challenger.lugaronline.com.


4.	**Base de datos**
 - Importe datos descargados desde https://www.correosdemexico.gob.mx/SSLServicios/ConsultaCP/Descarga.aspx hacia una tabla llamada zip_codes dentro del motor MarinaDB.  Los archivos de migraciones se encuentran debidamente creados dentro de app/databas/migrations. 


5.	**Pruebas de tiempo de respuestas**
 - Los tiempos probados en el sitio de https://reqbin.com/  no superan los 200ms en su mayoría de los casos.


6.	**Recursos**
 - URL de la API: http://challenges.lugaronline.com:8100/api/zip-codes 
 - Repositorio del reto: https://github.com/yoisar/postal-service 
