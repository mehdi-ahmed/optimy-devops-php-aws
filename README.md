# To run the docker container locally:
    
    - $> docker build -t optimy-php-app .
    - $> docker run -it --mount "type=bind,source=$(pwd)/source_dir,target=/var/www/html" -p 8001:80 -d --name my-running-optimy-php-app optimy-php-app  
    - $> curl http://localhost:8001/