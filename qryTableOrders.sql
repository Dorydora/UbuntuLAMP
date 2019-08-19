CREATE TABLE ORDERS
(
        OrderNum INT AUTO_INCREMENT PRIMARY KEY,
        OrderDate VARCHAR(7)
        CustID INT,
        NumberOrdered INT,
        QuotedPrice DOUBLE,
        PartNum INT
);