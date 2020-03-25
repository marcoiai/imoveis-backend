
CREATE TABLE contacts (
  id serial primary key,
  name varchar(255) DEFAULT NULL,
  telefones varchar(200) DEFAULT NULL,
  empresa_id int NOT NULL,
  created_at timestamp DEFAULT NULL,
  updated_at timestamp DEFAULT NULL,
  deleted_at timestamp DEFAULT NULL
)

CREATE TABLE imoveis (
  id serial primary key,
  inscricao_imobiliaria varchar,
  ponto geometry,
  area numeric(10, 2),
  banheiros int not null,
  banheiros int not null default 0,
  quartos int not null default 0,
  vagas_garagem int not null default 0,
  created_at timestamp DEFAULT NULL,
  updated_at timestamp DEFAULT NULL,
  deleted_at timestamp DEFAULT NULL
)