CREATE TABLE aktivitet
(
id INT(11) AUTO_INCREMENT,
dato date DEFAULT NULL,
tid time DEFAULT NULL,
alarm time DEFAULT NULL,
PRIMARY KEY (id)
)
ENGINE=InnoDB;


CREATE TABLE aktivitetBilde
(
bildeId int(11) NOT NULL,
bildeNavn varchar (50) DEFAULT NULL,
bilde longblob NOT NULL,
PRIMARY KEY (bildeId)
)  
ENGINE=InnoDB;
 
CREATE TABLE aktivitetFarge
(
fargeId INT NOT NULL,
fargeNavn varchar (20) DEFAULT NULL,
PRIMARY KEY (fargeId)
 
)
ENGINE=InnoDB;

CREATE TABLE handlingskjede
(
handId INT NOT NULL,
stegNr INT DEFAULT NULL,
beskrivelse text,
stegBilde longblob,
PRIMARY KEY (handId)
)
ENGINE=InnoDB;
 

CREATE TABLE ukedager
(
gjentaID INT(11) NOT NULL AUTO_INCREMENT,
mandag tinyint(1) DEFAULT NULL,
tirsdag tinyint(1) DEFAULT NULL,
onsdag tinyint(1) DEFAULT NULL,
torsdag tinyint(1) DEFAULT NULL,
fredag tinyint(1) DEFAULT NULL,
lordag tinyint(1) DEFAULT NULL,
sondag tinyint(1) DEFAULT NULL,
PRIMARY KEY (gjentaID)
)
ENGINE=InnoDB;


CREATE TABLE aktivitetInfo
(
id INT(11) AUTO_INCREMENT,
bildeId int(11) NULL DEFAULT NULL,
fargeId int(11) DEFAULT NULL,
handId int(11) DEFAULT NULL,
gjentaID int(11) DEFAULT NULL,
aktivitetNavn varchar(50) DEFAULT NULL,
PRIMARY KEY (id, bildeId, fargeId, handId, gjentaID),
FOREIGN KEY (id) REFERENCES aktivitet(id),
FOREIGN KEY (bildeId) REFERENCES aktivitetBilde(bildeId),
FOREIGN KEY (fargeId) REFERENCES aktivitetFarge(fargeId),
FOREIGN KEY (handId) REFERENCES handlingskjede(handId),
FOREIGN KEY (gjentaID) REFERENCES ukedager(gjentaID)
)
ENGINE=InnoDB;




