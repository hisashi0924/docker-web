# docker-web
dockerでnegx、php、postgresql、letsencrypt



1.証明書取得用にngixのconfigを調整

```bash
# mv ./conf.d/default.conf ./conf.d/default.conf.bk
# mv ./conf.d/default.init ./conf.d/default.conf
```



2.起動

```bash
# docker-compose up -d
```



3.証明書の取得

```bash
# docker exec -it certbot-iwi ash
>  certbot certonly --webroot -w /usr/share/nginx/html/ -d <URL>
> exit
```



4.設定を元に戻す

```bash
# mv ./conf.d/default ./conf.d/default.conf.init
# mv ./conf.d/default.bk ./conf.d/default.conf
```



5.再起動

```bash
# docker-compose restart
```

