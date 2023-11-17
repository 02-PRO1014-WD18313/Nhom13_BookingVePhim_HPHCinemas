
use duan1;

CREATE TABLE vaitro(
	id_vaitro int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tenvaitro varchar(255),
    mavaitro varchar(100)
);

CREATE TABLE nguoidung(
	id_nguoidung int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    hovaten varchar(255),
    email varchar(255),
    tendangnhap varchar(255),
    matkhau varchar(255),
    diem int,
   	id_vaitro int
);

ALTER TABLE nguoidung ADD FOREIGN KEY (id_vaitro) REFERENCES vaitro(id_vaitro);

CREATE TABLE danhmuc(
	id_danhmuc int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tendanhmuc varchar(100)
);

CREATE TABLE phim(
	id_phim int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tenphim varchar(255),
    thoiluongphim int,
    ngayphathanh timestamp,
    mota text,
    anh varchar(255),
    giave double,
    id_danhmuc int
);

ALTER TABLE phim ADD FOREIGN KEY (id_danhmuc) REFERENCES danhmuc(id_danhmuc);

CREATE TABLE theloai(
	id_theloai int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    tentheloai varchar(100)
);

CREATE TABLE theloaiphimchitiet(
	id_theloaichitiet int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_theloai int,
    id_phim int
);

ALTER TABLE theloaiphimchitiet ADD FOREIGN KEY (id_theloai) REFERENCES theloai(id_theloai);
ALTER TABLE theloaiphimchitiet ADD FOREIGN KEY (id_phim) REFERENCES phim(id_phim);

CREATE TABLE phong(
	id_phong int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    maphong varchar(255),
    soluongday int,
    soluongghe int,
    trangthai int
);

CREATE TABLE lichchieu(
	id_lichchieu int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_phim int,
    id_phong int,
    thoigianchieu timestamp
);

ALTER TABLE lichchieu ADD FOREIGN KEY (id_phim) REFERENCES phim (id_phim);
ALTER TABLE lichchieu ADD FOREIGN KEY (id_phong) REFERENCES phong (id_phong);

CREATE TABLE dayghe(
	id_dayghe int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    maday varchar(100),
    soluongghe int,
    id_phong int
);

ALTER TABLE dayghe ADD FOREIGN KEY (id_phong) REFERENCES phong (id_phong);

CREATE TABLE ghe(
	id_ghe int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    maghe varchar(10),
    trangthaighe int,
    id_dayghe int
);

ALTER TABLE ghe ADD FOREIGN KEY (id_dayghe) REFERENCES dayghe (id_dayghe);

CREATE TABLE donhang(
	id_donhang int AUTO_INCREMENT NOT NULL PRIMARY KEY,
    id_nguoidung int,
    id_lichchieu int,
    soghedadat int
);

ALTER TABLE donhang ADD FOREIGN KEY (id_nguoidung) REFERENCES nguoidung (id_nguoidung);
ALTER TABLE donhang ADD FOREIGN KEY (id_lichchieu) REFERENCES lichchieu(id_lichchieu);

create table trangthaiphong(
	id_trangthaiphong int AUTO_INCREMENT primary key not null,
    tentrangthaiphong varchar(255)
);

create table trangthaighe(
	id_trangthaighe int AUTO_INCREMENT primary key not null,
    tentrangthaighe varchar(255)
);

ALTER TABLE phong
ADD FOREIGN KEY (trangthai) REFERENCES trangthaiphong(id_trangthaiphong);

ALTER TABLE ghe
ADD FOREIGN KEY (trangthaighe) REFERENCES trangthaighe(id_trangthaighe);