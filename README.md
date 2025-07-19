# Platform NGINX + PHP 8.4 + Maria DB 11.8

## Requirements

Though this project can be managed by plain docker commands, is focused in the daily usage of multiple containers running in local and/or remote machines when is constantly required to create, restart and destroy the container in a dynamic local development workflow of one or multiple projects hosted on a Linux O.S. server distribution.

This platform repository can be part of an insfrastructure as code desing on:

- Cloud, VPS or WebHosting services
- Kubernetes
- Terraform
- Ansible
- n8n

For this reason is strongly recommended the installation of the following packages *(beside Docker)* on local machine, indepently of the local O.S.:

- Makefile
<br><br>

## Configuration

Before start, read the [.env.example](./.env.example) file to set the values required for building the required containers through Docker Compose.

Create the local .env file from the example *(remove its description comments)*
```bash
$ cp .env.example .env
```

Create the local project directory that binds the with the container working directory. For this case, as NGINX server block has been set for an APIREST, the directory can be named like that, but it is editable depending on requirements
```bash
$ mkdir ./apirest
```

Copy the local automation Makefile to manage Docker containers easily. On every platform repository `./resources/automation/local/Makefile` update, remove the legacy and replace it by the new one
```bash
$ cp ./resources/automation/local/Makefile .
```

See the list of recipes with their description for its usage
```bash
$ make help
```

Set the proper project's ownership
```bash
$ make local-ownership-set
```
<br><br>

## Specifications

- [APIREST Documention](./resources/docs/apirest/README.md)
- [Database Documention](./resources/docs/database/README.md)

<br><br>
*(more documentation in development)*