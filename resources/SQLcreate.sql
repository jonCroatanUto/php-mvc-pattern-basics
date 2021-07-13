CREATE DATABASE exam;
USE exam;

CREATE TABLE questions(
    qst_no      INT             NOT NULL,
    question    VARCHAR(150)    NOT NULL,
    PRIMARY KEY (qst_no)
);

CREATE TABLE answers(
    qst_no      INT            NOT NULL,
    anw_no      CHAR           NOT NULL,
    answers     VARCHAR(150)    NOT NULL,
    FOREIGN KEY (qst_no) REFERENCES questions (qst_no),
    PRIMARY KEY (qst_no, anw_no)    
);