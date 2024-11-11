CREATE TABLE anggota (
                         id INT(11) NOT NULL AUTO_INCREMENT,
                         nama VARCHAR(100) NOT NULL,
                         jenis_kelamin ENUM('L', 'P') NOT NULL,
                         alamat VARCHAR(200) NOT NULL,
                         no_telp VARCHAR(20) NOT NULL,
                         PRIMARY KEY (id)
);
