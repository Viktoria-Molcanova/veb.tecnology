-- create
CREATE TABLE classmates (
  id INTEGER PRIMARY KEY,
  name TEXT NOT NULL,
  age INTEGER NOT NULL,
  address TEXT NOT NULL
);

-- insert
INSERT INTO classmates VALUES (0001, 'Виктория', 23, 'Красноярск');
INSERT INTO classmates VALUES (0002, 'Ольга', 25, 'Красноярск');
INSERT INTO classmates VALUES (0003, 'Петр', 24, 'Москва');

-- fetch 
SELECT name FROM classmates WHERE address = 'Москва' AND age >= 18 AND age < 45;
