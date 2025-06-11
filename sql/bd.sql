
CREATE DATABASE IF NOT EXISTS PalletFlow;
USE PalletFlow;


CREATE TABLE IF NOT EXISTS paletes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    carrego VARCHAR(100),
    conferente VARCHAR(100),
    motorista VARCHAR(100),
    placa VARCHAR(20),
    data DATE DEFAULT CURRENT_DATE,
    quantidade INT
);
