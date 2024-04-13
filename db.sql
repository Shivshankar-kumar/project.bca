-- Create the database
CREATE DATABASE IF NOT EXISTS BCASTUDENT;

USE bcastudent;

-- Table-1: admin
CREATE TABLE admin (
    aid INT(11),
    username VARCHAR(30),
    password VARCHAR(15),
    PRIMARY KEY (aid)
);

-- Dumping data into `admin` table
INSERT INTO admin VALUES(1, "admin", "admin1");

-- Table-2: facultyusername
CREATE TABLE facultyusername (
    fid INT(11) AUTO_INCREMENT,
    username VARCHAR(30),
    password VARCHAR(15),
    PRIMARY KEY(fid)
);

-- Table-3: student2
CREATE TABLE student2 (
    sid INT(11) AUTO_INCREMENT,
    Name VARCHAR(40) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Mobile VARCHAR(10) NOT NULL,
    Course INT(10),
    Password VARCHAR(30) NOT NULL, 
    PRIMARY KEY (sid)
);

-- Table-4: signup
CREATE TABLE signup (
    sid INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(40) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Mobile VARCHAR(10) NOT NULL,
    Course INT(10) NOT NULL,
    Password VARCHAR(30) NOT NULL, 
    InsertedDateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (sid)
);

-- Table-5: studentmarks
CREATE TABLE studentmarks (
    sid INT(11),
    java INT(2) NOT NULL,
    webdevelopment INT(2) NOT NULL,
    cloudcomputing INT(2) NOT NULL,
    ood INT(2) NOT NULL,
    lab1 INT(2) NOT NULL,
    lab2 INT(2) NOT NULL,
    PRIMARY KEY (sid)
);

-- Table-6: feedback
CREATE TABLE feedback (
    id INT(11) AUTO_INCREMENT,
    Name VARCHAR(40),
    Mobile VARCHAR(10),
    Email VARCHAR(40),
    Message VARCHAR(100),
    InsertedDateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);

-- Table-7: admission_form
CREATE TABLE admission_form (
    id INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(40) NOT NULL,
    Email VARCHAR(40) NOT NULL,
    Mobile VARCHAR(10) NOT NULL,
    Course VARCHAR(40) NOT NULL,
    Address VARCHAR(50) NOT NULL,
    Gender VARCHAR(6) NOT NULL,
    Dob DATE,
    PRIMARY KEY(id)
);

-- Table-8: complain_box
CREATE TABLE complain_box (
    id INT(11) NOT NULL AUTO_INCREMENT,
    Name VARCHAR(40) NOT NULL,
    Mobile VARCHAR(10) NOT NULL,
    Email VARCHAR(40) NOT NULL,
    Course VARCHAR(40) NOT NULL,
    Message VARCHAR(100) NOT NULL,
    InsertedDateTime DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
);

-- Table-9: studentclass
CREATE TABLE studentclass (
    cid INT(11) AUTO_INCREMENT,
    coursename VARCHAR(15),
    PRIMARY KEY(cid)
);