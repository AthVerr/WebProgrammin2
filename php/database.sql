
 CREATE DATABASE  Department_of_Bicycle_Design_Engineering;


USE   Department_of_Bicycle_Design_Engineering;




/*dimiourgia pinaka gia epilogi xristi*/

create table user_id
(
    id INT NOT NULL AUTO_INCREMENT, /*gia na aujanei to id mono tou*/
    Name VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
) engine = innodb;   /*allazei ton pinaka etsi wste na mporw na kanw tropopoihseis*/




/*dimiourgia pinaka gia grammatia*/

create table secretariat 
(
    id int NOT NULL,
     Name VARCHAR(50) NOT NULL,
    PRIMARY KEY(id)
) engine = innodb;





/*dimiourgia pinaka gia kathigites*/

create table professors  
(
    id INT NOT NULL AUTO_INCREMENT, 
    Name VARCHAR(50) NOT NULL,
    PRIMARY key(id)
) engine = innodb;




/*dimiourgia pinaka gia foititi kai gia xristes*/

create table student_user         
(
    id VARCHAR(50) NOT NULL,
    password VARCHAR (50) NOT NULL,
    user_id int NOT NULL,
    active_account boolean NOT NULL,
    Name VARCHAR(50) NOT NULL,
    surname VARCHAR(50) NOT NULL,
    birthdate DATE NOT NULL,
    email VARCHAR(50) NOT NULL,
    primary key(id),
    foreign key (user_id) references user_id(id)
) engine = innodb;



/*diaxeirisi mathimatwn*/


create table lessons
(
    id VARCHAR(50) NOT NULL,
    secretariat  int NOT NULL,
    title VARCHAR(50) NOT NULL,
    professor VARCHAR(50) NOT NULL,
    ECTS int NOT NULL,
    semester int NOT NULL,
    start_date DATE,
    end_date DATE, 
    primary key (id),
    foreign key (secretariat) references secretariat(id),
    foreign key (professor) references student_user(id)
)engine=innodb;

    
/*mathimata p perastikan*/

create table epitixoi_mathimata
(
   st_id VARCHAR(10) NOT NULL,
   le_id VARCHAR(10) NOT NULL,
   declaration_date DATE NOT NULL,
   exams_date DATE,
   passed boolean,
   grade float(5,5),
   foreign key (st_id) references student_user(id),
   foreign key (le_id) references lessons(id)
)engine=innodb;


insert into user_id(id, Name) 
values	(1, 'secretariat'),
		(2, 'Professor'),
		(3, 'Student');




insert into secretariat(id, Name) 
values(321, 'Department of Bicycle Design Engineering');





insert into student_user values('sec100', '2950b8347a6689cb32d23474894a2d8d', 1, true, 'Maria', 'Theo', '1979-08-09','sec100@icsd.aegean.gr'),
                               ('prof100', '0af64cf60781f3c81e688c5fe1d94c3c', 2, true, 'Antreas', 'papadopoulos', '1969-06-07','prof100@icsd.aegean.gr'),
			       ('prof103','8bd78b51f80b6116a0488724f2e45cf4',2,true,'Theodoros','Leoutsakos','1985/07/04','theodoros@icsd.aegean.gr'),
                               ('icsd08011', '04e0c1605b68bb72b59ec12c6414748d', 3, true, 'Athina', 'Verroiopoulou', '1990-02-20','icsd08011@icsd.aegean.gr'),
                               ('icsd08041','f68aff63ce560ad03b8246062ad1398f',3,  true,'Maria','Theo','1990/06/03','icsd08041@icsd.aegean.gr'),
                               ('icsd08012','cd23c7b6613f826cde2b3bdc8b9b64d4',3,true,'Athina','Verr','1990/09/07','icsd08011@icsd.aegean.gr');
insert into lessons values ('0001','321','Kataskeui podilatwn','prof100','10','1','2012/02/01','2012/06/29');

