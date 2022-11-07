CREATE DATABASE fakultas;

CREATE TABLE jurusan(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    kode CHAR(4) NOT NULL,
    nama VARCHAR(50) NOT NULL
);

CREATE TABLE mahasiswa(
    id INTEGER PRIMARY KEY AUTO_INCREMENT,
    id_jurusan INTEGER NOT NULL,
    nim CHAR(8) NOT NULL,
    nama VARCHAR(50) NOT NULL,
    jenis_kelamin enum('laki-laki','perempuan') NOT NULL,
    tempat_lahir VARCHAR(50) NOT NULL,
    tanggal_lahir DATE NOT NULL,
    alamat VARCHAR(225) NOT NULL,
    FOREIGN KEY (id_jurusan) REFERENCES jurusan(id)
);
-- Memasukkan data jurusan
 insert into jurusan ("kode","nama") values ("MTK","Matematika");
 insert into jurusan (kode,nama) values ("SI","Sistem Informasi");

-- Memasukkan data mahasiswa
insert into mahasiswa (id_jurusan,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) values(1,"1910015027","Rama","laki-laki","Jakarta","2000-07-27","Jl.Soekarno Hatta No.14 Jaktim");
insert into mahasiswa (id_jurusan,nim,nama,jenis_kelamin,tempat_lahir,tanggal_lahir,alamat) values(2,"1910035045","Puteri","Perempuan","Jogjakarta","2001-06-21","Jl.Gejayan No.04 Jogjakarta");

-- Update data mahasiswa
update mahasiswa set alamat ="Jl.Roro Jonggrang No.01" where id=1;

--Delete data mahasiswa
delete from mahasiswa where id=1;