CREATE TABLE 'news'(
    'id' SERIAL PRIMARY KEY,
    'title' VARCHAR(255) NOT NULL,
    'category' VARCHAR(255) NOT NULL, /* Indica Verdadero o Falso */
    'topic' VARCHAR(255) NOT NULL,
    'source' VARCHAR(255) NOT NULL,
    'content' TEXT NOT NULL,
    'date' DATE NOT NULL,
    'author' VARCHAR(255) NOT NULL,
    'link' VARCHAR(255) NOT NULL
)

CREATE TABLE 'users'(
    'id' SERIAL PRIMARY KEY,
    'name' VARCHAR(255) NOT NULL,
    'email' VARCHAR(255) NOT NULL,
    'password' VARCHAR(255) NOT NULL,
    'date' DATE NOT NULL
)

