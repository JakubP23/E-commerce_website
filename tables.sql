-- staff tables contains all employees including Admin, Owner and Employee
CREATE TABLE STAFF( 
    username varchar(255) NOT NULL, 
    passcode varchar(255) NOT NULL, 
    email varchar(255) NOT NULL, 
    f_name varchar(255) NOT NULL, 
    l_name varchar(255) NOT NULL,
    staff_group varchar(255),
    PRIMARY KEY(username) 
);

-- Manages allows for each admin to manage a certain employee 
CREATE TABLE MANAGES(
    managerID varchar(255) NOT NULL,
    userID varchar(255) NOT NULL,
    FOREIGN KEY (managerID) REFERENCES STAFF(username),
    FOREIGN KEY (userID) REFERENCES STAFF(username),
    PRIMARY KEY(managerID, userID)
);

-- customer table contains all informatino about the customer 
CREATE TABLE CUSTOMER( 
    username varchar(255) NOT NULL,
    passcode varchar(255) NOT NULL, 
    email varchar(255) NOT NULL, 
    f_name varchar(255) NOT NULL, 
    l_name varchar(255) NOT NULL, 
    PRIMARY KEY(username) 
);

-- each customer is assigned a cartID when a new accoout is registered. 
CREATE TABLE CART( 
    cartID int NOT NULL,
    customerID varchar(255) NOT NULL, 
    PRIMARY KEY(cartID, customerID),
    FOREIGN KEY (customerID) REFERENCES CUSTOMER(username)
);

-- Shows order history of each customer. Is displayed in order history
CREATE TABLE ORDERS( 
    orderID int NOT NULL,
    ordered_date DATE NOT NULL,
    status BIT NOT NULL,
    PRIMARY KEY(orderID)
);
 
-- Current order that is being processed after a customer submits the order. 
CREATE TABLE HAS_ORDER(
    orderID int NOT NULL,
    customerID varchar(255) NOT NULL,
    employeeID varchar(255) NOT NULL,
    FOREIGN KEY (orderID) REFERENCES ORDERS(orderID),
    FOREIGN KEY (customerID) REFERENCES CUSTOMER(username),
    FOREIGN KEY (employeeID) REFERENCES STAFF(username),
    PRIMARY KEY (orderID, customerID, employeeID)
);

-- Contains all information for each product 
CREATE TABLE PRODUCT(
    itemID int NOT NULL,
    name varchar(255) NOT NULL,
    genre varchar(255) NOT NULL,
    stock int NOT NULL CHECK (stock >= 0),
    cost int NOT NULL CHECK (cost >= 0),
    desc_path varchar(255),
    phot_path varchar(255),
    PRIMARY KEY(itemID)
);

CREATE TABLE IN_ORDER(
    orderID int NOT NULL,
    itemID int NOT NULL,
    FOREIGN KEY (orderID) REFERENCES ORDERS(orderID),
    FOREIGN KEY (itemID) REFERENCES PRODUCT(itemID),
    PRIMARY KEY(orderID, itemID)
);

-- when customer is logged in and have items in cart but are not purchase, the items can be found here. 
CREATE TABLE IN_CART(
    orderID int NOT NULL,
    itemID int NOT NULL,
    FOREIGN KEY (orderID) REFERENCES ORDERS(orderID),
    FOREIGN KEY (itemID) REFERENCES PRODUCT(itemID),
    PRIMARY KEY(orderID, itemID)
);
