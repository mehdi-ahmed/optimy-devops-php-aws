CREATE TABLE test(
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       message VARCHAR(255) NOT NULL,
                       date DATE NOT NULL
);

USE assignment_db;

INSERT INTO test(message, date)
VALUES ('Hello Optimy !!', CURRENT_DATE);