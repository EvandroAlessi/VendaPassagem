CREATE DATABASE VendaPassagem;

USE VendaPassagem;

CREATE TABLE IF NOT EXISTS Usuario(
	Nome varchar(126) NOT NULL,
	Email Varchar(126) NOT NULL,
    Senha Varchar(126) NOT NULL
);

CREATE TABLE IF NOT EXISTS Destino (
	ID INT NOT NULL auto_increment,
	NomeAeroporto VARCHAR(126) NOT NULL,
	TaxaEmbarque Numeric(10, 2) NOT NULL,
    
	PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS Aeronave (
	ID INT NOT NULL auto_increment,
	DestinoID INT NOT NULL ,
    Modelo VARCHAR(126) NOT NULL,
	QntAssentos INT NOT NULL,
	QntAssentosEspecial INT NOT NULL,
    
	PRIMARY KEY (ID),
    FOREIGN KEY fk_destino(DestinoID)
	   REFERENCES Destino(ID)
	   ON UPDATE RESTRICT
	   ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS Passageiro (
	ID INT NOT NULL auto_increment,
    CPF VARCHAR(18) NOT NULL,
	RG VARCHAR(16) NOT NULL,
	Nome VARCHAR(126) NOT NULL,
	DataNascimento DateTime NOT NULL,
    
	PRIMARY KEY (ID)
);	

CREATE TABLE IF NOT EXISTS Voo (
	ID INT NOT NULL auto_increment,
	AeronaveID INT NOT NULL,
	DataPartida DateTime NOT NULL,
	ValorPassagem Numeric(10, 2) NOT NULL,
  
	PRIMARY KEY (ID),
    FOREIGN KEY fk_aeronave(AeronaveID)
		REFERENCES Aeronave(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS PassageiroVoo (
    VooID INT NOT NULL,
    PassageiroID INT NOT NULL,
    NumAssento INT NOT NULL,
    Solicitacoes VARCHAR(255),
    TipoAssento INT NOT NULL,
    FormaPagamento INT NOT NULL,
    ValorPagamento Numeric(10, 2),
    
	FOREIGN KEY fk_voo(VooID)
		REFERENCES Voo(ID)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT,
	FOREIGN KEY fk_passageiro(PassageiroID)
		REFERENCES 	Passageiro(ID)
		ON UPDATE RESTRICT
        ON DELETE RESTRICT
);

INSERT INTO Destino(NomeAeroporto, TaxaEmbarque) 
VALUES
	('Congonhas', 530),
	('CWB', 110),
	('Etipali', 56),
	('Pinhas', 89),
	('Aero', 73),
	('Aquele legal', 12),
	('Aeroporto da Barbie', 1998),
	('Aeroporto dos Vingadores', 3),
	('Aeroporto da MM', 569),
	('Porta Avião', 8512);

INSERT INTO Aeronave(DestinoID, Modelo, QntAssentos, QntAssentosEspecial) 
VALUES
	(1, 'A-123', 200, 20),
	(2, 'Bog-76', 436, 43),
	(3, 'Ak-23', 201, 20),
	(4, 'Nave do Batman', 1, 0),
	(5, 'Nave de teste', 963, 96),
	(6, 'Alien-63', 36, 3),
	(7, 'Boing 773', 773, 77),
	(8, 'B-09', 54, 5),
	(9, 'J-45', 123, 12),
	(10, 'BJN', 263, 26);

INSERT INTO Passageiro(CPF, RG, Nome, DataNascimento) 
VALUES
	('105.627.089-60', '13.700.972-2', 'Evandro Alessi', '1197/11/15 23:59:59'),
	('237.972.180-79', '27.791.539-9', 'Camila Drabeski', '1940/02/06 23:59:59'),
	('154.095.360-29', '44.547.866-4', 'João Maria', '1945/09/14 23:59:59'),
	('884.643.950-35', '18.082.893-9', 'Mario João', '1952/05/03 23:59:59'),
	('875.461.140-71', '48.175.260-2', 'João Pedro', '1947/11/16 23:59:59'),
	('028.770.700-85', '45.571.300-5', 'Rosa Mazon', '1994/06/13 23:59:59'),
	('887.434.140-79', '12.941.477-3', 'José Amacir', '1946/11/03 23:59:59'),
	('928.563.070-78', '29.108.403-5', 'Renato Sergio', '1965/01/14 23:59:59'),
	('160.175.290-30', '43.855.759-1', 'Luiza Braga', '1958/05/06 23:59:59'),
	('332.114.650-90', '14.372.722-9', 'Luana Pedroso', '1971/04/08 23:59:59'),
	('867.491.593-03', '11.761.152-9', 'Rita Jennifer Sabrina', '1960/08/27 23:59:59');
    
INSERT INTO Voo(AeronaveID, DataPartida, ValorPassagem) 
VALUES
	(1, '2019/10/24 02:59:59', 359.56),
	(2, '2019/10/25 03:59:59', 436.32),
	(3, '2019/09/26 05:59:59', 202.42),
	(4, '2019/05/27 12:59:59', 145.95),
	(5, '2019/11/28 11:59:59', 54),
	(6, '2019/12/28 13:59:59', 263),
	(7, '2019/10/28 15:59:59', 773),
	(8, '2019/08/29 17:59:59', 123),
	(9, '2019/06/22 20:59:59', 963),
	(10, '2019/10/02 22:59:59', 36);
    
INSERT INTO PassageiroVoo(VooID, PassageiroID, NumAssento, Solicitacoes, TipoAssento, FormaPagamento, ValorPagamento) 
VALUES
	(1, 10, 123, 'Agua', 1, 2, 203),
	(2, 9, 13, 'Bera', 2, 1, 54),
	(3, 8, 69, 'NADA', 2, 3, 203),
	(4, 7, 72, 'Paz', 1, 3, 773),
	(5, 6, 48, '', 1, 2, 963),
	(6, 5, 789, '', 2, 1, 359.56),
	(7, 4, 85, '', 1, 3, 548),
	(8, 3, 663, 'bebida', 2, 2, 145.95),
	(9, 2, 112, '', 1, 1, 203),
	(10, 1, 177, 'loira', 1, 3, 202.42);