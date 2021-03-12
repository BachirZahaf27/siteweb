
-- Create the table in the specified schema
CREATE TABLE User
(
    UserId INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- primary key column
    nom varchar(255),
    prenom varchar(255),
    email varchar(255),
    password varchar(255)
    -- specify more columns here
);

-- Create the table in the specified schema
CREATE TABLE file
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, -- primary key column
    nom_file varchar(255),
    auteur varchar(255),
    type varchar(255),
    s varchar(255),
    module varchar(255),
    ext varchar(255),
    year varchar(255)

    -- specify more columns here
);

