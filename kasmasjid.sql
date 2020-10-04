/*
Navicat MySQL Data Transfer

Source Server         : koneksi
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : kasmasjid

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2020-06-15 14:35:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tb_jadwal`
-- ----------------------------
DROP TABLE IF EXISTS `tb_jadwal`;
CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jadwal` varchar(100) NOT NULL,
  `deskripsi_jadwal` text NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(10) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_jadwal
-- ----------------------------
INSERT INTO `tb_jadwal` VALUES ('8', 'Halal bi halal', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vestibulum enim id sem vulputate, non mattis leo molestie. Suspendisse luctus, enim sed maximus blandit, orci lacus accumsan diam, blandit dignissim risus purus at elit. Aenean a posuere eros. Phasellus turpis ligula, scelerisque eget nibh ac, malesuada condimentum lectus.', 'Lapangan Masjid', '2015-12-29', '22:10');
INSERT INTO `tb_jadwal` VALUES ('9', 'Ngaji Rutins', 'Pengajian rutin setiap malam malam tertentu diisi oleh mubaligh/mubalighot yang bertugas di hari itu', 'Masjid Agung Jati', '2020-06-19', '19:01');
INSERT INTO `tb_jadwal` VALUES ('10', 'Ngaji Remaja', 'Pengajian Wajib untuk usia pranikah yakni umur 18 tahun keatas', 'Aula Atas', '2020-07-19', '07:30');

-- ----------------------------
-- Table structure for `tb_kas_masjid`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kas_masjid`;
CREATE TABLE `tb_kas_masjid` (
  `id_km` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date DEFAULT NULL,
  `uraian_km` varchar(255) DEFAULT NULL,
  `masuk` int(15) DEFAULT NULL,
  `keluar` int(15) DEFAULT NULL,
  PRIMARY KEY (`id_km`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kas_masjid
-- ----------------------------
INSERT INTO `tb_kas_masjid` VALUES ('2', '2020-06-10', 'ex edit', '0', '200000');
INSERT INTO `tb_kas_masjid` VALUES ('4', '2020-06-13', 'cok', '13000', '0');
INSERT INTO `tb_kas_masjid` VALUES ('5', '2020-06-13', 'exa', '0', '130000');
INSERT INTO `tb_kas_masjid` VALUES ('6', '2020-06-14', '15:20', '500000', '0');
INSERT INTO `tb_kas_masjid` VALUES ('7', '1970-01-01', 'infaq', '600000', null);
INSERT INTO `tb_kas_masjid` VALUES ('8', '1970-01-01', 'yus', null, '1000');

-- ----------------------------
-- Table structure for `tb_kas_sosial`
-- ----------------------------
DROP TABLE IF EXISTS `tb_kas_sosial`;
CREATE TABLE `tb_kas_sosial` (
  `id_ks` int(11) NOT NULL AUTO_INCREMENT,
  `tgl` date NOT NULL,
  `uraian_ks` varchar(255) NOT NULL,
  `masuk` int(11) NOT NULL,
  `keluar` int(11) NOT NULL,
  PRIMARY KEY (`id_ks`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_kas_sosial
-- ----------------------------
INSERT INTO `tb_kas_sosial` VALUES ('1', '2020-06-13', 'tujuah', '12321330', '0');
INSERT INTO `tb_kas_sosial` VALUES ('2', '2020-06-13', '123', '500000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('3', '2020-06-13', '123', '1234556', '0');
INSERT INTO `tb_kas_sosial` VALUES ('4', '2020-06-13', '123', '12345', '0');
INSERT INTO `tb_kas_sosial` VALUES ('5', '2020-06-13', '123', '555555', '0');
INSERT INTO `tb_kas_sosial` VALUES ('6', '2020-06-13', '123', '555555', '0');
INSERT INTO `tb_kas_sosial` VALUES ('7', '2020-06-13', 'adasa', '12000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('8', '2020-06-13', 'example', '200000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('9', '2020-06-13', 'exemple', '0', '200000');
INSERT INTO `tb_kas_sosial` VALUES ('10', '2020-06-13', 'exampel', '500000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('11', '2020-06-13', 'example', '0', '500000');
INSERT INTO `tb_kas_sosial` VALUES ('12', '2020-06-13', 'example', '0', '200000');
INSERT INTO `tb_kas_sosial` VALUES ('13', '2020-06-14', 'sample', '5000000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('14', '2020-06-14', 'cobanih', '20000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('15', '1970-01-01', 'coba hari 3 nih', '0', '50000');
INSERT INTO `tb_kas_sosial` VALUES ('16', '1970-01-01', 'coba lagi', '500000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('17', '1970-01-01', 'coba hari 3 nih', '1000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('18', '1970-01-01', 'coba keluar', '0', '500000');
INSERT INTO `tb_kas_sosial` VALUES ('19', '1970-01-01', 'sumbang', '5000', '0');
INSERT INTO `tb_kas_sosial` VALUES ('20', '1970-01-01', 'keluar', '0', '500000');

-- ----------------------------
-- Table structure for `tb_user`
-- ----------------------------
DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT 'default.jpg',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tb_user
-- ----------------------------
INSERT INTO `tb_user` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Adven Adam K', 'Laki-laki', '1959898 19 019090', 'admin', '');
INSERT INTO `tb_user` VALUES ('5', 'cobco', '21232f297a57a5a743894a0e4a801fc3', 'codcijan', 'Perempuan', '085954513', 'Admin', '');
INSERT INTO `tb_user` VALUES ('6', 'adven', 'a419ab944c8060a4a92c7a44991fab9e', 'asdada', 'Laki-laki', '12412124', 'Admin', '');
INSERT INTO `tb_user` VALUES ('7', 'coba', 'c3ec0f7b054e729c5a716c8125839829', 'cobain dong', 'Laki-laki', '08455455226', 'Admin', '');
INSERT INTO `tb_user` VALUES ('8', 'bambas', '21661093e56e24cd60b10092005c4ac7', 'bambang pamungkas', 'Laki-laki', '088592303', 'Admin', 'default.jpg');
