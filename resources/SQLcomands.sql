INSERT INTO questions(
    qst_no,
    question
)VALUES
(1,"What is an architecture pattern?"),
(2,"What is the MVC pattern?"),
(3,"Draw a scheme where you understand that the MVC pattern is clearly"),
(4,"Explain in which cases you would use this pattern"),
(5,"Describe step by step what happens in this pattern from when you create a Request until a Response is returned"),
(6,"What advantages do you think this pattern has to use?");



INSERT INTO answers(
    qst_no,
    anw_no,
    answer,
    is_correct
)VALUES
(1,"1","Correct answer",true),
(1,"2","Wrong answer",false),
(1,"3","Wrong answer",false),
(1,"4","Wrong answer",false),

(2,"5","Wrong answer",false),
(2,"6","Correct answer",true),
(2,"7","Wrong answer",false),
(2,"8","Wrong answer",false),

(3,"9","Wrong answer",false),
(3,"10","Wrong answer",false),
(3,"11","Correct answer",true),
(3,"12","Wrong answer",false),

(4,"13","Correct answer",true),
(4,"14","Wrong answer",false),
(4,"15","Wrong answer",false),
(4,"16","Wrong answer",false),

(5,"17","Wrong answer",false),
(5,"18","Wrong answer",false),
(5,"19","Wrong answer",false),
(5,"20","Correct answer",true),

(6,"21","Wrong answer",false),
(6,"22","Correct answer",true),
(6,"23","Wrong answer",false),
(6,"24","Wrong answer",false);

SELECT question,answer  FROM questions as Q 
LEFT JOIN answers as A ON Q.qst_no=A.qst_no
WHERE A.is_correct=true;

