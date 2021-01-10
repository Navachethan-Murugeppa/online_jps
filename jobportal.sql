<!-- create a database initially -->

CREATE DATABASE jobportal;

<!-- create tables as follows -->


<!-- table for candidate -->

CREATE TABLE candidate(cid int, candidate_name varchar(30), dob varchar(30), age int, gender varchar(3), university varchar(20), experience int,
						email varchar(20), phone_number bigint(20), skills varchar(30), location varchar(30), PRIMARY KEY(cid) AUTO_INCREMENT);
						
	
<!-- table for company -->

CREATE TABLE company(coid int, company_name varchar(30), company_type varchar(30), 
						email varchar(30), phone_number bigint(20), PRIMARY KEY(coid) AUTO_INCREMENT);

<!-- table for employer/recruiter -->

CREATE TABLE employee(eid int, employee_name varchar(30), designation varchar(30), email varchar(30), 
						company varchar(30), location varchar(30), PRIMARY KEY(eid) AUTO_INCREMENT);
						

<!-- table for interview -->

CREATE TABLE interview (iid int, name varchar(30), eemail varchar(30), company varchar(30), location varchar(20), date varchar(15), 
						  time varchar(6), PRIMARY KEY(iid) AUTO_INCREMENT);
				
<!-- table for job -->

CREATE TABLE job(jid int, job_type varchar(30), job_designation varchar(30), job_company varchar(30), skills varchar(30), 
				  experience int, salary bigint(10), location varchar(30), PRIMARY KEY(jid) AUTO_INCREMENT);
				  
<!-- table for users -->

CREATE TABLE users(id int, username varchar(50), password varchar(155), created_at datetime, PRIMARY KEY(id) AUTO_INCREMENT);


<!-- insert operation is used in the forms created to insert into the above tables -->