share volume between containers
```
docker volume create --name my-vol
docker-compose up -d
```
mount into ubuntu container
```
docker run -v my-vol:/mydata --rm -it ubuntu /bin/bash
```

first console
```
docker volume create --name Datastore1
docker run -v Datastore1/mydatastore --rm -it ubuntu /bin/bash
echo "Hello datastore1 > /mydatastore/hello.txt
```
other console
```
docker run -v Datastore1/mydatastore1 --rm -it ubuntu /bin/bash
cat /mydatastore1/hello.txt
echo "Hello datastore2" >> /mydatastore1/hello.txt
```