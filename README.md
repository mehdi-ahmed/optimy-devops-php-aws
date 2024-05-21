# To run the docker container locally:
    
    - docker build -t optimy-php-app .
    - docker run -p 8001:80 -d --name my-running-optimy-php-app optimy-php-app  
    - curl http://localhost:8001/


# To run the Cypress IT test. 
-   From the Root folder, type this command:

        npx cypress run --spec .\cypress\e2e\spec.cy.js