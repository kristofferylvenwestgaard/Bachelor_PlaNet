CREATE TABLE aktivitetBilde
(
bildeId INT NOT NULL AUTO_INCREMENT,
bildeNavn varchar (50),
bilde blob NOT NULL,
PRIMARY KEY (bildeId)
)  
ENGINE=InnoDB;
 
CREATE TABLE aktivitetFarge
(
fargeId INT NOT NULL AUTO_INCREMENT,
fargeNavn varchar (20),
PRIMARY KEY (fargeId)
 
)
ENGINE=InnoDB;
 
CREATE TABLE aktivitet
(
id INT NOT NULL AUTO_INCREMENT,
bildeId INT NOT NULL,
fargeId INT NOT NULL,
aktivitetNavn varchar(50),
beskrivelse text,
dato date,
tid time,
alarm time,
PRIMARY KEY (id),
FOREIGN KEY (bildeId) REFERENCES aktivitetBilde(bildeId),
 
FOREIGN KEY (fargeId) REFERENCES aktivitetFarge(fargeId)
 
 
 
)
ENGINE=InnoDB;