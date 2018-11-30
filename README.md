# WordPress-Docker-Development-Environment-

Documentation: (https://docs.docker.com/compose/wordpress/)

This is a Docker based local development environment for WordPress.
`Create file in root folder of named project: docker-compose.yml`

 ## Requirements
 - Docker
 - docker-compose

```version: '3.3'

services:
  db:
    image: mysql:5.7
    volumes:
    - db_data:/var/lib/mysql
    restart: always
    environment:
      MYSQL_ROOT_PASSWORD: somewordpress
      MYSQL_DATABASE: wordpress
      MYSQL_USER: wordpress
      MYSQL_PASSWORD: wordpress

  wordpress:
    depends_on:
    - db
    image: wordpress:latest
    ports:
    - "8000:80"
    volumes:
    - ./wp-content/:/var/www/html/wp-content
    restart: always
    environment:
      VIRTUAL_HOST: "${DOCKER_DEV_DOMAIN:-[nomeprojeto].app}"
      WORDPRESS_DB_HOST: db:3306
      WORDPRESS_DB_USER: wordpress
      WORDPRESS_DB_PASSWORD: wordpress

  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    environment:
      MYSQL_ROOT_PASSWORD: root
    ports:
    - 22222:80
volumes:
  db_data:```
  
Config file wp-config:

```define('DB_NAME', getenv('DB_NAME'));

/** User db MySQL */
define('DB_USER', getenv('DB_USER'));


/** password MySQL */
define('DB_PASSWORD', getenv('DB_PASS'));


/** name host MySQL */
define('DB_HOST', getenv('DB_HOST'));```

 ## After

`docker-compose pull`

If you run docker-compose pull ServiceName in the same directory as the docker-compose.yml file that defines the service, Docker pulls the associated image. For example, to call the postgres image configured as the db service in our example, you would run docker-compose pull db.

`docker-compose up`

The docker-compose up command aggregates the output of each container (essentially running docker-compose logs -f ). 
