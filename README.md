# WordPress-Docker-Development-Environment-

Documentation: (https://docs.docker.com/compose/wordpress/)

This is a Docker based local development environment for WordPress.
`Create file in root folder of named project: docker-compose.yml`

 ## Requirements
 - Docker
 - docker-compose

 ## After

`docker-compose pull`

If you run docker-compose pull ServiceName in the same directory as the docker-compose.yml file that defines the service, Docker pulls the associated image. For example, to call the postgres image configured as the db service in our example, you would run docker-compose pull db.

`docker-compose up`

The docker-compose up command aggregates the output of each container (essentially running docker-compose logs -f ). 
