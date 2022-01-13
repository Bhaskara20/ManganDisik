---BELUM DIJALANKAN---
---Table Pelanggan---
CREATE TABLE Pelanggan(
IdPelanggan INT IDENTITY(1,1) NOT NULL,
NamaPelanggan VARCHAR (20),
NoTelpPelanggan VARCHAR (12),
PRIMARY KEY (IdPelanggan)
)
ALTER TABLE Pelanggan ADD UsernamePelanggan VARCHAR(20);
ALTER TABLE Pelanggan ADD PasswordPelanggan VARCHAR(10);

---Table JuruMasak---
CREATE TABLE JuruMasak(
IdJuruMasak INT IDENTITY(1,1) NOT NULL,
NamaJuruMasak VARCHAR (20),
UsernameJuruMasak VARCHAR (20),
PasswordJuruMasak VARCHAR (10),
PRIMARY KEY (IdJuruMasak)
)

---Table Kasir---
CREATE TABLE Kasir(
IdKasir INT IDENTITY(1,1) NOT NULL,
NamaKasir VARCHAR (20),
UsernameKasir VARCHAR (20),
PasswordKasir VARCHAR (10),
PRIMARY KEY (IdKasir)
)

---Table Barista---
CREATE TABLE Barista(
IdBarista INT IDENTITY(1,1) NOT NULL,
NamaBarista VARCHAR (20),
UsernameBarista VARCHAR (20),
PasswordBarista VARCHAR (10),
PRIMARY KEY (IdBarista)
)

---Table JenisMenu---
CREATE TABLE JenisMenu(
IdJenisMenu INT IDENTITY(1,1) NOT NULL,
JenisMenu VARCHAR (7), ---nanti makanan/minuman
PorsiMenu CHAR (1), --- S,M,L
PRIMARY KEY (IdJenisMenu)
)
INSERT INTO JenisMenu(JenisMenu, PorsiMenu)
VALUES ('Makanan', 'S')
INSERT INTO JenisMenu(JenisMenu, PorsiMenu)
VALUES ('Minuman', 'S')
select * from JenisMenu

---Table Menu---
CREATE TABLE Menu(
IdMenu INT IDENTITY(1,1) NOT NULL,
IdJenisMenu INT,
NamaMenu VARCHAR (20),
HargaMenu NUMERIC (11,2),
PRIMARY KEY (IdMenu),
FOREIGN KEY (IdJenisMenu) REFERENCES JenisMenu(IdJenisMenu) ON UPDATE CASCADE ON DELETE CASCADE,
)
select * FROM Menu
INSERT INTO Menu(IdJenisMenu,NamaMenu, HargaMenu)
VALUES (2,'Ayam Goreng', 10000),
(2,'Ayam Krispi',10000),
(2,'Ayam Laos',10000),
(2,'Ayam Geprek',10000),
(2,'Nasi Goreng',10000),
(2,'Mie Goreng',10000),
(2,'Fuyung Hai',10000),
(2,'Pangsit Mie',10000),
(2,'Nasi Putih',10000),
(2,'Tempura',10000),
(3,'Jus Jeruk',10000),
(3,'Es Darah',10000),
(3,'Wine',10000)

---Table Transaksi---
CREATE TABLE Transaksi(
IdTransaksi INT IDENTITY(1,1) NOT NULL,
IdPelanggan INT,
IdKasir INT,
TanggalTransaksi DATE,
TotalPembayaran NUMERIC (11,2),
PRIMARY KEY (IdTransaksi),
FOREIGN KEY (IdPelanggan) REFERENCES Pelanggan(IdPelanggan) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (IdKasir) REFERENCES Kasir(IdKasir) ON UPDATE CASCADE ON DELETE CASCADE,

)

---Table DetailPesanan---
CREATE TABLE DetailPesanan(
IdDetailTransaksi INT IDENTITY(1,1) NOT NULL,
IdTransaksi INT,
IdMenu INT,
IdJuruMasak INT NULL,
IdBarista INT NULL,
JumlahMenu INT,
PRIMARY KEY (IdDetailTransaksi),
FOREIGN KEY (IdTransaksi) REFERENCES Transaksi(IdTransaksi) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (IdMenu) REFERENCES Menu(IdMenu) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (IdJuruMasak) REFERENCES JuruMasak(IdJuruMasak) ON UPDATE CASCADE ON DELETE CASCADE,
FOREIGN KEY (IdBarista) REFERENCES Barista(IdBarista) ON UPDATE CASCADE ON DELETE CASCADE,
)

CREATE TABLE Administrator(
IdAdmin INT IDENTITY(1,1) NOT NULL,
NamaAdmin VARCHAR (20),
UsernameAdmin VARCHAR (20),
PasswordAdmin VARCHAR (10),
PRIMARY KEY (IdAdmin)
)