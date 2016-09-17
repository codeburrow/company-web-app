# CodeBurrow

The official web page for CodeBurrow.com

## Required Steps
### Increase speed load according to Google page speed insights #19
#### [Enable Compression](https://www.digitalocean.com/community/tutorials/how-to-optimize-nginx-configuration#gzip-compression)
Location: /etc/nginx/nginx.conf
Inside http block:
```
	gzip on;
	gzip_disable "msie6";
	gzip_comp_level  2;
	gzip_min_length  1000;
	gzip_proxied     expired no-cache no-store private auth;
	gzip_types text/plain text/css application/json application/javascript text/xml application/xml application/xml+rss text/javascript;
```
#### [Leverage browser caching](https://www.digitalocean.com/community/tutorials/how-to-optimize-nginx-configuration#gzip-compression#static-file-caching)
Inside your server block (E.g. /etc/nginx/sites-available/codeburrow.rdok.io )
```
	location ~* .(jpg|jpeg|png|gif|ico|css|js|woff)$ {
        expires 365d;
	}
```
