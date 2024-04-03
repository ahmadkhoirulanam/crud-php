CREATE TABLE mahasiswa (
    nim VARCHAR(10) PRIMARY KEY,
    nama VARCHAR(100),
    alamat VARCHAR(255),
    tempat_lahir VARCHAR(100),
    jenis_kelamin ENUM('Laki-laki', 'Perempuan')
);
