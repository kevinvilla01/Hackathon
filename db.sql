CREATE TABLE notas (
    id SERIAL PRIMARY KEY,
    titutlo VARCHAR(255),
    categoria VARCHAR(255),
    tema VARCHAR(255),
    fuente VARCHAR(255),
    contenido TEXT,
    fecha DATE,
    autor VARCHAR(255),
    link VARCHAR(255)
);