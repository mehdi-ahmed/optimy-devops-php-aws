# A docker compose will build
    -   An Apache server with php.
    -   A MySQL server with phpMyAdmin console.

    
# To run the docker container locally:
    - $> docker-compose up --build -d
    - $> curl http://localhost:8001/

# To check the phpMyAdmin console and tables
    -   - $> http://localhost:8899/