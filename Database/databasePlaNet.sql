CREATE TABLE aktivitet
(
id int NOT NULL AUTO_INCREMENT,
aktivitetNavn varchar(50),
beskrivelse text,
dato date,
tid time,
alarm time,
PRIMARY KEY (id)
) 
ENGINE=InnoDB;

CREATE TABLE aktivitetBilde
(
bildeId int NOT NULL AUTO_INCREMENT,
aktivitetId int NOT NULL,
bildeNavn varchar (50),
bilde blob NOT NULL,
PRIMARY KEY (bildeId),
FOREIGN KEY (aktivitetId) REFERENCES aktivitet(id)
ON UPDATE CASCADE
ON DELETE CASCADE
)  
ENGINE=InnoDB;

CREATE TABLE aktivitetFarge 
(
fargeId int NOT NULL AUTO_INCREMENT,
fargeNavn varchar (20),
aktivitetId int NOT NULL,
PRIMARY KEY (fargeId),
FOREIGN KEY (aktivitetId) REFERENCES aktivitet(id)
ON UPDATE CASCADE
ON DELETE CASCADE
)
ENGINE=InnoDB; 