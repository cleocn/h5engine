


 docker build -t ccr.ccs.tencentyun.com/cleocn/php:5.3-$(git log -1 --pretty=%h) -f php.Dockerfile .


 docker build -t ccr.ccs.tencentyun.com/cleocn/nginx:1.9-$(git log -1 --pretty=%h) -f ng.Dockerfile .
 
 docker service update --image ccr.ccs.tencentyun.com/cleocn/nginx:1.9-$(git log -1 --pretty=%h)  h5_nginx
 docker service update --image ccr.ccs.tencentyun.com/cleocn/php:5.3-$(git log -1 --pretty=%h) h5_php

 