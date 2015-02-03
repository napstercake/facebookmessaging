CREATE DATABASE fbmessaging;

CREATE TABLE users (
	id int NOT NULL PRIMARY KEY AUTO_INCREMENT ,
	username varchar(25) NOT NULL UNIQUE,
	password varchar(50) NOT NULL,
	email varchar(100) NOT NULL 
);

-- Conversation nro 1, 2 or 3. In this table
-- will register all conversation between two 
-- persons.
CREATE TABLE conversation (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	user_one int(11) NOT NULL,
	user_two int(11) NOT NULL,
	ip varchar(30) DEFAULT NULL,
	time int(11) DEFAULT NULL,
FOREIGN KEY (user_one) REFERENCES users(id),
FOREIGN KEY (user_two) REFERENCES users(id)
);


CREATE TABLE conversation_reply (
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	reply text,
	user_id_fk int(11) NOT NULL, -- NO SE SI ESTE ES EL ID DEL QUE RECIBE O EL Q ENVIA
	ip varchar(30) NOT NULL,
	time int(11) NOT NULL,
	c_id_fk int(11) NOT NULL,
FOREIGN KEY (user_id_fk) REFERENCES users(id),
FOREIGN KEY (c_id_fk) REFERENCES conversation(id)
);