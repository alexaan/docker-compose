DB stored in ./data if volumes is defined

```
docker-compose up -d
docker-compose run --rm dbclient
```

```
mysql> USE somedatabase;
Database changed
mysql> SHOW tables;
Empty set (0.01 sec)
mysql> CREATE TABLE mytable(id INT);
Query OK, 0 rows affected (0.05 sec)
mysql> show tables;
+------------------------+
| Tables_in_somedatabase |
+------------------------+
| mytable                |
+------------------------+
1 row in set (0.00 sec)
mysql> exit
Bye
```
```
docker-compose stop
docker-compose rm
```