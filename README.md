# simple_sqli

Very simple SQL injection environment with docker

# Environment

docker-compose.yml for sqli

- Web Server : Nginx (latest)
- PHP : php.7-fpm
- DB : MySQL 5.7

# How to setup

```
$ docker-compose build
$ docker-compose up
```

# How to exploit

You can get the flag like this:

```
' or 1;
```