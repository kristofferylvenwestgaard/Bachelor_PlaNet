CREATE TABLE aktivitetBilde
(
bildeId INT NOT NULL AUTO_INCREMENT,
bildeNavn varchar (50),
bilde longblob NOT NULL,
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

CREATE TABLE handlingskjede
(
handId INT NOT NULL,
stegNr INT,
beskrivelse text,
stegBilde longblob,
PRIMARY KEY (handId)
)
ENGINE=InnoDB;
 

CREATE TABLE ukedager
(
gjentaID INT NOT NULL,
mandag boolean,
tirsdag boolean,
onsdag boolean,
torsdag boolean,
fredag boolean,
lørdag boolean,
søndag boolean,
PRIMARY KEY (gjentaID)
)
ENGINE=InnoDB;


CREATE TABLE aktivitet
(
id INT NOT NULL AUTO_INCREMENT,
bildeId INT NOT NULL,
fargeId INT NOT NULL,
handId INT NOT NULL,
gjentaID INT NOT NULL,
aktivitetNavn varchar(50),
beskrivelse text,
dato date,
tid time,
alarm time,
PRIMARY KEY (id),
FOREIGN KEY (bildeId) REFERENCES aktivitetBilde(bildeId),
FOREIGN KEY (fargeId) REFERENCES aktivitetFarge(fargeId),
FOREIGN KEY (handId) REFERENCES handlingskjede(handId),
FOREIGN KEY (gjentaID) REFERENCES ukedager(gjentaID)
)
ENGINE=InnoDB;




