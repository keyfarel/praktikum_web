alter table user add level varchar(5) not null ;

insert into user(username, password, level)
       values ('user-1', '123', 2);

UPDATE user SET password = MD5('123') WHERE username = 'user-1';
