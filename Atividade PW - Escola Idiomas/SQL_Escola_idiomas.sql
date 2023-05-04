create Database Escola;
Use Escola;

CREATE TABLE alunos (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    matricula VARCHAR(20) NOT NULL,
    data_nascimento DATE NOT NULL
);

CREATE TABLE professores (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL
);

CREATE TABLE turmas (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    periodo VARCHAR(10) NOT NULL,
    professor_id INT NOT NULL,
    FOREIGN KEY (professor_id) REFERENCES professores(id)
);

CREATE TABLE matriculas (
	aluno_id INT NOT NULL,
    turma_id INT NOT NULL,
    data_matricula DATE NOT NULL,
    PRIMARY KEY (aluno_id, turma_id),
    FOREIGN KEY (aluno_id) REFERENCES alunos(id),
    FOREIGN KEY (turma_id) REFERENCES turmas(id)
);

CREATE TABLE notas_faltas (
	matricula_aluno_id INT NOT NULL,
    matricula_turma_id INT NOT NULL,
    data_lancamento DATE NOT NULL,
    nota FLOAT,
    falta INT,
    PRIMARY KEY (matricula_aluno_id, matricula_turma_id),
    FOREIGN KEY (matricula_aluno_id, matricula_turma_id) REFERENCES
    matriculas(aluno_id, turma_id)
);


