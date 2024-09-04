CREATE TABLE IF NOT EXISTS mahasiswa (
    npm INT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    jenis_kelamin ENUM('L', 'P') NOT NULL,
    jurusan VARCHAR(50) NOT NULL,
    alamat TEXT
);