/*
my second version of a db
to be uploaded to my server

*/

drop table if exists test_Customers;

create table test_Customers
( CustomerID int unsigned not null auto_increment primary key,
LastName varchar(50),
FirstName varchar(50),
Email varchar(80)
);

insert into test_Customers values (NULL,"Hugginkiss","Amanda","aman@example.com");
insert into test_Customers values (NULL,"Bond","Bond James","007@example.com");
insert into test_Customers values (NULL,"Potter","Harry","halfblood@hogwarts.com");
insert into test_Customers values (NULL,"Dumbledore","Albus","ad@hogwarts.com");
insert into test_Customers values (NULL,"Griffin","Peter","pawtucketale@.beerme.com");
insert into test_Customers values (NULL,"Smith","Stan","notCIA@cia.com");
insert into test_Customers values (NULL,"Bear","Fozzie","wockawockawocka@muppets.com");
insert into test_Customers values (NULL,"Smith","Bob","bob@example.com");
insert into test_Customers values (NULL,"Jones","Bill","bill@example.com");
insert into test_Customers values (NULL,"Doe","John","john@example.com");
insert into test_Customers values (NULL,"Rules","Ann","ann@example.com");

