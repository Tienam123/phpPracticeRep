create table users
(
    id     int auto_increment
        primary key,
    name   varchar(24) null,
    age    varchar(24) null,
    salary int         null
)
    collate = utf8mb4_general_ci;

INSERT INTO my_db.users (name, age, salary) VALUES ('user1', '23', 400);
INSERT INTO my_db.users (name, age, salary) VALUES ('user2', '25', 500);
INSERT INTO my_db.users (name, age, salary) VALUES ('user3', '23', 500);
INSERT INTO my_db.users (name, age, salary) VALUES ('user4', '30', 900);
INSERT INTO my_db.users (name, age, salary) VALUES ('user5', '27', 500);
INSERT INTO my_db.users (name, age, salary) VALUES ('user6', '28', 900);
