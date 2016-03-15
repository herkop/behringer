CREATE TABLE IF NOT EXISTS user (
id SERIAL PRIMARY KEY NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
password VARCHAR(100) NOT NULL
)

CREATE TABLE IF NOT EXISTS candidate (
id SERIAL PRIMARY KEY NOT NULL,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
votenumber INT NOT NULL,
votes INT DEFAULT 0
voting INT NOT NULL
)

CREATE TABLE IF NOT EXISTS voting (
id SERIAL PRIMARY KEY NOT NULL,
name VARCHAR(100) NOT NULL,
user INT NOT NULL, /**creater*/
start_date TIMESTAMP NOT NULL,
finish_date TIMESTAMP NOT NULL
)

CREATE TABLE IF NOT EXISTS voted {
id SERIAL PRIMARY KEY NOT NULL,
user INT NOT NULL,
voting INT NOT NULL,
vote BOOLEAN NOT NULL
}
