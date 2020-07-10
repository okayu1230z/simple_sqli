# simple_sqli

Very simple SQL injection environment with docker

## Environment

docker-compose.yml for sqli

- Web Server : Nginx (latest)
- PHP : php.7-fpm
- DB : MySQL 5.7

## How to setup

```
$ docker-compose build
$ docker-compose up
```

## How to exploit

Please visit localhost:8080.

![simple sqli](https://github.com/okayu1230z/ctf_data/blob/master/simple_sqli/simple_sql_prob.png "simple sqli")

You can get the flag like this:

```
' or 1;
```

![simple sqli ans](https://github.com/okayu1230z/ctf_data/blob/master/simple_sqli/simple_sql_answer.png "simple sqli ans")
