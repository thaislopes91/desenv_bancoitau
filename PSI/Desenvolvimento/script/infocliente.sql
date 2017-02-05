CREATE TABLE tb_clientes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(200),
	email varchar(100),
    senha varchar(100),
	nascimento datetime,
	rg varchar(100),
	cpf varchar(11),
	endereco varchar(100),
	bairro varchar(100),
    cep varchar(10),
	cidade varchar(100),
	estado varchar(100),
	caminhoarquivo varchar(200),
    nomearquivo varchar(100)
)

select * from tb_clientes

/*CALL p_clientes_save('Thais','ta@im.com.br','123','2012-10-28','123344','05348554820','Rua Gironda','Jardim Paulista','01435040','São Paulo','SP','download/Teste para Desenvolvedor Jr.doc','Teste para Desenvolvedor Jr.doc')*/
/*CALL p_clientes_save('Patricia','p@i.com.br','123','2014-10-04','232','093903902929','Rua Gironda','Jardim Paulista','01435040','São Paulo','SP','download/1520763_632785596812616_3914194704563299780_n.jpg','1520763_632785596812616_3914194704563299780_n.jpg')*/

DELIMITER &&
CREATE PROCEDURE p_clientes_save ( in
	nome varchar(200),
	in email varchar(100),
    in senha varchar(100),
	in nascimento datetime,
	in rg varchar(100),
	in cpf varchar(11),
	in endereco varchar(100),
	in bairro varchar(100),
    in cep varchar(10),
	in cidade varchar(100),
	in estado varchar(100),
	in caminhoarquivo varchar(200),
    in nomearquivo varchar(100)
)

BEGIN

	INSERT INTO tb_clientes(nome,email,senha,nascimento,rg,cpf,endereco,bairro,cep,cidade,estado,caminhoarquivo,nomearquivo)
    VALUES (nome,email,senha,nascimento,rg,cpf,endereco,bairro,cep,cidade,estado,caminhoarquivo,nomearquivo);

END


 
DELIMITER &&
CREATE PROCEDURE p_clientes_edit ( in
	nrid int,
	in desnome varchar(200),
	in desemail varchar(100),
    in dessenha varchar(100),
	in desnascimento datetime,
	in desrg varchar(100),
	in descpf varchar(11),
	in desendereco varchar(100),
	in desbairro varchar(100),
    in descep varchar(10),
	in descidade varchar(100),
	in desestado varchar(100),
	in descaminhoarquivo varchar(200),
    in desnomearquivo varchar(100)
)

BEGIN

	UPDATE tb_clientes
		SET nome = desnome,
			email = desemail,
            senha = dessenha,
            nascimento = desnascimento,
            rg = desrg,
            cpf = descpf,
            endereco = desendereco,
            bairro = desbairro,
            cep = descep,
            cidade = descidade,
            estado = desestado,
            caminhoarquivo = descaminhoarquivo,
            nomearquivo = desnomearquivo
    WHERE id = nrid;

END