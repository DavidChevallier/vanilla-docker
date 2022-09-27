FROM percona:5.7

COPY src/my.cnf /etc/mysql/my.cnf
COPY src/*.sql /docker-entrypoint-initdb.d/
