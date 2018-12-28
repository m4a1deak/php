/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 20170624

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-06-28 08:59:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `action`
-- ----------------------------
DROP TABLE IF EXISTS `action`;
CREATE TABLE `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT NULL,
  `lxx` varchar(50) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `jinee` varchar(50) DEFAULT NULL,
  `operationid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=268 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of action
-- ----------------------------

-- ----------------------------
-- Table structure for `aixinjijin`
-- ----------------------------
DROP TABLE IF EXISTS `aixinjijin`;
CREATE TABLE `aixinjijin` (
  `time` datetime DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `jine` decimal(10,2) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of aixinjijin
-- ----------------------------

-- ----------------------------
-- Table structure for `area`
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `areaid` int(11) NOT NULL,
  `area` varchar(20) CHARACTER SET gbk NOT NULL,
  `fatherid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3145 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('1', '110101', '东城区', '110100');
INSERT INTO `area` VALUES ('2', '110102', '西城区', '110100');
INSERT INTO `area` VALUES ('3', '110103', '崇文区', '110100');
INSERT INTO `area` VALUES ('4', '110104', '宣武区', '110100');
INSERT INTO `area` VALUES ('5', '110105', '朝阳区', '110100');
INSERT INTO `area` VALUES ('6', '110106', '丰台区', '110100');
INSERT INTO `area` VALUES ('7', '110107', '石景山区', '110100');
INSERT INTO `area` VALUES ('8', '110108', '海淀区', '110100');
INSERT INTO `area` VALUES ('9', '110109', '门头沟区', '110100');
INSERT INTO `area` VALUES ('10', '110111', '房山区', '110100');
INSERT INTO `area` VALUES ('11', '110112', '通州区', '110100');
INSERT INTO `area` VALUES ('12', '110113', '顺义区', '110100');
INSERT INTO `area` VALUES ('13', '110114', '昌平区', '110100');
INSERT INTO `area` VALUES ('14', '110115', '大兴区', '110100');
INSERT INTO `area` VALUES ('15', '110116', '怀柔区', '110100');
INSERT INTO `area` VALUES ('16', '110117', '平谷区', '110100');
INSERT INTO `area` VALUES ('17', '110228', '密云县', '110100');
INSERT INTO `area` VALUES ('18', '110229', '延庆县', '110100');
INSERT INTO `area` VALUES ('19', '120101', '和平区', '120100');
INSERT INTO `area` VALUES ('20', '120102', '河东区', '120100');
INSERT INTO `area` VALUES ('21', '120103', '河西区', '120100');
INSERT INTO `area` VALUES ('22', '120104', '南开区', '120100');
INSERT INTO `area` VALUES ('23', '120105', '河北区', '120100');
INSERT INTO `area` VALUES ('24', '120106', '红桥区', '120100');
INSERT INTO `area` VALUES ('25', '120107', '塘沽区', '120100');
INSERT INTO `area` VALUES ('26', '120108', '汉沽区', '120100');
INSERT INTO `area` VALUES ('27', '120109', '大港区', '120100');
INSERT INTO `area` VALUES ('28', '120110', '东丽区', '120100');
INSERT INTO `area` VALUES ('29', '120111', '西青区', '120100');
INSERT INTO `area` VALUES ('30', '120112', '津南区', '120100');
INSERT INTO `area` VALUES ('31', '120113', '北辰区', '120100');
INSERT INTO `area` VALUES ('32', '120114', '武清区', '120100');
INSERT INTO `area` VALUES ('33', '120115', '宝坻区', '120100');
INSERT INTO `area` VALUES ('34', '120221', '宁河县', '120100');
INSERT INTO `area` VALUES ('35', '120223', '静海县', '120100');
INSERT INTO `area` VALUES ('36', '120225', '蓟　县', '120100');
INSERT INTO `area` VALUES ('38', '130102', '长安区', '130100');
INSERT INTO `area` VALUES ('39', '130103', '桥东区', '130100');
INSERT INTO `area` VALUES ('40', '130104', '桥西区', '130100');
INSERT INTO `area` VALUES ('41', '130105', '新华区', '130100');
INSERT INTO `area` VALUES ('42', '130107', '井陉矿区', '130100');
INSERT INTO `area` VALUES ('43', '130108', '裕华区', '130100');
INSERT INTO `area` VALUES ('44', '130121', '井陉县', '130100');
INSERT INTO `area` VALUES ('45', '130123', '正定县', '130100');
INSERT INTO `area` VALUES ('46', '130124', '栾城县', '130100');
INSERT INTO `area` VALUES ('47', '130125', '行唐县', '130100');
INSERT INTO `area` VALUES ('48', '130126', '灵寿县', '130100');
INSERT INTO `area` VALUES ('49', '130127', '高邑县', '130100');
INSERT INTO `area` VALUES ('50', '130128', '深泽县', '130100');
INSERT INTO `area` VALUES ('51', '130129', '赞皇县', '130100');
INSERT INTO `area` VALUES ('52', '130130', '无极县', '130100');
INSERT INTO `area` VALUES ('53', '130131', '平山县', '130100');
INSERT INTO `area` VALUES ('54', '130132', '元氏县', '130100');
INSERT INTO `area` VALUES ('55', '130133', '赵　县', '130100');
INSERT INTO `area` VALUES ('56', '130181', '辛集市', '130100');
INSERT INTO `area` VALUES ('57', '130182', '藁城市', '130100');
INSERT INTO `area` VALUES ('58', '130183', '晋州市', '130100');
INSERT INTO `area` VALUES ('59', '130184', '新乐市', '130100');
INSERT INTO `area` VALUES ('60', '130185', '鹿泉市', '130100');
INSERT INTO `area` VALUES ('62', '130202', '路南区', '130200');
INSERT INTO `area` VALUES ('63', '130203', '路北区', '130200');
INSERT INTO `area` VALUES ('64', '130204', '古冶区', '130200');
INSERT INTO `area` VALUES ('65', '130205', '开平区', '130200');
INSERT INTO `area` VALUES ('66', '130207', '丰南区', '130200');
INSERT INTO `area` VALUES ('67', '130208', '丰润区', '130200');
INSERT INTO `area` VALUES ('68', '130223', '滦　县', '130200');
INSERT INTO `area` VALUES ('69', '130224', '滦南县', '130200');
INSERT INTO `area` VALUES ('70', '130225', '乐亭县', '130200');
INSERT INTO `area` VALUES ('71', '130227', '迁西县', '130200');
INSERT INTO `area` VALUES ('72', '130229', '玉田县', '130200');
INSERT INTO `area` VALUES ('73', '130230', '唐海县', '130200');
INSERT INTO `area` VALUES ('74', '130281', '遵化市', '130200');
INSERT INTO `area` VALUES ('75', '130283', '迁安市', '130200');
INSERT INTO `area` VALUES ('77', '130302', '海港区', '130300');
INSERT INTO `area` VALUES ('78', '130303', '山海关区', '130300');
INSERT INTO `area` VALUES ('79', '130304', '北戴河区', '130300');
INSERT INTO `area` VALUES ('80', '130321', '青龙满族自治县', '130300');
INSERT INTO `area` VALUES ('81', '130322', '昌黎县', '130300');
INSERT INTO `area` VALUES ('82', '130323', '抚宁县', '130300');
INSERT INTO `area` VALUES ('83', '130324', '卢龙县', '130300');
INSERT INTO `area` VALUES ('85', '130402', '邯山区', '130400');
INSERT INTO `area` VALUES ('86', '130403', '丛台区', '130400');
INSERT INTO `area` VALUES ('87', '130404', '复兴区', '130400');
INSERT INTO `area` VALUES ('88', '130406', '峰峰矿区', '130400');
INSERT INTO `area` VALUES ('89', '130421', '邯郸县', '130400');
INSERT INTO `area` VALUES ('90', '130423', '临漳县', '130400');
INSERT INTO `area` VALUES ('91', '130424', '成安县', '130400');
INSERT INTO `area` VALUES ('92', '130425', '大名县', '130400');
INSERT INTO `area` VALUES ('93', '130426', '涉　县', '130400');
INSERT INTO `area` VALUES ('94', '130427', '磁　县', '130400');
INSERT INTO `area` VALUES ('95', '130428', '肥乡县', '130400');
INSERT INTO `area` VALUES ('96', '130429', '永年县', '130400');
INSERT INTO `area` VALUES ('97', '130430', '邱　县', '130400');
INSERT INTO `area` VALUES ('98', '130431', '鸡泽县', '130400');
INSERT INTO `area` VALUES ('99', '130432', '广平县', '130400');
INSERT INTO `area` VALUES ('100', '130433', '馆陶县', '130400');
INSERT INTO `area` VALUES ('101', '130434', '魏　县', '130400');
INSERT INTO `area` VALUES ('102', '130435', '曲周县', '130400');
INSERT INTO `area` VALUES ('103', '130481', '武安市', '130400');
INSERT INTO `area` VALUES ('105', '130502', '桥东区', '130500');
INSERT INTO `area` VALUES ('106', '130503', '桥西区', '130500');
INSERT INTO `area` VALUES ('107', '130521', '邢台县', '130500');
INSERT INTO `area` VALUES ('108', '130522', '临城县', '130500');
INSERT INTO `area` VALUES ('109', '130523', '内丘县', '130500');
INSERT INTO `area` VALUES ('110', '130524', '柏乡县', '130500');
INSERT INTO `area` VALUES ('111', '130525', '隆尧县', '130500');
INSERT INTO `area` VALUES ('112', '130526', '任　县', '130500');
INSERT INTO `area` VALUES ('113', '130527', '南和县', '130500');
INSERT INTO `area` VALUES ('114', '130528', '宁晋县', '130500');
INSERT INTO `area` VALUES ('115', '130529', '巨鹿县', '130500');
INSERT INTO `area` VALUES ('116', '130530', '新河县', '130500');
INSERT INTO `area` VALUES ('117', '130531', '广宗县', '130500');
INSERT INTO `area` VALUES ('118', '130532', '平乡县', '130500');
INSERT INTO `area` VALUES ('119', '130533', '威　县', '130500');
INSERT INTO `area` VALUES ('120', '130534', '清河县', '130500');
INSERT INTO `area` VALUES ('121', '130535', '临西县', '130500');
INSERT INTO `area` VALUES ('122', '130581', '南宫市', '130500');
INSERT INTO `area` VALUES ('123', '130582', '沙河市', '130500');
INSERT INTO `area` VALUES ('125', '130602', '新市区', '130600');
INSERT INTO `area` VALUES ('126', '130603', '北市区', '130600');
INSERT INTO `area` VALUES ('127', '130604', '南市区', '130600');
INSERT INTO `area` VALUES ('128', '130621', '满城县', '130600');
INSERT INTO `area` VALUES ('129', '130622', '清苑县', '130600');
INSERT INTO `area` VALUES ('130', '130623', '涞水县', '130600');
INSERT INTO `area` VALUES ('131', '130624', '阜平县', '130600');
INSERT INTO `area` VALUES ('132', '130625', '徐水县', '130600');
INSERT INTO `area` VALUES ('133', '130626', '定兴县', '130600');
INSERT INTO `area` VALUES ('134', '130627', '唐　县', '130600');
INSERT INTO `area` VALUES ('135', '130628', '高阳县', '130600');
INSERT INTO `area` VALUES ('136', '130629', '容城县', '130600');
INSERT INTO `area` VALUES ('137', '130630', '涞源县', '130600');
INSERT INTO `area` VALUES ('138', '130631', '望都县', '130600');
INSERT INTO `area` VALUES ('139', '130632', '安新县', '130600');
INSERT INTO `area` VALUES ('140', '130633', '易　县', '130600');
INSERT INTO `area` VALUES ('141', '130634', '曲阳县', '130600');
INSERT INTO `area` VALUES ('142', '130635', '蠡　县', '130600');
INSERT INTO `area` VALUES ('143', '130636', '顺平县', '130600');
INSERT INTO `area` VALUES ('144', '130637', '博野县', '130600');
INSERT INTO `area` VALUES ('145', '130638', '雄　县', '130600');
INSERT INTO `area` VALUES ('146', '130681', '涿州市', '130600');
INSERT INTO `area` VALUES ('147', '130682', '定州市', '130600');
INSERT INTO `area` VALUES ('148', '130683', '安国市', '130600');
INSERT INTO `area` VALUES ('149', '130684', '高碑店市', '130600');
INSERT INTO `area` VALUES ('151', '130702', '桥东区', '130700');
INSERT INTO `area` VALUES ('152', '130703', '桥西区', '130700');
INSERT INTO `area` VALUES ('153', '130705', '宣化区', '130700');
INSERT INTO `area` VALUES ('154', '130706', '下花园区', '130700');
INSERT INTO `area` VALUES ('155', '130721', '宣化县', '130700');
INSERT INTO `area` VALUES ('156', '130722', '张北县', '130700');
INSERT INTO `area` VALUES ('157', '130723', '康保县', '130700');
INSERT INTO `area` VALUES ('158', '130724', '沽源县', '130700');
INSERT INTO `area` VALUES ('159', '130725', '尚义县', '130700');
INSERT INTO `area` VALUES ('160', '130726', '蔚　县', '130700');
INSERT INTO `area` VALUES ('161', '130727', '阳原县', '130700');
INSERT INTO `area` VALUES ('162', '130728', '怀安县', '130700');
INSERT INTO `area` VALUES ('163', '130729', '万全县', '130700');
INSERT INTO `area` VALUES ('164', '130730', '怀来县', '130700');
INSERT INTO `area` VALUES ('165', '130731', '涿鹿县', '130700');
INSERT INTO `area` VALUES ('166', '130732', '赤城县', '130700');
INSERT INTO `area` VALUES ('167', '130733', '崇礼县', '130700');
INSERT INTO `area` VALUES ('169', '130802', '双桥区', '130800');
INSERT INTO `area` VALUES ('170', '130803', '双滦区', '130800');
INSERT INTO `area` VALUES ('171', '130804', '鹰手营子矿区', '130800');
INSERT INTO `area` VALUES ('172', '130821', '承德县', '130800');
INSERT INTO `area` VALUES ('173', '130822', '兴隆县', '130800');
INSERT INTO `area` VALUES ('174', '130823', '平泉县', '130800');
INSERT INTO `area` VALUES ('175', '130824', '滦平县', '130800');
INSERT INTO `area` VALUES ('176', '130825', '隆化县', '130800');
INSERT INTO `area` VALUES ('177', '130826', '丰宁满族自治县', '130800');
INSERT INTO `area` VALUES ('178', '130827', '宽城满族自治县', '130800');
INSERT INTO `area` VALUES ('179', '130828', '围场满族蒙古族自治县', '130800');
INSERT INTO `area` VALUES ('181', '130902', '新华区', '130900');
INSERT INTO `area` VALUES ('182', '130903', '运河区', '130900');
INSERT INTO `area` VALUES ('183', '130921', '沧　县', '130900');
INSERT INTO `area` VALUES ('184', '130922', '青　县', '130900');
INSERT INTO `area` VALUES ('185', '130923', '东光县', '130900');
INSERT INTO `area` VALUES ('186', '130924', '海兴县', '130900');
INSERT INTO `area` VALUES ('187', '130925', '盐山县', '130900');
INSERT INTO `area` VALUES ('188', '130926', '肃宁县', '130900');
INSERT INTO `area` VALUES ('189', '130927', '南皮县', '130900');
INSERT INTO `area` VALUES ('190', '130928', '吴桥县', '130900');
INSERT INTO `area` VALUES ('191', '130929', '献　县', '130900');
INSERT INTO `area` VALUES ('192', '130930', '孟村回族自治县', '130900');
INSERT INTO `area` VALUES ('193', '130981', '泊头市', '130900');
INSERT INTO `area` VALUES ('194', '130982', '任丘市', '130900');
INSERT INTO `area` VALUES ('195', '130983', '黄骅市', '130900');
INSERT INTO `area` VALUES ('196', '130984', '河间市', '130900');
INSERT INTO `area` VALUES ('198', '131002', '安次区', '131000');
INSERT INTO `area` VALUES ('199', '131003', '广阳区', '131000');
INSERT INTO `area` VALUES ('200', '131022', '固安县', '131000');
INSERT INTO `area` VALUES ('201', '131023', '永清县', '131000');
INSERT INTO `area` VALUES ('202', '131024', '香河县', '131000');
INSERT INTO `area` VALUES ('203', '131025', '大城县', '131000');
INSERT INTO `area` VALUES ('204', '131026', '文安县', '131000');
INSERT INTO `area` VALUES ('205', '131028', '大厂回族自治县', '131000');
INSERT INTO `area` VALUES ('206', '131081', '霸州市', '131000');
INSERT INTO `area` VALUES ('207', '131082', '三河市', '131000');
INSERT INTO `area` VALUES ('209', '131102', '桃城区', '131100');
INSERT INTO `area` VALUES ('210', '131121', '枣强县', '131100');
INSERT INTO `area` VALUES ('211', '131122', '武邑县', '131100');
INSERT INTO `area` VALUES ('212', '131123', '武强县', '131100');
INSERT INTO `area` VALUES ('213', '131124', '饶阳县', '131100');
INSERT INTO `area` VALUES ('214', '131125', '安平县', '131100');
INSERT INTO `area` VALUES ('215', '131126', '故城县', '131100');
INSERT INTO `area` VALUES ('216', '131127', '景　县', '131100');
INSERT INTO `area` VALUES ('217', '131128', '阜城县', '131100');
INSERT INTO `area` VALUES ('218', '131181', '冀州市', '131100');
INSERT INTO `area` VALUES ('219', '131182', '深州市', '131100');
INSERT INTO `area` VALUES ('221', '140105', '小店区', '140100');
INSERT INTO `area` VALUES ('222', '140106', '迎泽区', '140100');
INSERT INTO `area` VALUES ('223', '140107', '杏花岭区', '140100');
INSERT INTO `area` VALUES ('224', '140108', '尖草坪区', '140100');
INSERT INTO `area` VALUES ('225', '140109', '万柏林区', '140100');
INSERT INTO `area` VALUES ('226', '140110', '晋源区', '140100');
INSERT INTO `area` VALUES ('227', '140121', '清徐县', '140100');
INSERT INTO `area` VALUES ('228', '140122', '阳曲县', '140100');
INSERT INTO `area` VALUES ('229', '140123', '娄烦县', '140100');
INSERT INTO `area` VALUES ('230', '140181', '古交市', '140100');
INSERT INTO `area` VALUES ('232', '140202', '城　区', '140200');
INSERT INTO `area` VALUES ('233', '140203', '矿　区', '140200');
INSERT INTO `area` VALUES ('234', '140211', '南郊区', '140200');
INSERT INTO `area` VALUES ('235', '140212', '新荣区', '140200');
INSERT INTO `area` VALUES ('236', '140221', '阳高县', '140200');
INSERT INTO `area` VALUES ('237', '140222', '天镇县', '140200');
INSERT INTO `area` VALUES ('238', '140223', '广灵县', '140200');
INSERT INTO `area` VALUES ('239', '140224', '灵丘县', '140200');
INSERT INTO `area` VALUES ('240', '140225', '浑源县', '140200');
INSERT INTO `area` VALUES ('241', '140226', '左云县', '140200');
INSERT INTO `area` VALUES ('242', '140227', '大同县', '140200');
INSERT INTO `area` VALUES ('244', '140302', '城　区', '140300');
INSERT INTO `area` VALUES ('245', '140303', '矿　区', '140300');
INSERT INTO `area` VALUES ('246', '140311', '郊　区', '140300');
INSERT INTO `area` VALUES ('247', '140321', '平定县', '140300');
INSERT INTO `area` VALUES ('248', '140322', '盂　县', '140300');
INSERT INTO `area` VALUES ('250', '140402', '城　区', '140400');
INSERT INTO `area` VALUES ('251', '140411', '郊　区', '140400');
INSERT INTO `area` VALUES ('252', '140421', '长治县', '140400');
INSERT INTO `area` VALUES ('253', '140423', '襄垣县', '140400');
INSERT INTO `area` VALUES ('254', '140424', '屯留县', '140400');
INSERT INTO `area` VALUES ('255', '140425', '平顺县', '140400');
INSERT INTO `area` VALUES ('256', '140426', '黎城县', '140400');
INSERT INTO `area` VALUES ('257', '140427', '壶关县', '140400');
INSERT INTO `area` VALUES ('258', '140428', '长子县', '140400');
INSERT INTO `area` VALUES ('259', '140429', '武乡县', '140400');
INSERT INTO `area` VALUES ('260', '140430', '沁　县', '140400');
INSERT INTO `area` VALUES ('261', '140431', '沁源县', '140400');
INSERT INTO `area` VALUES ('262', '140481', '潞城市', '140400');
INSERT INTO `area` VALUES ('264', '140502', '城　区', '140500');
INSERT INTO `area` VALUES ('265', '140521', '沁水县', '140500');
INSERT INTO `area` VALUES ('266', '140522', '阳城县', '140500');
INSERT INTO `area` VALUES ('267', '140524', '陵川县', '140500');
INSERT INTO `area` VALUES ('268', '140525', '泽州县', '140500');
INSERT INTO `area` VALUES ('269', '140581', '高平市', '140500');
INSERT INTO `area` VALUES ('271', '140602', '朔城区', '140600');
INSERT INTO `area` VALUES ('272', '140603', '平鲁区', '140600');
INSERT INTO `area` VALUES ('273', '140621', '山阴县', '140600');
INSERT INTO `area` VALUES ('274', '140622', '应　县', '140600');
INSERT INTO `area` VALUES ('275', '140623', '右玉县', '140600');
INSERT INTO `area` VALUES ('276', '140624', '怀仁县', '140600');
INSERT INTO `area` VALUES ('278', '140702', '榆次区', '140700');
INSERT INTO `area` VALUES ('279', '140721', '榆社县', '140700');
INSERT INTO `area` VALUES ('280', '140722', '左权县', '140700');
INSERT INTO `area` VALUES ('281', '140723', '和顺县', '140700');
INSERT INTO `area` VALUES ('282', '140724', '昔阳县', '140700');
INSERT INTO `area` VALUES ('283', '140725', '寿阳县', '140700');
INSERT INTO `area` VALUES ('284', '140726', '太谷县', '140700');
INSERT INTO `area` VALUES ('285', '140727', '祁　县', '140700');
INSERT INTO `area` VALUES ('286', '140728', '平遥县', '140700');
INSERT INTO `area` VALUES ('287', '140729', '灵石县', '140700');
INSERT INTO `area` VALUES ('288', '140781', '介休市', '140700');
INSERT INTO `area` VALUES ('290', '140802', '盐湖区', '140800');
INSERT INTO `area` VALUES ('291', '140821', '临猗县', '140800');
INSERT INTO `area` VALUES ('292', '140822', '万荣县', '140800');
INSERT INTO `area` VALUES ('293', '140823', '闻喜县', '140800');
INSERT INTO `area` VALUES ('294', '140824', '稷山县', '140800');
INSERT INTO `area` VALUES ('295', '140825', '新绛县', '140800');
INSERT INTO `area` VALUES ('296', '140826', '绛　县', '140800');
INSERT INTO `area` VALUES ('297', '140827', '垣曲县', '140800');
INSERT INTO `area` VALUES ('298', '140828', '夏　县', '140800');
INSERT INTO `area` VALUES ('299', '140829', '平陆县', '140800');
INSERT INTO `area` VALUES ('300', '140830', '芮城县', '140800');
INSERT INTO `area` VALUES ('301', '140881', '永济市', '140800');
INSERT INTO `area` VALUES ('302', '140882', '河津市', '140800');
INSERT INTO `area` VALUES ('304', '140902', '忻府区', '140900');
INSERT INTO `area` VALUES ('305', '140921', '定襄县', '140900');
INSERT INTO `area` VALUES ('306', '140922', '五台县', '140900');
INSERT INTO `area` VALUES ('307', '140923', '代　县', '140900');
INSERT INTO `area` VALUES ('308', '140924', '繁峙县', '140900');
INSERT INTO `area` VALUES ('309', '140925', '宁武县', '140900');
INSERT INTO `area` VALUES ('310', '140926', '静乐县', '140900');
INSERT INTO `area` VALUES ('311', '140927', '神池县', '140900');
INSERT INTO `area` VALUES ('312', '140928', '五寨县', '140900');
INSERT INTO `area` VALUES ('313', '140929', '岢岚县', '140900');
INSERT INTO `area` VALUES ('314', '140930', '河曲县', '140900');
INSERT INTO `area` VALUES ('315', '140931', '保德县', '140900');
INSERT INTO `area` VALUES ('316', '140932', '偏关县', '140900');
INSERT INTO `area` VALUES ('317', '140981', '原平市', '140900');
INSERT INTO `area` VALUES ('319', '141002', '尧都区', '141000');
INSERT INTO `area` VALUES ('320', '141021', '曲沃县', '141000');
INSERT INTO `area` VALUES ('321', '141022', '翼城县', '141000');
INSERT INTO `area` VALUES ('322', '141023', '襄汾县', '141000');
INSERT INTO `area` VALUES ('323', '141024', '洪洞县', '141000');
INSERT INTO `area` VALUES ('324', '141025', '古　县', '141000');
INSERT INTO `area` VALUES ('325', '141026', '安泽县', '141000');
INSERT INTO `area` VALUES ('326', '141027', '浮山县', '141000');
INSERT INTO `area` VALUES ('327', '141028', '吉　县', '141000');
INSERT INTO `area` VALUES ('328', '141029', '乡宁县', '141000');
INSERT INTO `area` VALUES ('329', '141030', '大宁县', '141000');
INSERT INTO `area` VALUES ('330', '141031', '隰　县', '141000');
INSERT INTO `area` VALUES ('331', '141032', '永和县', '141000');
INSERT INTO `area` VALUES ('332', '141033', '蒲　县', '141000');
INSERT INTO `area` VALUES ('333', '141034', '汾西县', '141000');
INSERT INTO `area` VALUES ('334', '141081', '侯马市', '141000');
INSERT INTO `area` VALUES ('335', '141082', '霍州市', '141000');
INSERT INTO `area` VALUES ('337', '141102', '离石区', '141100');
INSERT INTO `area` VALUES ('338', '141121', '文水县', '141100');
INSERT INTO `area` VALUES ('339', '141122', '交城县', '141100');
INSERT INTO `area` VALUES ('340', '141123', '兴　县', '141100');
INSERT INTO `area` VALUES ('341', '141124', '临　县', '141100');
INSERT INTO `area` VALUES ('342', '141125', '柳林县', '141100');
INSERT INTO `area` VALUES ('343', '141126', '石楼县', '141100');
INSERT INTO `area` VALUES ('344', '141127', '岚　县', '141100');
INSERT INTO `area` VALUES ('345', '141128', '方山县', '141100');
INSERT INTO `area` VALUES ('346', '141129', '中阳县', '141100');
INSERT INTO `area` VALUES ('347', '141130', '交口县', '141100');
INSERT INTO `area` VALUES ('348', '141181', '孝义市', '141100');
INSERT INTO `area` VALUES ('349', '141182', '汾阳市', '141100');
INSERT INTO `area` VALUES ('351', '150102', '新城区', '150100');
INSERT INTO `area` VALUES ('352', '150103', '回民区', '150100');
INSERT INTO `area` VALUES ('353', '150104', '玉泉区', '150100');
INSERT INTO `area` VALUES ('354', '150105', '赛罕区', '150100');
INSERT INTO `area` VALUES ('355', '150121', '土默特左旗', '150100');
INSERT INTO `area` VALUES ('356', '150122', '托克托县', '150100');
INSERT INTO `area` VALUES ('357', '150123', '和林格尔县', '150100');
INSERT INTO `area` VALUES ('358', '150124', '清水河县', '150100');
INSERT INTO `area` VALUES ('359', '150125', '武川县', '150100');
INSERT INTO `area` VALUES ('361', '150202', '东河区', '150200');
INSERT INTO `area` VALUES ('362', '150203', '昆都仑区', '150200');
INSERT INTO `area` VALUES ('363', '150204', '青山区', '150200');
INSERT INTO `area` VALUES ('364', '150205', '石拐区', '150200');
INSERT INTO `area` VALUES ('365', '150206', '白云矿区', '150200');
INSERT INTO `area` VALUES ('366', '150207', '九原区', '150200');
INSERT INTO `area` VALUES ('367', '150221', '土默特右旗', '150200');
INSERT INTO `area` VALUES ('368', '150222', '固阳县', '150200');
INSERT INTO `area` VALUES ('369', '150223', '达尔罕茂明安联合旗', '150200');
INSERT INTO `area` VALUES ('371', '150302', '海勃湾区', '150300');
INSERT INTO `area` VALUES ('372', '150303', '海南区', '150300');
INSERT INTO `area` VALUES ('373', '150304', '乌达区', '150300');
INSERT INTO `area` VALUES ('375', '150402', '红山区', '150400');
INSERT INTO `area` VALUES ('376', '150403', '元宝山区', '150400');
INSERT INTO `area` VALUES ('377', '150404', '松山区', '150400');
INSERT INTO `area` VALUES ('378', '150421', '阿鲁科尔沁旗', '150400');
INSERT INTO `area` VALUES ('379', '150422', '巴林左旗', '150400');
INSERT INTO `area` VALUES ('380', '150423', '巴林右旗', '150400');
INSERT INTO `area` VALUES ('381', '150424', '林西县', '150400');
INSERT INTO `area` VALUES ('382', '150425', '克什克腾旗', '150400');
INSERT INTO `area` VALUES ('383', '150426', '翁牛特旗', '150400');
INSERT INTO `area` VALUES ('384', '150428', '喀喇沁旗', '150400');
INSERT INTO `area` VALUES ('385', '150429', '宁城县', '150400');
INSERT INTO `area` VALUES ('386', '150430', '敖汉旗', '150400');
INSERT INTO `area` VALUES ('388', '150502', '科尔沁区', '150500');
INSERT INTO `area` VALUES ('389', '150521', '科尔沁左翼中旗', '150500');
INSERT INTO `area` VALUES ('390', '150522', '科尔沁左翼后旗', '150500');
INSERT INTO `area` VALUES ('391', '150523', '开鲁县', '150500');
INSERT INTO `area` VALUES ('392', '150524', '库伦旗', '150500');
INSERT INTO `area` VALUES ('393', '150525', '奈曼旗', '150500');
INSERT INTO `area` VALUES ('394', '150526', '扎鲁特旗', '150500');
INSERT INTO `area` VALUES ('395', '150581', '霍林郭勒市', '150500');
INSERT INTO `area` VALUES ('396', '150602', '东胜区', '150600');
INSERT INTO `area` VALUES ('397', '150621', '达拉特旗', '150600');
INSERT INTO `area` VALUES ('398', '150622', '准格尔旗', '150600');
INSERT INTO `area` VALUES ('399', '150623', '鄂托克前旗', '150600');
INSERT INTO `area` VALUES ('400', '150624', '鄂托克旗', '150600');
INSERT INTO `area` VALUES ('401', '150625', '杭锦旗', '150600');
INSERT INTO `area` VALUES ('402', '150626', '乌审旗', '150600');
INSERT INTO `area` VALUES ('403', '150627', '伊金霍洛旗', '150600');
INSERT INTO `area` VALUES ('405', '150702', '海拉尔区', '150700');
INSERT INTO `area` VALUES ('406', '150721', '阿荣旗', '150700');
INSERT INTO `area` VALUES ('407', '150722', '莫力达瓦达斡尔族自治旗', '150700');
INSERT INTO `area` VALUES ('408', '150723', '鄂伦春自治旗', '150700');
INSERT INTO `area` VALUES ('409', '150724', '鄂温克族自治旗', '150700');
INSERT INTO `area` VALUES ('410', '150725', '陈巴尔虎旗', '150700');
INSERT INTO `area` VALUES ('411', '150726', '新巴尔虎左旗', '150700');
INSERT INTO `area` VALUES ('412', '150727', '新巴尔虎右旗', '150700');
INSERT INTO `area` VALUES ('413', '150781', '满洲里市', '150700');
INSERT INTO `area` VALUES ('414', '150782', '牙克石市', '150700');
INSERT INTO `area` VALUES ('415', '150783', '扎兰屯市', '150700');
INSERT INTO `area` VALUES ('416', '150784', '额尔古纳市', '150700');
INSERT INTO `area` VALUES ('417', '150785', '根河市', '150700');
INSERT INTO `area` VALUES ('419', '150802', '临河区', '150800');
INSERT INTO `area` VALUES ('420', '150821', '五原县', '150800');
INSERT INTO `area` VALUES ('421', '150822', '磴口县', '150800');
INSERT INTO `area` VALUES ('422', '150823', '乌拉特前旗', '150800');
INSERT INTO `area` VALUES ('423', '150824', '乌拉特中旗', '150800');
INSERT INTO `area` VALUES ('424', '150825', '乌拉特后旗', '150800');
INSERT INTO `area` VALUES ('425', '150826', '杭锦后旗', '150800');
INSERT INTO `area` VALUES ('427', '150902', '集宁区', '150900');
INSERT INTO `area` VALUES ('428', '150921', '卓资县', '150900');
INSERT INTO `area` VALUES ('429', '150922', '化德县', '150900');
INSERT INTO `area` VALUES ('430', '150923', '商都县', '150900');
INSERT INTO `area` VALUES ('431', '150924', '兴和县', '150900');
INSERT INTO `area` VALUES ('432', '150925', '凉城县', '150900');
INSERT INTO `area` VALUES ('433', '150926', '察哈尔右翼前旗', '150900');
INSERT INTO `area` VALUES ('434', '150927', '察哈尔右翼中旗', '150900');
INSERT INTO `area` VALUES ('435', '150928', '察哈尔右翼后旗', '150900');
INSERT INTO `area` VALUES ('436', '150929', '四子王旗', '150900');
INSERT INTO `area` VALUES ('437', '150981', '丰镇市', '150900');
INSERT INTO `area` VALUES ('438', '152201', '乌兰浩特市', '152200');
INSERT INTO `area` VALUES ('439', '152202', '阿尔山市', '152200');
INSERT INTO `area` VALUES ('440', '152221', '科尔沁右翼前旗', '152200');
INSERT INTO `area` VALUES ('441', '152222', '科尔沁右翼中旗', '152200');
INSERT INTO `area` VALUES ('442', '152223', '扎赉特旗', '152200');
INSERT INTO `area` VALUES ('443', '152224', '突泉县', '152200');
INSERT INTO `area` VALUES ('444', '152501', '二连浩特市', '152500');
INSERT INTO `area` VALUES ('445', '152502', '锡林浩特市', '152500');
INSERT INTO `area` VALUES ('446', '152522', '阿巴嘎旗', '152500');
INSERT INTO `area` VALUES ('447', '152523', '苏尼特左旗', '152500');
INSERT INTO `area` VALUES ('448', '152524', '苏尼特右旗', '152500');
INSERT INTO `area` VALUES ('449', '152525', '东乌珠穆沁旗', '152500');
INSERT INTO `area` VALUES ('450', '152526', '西乌珠穆沁旗', '152500');
INSERT INTO `area` VALUES ('451', '152527', '太仆寺旗', '152500');
INSERT INTO `area` VALUES ('452', '152528', '镶黄旗', '152500');
INSERT INTO `area` VALUES ('453', '152529', '正镶白旗', '152500');
INSERT INTO `area` VALUES ('454', '152530', '正蓝旗', '152500');
INSERT INTO `area` VALUES ('455', '152531', '多伦县', '152500');
INSERT INTO `area` VALUES ('456', '152921', '阿拉善左旗', '152900');
INSERT INTO `area` VALUES ('457', '152922', '阿拉善右旗', '152900');
INSERT INTO `area` VALUES ('458', '152923', '额济纳旗', '152900');
INSERT INTO `area` VALUES ('460', '210102', '和平区', '210100');
INSERT INTO `area` VALUES ('461', '210103', '沈河区', '210100');
INSERT INTO `area` VALUES ('462', '210104', '大东区', '210100');
INSERT INTO `area` VALUES ('463', '210105', '皇姑区', '210100');
INSERT INTO `area` VALUES ('464', '210106', '铁西区', '210100');
INSERT INTO `area` VALUES ('465', '210111', '苏家屯区', '210100');
INSERT INTO `area` VALUES ('466', '210112', '东陵区', '210100');
INSERT INTO `area` VALUES ('467', '210113', '新城子区', '210100');
INSERT INTO `area` VALUES ('468', '210114', '于洪区', '210100');
INSERT INTO `area` VALUES ('469', '210122', '辽中县', '210100');
INSERT INTO `area` VALUES ('470', '210123', '康平县', '210100');
INSERT INTO `area` VALUES ('471', '210124', '法库县', '210100');
INSERT INTO `area` VALUES ('472', '210181', '新民市', '210100');
INSERT INTO `area` VALUES ('474', '210202', '中山区', '210200');
INSERT INTO `area` VALUES ('475', '210203', '西岗区', '210200');
INSERT INTO `area` VALUES ('476', '210204', '沙河口区', '210200');
INSERT INTO `area` VALUES ('477', '210211', '甘井子区', '210200');
INSERT INTO `area` VALUES ('478', '210212', '旅顺口区', '210200');
INSERT INTO `area` VALUES ('479', '210213', '金州区', '210200');
INSERT INTO `area` VALUES ('480', '210224', '长海县', '210200');
INSERT INTO `area` VALUES ('481', '210281', '瓦房店市', '210200');
INSERT INTO `area` VALUES ('482', '210282', '普兰店市', '210200');
INSERT INTO `area` VALUES ('483', '210283', '庄河市', '210200');
INSERT INTO `area` VALUES ('485', '210302', '铁东区', '210300');
INSERT INTO `area` VALUES ('486', '210303', '铁西区', '210300');
INSERT INTO `area` VALUES ('487', '210304', '立山区', '210300');
INSERT INTO `area` VALUES ('488', '210311', '千山区', '210300');
INSERT INTO `area` VALUES ('489', '210321', '台安县', '210300');
INSERT INTO `area` VALUES ('490', '210323', '岫岩满族自治县', '210300');
INSERT INTO `area` VALUES ('491', '210381', '海城市', '210300');
INSERT INTO `area` VALUES ('493', '210402', '新抚区', '210400');
INSERT INTO `area` VALUES ('494', '210403', '东洲区', '210400');
INSERT INTO `area` VALUES ('495', '210404', '望花区', '210400');
INSERT INTO `area` VALUES ('496', '210411', '顺城区', '210400');
INSERT INTO `area` VALUES ('497', '210421', '抚顺县', '210400');
INSERT INTO `area` VALUES ('498', '210422', '新宾满族自治县', '210400');
INSERT INTO `area` VALUES ('499', '210423', '清原满族自治县', '210400');
INSERT INTO `area` VALUES ('501', '210502', '平山区', '210500');
INSERT INTO `area` VALUES ('502', '210503', '溪湖区', '210500');
INSERT INTO `area` VALUES ('503', '210504', '明山区', '210500');
INSERT INTO `area` VALUES ('504', '210505', '南芬区', '210500');
INSERT INTO `area` VALUES ('505', '210521', '本溪满族自治县', '210500');
INSERT INTO `area` VALUES ('506', '210522', '桓仁满族自治县', '210500');
INSERT INTO `area` VALUES ('508', '210602', '元宝区', '210600');
INSERT INTO `area` VALUES ('509', '210603', '振兴区', '210600');
INSERT INTO `area` VALUES ('510', '210604', '振安区', '210600');
INSERT INTO `area` VALUES ('511', '210624', '宽甸满族自治县', '210600');
INSERT INTO `area` VALUES ('512', '210681', '东港市', '210600');
INSERT INTO `area` VALUES ('513', '210682', '凤城市', '210600');
INSERT INTO `area` VALUES ('515', '210702', '古塔区', '210700');
INSERT INTO `area` VALUES ('516', '210703', '凌河区', '210700');
INSERT INTO `area` VALUES ('517', '210711', '太和区', '210700');
INSERT INTO `area` VALUES ('518', '210726', '黑山县', '210700');
INSERT INTO `area` VALUES ('519', '210727', '义　县', '210700');
INSERT INTO `area` VALUES ('520', '210781', '凌海市', '210700');
INSERT INTO `area` VALUES ('521', '210782', '北宁市', '210700');
INSERT INTO `area` VALUES ('523', '210802', '站前区', '210800');
INSERT INTO `area` VALUES ('524', '210803', '西市区', '210800');
INSERT INTO `area` VALUES ('525', '210804', '鲅鱼圈区', '210800');
INSERT INTO `area` VALUES ('526', '210811', '老边区', '210800');
INSERT INTO `area` VALUES ('527', '210881', '盖州市', '210800');
INSERT INTO `area` VALUES ('528', '210882', '大石桥市', '210800');
INSERT INTO `area` VALUES ('530', '210902', '海州区', '210900');
INSERT INTO `area` VALUES ('531', '210903', '新邱区', '210900');
INSERT INTO `area` VALUES ('532', '210904', '太平区', '210900');
INSERT INTO `area` VALUES ('533', '210905', '清河门区', '210900');
INSERT INTO `area` VALUES ('534', '210911', '细河区', '210900');
INSERT INTO `area` VALUES ('535', '210921', '阜新蒙古族自治县', '210900');
INSERT INTO `area` VALUES ('536', '210922', '彰武县', '210900');
INSERT INTO `area` VALUES ('538', '211002', '白塔区', '211000');
INSERT INTO `area` VALUES ('539', '211003', '文圣区', '211000');
INSERT INTO `area` VALUES ('540', '211004', '宏伟区', '211000');
INSERT INTO `area` VALUES ('541', '211005', '弓长岭区', '211000');
INSERT INTO `area` VALUES ('542', '211011', '太子河区', '211000');
INSERT INTO `area` VALUES ('543', '211021', '辽阳县', '211000');
INSERT INTO `area` VALUES ('544', '211081', '灯塔市', '211000');
INSERT INTO `area` VALUES ('546', '211102', '双台子区', '211100');
INSERT INTO `area` VALUES ('547', '211103', '兴隆台区', '211100');
INSERT INTO `area` VALUES ('548', '211121', '大洼县', '211100');
INSERT INTO `area` VALUES ('549', '211122', '盘山县', '211100');
INSERT INTO `area` VALUES ('551', '211202', '银州区', '211200');
INSERT INTO `area` VALUES ('552', '211204', '清河区', '211200');
INSERT INTO `area` VALUES ('553', '211221', '铁岭县', '211200');
INSERT INTO `area` VALUES ('554', '211223', '西丰县', '211200');
INSERT INTO `area` VALUES ('555', '211224', '昌图县', '211200');
INSERT INTO `area` VALUES ('556', '211281', '调兵山市', '211200');
INSERT INTO `area` VALUES ('557', '211282', '开原市', '211200');
INSERT INTO `area` VALUES ('559', '211302', '双塔区', '211300');
INSERT INTO `area` VALUES ('560', '211303', '龙城区', '211300');
INSERT INTO `area` VALUES ('561', '211321', '朝阳县', '211300');
INSERT INTO `area` VALUES ('562', '211322', '建平县', '211300');
INSERT INTO `area` VALUES ('563', '211324', '喀喇沁左翼蒙古族自治县', '211300');
INSERT INTO `area` VALUES ('564', '211381', '北票市', '211300');
INSERT INTO `area` VALUES ('565', '211382', '凌源市', '211300');
INSERT INTO `area` VALUES ('567', '211402', '连山区', '211400');
INSERT INTO `area` VALUES ('568', '211403', '龙港区', '211400');
INSERT INTO `area` VALUES ('569', '211404', '南票区', '211400');
INSERT INTO `area` VALUES ('570', '211421', '绥中县', '211400');
INSERT INTO `area` VALUES ('571', '211422', '建昌县', '211400');
INSERT INTO `area` VALUES ('572', '211481', '兴城市', '211400');
INSERT INTO `area` VALUES ('574', '220102', '南关区', '220100');
INSERT INTO `area` VALUES ('575', '220103', '宽城区', '220100');
INSERT INTO `area` VALUES ('576', '220104', '朝阳区', '220100');
INSERT INTO `area` VALUES ('577', '220105', '二道区', '220100');
INSERT INTO `area` VALUES ('578', '220106', '绿园区', '220100');
INSERT INTO `area` VALUES ('579', '220112', '双阳区', '220100');
INSERT INTO `area` VALUES ('580', '220122', '农安县', '220100');
INSERT INTO `area` VALUES ('581', '220181', '九台市', '220100');
INSERT INTO `area` VALUES ('582', '220182', '榆树市', '220100');
INSERT INTO `area` VALUES ('583', '220183', '德惠市', '220100');
INSERT INTO `area` VALUES ('585', '220202', '昌邑区', '220200');
INSERT INTO `area` VALUES ('586', '220203', '龙潭区', '220200');
INSERT INTO `area` VALUES ('587', '220204', '船营区', '220200');
INSERT INTO `area` VALUES ('588', '220211', '丰满区', '220200');
INSERT INTO `area` VALUES ('589', '220221', '永吉县', '220200');
INSERT INTO `area` VALUES ('590', '220281', '蛟河市', '220200');
INSERT INTO `area` VALUES ('591', '220282', '桦甸市', '220200');
INSERT INTO `area` VALUES ('592', '220283', '舒兰市', '220200');
INSERT INTO `area` VALUES ('593', '220284', '磐石市', '220200');
INSERT INTO `area` VALUES ('595', '220302', '铁西区', '220300');
INSERT INTO `area` VALUES ('596', '220303', '铁东区', '220300');
INSERT INTO `area` VALUES ('597', '220322', '梨树县', '220300');
INSERT INTO `area` VALUES ('598', '220323', '伊通满族自治县', '220300');
INSERT INTO `area` VALUES ('599', '220381', '公主岭市', '220300');
INSERT INTO `area` VALUES ('600', '220382', '双辽市', '220300');
INSERT INTO `area` VALUES ('602', '220402', '龙山区', '220400');
INSERT INTO `area` VALUES ('603', '220403', '西安区', '220400');
INSERT INTO `area` VALUES ('604', '220421', '东丰县', '220400');
INSERT INTO `area` VALUES ('605', '220422', '东辽县', '220400');
INSERT INTO `area` VALUES ('607', '220502', '东昌区', '220500');
INSERT INTO `area` VALUES ('608', '220503', '二道江区', '220500');
INSERT INTO `area` VALUES ('609', '220521', '通化县', '220500');
INSERT INTO `area` VALUES ('610', '220523', '辉南县', '220500');
INSERT INTO `area` VALUES ('611', '220524', '柳河县', '220500');
INSERT INTO `area` VALUES ('612', '220581', '梅河口市', '220500');
INSERT INTO `area` VALUES ('613', '220582', '集安市', '220500');
INSERT INTO `area` VALUES ('615', '220602', '八道江区', '220600');
INSERT INTO `area` VALUES ('616', '220621', '抚松县', '220600');
INSERT INTO `area` VALUES ('617', '220622', '靖宇县', '220600');
INSERT INTO `area` VALUES ('618', '220623', '长白朝鲜族自治县', '220600');
INSERT INTO `area` VALUES ('619', '220625', '江源县', '220600');
INSERT INTO `area` VALUES ('620', '220681', '临江市', '220600');
INSERT INTO `area` VALUES ('622', '220702', '宁江区', '220700');
INSERT INTO `area` VALUES ('623', '220721', '前郭尔罗斯蒙古族自治县', '220700');
INSERT INTO `area` VALUES ('624', '220722', '长岭县', '220700');
INSERT INTO `area` VALUES ('625', '220723', '乾安县', '220700');
INSERT INTO `area` VALUES ('626', '220724', '扶余县', '220700');
INSERT INTO `area` VALUES ('628', '220802', '洮北区', '220800');
INSERT INTO `area` VALUES ('629', '220821', '镇赉县', '220800');
INSERT INTO `area` VALUES ('630', '220822', '通榆县', '220800');
INSERT INTO `area` VALUES ('631', '220881', '洮南市', '220800');
INSERT INTO `area` VALUES ('632', '220882', '大安市', '220800');
INSERT INTO `area` VALUES ('633', '222401', '延吉市', '222400');
INSERT INTO `area` VALUES ('634', '222402', '图们市', '222400');
INSERT INTO `area` VALUES ('635', '222403', '敦化市', '222400');
INSERT INTO `area` VALUES ('636', '222404', '珲春市', '222400');
INSERT INTO `area` VALUES ('637', '222405', '龙井市', '222400');
INSERT INTO `area` VALUES ('638', '222406', '和龙市', '222400');
INSERT INTO `area` VALUES ('639', '222424', '汪清县', '222400');
INSERT INTO `area` VALUES ('640', '222426', '安图县', '222400');
INSERT INTO `area` VALUES ('642', '230102', '道里区', '230100');
INSERT INTO `area` VALUES ('643', '230103', '南岗区', '230100');
INSERT INTO `area` VALUES ('644', '230104', '道外区', '230100');
INSERT INTO `area` VALUES ('645', '230106', '香坊区', '230100');
INSERT INTO `area` VALUES ('646', '230107', '动力区', '230100');
INSERT INTO `area` VALUES ('647', '230108', '平房区', '230100');
INSERT INTO `area` VALUES ('648', '230109', '松北区', '230100');
INSERT INTO `area` VALUES ('649', '230111', '呼兰区', '230100');
INSERT INTO `area` VALUES ('650', '230123', '依兰县', '230100');
INSERT INTO `area` VALUES ('651', '230124', '方正县', '230100');
INSERT INTO `area` VALUES ('652', '230125', '宾　县', '230100');
INSERT INTO `area` VALUES ('653', '230126', '巴彦县', '230100');
INSERT INTO `area` VALUES ('654', '230127', '木兰县', '230100');
INSERT INTO `area` VALUES ('655', '230128', '通河县', '230100');
INSERT INTO `area` VALUES ('656', '230129', '延寿县', '230100');
INSERT INTO `area` VALUES ('657', '230181', '阿城市', '230100');
INSERT INTO `area` VALUES ('658', '230182', '双城市', '230100');
INSERT INTO `area` VALUES ('659', '230183', '尚志市', '230100');
INSERT INTO `area` VALUES ('660', '230184', '五常市', '230100');
INSERT INTO `area` VALUES ('662', '230202', '龙沙区', '230200');
INSERT INTO `area` VALUES ('663', '230203', '建华区', '230200');
INSERT INTO `area` VALUES ('664', '230204', '铁锋区', '230200');
INSERT INTO `area` VALUES ('665', '230205', '昂昂溪区', '230200');
INSERT INTO `area` VALUES ('666', '230206', '富拉尔基区', '230200');
INSERT INTO `area` VALUES ('667', '230207', '碾子山区', '230200');
INSERT INTO `area` VALUES ('668', '230208', '梅里斯达斡尔族区', '230200');
INSERT INTO `area` VALUES ('669', '230221', '龙江县', '230200');
INSERT INTO `area` VALUES ('670', '230223', '依安县', '230200');
INSERT INTO `area` VALUES ('671', '230224', '泰来县', '230200');
INSERT INTO `area` VALUES ('672', '230225', '甘南县', '230200');
INSERT INTO `area` VALUES ('673', '230227', '富裕县', '230200');
INSERT INTO `area` VALUES ('674', '230229', '克山县', '230200');
INSERT INTO `area` VALUES ('675', '230230', '克东县', '230200');
INSERT INTO `area` VALUES ('676', '230231', '拜泉县', '230200');
INSERT INTO `area` VALUES ('677', '230281', '讷河市', '230200');
INSERT INTO `area` VALUES ('679', '230302', '鸡冠区', '230300');
INSERT INTO `area` VALUES ('680', '230303', '恒山区', '230300');
INSERT INTO `area` VALUES ('681', '230304', '滴道区', '230300');
INSERT INTO `area` VALUES ('682', '230305', '梨树区', '230300');
INSERT INTO `area` VALUES ('683', '230306', '城子河区', '230300');
INSERT INTO `area` VALUES ('684', '230307', '麻山区', '230300');
INSERT INTO `area` VALUES ('685', '230321', '鸡东县', '230300');
INSERT INTO `area` VALUES ('686', '230381', '虎林市', '230300');
INSERT INTO `area` VALUES ('687', '230382', '密山市', '230300');
INSERT INTO `area` VALUES ('689', '230402', '向阳区', '230400');
INSERT INTO `area` VALUES ('690', '230403', '工农区', '230400');
INSERT INTO `area` VALUES ('691', '230404', '南山区', '230400');
INSERT INTO `area` VALUES ('692', '230405', '兴安区', '230400');
INSERT INTO `area` VALUES ('693', '230406', '东山区', '230400');
INSERT INTO `area` VALUES ('694', '230407', '兴山区', '230400');
INSERT INTO `area` VALUES ('695', '230421', '萝北县', '230400');
INSERT INTO `area` VALUES ('696', '230422', '绥滨县', '230400');
INSERT INTO `area` VALUES ('698', '230502', '尖山区', '230500');
INSERT INTO `area` VALUES ('699', '230503', '岭东区', '230500');
INSERT INTO `area` VALUES ('700', '230505', '四方台区', '230500');
INSERT INTO `area` VALUES ('701', '230506', '宝山区', '230500');
INSERT INTO `area` VALUES ('702', '230521', '集贤县', '230500');
INSERT INTO `area` VALUES ('703', '230522', '友谊县', '230500');
INSERT INTO `area` VALUES ('704', '230523', '宝清县', '230500');
INSERT INTO `area` VALUES ('705', '230524', '饶河县', '230500');
INSERT INTO `area` VALUES ('707', '230602', '萨尔图区', '230600');
INSERT INTO `area` VALUES ('708', '230603', '龙凤区', '230600');
INSERT INTO `area` VALUES ('709', '230604', '让胡路区', '230600');
INSERT INTO `area` VALUES ('710', '230605', '红岗区', '230600');
INSERT INTO `area` VALUES ('711', '230606', '大同区', '230600');
INSERT INTO `area` VALUES ('712', '230621', '肇州县', '230600');
INSERT INTO `area` VALUES ('713', '230622', '肇源县', '230600');
INSERT INTO `area` VALUES ('714', '230623', '林甸县', '230600');
INSERT INTO `area` VALUES ('715', '230624', '杜尔伯特蒙古族自治县', '230600');
INSERT INTO `area` VALUES ('717', '230702', '伊春区', '230700');
INSERT INTO `area` VALUES ('718', '230703', '南岔区', '230700');
INSERT INTO `area` VALUES ('719', '230704', '友好区', '230700');
INSERT INTO `area` VALUES ('720', '230705', '西林区', '230700');
INSERT INTO `area` VALUES ('721', '230706', '翠峦区', '230700');
INSERT INTO `area` VALUES ('722', '230707', '新青区', '230700');
INSERT INTO `area` VALUES ('723', '230708', '美溪区', '230700');
INSERT INTO `area` VALUES ('724', '230709', '金山屯区', '230700');
INSERT INTO `area` VALUES ('725', '230710', '五营区', '230700');
INSERT INTO `area` VALUES ('726', '230711', '乌马河区', '230700');
INSERT INTO `area` VALUES ('727', '230712', '汤旺河区', '230700');
INSERT INTO `area` VALUES ('728', '230713', '带岭区', '230700');
INSERT INTO `area` VALUES ('729', '230714', '乌伊岭区', '230700');
INSERT INTO `area` VALUES ('730', '230715', '红星区', '230700');
INSERT INTO `area` VALUES ('731', '230716', '上甘岭区', '230700');
INSERT INTO `area` VALUES ('732', '230722', '嘉荫县', '230700');
INSERT INTO `area` VALUES ('733', '230781', '铁力市', '230700');
INSERT INTO `area` VALUES ('735', '230802', '永红区', '230800');
INSERT INTO `area` VALUES ('736', '230803', '向阳区', '230800');
INSERT INTO `area` VALUES ('737', '230804', '前进区', '230800');
INSERT INTO `area` VALUES ('738', '230805', '东风区', '230800');
INSERT INTO `area` VALUES ('739', '230811', '郊　区', '230800');
INSERT INTO `area` VALUES ('740', '230822', '桦南县', '230800');
INSERT INTO `area` VALUES ('741', '230826', '桦川县', '230800');
INSERT INTO `area` VALUES ('742', '230828', '汤原县', '230800');
INSERT INTO `area` VALUES ('743', '230833', '抚远县', '230800');
INSERT INTO `area` VALUES ('744', '230881', '同江市', '230800');
INSERT INTO `area` VALUES ('745', '230882', '富锦市', '230800');
INSERT INTO `area` VALUES ('747', '230902', '新兴区', '230900');
INSERT INTO `area` VALUES ('748', '230903', '桃山区', '230900');
INSERT INTO `area` VALUES ('749', '230904', '茄子河区', '230900');
INSERT INTO `area` VALUES ('750', '230921', '勃利县', '230900');
INSERT INTO `area` VALUES ('752', '231002', '东安区', '231000');
INSERT INTO `area` VALUES ('753', '231003', '阳明区', '231000');
INSERT INTO `area` VALUES ('754', '231004', '爱民区', '231000');
INSERT INTO `area` VALUES ('755', '231005', '西安区', '231000');
INSERT INTO `area` VALUES ('756', '231024', '东宁县', '231000');
INSERT INTO `area` VALUES ('757', '231025', '林口县', '231000');
INSERT INTO `area` VALUES ('758', '231081', '绥芬河市', '231000');
INSERT INTO `area` VALUES ('759', '231083', '海林市', '231000');
INSERT INTO `area` VALUES ('760', '231084', '宁安市', '231000');
INSERT INTO `area` VALUES ('761', '231085', '穆棱市', '231000');
INSERT INTO `area` VALUES ('763', '231102', '爱辉区', '231100');
INSERT INTO `area` VALUES ('764', '231121', '嫩江县', '231100');
INSERT INTO `area` VALUES ('765', '231123', '逊克县', '231100');
INSERT INTO `area` VALUES ('766', '231124', '孙吴县', '231100');
INSERT INTO `area` VALUES ('767', '231181', '北安市', '231100');
INSERT INTO `area` VALUES ('768', '231182', '五大连池市', '231100');
INSERT INTO `area` VALUES ('770', '231202', '北林区', '231200');
INSERT INTO `area` VALUES ('771', '231221', '望奎县', '231200');
INSERT INTO `area` VALUES ('772', '231222', '兰西县', '231200');
INSERT INTO `area` VALUES ('773', '231223', '青冈县', '231200');
INSERT INTO `area` VALUES ('774', '231224', '庆安县', '231200');
INSERT INTO `area` VALUES ('775', '231225', '明水县', '231200');
INSERT INTO `area` VALUES ('776', '231226', '绥棱县', '231200');
INSERT INTO `area` VALUES ('777', '231281', '安达市', '231200');
INSERT INTO `area` VALUES ('778', '231282', '肇东市', '231200');
INSERT INTO `area` VALUES ('779', '231283', '海伦市', '231200');
INSERT INTO `area` VALUES ('780', '232721', '呼玛县', '232700');
INSERT INTO `area` VALUES ('781', '232722', '塔河县', '232700');
INSERT INTO `area` VALUES ('782', '232723', '漠河县', '232700');
INSERT INTO `area` VALUES ('783', '310101', '黄浦区', '310100');
INSERT INTO `area` VALUES ('784', '310103', '卢湾区', '310100');
INSERT INTO `area` VALUES ('785', '310104', '徐汇区', '310100');
INSERT INTO `area` VALUES ('786', '310105', '长宁区', '310100');
INSERT INTO `area` VALUES ('787', '310106', '静安区', '310100');
INSERT INTO `area` VALUES ('788', '310107', '普陀区', '310100');
INSERT INTO `area` VALUES ('789', '310108', '闸北区', '310100');
INSERT INTO `area` VALUES ('790', '310109', '虹口区', '310100');
INSERT INTO `area` VALUES ('791', '310110', '杨浦区', '310100');
INSERT INTO `area` VALUES ('792', '310112', '闵行区', '310100');
INSERT INTO `area` VALUES ('793', '310113', '宝山区', '310100');
INSERT INTO `area` VALUES ('794', '310114', '嘉定区', '310100');
INSERT INTO `area` VALUES ('795', '310115', '浦东新区', '310100');
INSERT INTO `area` VALUES ('796', '310116', '金山区', '310100');
INSERT INTO `area` VALUES ('797', '310117', '松江区', '310100');
INSERT INTO `area` VALUES ('798', '310118', '青浦区', '310100');
INSERT INTO `area` VALUES ('799', '310119', '南汇区', '310100');
INSERT INTO `area` VALUES ('800', '310120', '奉贤区', '310100');
INSERT INTO `area` VALUES ('801', '310230', '崇明县', '310100');
INSERT INTO `area` VALUES ('803', '320102', '玄武区', '320100');
INSERT INTO `area` VALUES ('804', '320103', '白下区', '320100');
INSERT INTO `area` VALUES ('805', '320104', '秦淮区', '320100');
INSERT INTO `area` VALUES ('806', '320105', '建邺区', '320100');
INSERT INTO `area` VALUES ('807', '320106', '鼓楼区', '320100');
INSERT INTO `area` VALUES ('808', '320107', '下关区', '320100');
INSERT INTO `area` VALUES ('809', '320111', '浦口区', '320100');
INSERT INTO `area` VALUES ('810', '320113', '栖霞区', '320100');
INSERT INTO `area` VALUES ('811', '320114', '雨花台区', '320100');
INSERT INTO `area` VALUES ('812', '320115', '江宁区', '320100');
INSERT INTO `area` VALUES ('813', '320116', '六合区', '320100');
INSERT INTO `area` VALUES ('814', '320124', '溧水县', '320100');
INSERT INTO `area` VALUES ('815', '320125', '高淳县', '320100');
INSERT INTO `area` VALUES ('817', '320202', '崇安区', '320200');
INSERT INTO `area` VALUES ('818', '320203', '南长区', '320200');
INSERT INTO `area` VALUES ('819', '320204', '北塘区', '320200');
INSERT INTO `area` VALUES ('820', '320205', '锡山区', '320200');
INSERT INTO `area` VALUES ('821', '320206', '惠山区', '320200');
INSERT INTO `area` VALUES ('822', '320211', '滨湖区', '320200');
INSERT INTO `area` VALUES ('823', '320281', '江阴市', '320200');
INSERT INTO `area` VALUES ('824', '320282', '宜兴市', '320200');
INSERT INTO `area` VALUES ('826', '320302', '鼓楼区', '320300');
INSERT INTO `area` VALUES ('827', '320303', '云龙区', '320300');
INSERT INTO `area` VALUES ('828', '320304', '九里区', '320300');
INSERT INTO `area` VALUES ('829', '320305', '贾汪区', '320300');
INSERT INTO `area` VALUES ('830', '320311', '泉山区', '320300');
INSERT INTO `area` VALUES ('831', '320321', '丰　县', '320300');
INSERT INTO `area` VALUES ('832', '320322', '沛　县', '320300');
INSERT INTO `area` VALUES ('833', '320323', '铜山县', '320300');
INSERT INTO `area` VALUES ('834', '320324', '睢宁县', '320300');
INSERT INTO `area` VALUES ('835', '320381', '新沂市', '320300');
INSERT INTO `area` VALUES ('836', '320382', '邳州市', '320300');
INSERT INTO `area` VALUES ('838', '320402', '天宁区', '320400');
INSERT INTO `area` VALUES ('839', '320404', '钟楼区', '320400');
INSERT INTO `area` VALUES ('840', '320405', '戚墅堰区', '320400');
INSERT INTO `area` VALUES ('841', '320411', '新北区', '320400');
INSERT INTO `area` VALUES ('842', '320412', '武进区', '320400');
INSERT INTO `area` VALUES ('843', '320481', '溧阳市', '320400');
INSERT INTO `area` VALUES ('844', '320482', '金坛市', '320400');
INSERT INTO `area` VALUES ('846', '320502', '沧浪区', '320500');
INSERT INTO `area` VALUES ('847', '320503', '平江区', '320500');
INSERT INTO `area` VALUES ('848', '320504', '金阊区', '320500');
INSERT INTO `area` VALUES ('849', '320505', '虎丘区', '320500');
INSERT INTO `area` VALUES ('850', '320506', '吴中区', '320500');
INSERT INTO `area` VALUES ('851', '320507', '相城区', '320500');
INSERT INTO `area` VALUES ('852', '320581', '常熟市', '320500');
INSERT INTO `area` VALUES ('853', '320582', '张家港市', '320500');
INSERT INTO `area` VALUES ('854', '320583', '昆山市', '320500');
INSERT INTO `area` VALUES ('855', '320584', '吴江市', '320500');
INSERT INTO `area` VALUES ('856', '320585', '太仓市', '320500');
INSERT INTO `area` VALUES ('858', '320602', '崇川区', '320600');
INSERT INTO `area` VALUES ('859', '320611', '港闸区', '320600');
INSERT INTO `area` VALUES ('860', '320621', '海安县', '320600');
INSERT INTO `area` VALUES ('861', '320623', '如东县', '320600');
INSERT INTO `area` VALUES ('862', '320681', '启东市', '320600');
INSERT INTO `area` VALUES ('863', '320682', '如皋市', '320600');
INSERT INTO `area` VALUES ('864', '320683', '通州市', '320600');
INSERT INTO `area` VALUES ('865', '320684', '海门市', '320600');
INSERT INTO `area` VALUES ('867', '320703', '连云区', '320700');
INSERT INTO `area` VALUES ('868', '320705', '新浦区', '320700');
INSERT INTO `area` VALUES ('869', '320706', '海州区', '320700');
INSERT INTO `area` VALUES ('870', '320721', '赣榆县', '320700');
INSERT INTO `area` VALUES ('871', '320722', '东海县', '320700');
INSERT INTO `area` VALUES ('872', '320723', '灌云县', '320700');
INSERT INTO `area` VALUES ('873', '320724', '灌南县', '320700');
INSERT INTO `area` VALUES ('875', '320802', '清河区', '320800');
INSERT INTO `area` VALUES ('876', '320803', '楚州区', '320800');
INSERT INTO `area` VALUES ('877', '320804', '淮阴区', '320800');
INSERT INTO `area` VALUES ('878', '320811', '清浦区', '320800');
INSERT INTO `area` VALUES ('879', '320826', '涟水县', '320800');
INSERT INTO `area` VALUES ('880', '320829', '洪泽县', '320800');
INSERT INTO `area` VALUES ('881', '320830', '盱眙县', '320800');
INSERT INTO `area` VALUES ('882', '320831', '金湖县', '320800');
INSERT INTO `area` VALUES ('884', '320902', '亭湖区', '320900');
INSERT INTO `area` VALUES ('885', '320903', '盐都区', '320900');
INSERT INTO `area` VALUES ('886', '320921', '响水县', '320900');
INSERT INTO `area` VALUES ('887', '320922', '滨海县', '320900');
INSERT INTO `area` VALUES ('888', '320923', '阜宁县', '320900');
INSERT INTO `area` VALUES ('889', '320924', '射阳县', '320900');
INSERT INTO `area` VALUES ('890', '320925', '建湖县', '320900');
INSERT INTO `area` VALUES ('891', '320981', '东台市', '320900');
INSERT INTO `area` VALUES ('892', '320982', '大丰市', '320900');
INSERT INTO `area` VALUES ('894', '321002', '广陵区', '321000');
INSERT INTO `area` VALUES ('895', '321003', '邗江区', '321000');
INSERT INTO `area` VALUES ('896', '321011', '郊　区', '321000');
INSERT INTO `area` VALUES ('897', '321023', '宝应县', '321000');
INSERT INTO `area` VALUES ('898', '321081', '仪征市', '321000');
INSERT INTO `area` VALUES ('899', '321084', '高邮市', '321000');
INSERT INTO `area` VALUES ('900', '321088', '江都市', '321000');
INSERT INTO `area` VALUES ('902', '321102', '京口区', '321100');
INSERT INTO `area` VALUES ('903', '321111', '润州区', '321100');
INSERT INTO `area` VALUES ('904', '321112', '丹徒区', '321100');
INSERT INTO `area` VALUES ('905', '321181', '丹阳市', '321100');
INSERT INTO `area` VALUES ('906', '321182', '扬中市', '321100');
INSERT INTO `area` VALUES ('907', '321183', '句容市', '321100');
INSERT INTO `area` VALUES ('909', '321202', '海陵区', '321200');
INSERT INTO `area` VALUES ('910', '321203', '高港区', '321200');
INSERT INTO `area` VALUES ('911', '321281', '兴化市', '321200');
INSERT INTO `area` VALUES ('912', '321282', '靖江市', '321200');
INSERT INTO `area` VALUES ('913', '321283', '泰兴市', '321200');
INSERT INTO `area` VALUES ('914', '321284', '姜堰市', '321200');
INSERT INTO `area` VALUES ('916', '321302', '宿城区', '321300');
INSERT INTO `area` VALUES ('917', '321311', '宿豫区', '321300');
INSERT INTO `area` VALUES ('918', '321322', '沭阳县', '321300');
INSERT INTO `area` VALUES ('919', '321323', '泗阳县', '321300');
INSERT INTO `area` VALUES ('920', '321324', '泗洪县', '321300');
INSERT INTO `area` VALUES ('922', '330102', '上城区', '330100');
INSERT INTO `area` VALUES ('923', '330103', '下城区', '330100');
INSERT INTO `area` VALUES ('924', '330104', '江干区', '330100');
INSERT INTO `area` VALUES ('925', '330105', '拱墅区', '330100');
INSERT INTO `area` VALUES ('926', '330106', '西湖区', '330100');
INSERT INTO `area` VALUES ('927', '330108', '滨江区', '330100');
INSERT INTO `area` VALUES ('928', '330109', '萧山区', '330100');
INSERT INTO `area` VALUES ('929', '330110', '余杭区', '330100');
INSERT INTO `area` VALUES ('930', '330122', '桐庐县', '330100');
INSERT INTO `area` VALUES ('931', '330127', '淳安县', '330100');
INSERT INTO `area` VALUES ('932', '330182', '建德市', '330100');
INSERT INTO `area` VALUES ('933', '330183', '富阳市', '330100');
INSERT INTO `area` VALUES ('934', '330185', '临安市', '330100');
INSERT INTO `area` VALUES ('936', '330203', '海曙区', '330200');
INSERT INTO `area` VALUES ('937', '330204', '江东区', '330200');
INSERT INTO `area` VALUES ('938', '330205', '江北区', '330200');
INSERT INTO `area` VALUES ('939', '330206', '北仑区', '330200');
INSERT INTO `area` VALUES ('940', '330211', '镇海区', '330200');
INSERT INTO `area` VALUES ('941', '330212', '鄞州区', '330200');
INSERT INTO `area` VALUES ('942', '330225', '象山县', '330200');
INSERT INTO `area` VALUES ('943', '330226', '宁海县', '330200');
INSERT INTO `area` VALUES ('944', '330281', '余姚市', '330200');
INSERT INTO `area` VALUES ('945', '330282', '慈溪市', '330200');
INSERT INTO `area` VALUES ('946', '330283', '奉化市', '330200');
INSERT INTO `area` VALUES ('948', '330302', '鹿城区', '330300');
INSERT INTO `area` VALUES ('949', '330303', '龙湾区', '330300');
INSERT INTO `area` VALUES ('950', '330304', '瓯海区', '330300');
INSERT INTO `area` VALUES ('951', '330322', '洞头县', '330300');
INSERT INTO `area` VALUES ('952', '330324', '永嘉县', '330300');
INSERT INTO `area` VALUES ('953', '330326', '平阳县', '330300');
INSERT INTO `area` VALUES ('954', '330327', '苍南县', '330300');
INSERT INTO `area` VALUES ('955', '330328', '文成县', '330300');
INSERT INTO `area` VALUES ('956', '330329', '泰顺县', '330300');
INSERT INTO `area` VALUES ('957', '330381', '瑞安市', '330300');
INSERT INTO `area` VALUES ('958', '330382', '乐清市', '330300');
INSERT INTO `area` VALUES ('960', '330402', '秀城区', '330400');
INSERT INTO `area` VALUES ('961', '330411', '秀洲区', '330400');
INSERT INTO `area` VALUES ('962', '330421', '嘉善县', '330400');
INSERT INTO `area` VALUES ('963', '330424', '海盐县', '330400');
INSERT INTO `area` VALUES ('964', '330481', '海宁市', '330400');
INSERT INTO `area` VALUES ('965', '330482', '平湖市', '330400');
INSERT INTO `area` VALUES ('966', '330483', '桐乡市', '330400');
INSERT INTO `area` VALUES ('968', '330502', '吴兴区', '330500');
INSERT INTO `area` VALUES ('969', '330503', '南浔区', '330500');
INSERT INTO `area` VALUES ('970', '330521', '德清县', '330500');
INSERT INTO `area` VALUES ('971', '330522', '长兴县', '330500');
INSERT INTO `area` VALUES ('972', '330523', '安吉县', '330500');
INSERT INTO `area` VALUES ('974', '330602', '越城区', '330600');
INSERT INTO `area` VALUES ('975', '330621', '绍兴县', '330600');
INSERT INTO `area` VALUES ('976', '330624', '新昌县', '330600');
INSERT INTO `area` VALUES ('977', '330681', '诸暨市', '330600');
INSERT INTO `area` VALUES ('978', '330682', '上虞市', '330600');
INSERT INTO `area` VALUES ('979', '330683', '嵊州市', '330600');
INSERT INTO `area` VALUES ('981', '330702', '婺城区', '330700');
INSERT INTO `area` VALUES ('982', '330703', '金东区', '330700');
INSERT INTO `area` VALUES ('983', '330723', '武义县', '330700');
INSERT INTO `area` VALUES ('984', '330726', '浦江县', '330700');
INSERT INTO `area` VALUES ('985', '330727', '磐安县', '330700');
INSERT INTO `area` VALUES ('986', '330781', '兰溪市', '330700');
INSERT INTO `area` VALUES ('987', '330782', '义乌市', '330700');
INSERT INTO `area` VALUES ('988', '330783', '东阳市', '330700');
INSERT INTO `area` VALUES ('989', '330784', '永康市', '330700');
INSERT INTO `area` VALUES ('991', '330802', '柯城区', '330800');
INSERT INTO `area` VALUES ('992', '330803', '衢江区', '330800');
INSERT INTO `area` VALUES ('993', '330822', '常山县', '330800');
INSERT INTO `area` VALUES ('994', '330824', '开化县', '330800');
INSERT INTO `area` VALUES ('995', '330825', '龙游县', '330800');
INSERT INTO `area` VALUES ('996', '330881', '江山市', '330800');
INSERT INTO `area` VALUES ('998', '330902', '定海区', '330900');
INSERT INTO `area` VALUES ('999', '330903', '普陀区', '330900');
INSERT INTO `area` VALUES ('1000', '330921', '岱山县', '330900');
INSERT INTO `area` VALUES ('1001', '330922', '嵊泗县', '330900');
INSERT INTO `area` VALUES ('1003', '331002', '椒江区', '331000');
INSERT INTO `area` VALUES ('1004', '331003', '黄岩区', '331000');
INSERT INTO `area` VALUES ('1005', '331004', '路桥区', '331000');
INSERT INTO `area` VALUES ('1006', '331021', '玉环县', '331000');
INSERT INTO `area` VALUES ('1007', '331022', '三门县', '331000');
INSERT INTO `area` VALUES ('1008', '331023', '天台县', '331000');
INSERT INTO `area` VALUES ('1009', '331024', '仙居县', '331000');
INSERT INTO `area` VALUES ('1010', '331081', '温岭市', '331000');
INSERT INTO `area` VALUES ('1011', '331082', '临海市', '331000');
INSERT INTO `area` VALUES ('1013', '331102', '莲都区', '331100');
INSERT INTO `area` VALUES ('1014', '331121', '青田县', '331100');
INSERT INTO `area` VALUES ('1015', '331122', '缙云县', '331100');
INSERT INTO `area` VALUES ('1016', '331123', '遂昌县', '331100');
INSERT INTO `area` VALUES ('1017', '331124', '松阳县', '331100');
INSERT INTO `area` VALUES ('1018', '331125', '云和县', '331100');
INSERT INTO `area` VALUES ('1019', '331126', '庆元县', '331100');
INSERT INTO `area` VALUES ('1020', '331127', '景宁畲族自治县', '331100');
INSERT INTO `area` VALUES ('1021', '331181', '龙泉市', '331100');
INSERT INTO `area` VALUES ('1023', '340102', '瑶海区', '340100');
INSERT INTO `area` VALUES ('1024', '340103', '庐阳区', '340100');
INSERT INTO `area` VALUES ('1025', '340104', '蜀山区', '340100');
INSERT INTO `area` VALUES ('1026', '340111', '包河区', '340100');
INSERT INTO `area` VALUES ('1027', '340121', '长丰县', '340100');
INSERT INTO `area` VALUES ('1028', '340122', '肥东县', '340100');
INSERT INTO `area` VALUES ('1029', '340123', '肥西县', '340100');
INSERT INTO `area` VALUES ('1031', '340202', '镜湖区', '340200');
INSERT INTO `area` VALUES ('1032', '340203', '马塘区', '340200');
INSERT INTO `area` VALUES ('1033', '340204', '新芜区', '340200');
INSERT INTO `area` VALUES ('1034', '340207', '鸠江区', '340200');
INSERT INTO `area` VALUES ('1035', '340221', '芜湖县', '340200');
INSERT INTO `area` VALUES ('1036', '340222', '繁昌县', '340200');
INSERT INTO `area` VALUES ('1037', '340223', '南陵县', '340200');
INSERT INTO `area` VALUES ('1039', '340302', '龙子湖区', '340300');
INSERT INTO `area` VALUES ('1040', '340303', '蚌山区', '340300');
INSERT INTO `area` VALUES ('1041', '340304', '禹会区', '340300');
INSERT INTO `area` VALUES ('1042', '340311', '淮上区', '340300');
INSERT INTO `area` VALUES ('1043', '340321', '怀远县', '340300');
INSERT INTO `area` VALUES ('1044', '340322', '五河县', '340300');
INSERT INTO `area` VALUES ('1045', '340323', '固镇县', '340300');
INSERT INTO `area` VALUES ('1047', '340402', '大通区', '340400');
INSERT INTO `area` VALUES ('1048', '340403', '田家庵区', '340400');
INSERT INTO `area` VALUES ('1049', '340404', '谢家集区', '340400');
INSERT INTO `area` VALUES ('1050', '340405', '八公山区', '340400');
INSERT INTO `area` VALUES ('1051', '340406', '潘集区', '340400');
INSERT INTO `area` VALUES ('1052', '340421', '凤台县', '340400');
INSERT INTO `area` VALUES ('1054', '340502', '金家庄区', '340500');
INSERT INTO `area` VALUES ('1055', '340503', '花山区', '340500');
INSERT INTO `area` VALUES ('1056', '340504', '雨山区', '340500');
INSERT INTO `area` VALUES ('1057', '340521', '当涂县', '340500');
INSERT INTO `area` VALUES ('1059', '340602', '杜集区', '340600');
INSERT INTO `area` VALUES ('1060', '340603', '相山区', '340600');
INSERT INTO `area` VALUES ('1061', '340604', '烈山区', '340600');
INSERT INTO `area` VALUES ('1062', '340621', '濉溪县', '340600');
INSERT INTO `area` VALUES ('1064', '340702', '铜官山区', '340700');
INSERT INTO `area` VALUES ('1065', '340703', '狮子山区', '340700');
INSERT INTO `area` VALUES ('1066', '340711', '郊　区', '340700');
INSERT INTO `area` VALUES ('1067', '340721', '铜陵县', '340700');
INSERT INTO `area` VALUES ('1069', '340802', '迎江区', '340800');
INSERT INTO `area` VALUES ('1070', '340803', '大观区', '340800');
INSERT INTO `area` VALUES ('1071', '340811', '郊　区', '340800');
INSERT INTO `area` VALUES ('1072', '340822', '怀宁县', '340800');
INSERT INTO `area` VALUES ('1073', '340823', '枞阳县', '340800');
INSERT INTO `area` VALUES ('1074', '340824', '潜山县', '340800');
INSERT INTO `area` VALUES ('1075', '340825', '太湖县', '340800');
INSERT INTO `area` VALUES ('1076', '340826', '宿松县', '340800');
INSERT INTO `area` VALUES ('1077', '340827', '望江县', '340800');
INSERT INTO `area` VALUES ('1078', '340828', '岳西县', '340800');
INSERT INTO `area` VALUES ('1079', '340881', '桐城市', '340800');
INSERT INTO `area` VALUES ('1081', '341002', '屯溪区', '341000');
INSERT INTO `area` VALUES ('1082', '341003', '黄山区', '341000');
INSERT INTO `area` VALUES ('1083', '341004', '徽州区', '341000');
INSERT INTO `area` VALUES ('1084', '341021', '歙　县', '341000');
INSERT INTO `area` VALUES ('1085', '341022', '休宁县', '341000');
INSERT INTO `area` VALUES ('1086', '341023', '黟　县', '341000');
INSERT INTO `area` VALUES ('1087', '341024', '祁门县', '341000');
INSERT INTO `area` VALUES ('1089', '341102', '琅琊区', '341100');
INSERT INTO `area` VALUES ('1090', '341103', '南谯区', '341100');
INSERT INTO `area` VALUES ('1091', '341122', '来安县', '341100');
INSERT INTO `area` VALUES ('1092', '341124', '全椒县', '341100');
INSERT INTO `area` VALUES ('1093', '341125', '定远县', '341100');
INSERT INTO `area` VALUES ('1094', '341126', '凤阳县', '341100');
INSERT INTO `area` VALUES ('1095', '341181', '天长市', '341100');
INSERT INTO `area` VALUES ('1096', '341182', '明光市', '341100');
INSERT INTO `area` VALUES ('1098', '341202', '颍州区', '341200');
INSERT INTO `area` VALUES ('1099', '341203', '颍东区', '341200');
INSERT INTO `area` VALUES ('1100', '341204', '颍泉区', '341200');
INSERT INTO `area` VALUES ('1101', '341221', '临泉县', '341200');
INSERT INTO `area` VALUES ('1102', '341222', '太和县', '341200');
INSERT INTO `area` VALUES ('1103', '341225', '阜南县', '341200');
INSERT INTO `area` VALUES ('1104', '341226', '颍上县', '341200');
INSERT INTO `area` VALUES ('1105', '341282', '界首市', '341200');
INSERT INTO `area` VALUES ('1107', '341302', '墉桥区', '341300');
INSERT INTO `area` VALUES ('1108', '341321', '砀山县', '341300');
INSERT INTO `area` VALUES ('1109', '341322', '萧　县', '341300');
INSERT INTO `area` VALUES ('1110', '341323', '灵璧县', '341300');
INSERT INTO `area` VALUES ('1111', '341324', '泗　县', '341300');
INSERT INTO `area` VALUES ('1113', '341402', '居巢区', '341400');
INSERT INTO `area` VALUES ('1114', '341421', '庐江县', '341400');
INSERT INTO `area` VALUES ('1115', '341422', '无为县', '341400');
INSERT INTO `area` VALUES ('1116', '341423', '含山县', '341400');
INSERT INTO `area` VALUES ('1117', '341424', '和　县', '341400');
INSERT INTO `area` VALUES ('1119', '341502', '金安区', '341500');
INSERT INTO `area` VALUES ('1120', '341503', '裕安区', '341500');
INSERT INTO `area` VALUES ('1121', '341521', '寿　县', '341500');
INSERT INTO `area` VALUES ('1122', '341522', '霍邱县', '341500');
INSERT INTO `area` VALUES ('1123', '341523', '舒城县', '341500');
INSERT INTO `area` VALUES ('1124', '341524', '金寨县', '341500');
INSERT INTO `area` VALUES ('1125', '341525', '霍山县', '341500');
INSERT INTO `area` VALUES ('1127', '341602', '谯城区', '341600');
INSERT INTO `area` VALUES ('1128', '341621', '涡阳县', '341600');
INSERT INTO `area` VALUES ('1129', '341622', '蒙城县', '341600');
INSERT INTO `area` VALUES ('1130', '341623', '利辛县', '341600');
INSERT INTO `area` VALUES ('1132', '341702', '贵池区', '341700');
INSERT INTO `area` VALUES ('1133', '341721', '东至县', '341700');
INSERT INTO `area` VALUES ('1134', '341722', '石台县', '341700');
INSERT INTO `area` VALUES ('1135', '341723', '青阳县', '341700');
INSERT INTO `area` VALUES ('1137', '341802', '宣州区', '341800');
INSERT INTO `area` VALUES ('1138', '341821', '郎溪县', '341800');
INSERT INTO `area` VALUES ('1139', '341822', '广德县', '341800');
INSERT INTO `area` VALUES ('1140', '341823', '泾　县', '341800');
INSERT INTO `area` VALUES ('1141', '341824', '绩溪县', '341800');
INSERT INTO `area` VALUES ('1142', '341825', '旌德县', '341800');
INSERT INTO `area` VALUES ('1143', '341881', '宁国市', '341800');
INSERT INTO `area` VALUES ('1145', '350102', '鼓楼区', '350100');
INSERT INTO `area` VALUES ('1146', '350103', '台江区', '350100');
INSERT INTO `area` VALUES ('1147', '350104', '仓山区', '350100');
INSERT INTO `area` VALUES ('1148', '350105', '马尾区', '350100');
INSERT INTO `area` VALUES ('1149', '350111', '晋安区', '350100');
INSERT INTO `area` VALUES ('1150', '350121', '闽侯县', '350100');
INSERT INTO `area` VALUES ('1151', '350122', '连江县', '350100');
INSERT INTO `area` VALUES ('1152', '350123', '罗源县', '350100');
INSERT INTO `area` VALUES ('1153', '350124', '闽清县', '350100');
INSERT INTO `area` VALUES ('1154', '350125', '永泰县', '350100');
INSERT INTO `area` VALUES ('1155', '350128', '平潭县', '350100');
INSERT INTO `area` VALUES ('1156', '350181', '福清市', '350100');
INSERT INTO `area` VALUES ('1157', '350182', '长乐市', '350100');
INSERT INTO `area` VALUES ('1159', '350203', '思明区', '350200');
INSERT INTO `area` VALUES ('1160', '350205', '海沧区', '350200');
INSERT INTO `area` VALUES ('1161', '350206', '湖里区', '350200');
INSERT INTO `area` VALUES ('1162', '350211', '集美区', '350200');
INSERT INTO `area` VALUES ('1163', '350212', '同安区', '350200');
INSERT INTO `area` VALUES ('1164', '350213', '翔安区', '350200');
INSERT INTO `area` VALUES ('1166', '350302', '城厢区', '350300');
INSERT INTO `area` VALUES ('1167', '350303', '涵江区', '350300');
INSERT INTO `area` VALUES ('1168', '350304', '荔城区', '350300');
INSERT INTO `area` VALUES ('1169', '350305', '秀屿区', '350300');
INSERT INTO `area` VALUES ('1170', '350322', '仙游县', '350300');
INSERT INTO `area` VALUES ('1172', '350402', '梅列区', '350400');
INSERT INTO `area` VALUES ('1173', '350403', '三元区', '350400');
INSERT INTO `area` VALUES ('1174', '350421', '明溪县', '350400');
INSERT INTO `area` VALUES ('1175', '350423', '清流县', '350400');
INSERT INTO `area` VALUES ('1176', '350424', '宁化县', '350400');
INSERT INTO `area` VALUES ('1177', '350425', '大田县', '350400');
INSERT INTO `area` VALUES ('1178', '350426', '尤溪县', '350400');
INSERT INTO `area` VALUES ('1179', '350427', '沙　县', '350400');
INSERT INTO `area` VALUES ('1180', '350428', '将乐县', '350400');
INSERT INTO `area` VALUES ('1181', '350429', '泰宁县', '350400');
INSERT INTO `area` VALUES ('1182', '350430', '建宁县', '350400');
INSERT INTO `area` VALUES ('1183', '350481', '永安市', '350400');
INSERT INTO `area` VALUES ('1185', '350502', '鲤城区', '350500');
INSERT INTO `area` VALUES ('1186', '350503', '丰泽区', '350500');
INSERT INTO `area` VALUES ('1187', '350504', '洛江区', '350500');
INSERT INTO `area` VALUES ('1188', '350505', '泉港区', '350500');
INSERT INTO `area` VALUES ('1189', '350521', '惠安县', '350500');
INSERT INTO `area` VALUES ('1190', '350524', '安溪县', '350500');
INSERT INTO `area` VALUES ('1191', '350525', '永春县', '350500');
INSERT INTO `area` VALUES ('1192', '350526', '德化县', '350500');
INSERT INTO `area` VALUES ('1193', '350527', '金门县', '350500');
INSERT INTO `area` VALUES ('1194', '350581', '石狮市', '350500');
INSERT INTO `area` VALUES ('1195', '350582', '晋江市', '350500');
INSERT INTO `area` VALUES ('1196', '350583', '南安市', '350500');
INSERT INTO `area` VALUES ('1198', '350602', '芗城区', '350600');
INSERT INTO `area` VALUES ('1199', '350603', '龙文区', '350600');
INSERT INTO `area` VALUES ('1200', '350622', '云霄县', '350600');
INSERT INTO `area` VALUES ('1201', '350623', '漳浦县', '350600');
INSERT INTO `area` VALUES ('1202', '350624', '诏安县', '350600');
INSERT INTO `area` VALUES ('1203', '350625', '长泰县', '350600');
INSERT INTO `area` VALUES ('1204', '350626', '东山县', '350600');
INSERT INTO `area` VALUES ('1205', '350627', '南靖县', '350600');
INSERT INTO `area` VALUES ('1206', '350628', '平和县', '350600');
INSERT INTO `area` VALUES ('1207', '350629', '华安县', '350600');
INSERT INTO `area` VALUES ('1208', '350681', '龙海市', '350600');
INSERT INTO `area` VALUES ('1210', '350702', '延平区', '350700');
INSERT INTO `area` VALUES ('1211', '350721', '顺昌县', '350700');
INSERT INTO `area` VALUES ('1212', '350722', '浦城县', '350700');
INSERT INTO `area` VALUES ('1213', '350723', '光泽县', '350700');
INSERT INTO `area` VALUES ('1214', '350724', '松溪县', '350700');
INSERT INTO `area` VALUES ('1215', '350725', '政和县', '350700');
INSERT INTO `area` VALUES ('1216', '350781', '邵武市', '350700');
INSERT INTO `area` VALUES ('1217', '350782', '武夷山市', '350700');
INSERT INTO `area` VALUES ('1218', '350783', '建瓯市', '350700');
INSERT INTO `area` VALUES ('1219', '350784', '建阳市', '350700');
INSERT INTO `area` VALUES ('1221', '350802', '新罗区', '350800');
INSERT INTO `area` VALUES ('1222', '350821', '长汀县', '350800');
INSERT INTO `area` VALUES ('1223', '350822', '永定县', '350800');
INSERT INTO `area` VALUES ('1224', '350823', '上杭县', '350800');
INSERT INTO `area` VALUES ('1225', '350824', '武平县', '350800');
INSERT INTO `area` VALUES ('1226', '350825', '连城县', '350800');
INSERT INTO `area` VALUES ('1227', '350881', '漳平市', '350800');
INSERT INTO `area` VALUES ('1229', '350902', '蕉城区', '350900');
INSERT INTO `area` VALUES ('1230', '350921', '霞浦县', '350900');
INSERT INTO `area` VALUES ('1231', '350922', '古田县', '350900');
INSERT INTO `area` VALUES ('1232', '350923', '屏南县', '350900');
INSERT INTO `area` VALUES ('1233', '350924', '寿宁县', '350900');
INSERT INTO `area` VALUES ('1234', '350925', '周宁县', '350900');
INSERT INTO `area` VALUES ('1235', '350926', '柘荣县', '350900');
INSERT INTO `area` VALUES ('1236', '350981', '福安市', '350900');
INSERT INTO `area` VALUES ('1237', '350982', '福鼎市', '350900');
INSERT INTO `area` VALUES ('1239', '360102', '东湖区', '360100');
INSERT INTO `area` VALUES ('1240', '360103', '西湖区', '360100');
INSERT INTO `area` VALUES ('1241', '360104', '青云谱区', '360100');
INSERT INTO `area` VALUES ('1242', '360105', '湾里区', '360100');
INSERT INTO `area` VALUES ('1243', '360111', '青山湖区', '360100');
INSERT INTO `area` VALUES ('1244', '360121', '南昌县', '360100');
INSERT INTO `area` VALUES ('1245', '360122', '新建县', '360100');
INSERT INTO `area` VALUES ('1246', '360123', '安义县', '360100');
INSERT INTO `area` VALUES ('1247', '360124', '进贤县', '360100');
INSERT INTO `area` VALUES ('1249', '360202', '昌江区', '360200');
INSERT INTO `area` VALUES ('1250', '360203', '珠山区', '360200');
INSERT INTO `area` VALUES ('1251', '360222', '浮梁县', '360200');
INSERT INTO `area` VALUES ('1252', '360281', '乐平市', '360200');
INSERT INTO `area` VALUES ('1254', '360302', '安源区', '360300');
INSERT INTO `area` VALUES ('1255', '360313', '湘东区', '360300');
INSERT INTO `area` VALUES ('1256', '360321', '莲花县', '360300');
INSERT INTO `area` VALUES ('1257', '360322', '上栗县', '360300');
INSERT INTO `area` VALUES ('1258', '360323', '芦溪县', '360300');
INSERT INTO `area` VALUES ('1260', '360402', '庐山区', '360400');
INSERT INTO `area` VALUES ('1261', '360403', '浔阳区', '360400');
INSERT INTO `area` VALUES ('1262', '360421', '九江县', '360400');
INSERT INTO `area` VALUES ('1263', '360423', '武宁县', '360400');
INSERT INTO `area` VALUES ('1264', '360424', '修水县', '360400');
INSERT INTO `area` VALUES ('1265', '360425', '永修县', '360400');
INSERT INTO `area` VALUES ('1266', '360426', '德安县', '360400');
INSERT INTO `area` VALUES ('1267', '360427', '星子县', '360400');
INSERT INTO `area` VALUES ('1268', '360428', '都昌县', '360400');
INSERT INTO `area` VALUES ('1269', '360429', '湖口县', '360400');
INSERT INTO `area` VALUES ('1270', '360430', '彭泽县', '360400');
INSERT INTO `area` VALUES ('1271', '360481', '瑞昌市', '360400');
INSERT INTO `area` VALUES ('1273', '360502', '渝水区', '360500');
INSERT INTO `area` VALUES ('1274', '360521', '分宜县', '360500');
INSERT INTO `area` VALUES ('1276', '360602', '月湖区', '360600');
INSERT INTO `area` VALUES ('1277', '360622', '余江县', '360600');
INSERT INTO `area` VALUES ('1278', '360681', '贵溪市', '360600');
INSERT INTO `area` VALUES ('1280', '360702', '章贡区', '360700');
INSERT INTO `area` VALUES ('1281', '360721', '赣　县', '360700');
INSERT INTO `area` VALUES ('1282', '360722', '信丰县', '360700');
INSERT INTO `area` VALUES ('1283', '360723', '大余县', '360700');
INSERT INTO `area` VALUES ('1284', '360724', '上犹县', '360700');
INSERT INTO `area` VALUES ('1285', '360725', '崇义县', '360700');
INSERT INTO `area` VALUES ('1286', '360726', '安远县', '360700');
INSERT INTO `area` VALUES ('1287', '360727', '龙南县', '360700');
INSERT INTO `area` VALUES ('1288', '360728', '定南县', '360700');
INSERT INTO `area` VALUES ('1289', '360729', '全南县', '360700');
INSERT INTO `area` VALUES ('1290', '360730', '宁都县', '360700');
INSERT INTO `area` VALUES ('1291', '360731', '于都县', '360700');
INSERT INTO `area` VALUES ('1292', '360732', '兴国县', '360700');
INSERT INTO `area` VALUES ('1293', '360733', '会昌县', '360700');
INSERT INTO `area` VALUES ('1294', '360734', '寻乌县', '360700');
INSERT INTO `area` VALUES ('1295', '360735', '石城县', '360700');
INSERT INTO `area` VALUES ('1296', '360781', '瑞金市', '360700');
INSERT INTO `area` VALUES ('1297', '360782', '南康市', '360700');
INSERT INTO `area` VALUES ('1299', '360802', '吉州区', '360800');
INSERT INTO `area` VALUES ('1300', '360803', '青原区', '360800');
INSERT INTO `area` VALUES ('1301', '360821', '吉安县', '360800');
INSERT INTO `area` VALUES ('1302', '360822', '吉水县', '360800');
INSERT INTO `area` VALUES ('1303', '360823', '峡江县', '360800');
INSERT INTO `area` VALUES ('1304', '360824', '新干县', '360800');
INSERT INTO `area` VALUES ('1305', '360825', '永丰县', '360800');
INSERT INTO `area` VALUES ('1306', '360826', '泰和县', '360800');
INSERT INTO `area` VALUES ('1307', '360827', '遂川县', '360800');
INSERT INTO `area` VALUES ('1308', '360828', '万安县', '360800');
INSERT INTO `area` VALUES ('1309', '360829', '安福县', '360800');
INSERT INTO `area` VALUES ('1310', '360830', '永新县', '360800');
INSERT INTO `area` VALUES ('1311', '360881', '井冈山市', '360800');
INSERT INTO `area` VALUES ('1313', '360902', '袁州区', '360900');
INSERT INTO `area` VALUES ('1314', '360921', '奉新县', '360900');
INSERT INTO `area` VALUES ('1315', '360922', '万载县', '360900');
INSERT INTO `area` VALUES ('1316', '360923', '上高县', '360900');
INSERT INTO `area` VALUES ('1317', '360924', '宜丰县', '360900');
INSERT INTO `area` VALUES ('1318', '360925', '靖安县', '360900');
INSERT INTO `area` VALUES ('1319', '360926', '铜鼓县', '360900');
INSERT INTO `area` VALUES ('1320', '360981', '丰城市', '360900');
INSERT INTO `area` VALUES ('1321', '360982', '樟树市', '360900');
INSERT INTO `area` VALUES ('1322', '360983', '高安市', '360900');
INSERT INTO `area` VALUES ('1324', '361002', '临川区', '361000');
INSERT INTO `area` VALUES ('1325', '361021', '南城县', '361000');
INSERT INTO `area` VALUES ('1326', '361022', '黎川县', '361000');
INSERT INTO `area` VALUES ('1327', '361023', '南丰县', '361000');
INSERT INTO `area` VALUES ('1328', '361024', '崇仁县', '361000');
INSERT INTO `area` VALUES ('1329', '361025', '乐安县', '361000');
INSERT INTO `area` VALUES ('1330', '361026', '宜黄县', '361000');
INSERT INTO `area` VALUES ('1331', '361027', '金溪县', '361000');
INSERT INTO `area` VALUES ('1332', '361028', '资溪县', '361000');
INSERT INTO `area` VALUES ('1333', '361029', '东乡县', '361000');
INSERT INTO `area` VALUES ('1334', '361030', '广昌县', '361000');
INSERT INTO `area` VALUES ('1336', '361102', '信州区', '361100');
INSERT INTO `area` VALUES ('1337', '361121', '上饶县', '361100');
INSERT INTO `area` VALUES ('1338', '361122', '广丰县', '361100');
INSERT INTO `area` VALUES ('1339', '361123', '玉山县', '361100');
INSERT INTO `area` VALUES ('1340', '361124', '铅山县', '361100');
INSERT INTO `area` VALUES ('1341', '361125', '横峰县', '361100');
INSERT INTO `area` VALUES ('1342', '361126', '弋阳县', '361100');
INSERT INTO `area` VALUES ('1343', '361127', '余干县', '361100');
INSERT INTO `area` VALUES ('1344', '361128', '鄱阳县', '361100');
INSERT INTO `area` VALUES ('1345', '361129', '万年县', '361100');
INSERT INTO `area` VALUES ('1346', '361130', '婺源县', '361100');
INSERT INTO `area` VALUES ('1347', '361181', '德兴市', '361100');
INSERT INTO `area` VALUES ('1349', '370102', '历下区', '370100');
INSERT INTO `area` VALUES ('1350', '370103', '市中区', '370100');
INSERT INTO `area` VALUES ('1351', '370104', '槐荫区', '370100');
INSERT INTO `area` VALUES ('1352', '370105', '天桥区', '370100');
INSERT INTO `area` VALUES ('1353', '370112', '历城区', '370100');
INSERT INTO `area` VALUES ('1354', '370113', '长清区', '370100');
INSERT INTO `area` VALUES ('1355', '370124', '平阴县', '370100');
INSERT INTO `area` VALUES ('1356', '370125', '济阳县', '370100');
INSERT INTO `area` VALUES ('1357', '370126', '商河县', '370100');
INSERT INTO `area` VALUES ('1358', '370181', '章丘市', '370100');
INSERT INTO `area` VALUES ('1360', '370202', '市南区', '370200');
INSERT INTO `area` VALUES ('1361', '370203', '市北区', '370200');
INSERT INTO `area` VALUES ('1362', '370205', '四方区', '370200');
INSERT INTO `area` VALUES ('1363', '370211', '黄岛区', '370200');
INSERT INTO `area` VALUES ('1364', '370212', '崂山区', '370200');
INSERT INTO `area` VALUES ('1365', '370213', '李沧区', '370200');
INSERT INTO `area` VALUES ('1366', '370214', '城阳区', '370200');
INSERT INTO `area` VALUES ('1367', '370281', '胶州市', '370200');
INSERT INTO `area` VALUES ('1368', '370282', '即墨市', '370200');
INSERT INTO `area` VALUES ('1369', '370283', '平度市', '370200');
INSERT INTO `area` VALUES ('1370', '370284', '胶南市', '370200');
INSERT INTO `area` VALUES ('1371', '370285', '莱西市', '370200');
INSERT INTO `area` VALUES ('1373', '370302', '淄川区', '370300');
INSERT INTO `area` VALUES ('1374', '370303', '张店区', '370300');
INSERT INTO `area` VALUES ('1375', '370304', '博山区', '370300');
INSERT INTO `area` VALUES ('1376', '370305', '临淄区', '370300');
INSERT INTO `area` VALUES ('1377', '370306', '周村区', '370300');
INSERT INTO `area` VALUES ('1378', '370321', '桓台县', '370300');
INSERT INTO `area` VALUES ('1379', '370322', '高青县', '370300');
INSERT INTO `area` VALUES ('1380', '370323', '沂源县', '370300');
INSERT INTO `area` VALUES ('1382', '370402', '市中区', '370400');
INSERT INTO `area` VALUES ('1383', '370403', '薛城区', '370400');
INSERT INTO `area` VALUES ('1384', '370404', '峄城区', '370400');
INSERT INTO `area` VALUES ('1385', '370405', '台儿庄区', '370400');
INSERT INTO `area` VALUES ('1386', '370406', '山亭区', '370400');
INSERT INTO `area` VALUES ('1387', '370481', '滕州市', '370400');
INSERT INTO `area` VALUES ('1389', '370502', '东营区', '370500');
INSERT INTO `area` VALUES ('1390', '370503', '河口区', '370500');
INSERT INTO `area` VALUES ('1391', '370521', '垦利县', '370500');
INSERT INTO `area` VALUES ('1392', '370522', '利津县', '370500');
INSERT INTO `area` VALUES ('1393', '370523', '广饶县', '370500');
INSERT INTO `area` VALUES ('1395', '370602', '芝罘区', '370600');
INSERT INTO `area` VALUES ('1396', '370611', '福山区', '370600');
INSERT INTO `area` VALUES ('1397', '370612', '牟平区', '370600');
INSERT INTO `area` VALUES ('1398', '370613', '莱山区', '370600');
INSERT INTO `area` VALUES ('1399', '370634', '长岛县', '370600');
INSERT INTO `area` VALUES ('1400', '370681', '龙口市', '370600');
INSERT INTO `area` VALUES ('1401', '370682', '莱阳市', '370600');
INSERT INTO `area` VALUES ('1402', '370683', '莱州市', '370600');
INSERT INTO `area` VALUES ('1403', '370684', '蓬莱市', '370600');
INSERT INTO `area` VALUES ('1404', '370685', '招远市', '370600');
INSERT INTO `area` VALUES ('1405', '370686', '栖霞市', '370600');
INSERT INTO `area` VALUES ('1406', '370687', '海阳市', '370600');
INSERT INTO `area` VALUES ('1408', '370702', '潍城区', '370700');
INSERT INTO `area` VALUES ('1409', '370703', '寒亭区', '370700');
INSERT INTO `area` VALUES ('1410', '370704', '坊子区', '370700');
INSERT INTO `area` VALUES ('1411', '370705', '奎文区', '370700');
INSERT INTO `area` VALUES ('1412', '370724', '临朐县', '370700');
INSERT INTO `area` VALUES ('1413', '370725', '昌乐县', '370700');
INSERT INTO `area` VALUES ('1414', '370781', '青州市', '370700');
INSERT INTO `area` VALUES ('1415', '370782', '诸城市', '370700');
INSERT INTO `area` VALUES ('1416', '370783', '寿光市', '370700');
INSERT INTO `area` VALUES ('1417', '370784', '安丘市', '370700');
INSERT INTO `area` VALUES ('1418', '370785', '高密市', '370700');
INSERT INTO `area` VALUES ('1419', '370786', '昌邑市', '370700');
INSERT INTO `area` VALUES ('1421', '370802', '市中区', '370800');
INSERT INTO `area` VALUES ('1422', '370811', '任城区', '370800');
INSERT INTO `area` VALUES ('1423', '370826', '微山县', '370800');
INSERT INTO `area` VALUES ('1424', '370827', '鱼台县', '370800');
INSERT INTO `area` VALUES ('1425', '370828', '金乡县', '370800');
INSERT INTO `area` VALUES ('1426', '370829', '嘉祥县', '370800');
INSERT INTO `area` VALUES ('1427', '370830', '汶上县', '370800');
INSERT INTO `area` VALUES ('1428', '370831', '泗水县', '370800');
INSERT INTO `area` VALUES ('1429', '370832', '梁山县', '370800');
INSERT INTO `area` VALUES ('1430', '370881', '曲阜市', '370800');
INSERT INTO `area` VALUES ('1431', '370882', '兖州市', '370800');
INSERT INTO `area` VALUES ('1432', '370883', '邹城市', '370800');
INSERT INTO `area` VALUES ('1434', '370902', '泰山区', '370900');
INSERT INTO `area` VALUES ('1435', '370903', '岱岳区', '370900');
INSERT INTO `area` VALUES ('1436', '370921', '宁阳县', '370900');
INSERT INTO `area` VALUES ('1437', '370923', '东平县', '370900');
INSERT INTO `area` VALUES ('1438', '370982', '新泰市', '370900');
INSERT INTO `area` VALUES ('1439', '370983', '肥城市', '370900');
INSERT INTO `area` VALUES ('1441', '371002', '环翠区', '371000');
INSERT INTO `area` VALUES ('1442', '371081', '文登市', '371000');
INSERT INTO `area` VALUES ('1443', '371082', '荣成市', '371000');
INSERT INTO `area` VALUES ('1444', '371083', '乳山市', '371000');
INSERT INTO `area` VALUES ('1446', '371102', '东港区', '371100');
INSERT INTO `area` VALUES ('1447', '371103', '岚山区', '371100');
INSERT INTO `area` VALUES ('1448', '371121', '五莲县', '371100');
INSERT INTO `area` VALUES ('1449', '371122', '莒　县', '371100');
INSERT INTO `area` VALUES ('1451', '371202', '莱城区', '371200');
INSERT INTO `area` VALUES ('1452', '371203', '钢城区', '371200');
INSERT INTO `area` VALUES ('1454', '371302', '兰山区', '371300');
INSERT INTO `area` VALUES ('1455', '371311', '罗庄区', '371300');
INSERT INTO `area` VALUES ('1456', '371312', '河东区', '371300');
INSERT INTO `area` VALUES ('1457', '371321', '沂南县', '371300');
INSERT INTO `area` VALUES ('1458', '371322', '郯城县', '371300');
INSERT INTO `area` VALUES ('1459', '371323', '沂水县', '371300');
INSERT INTO `area` VALUES ('1460', '371324', '苍山县', '371300');
INSERT INTO `area` VALUES ('1461', '371325', '费　县', '371300');
INSERT INTO `area` VALUES ('1462', '371326', '平邑县', '371300');
INSERT INTO `area` VALUES ('1463', '371327', '莒南县', '371300');
INSERT INTO `area` VALUES ('1464', '371328', '蒙阴县', '371300');
INSERT INTO `area` VALUES ('1465', '371329', '临沭县', '371300');
INSERT INTO `area` VALUES ('1467', '371402', '德城区', '371400');
INSERT INTO `area` VALUES ('1468', '371421', '陵　县', '371400');
INSERT INTO `area` VALUES ('1469', '371422', '宁津县', '371400');
INSERT INTO `area` VALUES ('1470', '371423', '庆云县', '371400');
INSERT INTO `area` VALUES ('1471', '371424', '临邑县', '371400');
INSERT INTO `area` VALUES ('1472', '371425', '齐河县', '371400');
INSERT INTO `area` VALUES ('1473', '371426', '平原县', '371400');
INSERT INTO `area` VALUES ('1474', '371427', '夏津县', '371400');
INSERT INTO `area` VALUES ('1475', '371428', '武城县', '371400');
INSERT INTO `area` VALUES ('1476', '371481', '乐陵市', '371400');
INSERT INTO `area` VALUES ('1477', '371482', '禹城市', '371400');
INSERT INTO `area` VALUES ('1479', '371502', '东昌府区', '371500');
INSERT INTO `area` VALUES ('1480', '371521', '阳谷县', '371500');
INSERT INTO `area` VALUES ('1481', '371522', '莘　县', '371500');
INSERT INTO `area` VALUES ('1482', '371523', '茌平县', '371500');
INSERT INTO `area` VALUES ('1483', '371524', '东阿县', '371500');
INSERT INTO `area` VALUES ('1484', '371525', '冠　县', '371500');
INSERT INTO `area` VALUES ('1485', '371526', '高唐县', '371500');
INSERT INTO `area` VALUES ('1486', '371581', '临清市', '371500');
INSERT INTO `area` VALUES ('1488', '371602', '滨城区', '371600');
INSERT INTO `area` VALUES ('1489', '371621', '惠民县', '371600');
INSERT INTO `area` VALUES ('1490', '371622', '阳信县', '371600');
INSERT INTO `area` VALUES ('1491', '371623', '无棣县', '371600');
INSERT INTO `area` VALUES ('1492', '371624', '沾化县', '371600');
INSERT INTO `area` VALUES ('1493', '371625', '博兴县', '371600');
INSERT INTO `area` VALUES ('1494', '371626', '邹平县', '371600');
INSERT INTO `area` VALUES ('1496', '371702', '牡丹区', '371700');
INSERT INTO `area` VALUES ('1497', '371721', '曹　县', '371700');
INSERT INTO `area` VALUES ('1498', '371722', '单　县', '371700');
INSERT INTO `area` VALUES ('1499', '371723', '成武县', '371700');
INSERT INTO `area` VALUES ('1500', '371724', '巨野县', '371700');
INSERT INTO `area` VALUES ('1501', '371725', '郓城县', '371700');
INSERT INTO `area` VALUES ('1502', '371726', '鄄城县', '371700');
INSERT INTO `area` VALUES ('1503', '371727', '定陶县', '371700');
INSERT INTO `area` VALUES ('1504', '371728', '东明县', '371700');
INSERT INTO `area` VALUES ('1506', '410102', '中原区', '410100');
INSERT INTO `area` VALUES ('1507', '410103', '二七区', '410100');
INSERT INTO `area` VALUES ('1508', '410104', '管城回族区', '410100');
INSERT INTO `area` VALUES ('1509', '410105', '金水区', '410100');
INSERT INTO `area` VALUES ('1510', '410106', '上街区', '410100');
INSERT INTO `area` VALUES ('1511', '410108', '邙山区', '410100');
INSERT INTO `area` VALUES ('1512', '410122', '中牟县', '410100');
INSERT INTO `area` VALUES ('1513', '410181', '巩义市', '410100');
INSERT INTO `area` VALUES ('1514', '410182', '荥阳市', '410100');
INSERT INTO `area` VALUES ('1515', '410183', '新密市', '410100');
INSERT INTO `area` VALUES ('1516', '410184', '新郑市', '410100');
INSERT INTO `area` VALUES ('1517', '410185', '登封市', '410100');
INSERT INTO `area` VALUES ('1519', '410202', '龙亭区', '410200');
INSERT INTO `area` VALUES ('1520', '410203', '顺河回族区', '410200');
INSERT INTO `area` VALUES ('1521', '410204', '鼓楼区', '410200');
INSERT INTO `area` VALUES ('1522', '410205', '南关区', '410200');
INSERT INTO `area` VALUES ('1523', '410211', '郊　区', '410200');
INSERT INTO `area` VALUES ('1524', '410221', '杞　县', '410200');
INSERT INTO `area` VALUES ('1525', '410222', '通许县', '410200');
INSERT INTO `area` VALUES ('1526', '410223', '尉氏县', '410200');
INSERT INTO `area` VALUES ('1527', '410224', '开封县', '410200');
INSERT INTO `area` VALUES ('1528', '410225', '兰考县', '410200');
INSERT INTO `area` VALUES ('1530', '410302', '老城区', '410300');
INSERT INTO `area` VALUES ('1531', '410303', '西工区', '410300');
INSERT INTO `area` VALUES ('1532', '410304', '廛河回族区', '410300');
INSERT INTO `area` VALUES ('1533', '410305', '涧西区', '410300');
INSERT INTO `area` VALUES ('1534', '410306', '吉利区', '410300');
INSERT INTO `area` VALUES ('1535', '410307', '洛龙区', '410300');
INSERT INTO `area` VALUES ('1536', '410322', '孟津县', '410300');
INSERT INTO `area` VALUES ('1537', '410323', '新安县', '410300');
INSERT INTO `area` VALUES ('1538', '410324', '栾川县', '410300');
INSERT INTO `area` VALUES ('1539', '410325', '嵩　县', '410300');
INSERT INTO `area` VALUES ('1540', '410326', '汝阳县', '410300');
INSERT INTO `area` VALUES ('1541', '410327', '宜阳县', '410300');
INSERT INTO `area` VALUES ('1542', '410328', '洛宁县', '410300');
INSERT INTO `area` VALUES ('1543', '410329', '伊川县', '410300');
INSERT INTO `area` VALUES ('1544', '410381', '偃师市', '410300');
INSERT INTO `area` VALUES ('1546', '410402', '新华区', '410400');
INSERT INTO `area` VALUES ('1547', '410403', '卫东区', '410400');
INSERT INTO `area` VALUES ('1548', '410404', '石龙区', '410400');
INSERT INTO `area` VALUES ('1549', '410411', '湛河区', '410400');
INSERT INTO `area` VALUES ('1550', '410421', '宝丰县', '410400');
INSERT INTO `area` VALUES ('1551', '410422', '叶　县', '410400');
INSERT INTO `area` VALUES ('1552', '410423', '鲁山县', '410400');
INSERT INTO `area` VALUES ('1553', '410425', '郏　县', '410400');
INSERT INTO `area` VALUES ('1554', '410481', '舞钢市', '410400');
INSERT INTO `area` VALUES ('1555', '410482', '汝州市', '410400');
INSERT INTO `area` VALUES ('1557', '410502', '文峰区', '410500');
INSERT INTO `area` VALUES ('1558', '410503', '北关区', '410500');
INSERT INTO `area` VALUES ('1559', '410505', '殷都区', '410500');
INSERT INTO `area` VALUES ('1560', '410506', '龙安区', '410500');
INSERT INTO `area` VALUES ('1561', '410522', '安阳县', '410500');
INSERT INTO `area` VALUES ('1562', '410523', '汤阴县', '410500');
INSERT INTO `area` VALUES ('1563', '410526', '滑　县', '410500');
INSERT INTO `area` VALUES ('1564', '410527', '内黄县', '410500');
INSERT INTO `area` VALUES ('1565', '410581', '林州市', '410500');
INSERT INTO `area` VALUES ('1567', '410602', '鹤山区', '410600');
INSERT INTO `area` VALUES ('1568', '410603', '山城区', '410600');
INSERT INTO `area` VALUES ('1569', '410611', '淇滨区', '410600');
INSERT INTO `area` VALUES ('1570', '410621', '浚　县', '410600');
INSERT INTO `area` VALUES ('1571', '410622', '淇　县', '410600');
INSERT INTO `area` VALUES ('1573', '410702', '红旗区', '410700');
INSERT INTO `area` VALUES ('1574', '410703', '卫滨区', '410700');
INSERT INTO `area` VALUES ('1575', '410704', '凤泉区', '410700');
INSERT INTO `area` VALUES ('1576', '410711', '牧野区', '410700');
INSERT INTO `area` VALUES ('1577', '410721', '新乡县', '410700');
INSERT INTO `area` VALUES ('1578', '410724', '获嘉县', '410700');
INSERT INTO `area` VALUES ('1579', '410725', '原阳县', '410700');
INSERT INTO `area` VALUES ('1580', '410726', '延津县', '410700');
INSERT INTO `area` VALUES ('1581', '410727', '封丘县', '410700');
INSERT INTO `area` VALUES ('1582', '410728', '长垣县', '410700');
INSERT INTO `area` VALUES ('1583', '410781', '卫辉市', '410700');
INSERT INTO `area` VALUES ('1584', '410782', '辉县市', '410700');
INSERT INTO `area` VALUES ('1586', '410802', '解放区', '410800');
INSERT INTO `area` VALUES ('1587', '410803', '中站区', '410800');
INSERT INTO `area` VALUES ('1588', '410804', '马村区', '410800');
INSERT INTO `area` VALUES ('1589', '410811', '山阳区', '410800');
INSERT INTO `area` VALUES ('1590', '410821', '修武县', '410800');
INSERT INTO `area` VALUES ('1591', '410822', '博爱县', '410800');
INSERT INTO `area` VALUES ('1592', '410823', '武陟县', '410800');
INSERT INTO `area` VALUES ('1593', '410825', '温　县', '410800');
INSERT INTO `area` VALUES ('1594', '410881', '济源市', '410800');
INSERT INTO `area` VALUES ('1595', '410882', '沁阳市', '410800');
INSERT INTO `area` VALUES ('1596', '410883', '孟州市', '410800');
INSERT INTO `area` VALUES ('1598', '410902', '华龙区', '410900');
INSERT INTO `area` VALUES ('1599', '410922', '清丰县', '410900');
INSERT INTO `area` VALUES ('1600', '410923', '南乐县', '410900');
INSERT INTO `area` VALUES ('1601', '410926', '范　县', '410900');
INSERT INTO `area` VALUES ('1602', '410927', '台前县', '410900');
INSERT INTO `area` VALUES ('1603', '410928', '濮阳县', '410900');
INSERT INTO `area` VALUES ('1605', '411002', '魏都区', '411000');
INSERT INTO `area` VALUES ('1606', '411023', '许昌县', '411000');
INSERT INTO `area` VALUES ('1607', '411024', '鄢陵县', '411000');
INSERT INTO `area` VALUES ('1608', '411025', '襄城县', '411000');
INSERT INTO `area` VALUES ('1609', '411081', '禹州市', '411000');
INSERT INTO `area` VALUES ('1610', '411082', '长葛市', '411000');
INSERT INTO `area` VALUES ('1612', '411102', '源汇区', '411100');
INSERT INTO `area` VALUES ('1613', '411103', '郾城区', '411100');
INSERT INTO `area` VALUES ('1614', '411104', '召陵区', '411100');
INSERT INTO `area` VALUES ('1615', '411121', '舞阳县', '411100');
INSERT INTO `area` VALUES ('1616', '411122', '临颍县', '411100');
INSERT INTO `area` VALUES ('1618', '411202', '湖滨区', '411200');
INSERT INTO `area` VALUES ('1619', '411221', '渑池县', '411200');
INSERT INTO `area` VALUES ('1620', '411222', '陕　县', '411200');
INSERT INTO `area` VALUES ('1621', '411224', '卢氏县', '411200');
INSERT INTO `area` VALUES ('1622', '411281', '义马市', '411200');
INSERT INTO `area` VALUES ('1623', '411282', '灵宝市', '411200');
INSERT INTO `area` VALUES ('1625', '411302', '宛城区', '411300');
INSERT INTO `area` VALUES ('1626', '411303', '卧龙区', '411300');
INSERT INTO `area` VALUES ('1627', '411321', '南召县', '411300');
INSERT INTO `area` VALUES ('1628', '411322', '方城县', '411300');
INSERT INTO `area` VALUES ('1629', '411323', '西峡县', '411300');
INSERT INTO `area` VALUES ('1630', '411324', '镇平县', '411300');
INSERT INTO `area` VALUES ('1631', '411325', '内乡县', '411300');
INSERT INTO `area` VALUES ('1632', '411326', '淅川县', '411300');
INSERT INTO `area` VALUES ('1633', '411327', '社旗县', '411300');
INSERT INTO `area` VALUES ('1634', '411328', '唐河县', '411300');
INSERT INTO `area` VALUES ('1635', '411329', '新野县', '411300');
INSERT INTO `area` VALUES ('1636', '411330', '桐柏县', '411300');
INSERT INTO `area` VALUES ('1637', '411381', '邓州市', '411300');
INSERT INTO `area` VALUES ('1639', '411402', '梁园区', '411400');
INSERT INTO `area` VALUES ('1640', '411403', '睢阳区', '411400');
INSERT INTO `area` VALUES ('1641', '411421', '民权县', '411400');
INSERT INTO `area` VALUES ('1642', '411422', '睢　县', '411400');
INSERT INTO `area` VALUES ('1643', '411423', '宁陵县', '411400');
INSERT INTO `area` VALUES ('1644', '411424', '柘城县', '411400');
INSERT INTO `area` VALUES ('1645', '411425', '虞城县', '411400');
INSERT INTO `area` VALUES ('1646', '411426', '夏邑县', '411400');
INSERT INTO `area` VALUES ('1647', '411481', '永城市', '411400');
INSERT INTO `area` VALUES ('1649', '411502', '师河区', '411500');
INSERT INTO `area` VALUES ('1650', '411503', '平桥区', '411500');
INSERT INTO `area` VALUES ('1651', '411521', '罗山县', '411500');
INSERT INTO `area` VALUES ('1652', '411522', '光山县', '411500');
INSERT INTO `area` VALUES ('1653', '411523', '新　县', '411500');
INSERT INTO `area` VALUES ('1654', '411524', '商城县', '411500');
INSERT INTO `area` VALUES ('1655', '411525', '固始县', '411500');
INSERT INTO `area` VALUES ('1656', '411526', '潢川县', '411500');
INSERT INTO `area` VALUES ('1657', '411527', '淮滨县', '411500');
INSERT INTO `area` VALUES ('1658', '411528', '息　县', '411500');
INSERT INTO `area` VALUES ('1660', '411602', '川汇区', '411600');
INSERT INTO `area` VALUES ('1661', '411621', '扶沟县', '411600');
INSERT INTO `area` VALUES ('1662', '411622', '西华县', '411600');
INSERT INTO `area` VALUES ('1663', '411623', '商水县', '411600');
INSERT INTO `area` VALUES ('1664', '411624', '沈丘县', '411600');
INSERT INTO `area` VALUES ('1665', '411625', '郸城县', '411600');
INSERT INTO `area` VALUES ('1666', '411626', '淮阳县', '411600');
INSERT INTO `area` VALUES ('1667', '411627', '太康县', '411600');
INSERT INTO `area` VALUES ('1668', '411628', '鹿邑县', '411600');
INSERT INTO `area` VALUES ('1669', '411681', '项城市', '411600');
INSERT INTO `area` VALUES ('1671', '411702', '驿城区', '411700');
INSERT INTO `area` VALUES ('1672', '411721', '西平县', '411700');
INSERT INTO `area` VALUES ('1673', '411722', '上蔡县', '411700');
INSERT INTO `area` VALUES ('1674', '411723', '平舆县', '411700');
INSERT INTO `area` VALUES ('1675', '411724', '正阳县', '411700');
INSERT INTO `area` VALUES ('1676', '411725', '确山县', '411700');
INSERT INTO `area` VALUES ('1677', '411726', '泌阳县', '411700');
INSERT INTO `area` VALUES ('1678', '411727', '汝南县', '411700');
INSERT INTO `area` VALUES ('1679', '411728', '遂平县', '411700');
INSERT INTO `area` VALUES ('1680', '411729', '新蔡县', '411700');
INSERT INTO `area` VALUES ('1682', '420102', '江岸区', '420100');
INSERT INTO `area` VALUES ('1683', '420103', '江汉区', '420100');
INSERT INTO `area` VALUES ('1684', '420104', '乔口区', '420100');
INSERT INTO `area` VALUES ('1685', '420105', '汉阳区', '420100');
INSERT INTO `area` VALUES ('1686', '420106', '武昌区', '420100');
INSERT INTO `area` VALUES ('1687', '420107', '青山区', '420100');
INSERT INTO `area` VALUES ('1688', '420111', '洪山区', '420100');
INSERT INTO `area` VALUES ('1689', '420112', '东西湖区', '420100');
INSERT INTO `area` VALUES ('1690', '420113', '汉南区', '420100');
INSERT INTO `area` VALUES ('1691', '420114', '蔡甸区', '420100');
INSERT INTO `area` VALUES ('1692', '420115', '江夏区', '420100');
INSERT INTO `area` VALUES ('1693', '420116', '黄陂区', '420100');
INSERT INTO `area` VALUES ('1694', '420117', '新洲区', '420100');
INSERT INTO `area` VALUES ('1696', '420202', '黄石港区', '420200');
INSERT INTO `area` VALUES ('1697', '420203', '西塞山区', '420200');
INSERT INTO `area` VALUES ('1698', '420204', '下陆区', '420200');
INSERT INTO `area` VALUES ('1699', '420205', '铁山区', '420200');
INSERT INTO `area` VALUES ('1700', '420222', '阳新县', '420200');
INSERT INTO `area` VALUES ('1701', '420281', '大冶市', '420200');
INSERT INTO `area` VALUES ('1703', '420302', '茅箭区', '420300');
INSERT INTO `area` VALUES ('1704', '420303', '张湾区', '420300');
INSERT INTO `area` VALUES ('1705', '420321', '郧　县', '420300');
INSERT INTO `area` VALUES ('1706', '420322', '郧西县', '420300');
INSERT INTO `area` VALUES ('1707', '420323', '竹山县', '420300');
INSERT INTO `area` VALUES ('1708', '420324', '竹溪县', '420300');
INSERT INTO `area` VALUES ('1709', '420325', '房　县', '420300');
INSERT INTO `area` VALUES ('1710', '420381', '丹江口市', '420300');
INSERT INTO `area` VALUES ('1712', '420502', '西陵区', '420500');
INSERT INTO `area` VALUES ('1713', '420503', '伍家岗区', '420500');
INSERT INTO `area` VALUES ('1714', '420504', '点军区', '420500');
INSERT INTO `area` VALUES ('1715', '420505', '猇亭区', '420500');
INSERT INTO `area` VALUES ('1716', '420506', '夷陵区', '420500');
INSERT INTO `area` VALUES ('1717', '420525', '远安县', '420500');
INSERT INTO `area` VALUES ('1718', '420526', '兴山县', '420500');
INSERT INTO `area` VALUES ('1719', '420527', '秭归县', '420500');
INSERT INTO `area` VALUES ('1720', '420528', '长阳土家族自治县', '420500');
INSERT INTO `area` VALUES ('1721', '420529', '五峰土家族自治县', '420500');
INSERT INTO `area` VALUES ('1722', '420581', '宜都市', '420500');
INSERT INTO `area` VALUES ('1723', '420582', '当阳市', '420500');
INSERT INTO `area` VALUES ('1724', '420583', '枝江市', '420500');
INSERT INTO `area` VALUES ('1726', '420602', '襄城区', '420600');
INSERT INTO `area` VALUES ('1727', '420606', '樊城区', '420600');
INSERT INTO `area` VALUES ('1728', '420607', '襄阳区', '420600');
INSERT INTO `area` VALUES ('1729', '420624', '南漳县', '420600');
INSERT INTO `area` VALUES ('1730', '420625', '谷城县', '420600');
INSERT INTO `area` VALUES ('1731', '420626', '保康县', '420600');
INSERT INTO `area` VALUES ('1732', '420682', '老河口市', '420600');
INSERT INTO `area` VALUES ('1733', '420683', '枣阳市', '420600');
INSERT INTO `area` VALUES ('1734', '420684', '宜城市', '420600');
INSERT INTO `area` VALUES ('1736', '420702', '梁子湖区', '420700');
INSERT INTO `area` VALUES ('1737', '420703', '华容区', '420700');
INSERT INTO `area` VALUES ('1738', '420704', '鄂城区', '420700');
INSERT INTO `area` VALUES ('1740', '420802', '东宝区', '420800');
INSERT INTO `area` VALUES ('1741', '420804', '掇刀区', '420800');
INSERT INTO `area` VALUES ('1742', '420821', '京山县', '420800');
INSERT INTO `area` VALUES ('1743', '420822', '沙洋县', '420800');
INSERT INTO `area` VALUES ('1744', '420881', '钟祥市', '420800');
INSERT INTO `area` VALUES ('1746', '420902', '孝南区', '420900');
INSERT INTO `area` VALUES ('1747', '420921', '孝昌县', '420900');
INSERT INTO `area` VALUES ('1748', '420922', '大悟县', '420900');
INSERT INTO `area` VALUES ('1749', '420923', '云梦县', '420900');
INSERT INTO `area` VALUES ('1750', '420981', '应城市', '420900');
INSERT INTO `area` VALUES ('1751', '420982', '安陆市', '420900');
INSERT INTO `area` VALUES ('1752', '420984', '汉川市', '420900');
INSERT INTO `area` VALUES ('1754', '421002', '沙市区', '421000');
INSERT INTO `area` VALUES ('1755', '421003', '荆州区', '421000');
INSERT INTO `area` VALUES ('1756', '421022', '公安县', '421000');
INSERT INTO `area` VALUES ('1757', '421023', '监利县', '421000');
INSERT INTO `area` VALUES ('1758', '421024', '江陵县', '421000');
INSERT INTO `area` VALUES ('1759', '421081', '石首市', '421000');
INSERT INTO `area` VALUES ('1760', '421083', '洪湖市', '421000');
INSERT INTO `area` VALUES ('1761', '421087', '松滋市', '421000');
INSERT INTO `area` VALUES ('1763', '421102', '黄州区', '421100');
INSERT INTO `area` VALUES ('1764', '421121', '团风县', '421100');
INSERT INTO `area` VALUES ('1765', '421122', '红安县', '421100');
INSERT INTO `area` VALUES ('1766', '421123', '罗田县', '421100');
INSERT INTO `area` VALUES ('1767', '421124', '英山县', '421100');
INSERT INTO `area` VALUES ('1768', '421125', '浠水县', '421100');
INSERT INTO `area` VALUES ('1769', '421126', '蕲春县', '421100');
INSERT INTO `area` VALUES ('1770', '421127', '黄梅县', '421100');
INSERT INTO `area` VALUES ('1771', '421181', '麻城市', '421100');
INSERT INTO `area` VALUES ('1772', '421182', '武穴市', '421100');
INSERT INTO `area` VALUES ('1774', '421202', '咸安区', '421200');
INSERT INTO `area` VALUES ('1775', '421221', '嘉鱼县', '421200');
INSERT INTO `area` VALUES ('1776', '421222', '通城县', '421200');
INSERT INTO `area` VALUES ('1777', '421223', '崇阳县', '421200');
INSERT INTO `area` VALUES ('1778', '421224', '通山县', '421200');
INSERT INTO `area` VALUES ('1779', '421281', '赤壁市', '421200');
INSERT INTO `area` VALUES ('1781', '421302', '曾都区', '421300');
INSERT INTO `area` VALUES ('1782', '421381', '广水市', '421300');
INSERT INTO `area` VALUES ('1783', '422801', '恩施市', '422800');
INSERT INTO `area` VALUES ('1784', '422802', '利川市', '422800');
INSERT INTO `area` VALUES ('1785', '422822', '建始县', '422800');
INSERT INTO `area` VALUES ('1786', '422823', '巴东县', '422800');
INSERT INTO `area` VALUES ('1787', '422825', '宣恩县', '422800');
INSERT INTO `area` VALUES ('1788', '422826', '咸丰县', '422800');
INSERT INTO `area` VALUES ('1789', '422827', '来凤县', '422800');
INSERT INTO `area` VALUES ('1790', '422828', '鹤峰县', '422800');
INSERT INTO `area` VALUES ('1791', '429004', '仙桃市', '429000');
INSERT INTO `area` VALUES ('1792', '429005', '潜江市', '429000');
INSERT INTO `area` VALUES ('1793', '429006', '天门市', '429000');
INSERT INTO `area` VALUES ('1794', '429021', '神农架林区', '429000');
INSERT INTO `area` VALUES ('1796', '430102', '芙蓉区', '430100');
INSERT INTO `area` VALUES ('1797', '430103', '天心区', '430100');
INSERT INTO `area` VALUES ('1798', '430104', '岳麓区', '430100');
INSERT INTO `area` VALUES ('1799', '430105', '开福区', '430100');
INSERT INTO `area` VALUES ('1800', '430111', '雨花区', '430100');
INSERT INTO `area` VALUES ('1801', '430121', '长沙县', '430100');
INSERT INTO `area` VALUES ('1802', '430122', '望城县', '430100');
INSERT INTO `area` VALUES ('1803', '430124', '宁乡县', '430100');
INSERT INTO `area` VALUES ('1804', '430181', '浏阳市', '430100');
INSERT INTO `area` VALUES ('1806', '430202', '荷塘区', '430200');
INSERT INTO `area` VALUES ('1807', '430203', '芦淞区', '430200');
INSERT INTO `area` VALUES ('1808', '430204', '石峰区', '430200');
INSERT INTO `area` VALUES ('1809', '430211', '天元区', '430200');
INSERT INTO `area` VALUES ('1810', '430221', '株洲县', '430200');
INSERT INTO `area` VALUES ('1811', '430223', '攸　县', '430200');
INSERT INTO `area` VALUES ('1812', '430224', '茶陵县', '430200');
INSERT INTO `area` VALUES ('1813', '430225', '炎陵县', '430200');
INSERT INTO `area` VALUES ('1814', '430281', '醴陵市', '430200');
INSERT INTO `area` VALUES ('1816', '430302', '雨湖区', '430300');
INSERT INTO `area` VALUES ('1817', '430304', '岳塘区', '430300');
INSERT INTO `area` VALUES ('1818', '430321', '湘潭县', '430300');
INSERT INTO `area` VALUES ('1819', '430381', '湘乡市', '430300');
INSERT INTO `area` VALUES ('1820', '430382', '韶山市', '430300');
INSERT INTO `area` VALUES ('1822', '430405', '珠晖区', '430400');
INSERT INTO `area` VALUES ('1823', '430406', '雁峰区', '430400');
INSERT INTO `area` VALUES ('1824', '430407', '石鼓区', '430400');
INSERT INTO `area` VALUES ('1825', '430408', '蒸湘区', '430400');
INSERT INTO `area` VALUES ('1826', '430412', '南岳区', '430400');
INSERT INTO `area` VALUES ('1827', '430421', '衡阳县', '430400');
INSERT INTO `area` VALUES ('1828', '430422', '衡南县', '430400');
INSERT INTO `area` VALUES ('1829', '430423', '衡山县', '430400');
INSERT INTO `area` VALUES ('1830', '430424', '衡东县', '430400');
INSERT INTO `area` VALUES ('1831', '430426', '祁东县', '430400');
INSERT INTO `area` VALUES ('1832', '430481', '耒阳市', '430400');
INSERT INTO `area` VALUES ('1833', '430482', '常宁市', '430400');
INSERT INTO `area` VALUES ('1835', '430502', '双清区', '430500');
INSERT INTO `area` VALUES ('1836', '430503', '大祥区', '430500');
INSERT INTO `area` VALUES ('1837', '430511', '北塔区', '430500');
INSERT INTO `area` VALUES ('1838', '430521', '邵东县', '430500');
INSERT INTO `area` VALUES ('1839', '430522', '新邵县', '430500');
INSERT INTO `area` VALUES ('1840', '430523', '邵阳县', '430500');
INSERT INTO `area` VALUES ('1841', '430524', '隆回县', '430500');
INSERT INTO `area` VALUES ('1842', '430525', '洞口县', '430500');
INSERT INTO `area` VALUES ('1843', '430527', '绥宁县', '430500');
INSERT INTO `area` VALUES ('1844', '430528', '新宁县', '430500');
INSERT INTO `area` VALUES ('1845', '430529', '城步苗族自治县', '430500');
INSERT INTO `area` VALUES ('1846', '430581', '武冈市', '430500');
INSERT INTO `area` VALUES ('1848', '430602', '岳阳楼区', '430600');
INSERT INTO `area` VALUES ('1849', '430603', '云溪区', '430600');
INSERT INTO `area` VALUES ('1850', '430611', '君山区', '430600');
INSERT INTO `area` VALUES ('1851', '430621', '岳阳县', '430600');
INSERT INTO `area` VALUES ('1852', '430623', '华容县', '430600');
INSERT INTO `area` VALUES ('1853', '430624', '湘阴县', '430600');
INSERT INTO `area` VALUES ('1854', '430626', '平江县', '430600');
INSERT INTO `area` VALUES ('1855', '430681', '汨罗市', '430600');
INSERT INTO `area` VALUES ('1856', '430682', '临湘市', '430600');
INSERT INTO `area` VALUES ('1858', '430702', '武陵区', '430700');
INSERT INTO `area` VALUES ('1859', '430703', '鼎城区', '430700');
INSERT INTO `area` VALUES ('1860', '430721', '安乡县', '430700');
INSERT INTO `area` VALUES ('1861', '430722', '汉寿县', '430700');
INSERT INTO `area` VALUES ('1862', '430723', '澧　县', '430700');
INSERT INTO `area` VALUES ('1863', '430724', '临澧县', '430700');
INSERT INTO `area` VALUES ('1864', '430725', '桃源县', '430700');
INSERT INTO `area` VALUES ('1865', '430726', '石门县', '430700');
INSERT INTO `area` VALUES ('1866', '430781', '津市市', '430700');
INSERT INTO `area` VALUES ('1868', '430802', '永定区', '430800');
INSERT INTO `area` VALUES ('1869', '430811', '武陵源区', '430800');
INSERT INTO `area` VALUES ('1870', '430821', '慈利县', '430800');
INSERT INTO `area` VALUES ('1871', '430822', '桑植县', '430800');
INSERT INTO `area` VALUES ('1873', '430902', '资阳区', '430900');
INSERT INTO `area` VALUES ('1874', '430903', '赫山区', '430900');
INSERT INTO `area` VALUES ('1875', '430921', '南　县', '430900');
INSERT INTO `area` VALUES ('1876', '430922', '桃江县', '430900');
INSERT INTO `area` VALUES ('1877', '430923', '安化县', '430900');
INSERT INTO `area` VALUES ('1878', '430981', '沅江市', '430900');
INSERT INTO `area` VALUES ('1880', '431002', '北湖区', '431000');
INSERT INTO `area` VALUES ('1881', '431003', '苏仙区', '431000');
INSERT INTO `area` VALUES ('1882', '431021', '桂阳县', '431000');
INSERT INTO `area` VALUES ('1883', '431022', '宜章县', '431000');
INSERT INTO `area` VALUES ('1884', '431023', '永兴县', '431000');
INSERT INTO `area` VALUES ('1885', '431024', '嘉禾县', '431000');
INSERT INTO `area` VALUES ('1886', '431025', '临武县', '431000');
INSERT INTO `area` VALUES ('1887', '431026', '汝城县', '431000');
INSERT INTO `area` VALUES ('1888', '431027', '桂东县', '431000');
INSERT INTO `area` VALUES ('1889', '431028', '安仁县', '431000');
INSERT INTO `area` VALUES ('1890', '431081', '资兴市', '431000');
INSERT INTO `area` VALUES ('1892', '431102', '芝山区', '431100');
INSERT INTO `area` VALUES ('1893', '431103', '冷水滩区', '431100');
INSERT INTO `area` VALUES ('1894', '431121', '祁阳县', '431100');
INSERT INTO `area` VALUES ('1895', '431122', '东安县', '431100');
INSERT INTO `area` VALUES ('1896', '431123', '双牌县', '431100');
INSERT INTO `area` VALUES ('1897', '431124', '道　县', '431100');
INSERT INTO `area` VALUES ('1898', '431125', '江永县', '431100');
INSERT INTO `area` VALUES ('1899', '431126', '宁远县', '431100');
INSERT INTO `area` VALUES ('1900', '431127', '蓝山县', '431100');
INSERT INTO `area` VALUES ('1901', '431128', '新田县', '431100');
INSERT INTO `area` VALUES ('1902', '431129', '江华瑶族自治县', '431100');
INSERT INTO `area` VALUES ('1904', '431202', '鹤城区', '431200');
INSERT INTO `area` VALUES ('1905', '431221', '中方县', '431200');
INSERT INTO `area` VALUES ('1906', '431222', '沅陵县', '431200');
INSERT INTO `area` VALUES ('1907', '431223', '辰溪县', '431200');
INSERT INTO `area` VALUES ('1908', '431224', '溆浦县', '431200');
INSERT INTO `area` VALUES ('1909', '431225', '会同县', '431200');
INSERT INTO `area` VALUES ('1910', '431226', '麻阳苗族自治县', '431200');
INSERT INTO `area` VALUES ('1911', '431227', '新晃侗族自治县', '431200');
INSERT INTO `area` VALUES ('1912', '431228', '芷江侗族自治县', '431200');
INSERT INTO `area` VALUES ('1913', '431229', '靖州苗族侗族自治县', '431200');
INSERT INTO `area` VALUES ('1914', '431230', '通道侗族自治县', '431200');
INSERT INTO `area` VALUES ('1915', '431281', '洪江市', '431200');
INSERT INTO `area` VALUES ('1917', '431302', '娄星区', '431300');
INSERT INTO `area` VALUES ('1918', '431321', '双峰县', '431300');
INSERT INTO `area` VALUES ('1919', '431322', '新化县', '431300');
INSERT INTO `area` VALUES ('1920', '431381', '冷水江市', '431300');
INSERT INTO `area` VALUES ('1921', '431382', '涟源市', '431300');
INSERT INTO `area` VALUES ('1922', '433101', '吉首市', '433100');
INSERT INTO `area` VALUES ('1923', '433122', '泸溪县', '433100');
INSERT INTO `area` VALUES ('1924', '433123', '凤凰县', '433100');
INSERT INTO `area` VALUES ('1925', '433124', '花垣县', '433100');
INSERT INTO `area` VALUES ('1926', '433125', '保靖县', '433100');
INSERT INTO `area` VALUES ('1927', '433126', '古丈县', '433100');
INSERT INTO `area` VALUES ('1928', '433127', '永顺县', '433100');
INSERT INTO `area` VALUES ('1929', '433130', '龙山县', '433100');
INSERT INTO `area` VALUES ('1931', '440102', '东山区', '440100');
INSERT INTO `area` VALUES ('1932', '440103', '荔湾区', '440100');
INSERT INTO `area` VALUES ('1933', '440104', '越秀区', '440100');
INSERT INTO `area` VALUES ('1934', '440105', '海珠区', '440100');
INSERT INTO `area` VALUES ('1935', '440106', '天河区', '440100');
INSERT INTO `area` VALUES ('1936', '440107', '芳村区', '440100');
INSERT INTO `area` VALUES ('1937', '440111', '白云区', '440100');
INSERT INTO `area` VALUES ('1938', '440112', '黄埔区', '440100');
INSERT INTO `area` VALUES ('1939', '440113', '番禺区', '440100');
INSERT INTO `area` VALUES ('1940', '440114', '花都区', '440100');
INSERT INTO `area` VALUES ('1941', '440183', '增城市', '440100');
INSERT INTO `area` VALUES ('1942', '440184', '从化市', '440100');
INSERT INTO `area` VALUES ('1944', '440203', '武江区', '440200');
INSERT INTO `area` VALUES ('1945', '440204', '浈江区', '440200');
INSERT INTO `area` VALUES ('1946', '440205', '曲江区', '440200');
INSERT INTO `area` VALUES ('1947', '440222', '始兴县', '440200');
INSERT INTO `area` VALUES ('1948', '440224', '仁化县', '440200');
INSERT INTO `area` VALUES ('1949', '440229', '翁源县', '440200');
INSERT INTO `area` VALUES ('1950', '440232', '乳源瑶族自治县', '440200');
INSERT INTO `area` VALUES ('1951', '440233', '新丰县', '440200');
INSERT INTO `area` VALUES ('1952', '440281', '乐昌市', '440200');
INSERT INTO `area` VALUES ('1953', '440282', '南雄市', '440200');
INSERT INTO `area` VALUES ('1955', '440303', '罗湖区', '440300');
INSERT INTO `area` VALUES ('1956', '440304', '福田区', '440300');
INSERT INTO `area` VALUES ('1957', '440305', '南山区', '440300');
INSERT INTO `area` VALUES ('1958', '440306', '宝安区', '440300');
INSERT INTO `area` VALUES ('1959', '440307', '龙岗区', '440300');
INSERT INTO `area` VALUES ('1960', '440308', '盐田区', '440300');
INSERT INTO `area` VALUES ('1962', '440402', '香洲区', '440400');
INSERT INTO `area` VALUES ('1963', '440403', '斗门区', '440400');
INSERT INTO `area` VALUES ('1964', '440404', '金湾区', '440400');
INSERT INTO `area` VALUES ('1966', '440507', '龙湖区', '440500');
INSERT INTO `area` VALUES ('1967', '440511', '金平区', '440500');
INSERT INTO `area` VALUES ('1968', '440512', '濠江区', '440500');
INSERT INTO `area` VALUES ('1969', '440513', '潮阳区', '440500');
INSERT INTO `area` VALUES ('1970', '440514', '潮南区', '440500');
INSERT INTO `area` VALUES ('1971', '440515', '澄海区', '440500');
INSERT INTO `area` VALUES ('1972', '440523', '南澳县', '440500');
INSERT INTO `area` VALUES ('1974', '440604', '禅城区', '440600');
INSERT INTO `area` VALUES ('1975', '440605', '南海区', '440600');
INSERT INTO `area` VALUES ('1976', '440606', '顺德区', '440600');
INSERT INTO `area` VALUES ('1977', '440607', '三水区', '440600');
INSERT INTO `area` VALUES ('1978', '440608', '高明区', '440600');
INSERT INTO `area` VALUES ('1980', '440703', '蓬江区', '440700');
INSERT INTO `area` VALUES ('1981', '440704', '江海区', '440700');
INSERT INTO `area` VALUES ('1982', '440705', '新会区', '440700');
INSERT INTO `area` VALUES ('1983', '440781', '台山市', '440700');
INSERT INTO `area` VALUES ('1984', '440783', '开平市', '440700');
INSERT INTO `area` VALUES ('1985', '440784', '鹤山市', '440700');
INSERT INTO `area` VALUES ('1986', '440785', '恩平市', '440700');
INSERT INTO `area` VALUES ('1988', '440802', '赤坎区', '440800');
INSERT INTO `area` VALUES ('1989', '440803', '霞山区', '440800');
INSERT INTO `area` VALUES ('1990', '440804', '坡头区', '440800');
INSERT INTO `area` VALUES ('1991', '440811', '麻章区', '440800');
INSERT INTO `area` VALUES ('1992', '440823', '遂溪县', '440800');
INSERT INTO `area` VALUES ('1993', '440825', '徐闻县', '440800');
INSERT INTO `area` VALUES ('1994', '440881', '廉江市', '440800');
INSERT INTO `area` VALUES ('1995', '440882', '雷州市', '440800');
INSERT INTO `area` VALUES ('1996', '440883', '吴川市', '440800');
INSERT INTO `area` VALUES ('1998', '440902', '茂南区', '440900');
INSERT INTO `area` VALUES ('1999', '440903', '茂港区', '440900');
INSERT INTO `area` VALUES ('2000', '440923', '电白县', '440900');
INSERT INTO `area` VALUES ('2001', '440981', '高州市', '440900');
INSERT INTO `area` VALUES ('2002', '440982', '化州市', '440900');
INSERT INTO `area` VALUES ('2003', '440983', '信宜市', '440900');
INSERT INTO `area` VALUES ('2005', '441202', '端州区', '441200');
INSERT INTO `area` VALUES ('2006', '441203', '鼎湖区', '441200');
INSERT INTO `area` VALUES ('2007', '441223', '广宁县', '441200');
INSERT INTO `area` VALUES ('2008', '441224', '怀集县', '441200');
INSERT INTO `area` VALUES ('2009', '441225', '封开县', '441200');
INSERT INTO `area` VALUES ('2010', '441226', '德庆县', '441200');
INSERT INTO `area` VALUES ('2011', '441283', '高要市', '441200');
INSERT INTO `area` VALUES ('2012', '441284', '四会市', '441200');
INSERT INTO `area` VALUES ('2014', '441302', '惠城区', '441300');
INSERT INTO `area` VALUES ('2015', '441303', '惠阳区', '441300');
INSERT INTO `area` VALUES ('2016', '441322', '博罗县', '441300');
INSERT INTO `area` VALUES ('2017', '441323', '惠东县', '441300');
INSERT INTO `area` VALUES ('2018', '441324', '龙门县', '441300');
INSERT INTO `area` VALUES ('2020', '441402', '梅江区', '441400');
INSERT INTO `area` VALUES ('2021', '441421', '梅　县', '441400');
INSERT INTO `area` VALUES ('2022', '441422', '大埔县', '441400');
INSERT INTO `area` VALUES ('2023', '441423', '丰顺县', '441400');
INSERT INTO `area` VALUES ('2024', '441424', '五华县', '441400');
INSERT INTO `area` VALUES ('2025', '441426', '平远县', '441400');
INSERT INTO `area` VALUES ('2026', '441427', '蕉岭县', '441400');
INSERT INTO `area` VALUES ('2027', '441481', '兴宁市', '441400');
INSERT INTO `area` VALUES ('2029', '441502', '城　区', '441500');
INSERT INTO `area` VALUES ('2030', '441521', '海丰县', '441500');
INSERT INTO `area` VALUES ('2031', '441523', '陆河县', '441500');
INSERT INTO `area` VALUES ('2032', '441581', '陆丰市', '441500');
INSERT INTO `area` VALUES ('2034', '441602', '源城区', '441600');
INSERT INTO `area` VALUES ('2035', '441621', '紫金县', '441600');
INSERT INTO `area` VALUES ('2036', '441622', '龙川县', '441600');
INSERT INTO `area` VALUES ('2037', '441623', '连平县', '441600');
INSERT INTO `area` VALUES ('2038', '441624', '和平县', '441600');
INSERT INTO `area` VALUES ('2039', '441625', '东源县', '441600');
INSERT INTO `area` VALUES ('2041', '441702', '江城区', '441700');
INSERT INTO `area` VALUES ('2042', '441721', '阳西县', '441700');
INSERT INTO `area` VALUES ('2043', '441723', '阳东县', '441700');
INSERT INTO `area` VALUES ('2044', '441781', '阳春市', '441700');
INSERT INTO `area` VALUES ('2046', '441802', '清城区', '441800');
INSERT INTO `area` VALUES ('2047', '441821', '佛冈县', '441800');
INSERT INTO `area` VALUES ('2048', '441823', '阳山县', '441800');
INSERT INTO `area` VALUES ('2049', '441825', '连山壮族瑶族自治县', '441800');
INSERT INTO `area` VALUES ('2050', '441826', '连南瑶族自治县', '441800');
INSERT INTO `area` VALUES ('2051', '441827', '清新县', '441800');
INSERT INTO `area` VALUES ('2052', '441881', '英德市', '441800');
INSERT INTO `area` VALUES ('2053', '441882', '连州市', '441800');
INSERT INTO `area` VALUES ('2055', '445102', '湘桥区', '445100');
INSERT INTO `area` VALUES ('2056', '445121', '潮安县', '445100');
INSERT INTO `area` VALUES ('2057', '445122', '饶平县', '445100');
INSERT INTO `area` VALUES ('2059', '445202', '榕城区', '445200');
INSERT INTO `area` VALUES ('2060', '445221', '揭东县', '445200');
INSERT INTO `area` VALUES ('2061', '445222', '揭西县', '445200');
INSERT INTO `area` VALUES ('2062', '445224', '惠来县', '445200');
INSERT INTO `area` VALUES ('2063', '445281', '普宁市', '445200');
INSERT INTO `area` VALUES ('2065', '445302', '云城区', '445300');
INSERT INTO `area` VALUES ('2066', '445321', '新兴县', '445300');
INSERT INTO `area` VALUES ('2067', '445322', '郁南县', '445300');
INSERT INTO `area` VALUES ('2068', '445323', '云安县', '445300');
INSERT INTO `area` VALUES ('2069', '445381', '罗定市', '445300');
INSERT INTO `area` VALUES ('2071', '450102', '兴宁区', '450100');
INSERT INTO `area` VALUES ('2072', '450103', '青秀区', '450100');
INSERT INTO `area` VALUES ('2073', '450105', '江南区', '450100');
INSERT INTO `area` VALUES ('2074', '450107', '西乡塘区', '450100');
INSERT INTO `area` VALUES ('2075', '450108', '良庆区', '450100');
INSERT INTO `area` VALUES ('2076', '450109', '邕宁区', '450100');
INSERT INTO `area` VALUES ('2077', '450122', '武鸣县', '450100');
INSERT INTO `area` VALUES ('2078', '450123', '隆安县', '450100');
INSERT INTO `area` VALUES ('2079', '450124', '马山县', '450100');
INSERT INTO `area` VALUES ('2080', '450125', '上林县', '450100');
INSERT INTO `area` VALUES ('2081', '450126', '宾阳县', '450100');
INSERT INTO `area` VALUES ('2082', '450127', '横　县', '450100');
INSERT INTO `area` VALUES ('2084', '450202', '城中区', '450200');
INSERT INTO `area` VALUES ('2085', '450203', '鱼峰区', '450200');
INSERT INTO `area` VALUES ('2086', '450204', '柳南区', '450200');
INSERT INTO `area` VALUES ('2087', '450205', '柳北区', '450200');
INSERT INTO `area` VALUES ('2088', '450221', '柳江县', '450200');
INSERT INTO `area` VALUES ('2089', '450222', '柳城县', '450200');
INSERT INTO `area` VALUES ('2090', '450223', '鹿寨县', '450200');
INSERT INTO `area` VALUES ('2091', '450224', '融安县', '450200');
INSERT INTO `area` VALUES ('2092', '450225', '融水苗族自治县', '450200');
INSERT INTO `area` VALUES ('2093', '450226', '三江侗族自治县', '450200');
INSERT INTO `area` VALUES ('2095', '450302', '秀峰区', '450300');
INSERT INTO `area` VALUES ('2096', '450303', '叠彩区', '450300');
INSERT INTO `area` VALUES ('2097', '450304', '象山区', '450300');
INSERT INTO `area` VALUES ('2098', '450305', '七星区', '450300');
INSERT INTO `area` VALUES ('2099', '450311', '雁山区', '450300');
INSERT INTO `area` VALUES ('2100', '450321', '阳朔县', '450300');
INSERT INTO `area` VALUES ('2101', '450322', '临桂县', '450300');
INSERT INTO `area` VALUES ('2102', '450323', '灵川县', '450300');
INSERT INTO `area` VALUES ('2103', '450324', '全州县', '450300');
INSERT INTO `area` VALUES ('2104', '450325', '兴安县', '450300');
INSERT INTO `area` VALUES ('2105', '450326', '永福县', '450300');
INSERT INTO `area` VALUES ('2106', '450327', '灌阳县', '450300');
INSERT INTO `area` VALUES ('2107', '450328', '龙胜各族自治县', '450300');
INSERT INTO `area` VALUES ('2108', '450329', '资源县', '450300');
INSERT INTO `area` VALUES ('2109', '450330', '平乐县', '450300');
INSERT INTO `area` VALUES ('2110', '450331', '荔蒲县', '450300');
INSERT INTO `area` VALUES ('2111', '450332', '恭城瑶族自治县', '450300');
INSERT INTO `area` VALUES ('2113', '450403', '万秀区', '450400');
INSERT INTO `area` VALUES ('2114', '450404', '蝶山区', '450400');
INSERT INTO `area` VALUES ('2115', '450405', '长洲区', '450400');
INSERT INTO `area` VALUES ('2116', '450421', '苍梧县', '450400');
INSERT INTO `area` VALUES ('2117', '450422', '藤　县', '450400');
INSERT INTO `area` VALUES ('2118', '450423', '蒙山县', '450400');
INSERT INTO `area` VALUES ('2119', '450481', '岑溪市', '450400');
INSERT INTO `area` VALUES ('2121', '450502', '海城区', '450500');
INSERT INTO `area` VALUES ('2122', '450503', '银海区', '450500');
INSERT INTO `area` VALUES ('2123', '450512', '铁山港区', '450500');
INSERT INTO `area` VALUES ('2124', '450521', '合浦县', '450500');
INSERT INTO `area` VALUES ('2126', '450602', '港口区', '450600');
INSERT INTO `area` VALUES ('2127', '450603', '防城区', '450600');
INSERT INTO `area` VALUES ('2128', '450621', '上思县', '450600');
INSERT INTO `area` VALUES ('2129', '450681', '东兴市', '450600');
INSERT INTO `area` VALUES ('2131', '450702', '钦南区', '450700');
INSERT INTO `area` VALUES ('2132', '450703', '钦北区', '450700');
INSERT INTO `area` VALUES ('2133', '450721', '灵山县', '450700');
INSERT INTO `area` VALUES ('2134', '450722', '浦北县', '450700');
INSERT INTO `area` VALUES ('2136', '450802', '港北区', '450800');
INSERT INTO `area` VALUES ('2137', '450803', '港南区', '450800');
INSERT INTO `area` VALUES ('2138', '450804', '覃塘区', '450800');
INSERT INTO `area` VALUES ('2139', '450821', '平南县', '450800');
INSERT INTO `area` VALUES ('2140', '450881', '桂平市', '450800');
INSERT INTO `area` VALUES ('2142', '450902', '玉州区', '450900');
INSERT INTO `area` VALUES ('2143', '450921', '容　县', '450900');
INSERT INTO `area` VALUES ('2144', '450922', '陆川县', '450900');
INSERT INTO `area` VALUES ('2145', '450923', '博白县', '450900');
INSERT INTO `area` VALUES ('2146', '450924', '兴业县', '450900');
INSERT INTO `area` VALUES ('2147', '450981', '北流市', '450900');
INSERT INTO `area` VALUES ('2149', '451002', '右江区', '451000');
INSERT INTO `area` VALUES ('2150', '451021', '田阳县', '451000');
INSERT INTO `area` VALUES ('2151', '451022', '田东县', '451000');
INSERT INTO `area` VALUES ('2152', '451023', '平果县', '451000');
INSERT INTO `area` VALUES ('2153', '451024', '德保县', '451000');
INSERT INTO `area` VALUES ('2154', '451025', '靖西县', '451000');
INSERT INTO `area` VALUES ('2155', '451026', '那坡县', '451000');
INSERT INTO `area` VALUES ('2156', '451027', '凌云县', '451000');
INSERT INTO `area` VALUES ('2157', '451028', '乐业县', '451000');
INSERT INTO `area` VALUES ('2158', '451029', '田林县', '451000');
INSERT INTO `area` VALUES ('2159', '451030', '西林县', '451000');
INSERT INTO `area` VALUES ('2160', '451031', '隆林各族自治县', '451000');
INSERT INTO `area` VALUES ('2162', '451102', '八步区', '451100');
INSERT INTO `area` VALUES ('2163', '451121', '昭平县', '451100');
INSERT INTO `area` VALUES ('2164', '451122', '钟山县', '451100');
INSERT INTO `area` VALUES ('2165', '451123', '富川瑶族自治县', '451100');
INSERT INTO `area` VALUES ('2167', '451202', '金城江区', '451200');
INSERT INTO `area` VALUES ('2168', '451221', '南丹县', '451200');
INSERT INTO `area` VALUES ('2169', '451222', '天峨县', '451200');
INSERT INTO `area` VALUES ('2170', '451223', '凤山县', '451200');
INSERT INTO `area` VALUES ('2171', '451224', '东兰县', '451200');
INSERT INTO `area` VALUES ('2172', '451225', '罗城仫佬族自治县', '451200');
INSERT INTO `area` VALUES ('2173', '451226', '环江毛南族自治县', '451200');
INSERT INTO `area` VALUES ('2174', '451227', '巴马瑶族自治县', '451200');
INSERT INTO `area` VALUES ('2175', '451228', '都安瑶族自治县', '451200');
INSERT INTO `area` VALUES ('2176', '451229', '大化瑶族自治县', '451200');
INSERT INTO `area` VALUES ('2177', '451281', '宜州市', '451200');
INSERT INTO `area` VALUES ('2179', '451302', '兴宾区', '451300');
INSERT INTO `area` VALUES ('2180', '451321', '忻城县', '451300');
INSERT INTO `area` VALUES ('2181', '451322', '象州县', '451300');
INSERT INTO `area` VALUES ('2182', '451323', '武宣县', '451300');
INSERT INTO `area` VALUES ('2183', '451324', '金秀瑶族自治县', '451300');
INSERT INTO `area` VALUES ('2184', '451381', '合山市', '451300');
INSERT INTO `area` VALUES ('2186', '451402', '江洲区', '451400');
INSERT INTO `area` VALUES ('2187', '451421', '扶绥县', '451400');
INSERT INTO `area` VALUES ('2188', '451422', '宁明县', '451400');
INSERT INTO `area` VALUES ('2189', '451423', '龙州县', '451400');
INSERT INTO `area` VALUES ('2190', '451424', '大新县', '451400');
INSERT INTO `area` VALUES ('2191', '451425', '天等县', '451400');
INSERT INTO `area` VALUES ('2192', '451481', '凭祥市', '451400');
INSERT INTO `area` VALUES ('2194', '460105', '秀英区', '460100');
INSERT INTO `area` VALUES ('2195', '460106', '龙华区', '460100');
INSERT INTO `area` VALUES ('2196', '460107', '琼山区', '460100');
INSERT INTO `area` VALUES ('2197', '460108', '美兰区', '460100');
INSERT INTO `area` VALUES ('2199', '469001', '五指山市', '469000');
INSERT INTO `area` VALUES ('2200', '469002', '琼海市', '469000');
INSERT INTO `area` VALUES ('2201', '469003', '儋州市', '469000');
INSERT INTO `area` VALUES ('2202', '469005', '文昌市', '469000');
INSERT INTO `area` VALUES ('2203', '469006', '万宁市', '469000');
INSERT INTO `area` VALUES ('2204', '469007', '东方市', '469000');
INSERT INTO `area` VALUES ('2205', '469025', '定安县', '469000');
INSERT INTO `area` VALUES ('2206', '469026', '屯昌县', '469000');
INSERT INTO `area` VALUES ('2207', '469027', '澄迈县', '469000');
INSERT INTO `area` VALUES ('2208', '469028', '临高县', '469000');
INSERT INTO `area` VALUES ('2209', '469030', '白沙黎族自治县', '469000');
INSERT INTO `area` VALUES ('2210', '469031', '昌江黎族自治县', '469000');
INSERT INTO `area` VALUES ('2211', '469033', '乐东黎族自治县', '469000');
INSERT INTO `area` VALUES ('2212', '469034', '陵水黎族自治县', '469000');
INSERT INTO `area` VALUES ('2213', '469035', '保亭黎族苗族自治县', '469000');
INSERT INTO `area` VALUES ('2214', '469036', '琼中黎族苗族自治县', '469000');
INSERT INTO `area` VALUES ('2215', '469037', '西沙群岛', '469000');
INSERT INTO `area` VALUES ('2216', '469038', '南沙群岛', '469000');
INSERT INTO `area` VALUES ('2217', '469039', '中沙群岛的岛礁及其海域', '469000');
INSERT INTO `area` VALUES ('2218', '500101', '万州区', '500100');
INSERT INTO `area` VALUES ('2219', '500102', '涪陵区', '500100');
INSERT INTO `area` VALUES ('2220', '500103', '渝中区', '500100');
INSERT INTO `area` VALUES ('2221', '500104', '大渡口区', '500100');
INSERT INTO `area` VALUES ('2222', '500105', '江北区', '500100');
INSERT INTO `area` VALUES ('2223', '500106', '沙坪坝区', '500100');
INSERT INTO `area` VALUES ('2224', '500107', '九龙坡区', '500100');
INSERT INTO `area` VALUES ('2225', '500108', '南岸区', '500100');
INSERT INTO `area` VALUES ('2226', '500109', '北碚区', '500100');
INSERT INTO `area` VALUES ('2227', '500110', '万盛区', '500100');
INSERT INTO `area` VALUES ('2228', '500111', '双桥区', '500100');
INSERT INTO `area` VALUES ('2229', '500112', '渝北区', '500100');
INSERT INTO `area` VALUES ('2230', '500113', '巴南区', '500100');
INSERT INTO `area` VALUES ('2231', '500114', '黔江区', '500100');
INSERT INTO `area` VALUES ('2232', '500115', '长寿区', '500100');
INSERT INTO `area` VALUES ('2233', '500222', '綦江县', '500100');
INSERT INTO `area` VALUES ('2234', '500223', '潼南县', '500100');
INSERT INTO `area` VALUES ('2235', '500224', '铜梁县', '500100');
INSERT INTO `area` VALUES ('2236', '500225', '大足县', '500100');
INSERT INTO `area` VALUES ('2237', '500226', '荣昌县', '500100');
INSERT INTO `area` VALUES ('2238', '500227', '璧山县', '500100');
INSERT INTO `area` VALUES ('2239', '500228', '梁平县', '500100');
INSERT INTO `area` VALUES ('2240', '500229', '城口县', '500100');
INSERT INTO `area` VALUES ('2241', '500230', '丰都县', '500100');
INSERT INTO `area` VALUES ('2242', '500231', '垫江县', '500100');
INSERT INTO `area` VALUES ('2243', '500232', '武隆县', '500100');
INSERT INTO `area` VALUES ('2244', '500233', '忠　县', '500100');
INSERT INTO `area` VALUES ('2245', '500234', '开　县', '500100');
INSERT INTO `area` VALUES ('2246', '500235', '云阳县', '500100');
INSERT INTO `area` VALUES ('2247', '500236', '奉节县', '500100');
INSERT INTO `area` VALUES ('2248', '500237', '巫山县', '500100');
INSERT INTO `area` VALUES ('2249', '500238', '巫溪县', '500100');
INSERT INTO `area` VALUES ('2250', '500240', '石柱土家族自治县', '500100');
INSERT INTO `area` VALUES ('2251', '500241', '秀山土家族苗族自治县', '500100');
INSERT INTO `area` VALUES ('2252', '500242', '酉阳土家族苗族自治县', '500100');
INSERT INTO `area` VALUES ('2253', '500243', '彭水苗族土家族自治县', '500100');
INSERT INTO `area` VALUES ('2254', '500381', '江津市', '500100');
INSERT INTO `area` VALUES ('2255', '500382', '合川市', '500100');
INSERT INTO `area` VALUES ('2256', '500383', '永川市', '500100');
INSERT INTO `area` VALUES ('2257', '500384', '南川市', '500100');
INSERT INTO `area` VALUES ('2259', '510104', '锦江区', '510100');
INSERT INTO `area` VALUES ('2260', '510105', '青羊区', '510100');
INSERT INTO `area` VALUES ('2261', '510106', '金牛区', '510100');
INSERT INTO `area` VALUES ('2262', '510107', '武侯区', '510100');
INSERT INTO `area` VALUES ('2263', '510108', '成华区', '510100');
INSERT INTO `area` VALUES ('2264', '510112', '龙泉驿区', '510100');
INSERT INTO `area` VALUES ('2265', '510113', '青白江区', '510100');
INSERT INTO `area` VALUES ('2266', '510114', '新都区', '510100');
INSERT INTO `area` VALUES ('2267', '510115', '温江区', '510100');
INSERT INTO `area` VALUES ('2268', '510121', '金堂县', '510100');
INSERT INTO `area` VALUES ('2269', '510122', '双流县', '510100');
INSERT INTO `area` VALUES ('2270', '510124', '郫　县', '510100');
INSERT INTO `area` VALUES ('2271', '510129', '大邑县', '510100');
INSERT INTO `area` VALUES ('2272', '510131', '蒲江县', '510100');
INSERT INTO `area` VALUES ('2273', '510132', '新津县', '510100');
INSERT INTO `area` VALUES ('2274', '510181', '都江堰市', '510100');
INSERT INTO `area` VALUES ('2275', '510182', '彭州市', '510100');
INSERT INTO `area` VALUES ('2276', '510183', '邛崃市', '510100');
INSERT INTO `area` VALUES ('2277', '510184', '崇州市', '510100');
INSERT INTO `area` VALUES ('2279', '510302', '自流井区', '510300');
INSERT INTO `area` VALUES ('2280', '510303', '贡井区', '510300');
INSERT INTO `area` VALUES ('2281', '510304', '大安区', '510300');
INSERT INTO `area` VALUES ('2282', '510311', '沿滩区', '510300');
INSERT INTO `area` VALUES ('2283', '510321', '荣　县', '510300');
INSERT INTO `area` VALUES ('2284', '510322', '富顺县', '510300');
INSERT INTO `area` VALUES ('2286', '510402', '东　区', '510400');
INSERT INTO `area` VALUES ('2287', '510403', '西　区', '510400');
INSERT INTO `area` VALUES ('2288', '510411', '仁和区', '510400');
INSERT INTO `area` VALUES ('2289', '510421', '米易县', '510400');
INSERT INTO `area` VALUES ('2290', '510422', '盐边县', '510400');
INSERT INTO `area` VALUES ('2292', '510502', '江阳区', '510500');
INSERT INTO `area` VALUES ('2293', '510503', '纳溪区', '510500');
INSERT INTO `area` VALUES ('2294', '510504', '龙马潭区', '510500');
INSERT INTO `area` VALUES ('2295', '510521', '泸　县', '510500');
INSERT INTO `area` VALUES ('2296', '510522', '合江县', '510500');
INSERT INTO `area` VALUES ('2297', '510524', '叙永县', '510500');
INSERT INTO `area` VALUES ('2298', '510525', '古蔺县', '510500');
INSERT INTO `area` VALUES ('2300', '510603', '旌阳区', '510600');
INSERT INTO `area` VALUES ('2301', '510623', '中江县', '510600');
INSERT INTO `area` VALUES ('2302', '510626', '罗江县', '510600');
INSERT INTO `area` VALUES ('2303', '510681', '广汉市', '510600');
INSERT INTO `area` VALUES ('2304', '510682', '什邡市', '510600');
INSERT INTO `area` VALUES ('2305', '510683', '绵竹市', '510600');
INSERT INTO `area` VALUES ('2307', '510703', '涪城区', '510700');
INSERT INTO `area` VALUES ('2308', '510704', '游仙区', '510700');
INSERT INTO `area` VALUES ('2309', '510722', '三台县', '510700');
INSERT INTO `area` VALUES ('2310', '510723', '盐亭县', '510700');
INSERT INTO `area` VALUES ('2311', '510724', '安　县', '510700');
INSERT INTO `area` VALUES ('2312', '510725', '梓潼县', '510700');
INSERT INTO `area` VALUES ('2313', '510726', '北川羌族自治县', '510700');
INSERT INTO `area` VALUES ('2314', '510727', '平武县', '510700');
INSERT INTO `area` VALUES ('2315', '510781', '江油市', '510700');
INSERT INTO `area` VALUES ('2317', '510802', '市中区', '510800');
INSERT INTO `area` VALUES ('2318', '510811', '元坝区', '510800');
INSERT INTO `area` VALUES ('2319', '510812', '朝天区', '510800');
INSERT INTO `area` VALUES ('2320', '510821', '旺苍县', '510800');
INSERT INTO `area` VALUES ('2321', '510822', '青川县', '510800');
INSERT INTO `area` VALUES ('2322', '510823', '剑阁县', '510800');
INSERT INTO `area` VALUES ('2323', '510824', '苍溪县', '510800');
INSERT INTO `area` VALUES ('2325', '510903', '船山区', '510900');
INSERT INTO `area` VALUES ('2326', '510904', '安居区', '510900');
INSERT INTO `area` VALUES ('2327', '510921', '蓬溪县', '510900');
INSERT INTO `area` VALUES ('2328', '510922', '射洪县', '510900');
INSERT INTO `area` VALUES ('2329', '510923', '大英县', '510900');
INSERT INTO `area` VALUES ('2331', '511002', '市中区', '511000');
INSERT INTO `area` VALUES ('2332', '511011', '东兴区', '511000');
INSERT INTO `area` VALUES ('2333', '511024', '威远县', '511000');
INSERT INTO `area` VALUES ('2334', '511025', '资中县', '511000');
INSERT INTO `area` VALUES ('2335', '511028', '隆昌县', '511000');
INSERT INTO `area` VALUES ('2337', '511102', '市中区', '511100');
INSERT INTO `area` VALUES ('2338', '511111', '沙湾区', '511100');
INSERT INTO `area` VALUES ('2339', '511112', '五通桥区', '511100');
INSERT INTO `area` VALUES ('2340', '511113', '金口河区', '511100');
INSERT INTO `area` VALUES ('2341', '511123', '犍为县', '511100');
INSERT INTO `area` VALUES ('2342', '511124', '井研县', '511100');
INSERT INTO `area` VALUES ('2343', '511126', '夹江县', '511100');
INSERT INTO `area` VALUES ('2344', '511129', '沐川县', '511100');
INSERT INTO `area` VALUES ('2345', '511132', '峨边彝族自治县', '511100');
INSERT INTO `area` VALUES ('2346', '511133', '马边彝族自治县', '511100');
INSERT INTO `area` VALUES ('2347', '511181', '峨眉山市', '511100');
INSERT INTO `area` VALUES ('2349', '511302', '顺庆区', '511300');
INSERT INTO `area` VALUES ('2350', '511303', '高坪区', '511300');
INSERT INTO `area` VALUES ('2351', '511304', '嘉陵区', '511300');
INSERT INTO `area` VALUES ('2352', '511321', '南部县', '511300');
INSERT INTO `area` VALUES ('2353', '511322', '营山县', '511300');
INSERT INTO `area` VALUES ('2354', '511323', '蓬安县', '511300');
INSERT INTO `area` VALUES ('2355', '511324', '仪陇县', '511300');
INSERT INTO `area` VALUES ('2356', '511325', '西充县', '511300');
INSERT INTO `area` VALUES ('2357', '511381', '阆中市', '511300');
INSERT INTO `area` VALUES ('2359', '511402', '东坡区', '511400');
INSERT INTO `area` VALUES ('2360', '511421', '仁寿县', '511400');
INSERT INTO `area` VALUES ('2361', '511422', '彭山县', '511400');
INSERT INTO `area` VALUES ('2362', '511423', '洪雅县', '511400');
INSERT INTO `area` VALUES ('2363', '511424', '丹棱县', '511400');
INSERT INTO `area` VALUES ('2364', '511425', '青神县', '511400');
INSERT INTO `area` VALUES ('2366', '511502', '翠屏区', '511500');
INSERT INTO `area` VALUES ('2367', '511521', '宜宾县', '511500');
INSERT INTO `area` VALUES ('2368', '511522', '南溪县', '511500');
INSERT INTO `area` VALUES ('2369', '511523', '江安县', '511500');
INSERT INTO `area` VALUES ('2370', '511524', '长宁县', '511500');
INSERT INTO `area` VALUES ('2371', '511525', '高　县', '511500');
INSERT INTO `area` VALUES ('2372', '511526', '珙　县', '511500');
INSERT INTO `area` VALUES ('2373', '511527', '筠连县', '511500');
INSERT INTO `area` VALUES ('2374', '511528', '兴文县', '511500');
INSERT INTO `area` VALUES ('2375', '511529', '屏山县', '511500');
INSERT INTO `area` VALUES ('2377', '511602', '广安区', '511600');
INSERT INTO `area` VALUES ('2378', '511621', '岳池县', '511600');
INSERT INTO `area` VALUES ('2379', '511622', '武胜县', '511600');
INSERT INTO `area` VALUES ('2380', '511623', '邻水县', '511600');
INSERT INTO `area` VALUES ('2381', '511681', '华莹市', '511600');
INSERT INTO `area` VALUES ('2383', '511702', '通川区', '511700');
INSERT INTO `area` VALUES ('2384', '511721', '达　县', '511700');
INSERT INTO `area` VALUES ('2385', '511722', '宣汉县', '511700');
INSERT INTO `area` VALUES ('2386', '511723', '开江县', '511700');
INSERT INTO `area` VALUES ('2387', '511724', '大竹县', '511700');
INSERT INTO `area` VALUES ('2388', '511725', '渠　县', '511700');
INSERT INTO `area` VALUES ('2389', '511781', '万源市', '511700');
INSERT INTO `area` VALUES ('2391', '511802', '雨城区', '511800');
INSERT INTO `area` VALUES ('2392', '511821', '名山县', '511800');
INSERT INTO `area` VALUES ('2393', '511822', '荥经县', '511800');
INSERT INTO `area` VALUES ('2394', '511823', '汉源县', '511800');
INSERT INTO `area` VALUES ('2395', '511824', '石棉县', '511800');
INSERT INTO `area` VALUES ('2396', '511825', '天全县', '511800');
INSERT INTO `area` VALUES ('2397', '511826', '芦山县', '511800');
INSERT INTO `area` VALUES ('2398', '511827', '宝兴县', '511800');
INSERT INTO `area` VALUES ('2400', '511902', '巴州区', '511900');
INSERT INTO `area` VALUES ('2401', '511921', '通江县', '511900');
INSERT INTO `area` VALUES ('2402', '511922', '南江县', '511900');
INSERT INTO `area` VALUES ('2403', '511923', '平昌县', '511900');
INSERT INTO `area` VALUES ('2405', '512002', '雁江区', '512000');
INSERT INTO `area` VALUES ('2406', '512021', '安岳县', '512000');
INSERT INTO `area` VALUES ('2407', '512022', '乐至县', '512000');
INSERT INTO `area` VALUES ('2408', '512081', '简阳市', '512000');
INSERT INTO `area` VALUES ('2409', '513221', '汶川县', '513200');
INSERT INTO `area` VALUES ('2410', '513222', '理　县', '513200');
INSERT INTO `area` VALUES ('2411', '513223', '茂　县', '513200');
INSERT INTO `area` VALUES ('2412', '513224', '松潘县', '513200');
INSERT INTO `area` VALUES ('2413', '513225', '九寨沟县', '513200');
INSERT INTO `area` VALUES ('2414', '513226', '金川县', '513200');
INSERT INTO `area` VALUES ('2415', '513227', '小金县', '513200');
INSERT INTO `area` VALUES ('2416', '513228', '黑水县', '513200');
INSERT INTO `area` VALUES ('2417', '513229', '马尔康县', '513200');
INSERT INTO `area` VALUES ('2418', '513230', '壤塘县', '513200');
INSERT INTO `area` VALUES ('2419', '513231', '阿坝县', '513200');
INSERT INTO `area` VALUES ('2420', '513232', '若尔盖县', '513200');
INSERT INTO `area` VALUES ('2421', '513233', '红原县', '513200');
INSERT INTO `area` VALUES ('2422', '513321', '康定县', '513300');
INSERT INTO `area` VALUES ('2423', '513322', '泸定县', '513300');
INSERT INTO `area` VALUES ('2424', '513323', '丹巴县', '513300');
INSERT INTO `area` VALUES ('2425', '513324', '九龙县', '513300');
INSERT INTO `area` VALUES ('2426', '513325', '雅江县', '513300');
INSERT INTO `area` VALUES ('2427', '513326', '道孚县', '513300');
INSERT INTO `area` VALUES ('2428', '513327', '炉霍县', '513300');
INSERT INTO `area` VALUES ('2429', '513328', '甘孜县', '513300');
INSERT INTO `area` VALUES ('2430', '513329', '新龙县', '513300');
INSERT INTO `area` VALUES ('2431', '513330', '德格县', '513300');
INSERT INTO `area` VALUES ('2432', '513331', '白玉县', '513300');
INSERT INTO `area` VALUES ('2433', '513332', '石渠县', '513300');
INSERT INTO `area` VALUES ('2434', '513333', '色达县', '513300');
INSERT INTO `area` VALUES ('2435', '513334', '理塘县', '513300');
INSERT INTO `area` VALUES ('2436', '513335', '巴塘县', '513300');
INSERT INTO `area` VALUES ('2437', '513336', '乡城县', '513300');
INSERT INTO `area` VALUES ('2438', '513337', '稻城县', '513300');
INSERT INTO `area` VALUES ('2439', '513338', '得荣县', '513300');
INSERT INTO `area` VALUES ('2440', '513401', '西昌市', '513400');
INSERT INTO `area` VALUES ('2441', '513422', '木里藏族自治县', '513400');
INSERT INTO `area` VALUES ('2442', '513423', '盐源县', '513400');
INSERT INTO `area` VALUES ('2443', '513424', '德昌县', '513400');
INSERT INTO `area` VALUES ('2444', '513425', '会理县', '513400');
INSERT INTO `area` VALUES ('2445', '513426', '会东县', '513400');
INSERT INTO `area` VALUES ('2446', '513427', '宁南县', '513400');
INSERT INTO `area` VALUES ('2447', '513428', '普格县', '513400');
INSERT INTO `area` VALUES ('2448', '513429', '布拖县', '513400');
INSERT INTO `area` VALUES ('2449', '513430', '金阳县', '513400');
INSERT INTO `area` VALUES ('2450', '513431', '昭觉县', '513400');
INSERT INTO `area` VALUES ('2451', '513432', '喜德县', '513400');
INSERT INTO `area` VALUES ('2452', '513433', '冕宁县', '513400');
INSERT INTO `area` VALUES ('2453', '513434', '越西县', '513400');
INSERT INTO `area` VALUES ('2454', '513435', '甘洛县', '513400');
INSERT INTO `area` VALUES ('2455', '513436', '美姑县', '513400');
INSERT INTO `area` VALUES ('2456', '513437', '雷波县', '513400');
INSERT INTO `area` VALUES ('2458', '520102', '南明区', '520100');
INSERT INTO `area` VALUES ('2459', '520103', '云岩区', '520100');
INSERT INTO `area` VALUES ('2460', '520111', '花溪区', '520100');
INSERT INTO `area` VALUES ('2461', '520112', '乌当区', '520100');
INSERT INTO `area` VALUES ('2462', '520113', '白云区', '520100');
INSERT INTO `area` VALUES ('2463', '520114', '小河区', '520100');
INSERT INTO `area` VALUES ('2464', '520121', '开阳县', '520100');
INSERT INTO `area` VALUES ('2465', '520122', '息烽县', '520100');
INSERT INTO `area` VALUES ('2466', '520123', '修文县', '520100');
INSERT INTO `area` VALUES ('2467', '520181', '清镇市', '520100');
INSERT INTO `area` VALUES ('2468', '520201', '钟山区', '520200');
INSERT INTO `area` VALUES ('2469', '520203', '六枝特区', '520200');
INSERT INTO `area` VALUES ('2470', '520221', '水城县', '520200');
INSERT INTO `area` VALUES ('2471', '520222', '盘　县', '520200');
INSERT INTO `area` VALUES ('2473', '520302', '红花岗区', '520300');
INSERT INTO `area` VALUES ('2474', '520303', '汇川区', '520300');
INSERT INTO `area` VALUES ('2475', '520321', '遵义县', '520300');
INSERT INTO `area` VALUES ('2476', '520322', '桐梓县', '520300');
INSERT INTO `area` VALUES ('2477', '520323', '绥阳县', '520300');
INSERT INTO `area` VALUES ('2478', '520324', '正安县', '520300');
INSERT INTO `area` VALUES ('2479', '520325', '道真仡佬族苗族自治县', '520300');
INSERT INTO `area` VALUES ('2480', '520326', '务川仡佬族苗族自治县', '520300');
INSERT INTO `area` VALUES ('2481', '520327', '凤冈县', '520300');
INSERT INTO `area` VALUES ('2482', '520328', '湄潭县', '520300');
INSERT INTO `area` VALUES ('2483', '520329', '余庆县', '520300');
INSERT INTO `area` VALUES ('2484', '520330', '习水县', '520300');
INSERT INTO `area` VALUES ('2485', '520381', '赤水市', '520300');
INSERT INTO `area` VALUES ('2486', '520382', '仁怀市', '520300');
INSERT INTO `area` VALUES ('2488', '520402', '西秀区', '520400');
INSERT INTO `area` VALUES ('2489', '520421', '平坝县', '520400');
INSERT INTO `area` VALUES ('2490', '520422', '普定县', '520400');
INSERT INTO `area` VALUES ('2491', '520423', '镇宁布依族苗族自治县', '520400');
INSERT INTO `area` VALUES ('2492', '520424', '关岭布依族苗族自治县', '520400');
INSERT INTO `area` VALUES ('2493', '520425', '紫云苗族布依族自治县', '520400');
INSERT INTO `area` VALUES ('2494', '522201', '铜仁市', '522200');
INSERT INTO `area` VALUES ('2495', '522222', '江口县', '522200');
INSERT INTO `area` VALUES ('2496', '522223', '玉屏侗族自治县', '522200');
INSERT INTO `area` VALUES ('2497', '522224', '石阡县', '522200');
INSERT INTO `area` VALUES ('2498', '522225', '思南县', '522200');
INSERT INTO `area` VALUES ('2499', '522226', '印江土家族苗族自治县', '522200');
INSERT INTO `area` VALUES ('2500', '522227', '德江县', '522200');
INSERT INTO `area` VALUES ('2501', '522228', '沿河土家族自治县', '522200');
INSERT INTO `area` VALUES ('2502', '522229', '松桃苗族自治县', '522200');
INSERT INTO `area` VALUES ('2503', '522230', '万山特区', '522200');
INSERT INTO `area` VALUES ('2504', '522301', '兴义市', '522300');
INSERT INTO `area` VALUES ('2505', '522322', '兴仁县', '522300');
INSERT INTO `area` VALUES ('2506', '522323', '普安县', '522300');
INSERT INTO `area` VALUES ('2507', '522324', '晴隆县', '522300');
INSERT INTO `area` VALUES ('2508', '522325', '贞丰县', '522300');
INSERT INTO `area` VALUES ('2509', '522326', '望谟县', '522300');
INSERT INTO `area` VALUES ('2510', '522327', '册亨县', '522300');
INSERT INTO `area` VALUES ('2511', '522328', '安龙县', '522300');
INSERT INTO `area` VALUES ('2512', '522401', '毕节市', '522400');
INSERT INTO `area` VALUES ('2513', '522422', '大方县', '522400');
INSERT INTO `area` VALUES ('2514', '522423', '黔西县', '522400');
INSERT INTO `area` VALUES ('2515', '522424', '金沙县', '522400');
INSERT INTO `area` VALUES ('2516', '522425', '织金县', '522400');
INSERT INTO `area` VALUES ('2517', '522426', '纳雍县', '522400');
INSERT INTO `area` VALUES ('2518', '522427', '威宁彝族回族苗族自治县', '522400');
INSERT INTO `area` VALUES ('2519', '522428', '赫章县', '522400');
INSERT INTO `area` VALUES ('2520', '522601', '凯里市', '522600');
INSERT INTO `area` VALUES ('2521', '522622', '黄平县', '522600');
INSERT INTO `area` VALUES ('2522', '522623', '施秉县', '522600');
INSERT INTO `area` VALUES ('2523', '522624', '三穗县', '522600');
INSERT INTO `area` VALUES ('2524', '522625', '镇远县', '522600');
INSERT INTO `area` VALUES ('2525', '522626', '岑巩县', '522600');
INSERT INTO `area` VALUES ('2526', '522627', '天柱县', '522600');
INSERT INTO `area` VALUES ('2527', '522628', '锦屏县', '522600');
INSERT INTO `area` VALUES ('2528', '522629', '剑河县', '522600');
INSERT INTO `area` VALUES ('2529', '522630', '台江县', '522600');
INSERT INTO `area` VALUES ('2530', '522631', '黎平县', '522600');
INSERT INTO `area` VALUES ('2531', '522632', '榕江县', '522600');
INSERT INTO `area` VALUES ('2532', '522633', '从江县', '522600');
INSERT INTO `area` VALUES ('2533', '522634', '雷山县', '522600');
INSERT INTO `area` VALUES ('2534', '522635', '麻江县', '522600');
INSERT INTO `area` VALUES ('2535', '522636', '丹寨县', '522600');
INSERT INTO `area` VALUES ('2536', '522701', '都匀市', '522700');
INSERT INTO `area` VALUES ('2537', '522702', '福泉市', '522700');
INSERT INTO `area` VALUES ('2538', '522722', '荔波县', '522700');
INSERT INTO `area` VALUES ('2539', '522723', '贵定县', '522700');
INSERT INTO `area` VALUES ('2540', '522725', '瓮安县', '522700');
INSERT INTO `area` VALUES ('2541', '522726', '独山县', '522700');
INSERT INTO `area` VALUES ('2542', '522727', '平塘县', '522700');
INSERT INTO `area` VALUES ('2543', '522728', '罗甸县', '522700');
INSERT INTO `area` VALUES ('2544', '522729', '长顺县', '522700');
INSERT INTO `area` VALUES ('2545', '522730', '龙里县', '522700');
INSERT INTO `area` VALUES ('2546', '522731', '惠水县', '522700');
INSERT INTO `area` VALUES ('2547', '522732', '三都水族自治县', '522700');
INSERT INTO `area` VALUES ('2549', '530102', '五华区', '530100');
INSERT INTO `area` VALUES ('2550', '530103', '盘龙区', '530100');
INSERT INTO `area` VALUES ('2551', '530111', '官渡区', '530100');
INSERT INTO `area` VALUES ('2552', '530112', '西山区', '530100');
INSERT INTO `area` VALUES ('2553', '530113', '东川区', '530100');
INSERT INTO `area` VALUES ('2554', '530121', '呈贡县', '530100');
INSERT INTO `area` VALUES ('2555', '530122', '晋宁县', '530100');
INSERT INTO `area` VALUES ('2556', '530124', '富民县', '530100');
INSERT INTO `area` VALUES ('2557', '530125', '宜良县', '530100');
INSERT INTO `area` VALUES ('2558', '530126', '石林彝族自治县', '530100');
INSERT INTO `area` VALUES ('2559', '530127', '嵩明县', '530100');
INSERT INTO `area` VALUES ('2560', '530128', '禄劝彝族苗族自治县', '530100');
INSERT INTO `area` VALUES ('2561', '530129', '寻甸回族彝族自治县', '530100');
INSERT INTO `area` VALUES ('2562', '530181', '安宁市', '530100');
INSERT INTO `area` VALUES ('2564', '530302', '麒麟区', '530300');
INSERT INTO `area` VALUES ('2565', '530321', '马龙县', '530300');
INSERT INTO `area` VALUES ('2566', '530322', '陆良县', '530300');
INSERT INTO `area` VALUES ('2567', '530323', '师宗县', '530300');
INSERT INTO `area` VALUES ('2568', '530324', '罗平县', '530300');
INSERT INTO `area` VALUES ('2569', '530325', '富源县', '530300');
INSERT INTO `area` VALUES ('2570', '530326', '会泽县', '530300');
INSERT INTO `area` VALUES ('2571', '530328', '沾益县', '530300');
INSERT INTO `area` VALUES ('2572', '530381', '宣威市', '530300');
INSERT INTO `area` VALUES ('2574', '530402', '红塔区', '530400');
INSERT INTO `area` VALUES ('2575', '530421', '江川县', '530400');
INSERT INTO `area` VALUES ('2576', '530422', '澄江县', '530400');
INSERT INTO `area` VALUES ('2577', '530423', '通海县', '530400');
INSERT INTO `area` VALUES ('2578', '530424', '华宁县', '530400');
INSERT INTO `area` VALUES ('2579', '530425', '易门县', '530400');
INSERT INTO `area` VALUES ('2580', '530426', '峨山彝族自治县', '530400');
INSERT INTO `area` VALUES ('2581', '530427', '新平彝族傣族自治县', '530400');
INSERT INTO `area` VALUES ('2582', '530428', '元江哈尼族彝族傣族自治县', '530400');
INSERT INTO `area` VALUES ('2584', '530502', '隆阳区', '530500');
INSERT INTO `area` VALUES ('2585', '530521', '施甸县', '530500');
INSERT INTO `area` VALUES ('2586', '530522', '腾冲县', '530500');
INSERT INTO `area` VALUES ('2587', '530523', '龙陵县', '530500');
INSERT INTO `area` VALUES ('2588', '530524', '昌宁县', '530500');
INSERT INTO `area` VALUES ('2590', '530602', '昭阳区', '530600');
INSERT INTO `area` VALUES ('2591', '530621', '鲁甸县', '530600');
INSERT INTO `area` VALUES ('2592', '530622', '巧家县', '530600');
INSERT INTO `area` VALUES ('2593', '530623', '盐津县', '530600');
INSERT INTO `area` VALUES ('2594', '530624', '大关县', '530600');
INSERT INTO `area` VALUES ('2595', '530625', '永善县', '530600');
INSERT INTO `area` VALUES ('2596', '530626', '绥江县', '530600');
INSERT INTO `area` VALUES ('2597', '530627', '镇雄县', '530600');
INSERT INTO `area` VALUES ('2598', '530628', '彝良县', '530600');
INSERT INTO `area` VALUES ('2599', '530629', '威信县', '530600');
INSERT INTO `area` VALUES ('2600', '530630', '水富县', '530600');
INSERT INTO `area` VALUES ('2602', '530702', '古城区', '530700');
INSERT INTO `area` VALUES ('2603', '530721', '玉龙纳西族自治县', '530700');
INSERT INTO `area` VALUES ('2604', '530722', '永胜县', '530700');
INSERT INTO `area` VALUES ('2605', '530723', '华坪县', '530700');
INSERT INTO `area` VALUES ('2606', '530724', '宁蒗彝族自治县', '530700');
INSERT INTO `area` VALUES ('2608', '530802', '翠云区', '530800');
INSERT INTO `area` VALUES ('2609', '530821', '普洱哈尼族彝族自治县', '530800');
INSERT INTO `area` VALUES ('2610', '530822', '墨江哈尼族自治县', '530800');
INSERT INTO `area` VALUES ('2611', '530823', '景东彝族自治县', '530800');
INSERT INTO `area` VALUES ('2612', '530824', '景谷傣族彝族自治县', '530800');
INSERT INTO `area` VALUES ('2613', '530825', '镇沅彝族哈尼族拉祜族自治县', '530800');
INSERT INTO `area` VALUES ('2614', '530826', '江城哈尼族彝族自治县', '530800');
INSERT INTO `area` VALUES ('2615', '530827', '孟连傣族拉祜族佤族自治县', '530800');
INSERT INTO `area` VALUES ('2616', '530828', '澜沧拉祜族自治县', '530800');
INSERT INTO `area` VALUES ('2617', '530829', '西盟佤族自治县', '530800');
INSERT INTO `area` VALUES ('2619', '530902', '临翔区', '530900');
INSERT INTO `area` VALUES ('2620', '530921', '凤庆县', '530900');
INSERT INTO `area` VALUES ('2621', '530922', '云　县', '530900');
INSERT INTO `area` VALUES ('2622', '530923', '永德县', '530900');
INSERT INTO `area` VALUES ('2623', '530924', '镇康县', '530900');
INSERT INTO `area` VALUES ('2624', '530925', '双江拉祜族佤族布朗族傣族自治县', '530900');
INSERT INTO `area` VALUES ('2625', '530926', '耿马傣族佤族自治县', '530900');
INSERT INTO `area` VALUES ('2626', '530927', '沧源佤族自治县', '530900');
INSERT INTO `area` VALUES ('2627', '532301', '楚雄市', '532300');
INSERT INTO `area` VALUES ('2628', '532322', '双柏县', '532300');
INSERT INTO `area` VALUES ('2629', '532323', '牟定县', '532300');
INSERT INTO `area` VALUES ('2630', '532324', '南华县', '532300');
INSERT INTO `area` VALUES ('2631', '532325', '姚安县', '532300');
INSERT INTO `area` VALUES ('2632', '532326', '大姚县', '532300');
INSERT INTO `area` VALUES ('2633', '532327', '永仁县', '532300');
INSERT INTO `area` VALUES ('2634', '532328', '元谋县', '532300');
INSERT INTO `area` VALUES ('2635', '532329', '武定县', '532300');
INSERT INTO `area` VALUES ('2636', '532331', '禄丰县', '532300');
INSERT INTO `area` VALUES ('2637', '532501', '个旧市', '532500');
INSERT INTO `area` VALUES ('2638', '532502', '开远市', '532500');
INSERT INTO `area` VALUES ('2639', '532522', '蒙自县', '532500');
INSERT INTO `area` VALUES ('2640', '532523', '屏边苗族自治县', '532500');
INSERT INTO `area` VALUES ('2641', '532524', '建水县', '532500');
INSERT INTO `area` VALUES ('2642', '532525', '石屏县', '532500');
INSERT INTO `area` VALUES ('2643', '532526', '弥勒县', '532500');
INSERT INTO `area` VALUES ('2644', '532527', '泸西县', '532500');
INSERT INTO `area` VALUES ('2645', '532528', '元阳县', '532500');
INSERT INTO `area` VALUES ('2646', '532529', '红河县', '532500');
INSERT INTO `area` VALUES ('2647', '532530', '金平苗族瑶族傣族自治县', '532500');
INSERT INTO `area` VALUES ('2648', '532531', '绿春县', '532500');
INSERT INTO `area` VALUES ('2649', '532532', '河口瑶族自治县', '532500');
INSERT INTO `area` VALUES ('2650', '532621', '文山县', '532600');
INSERT INTO `area` VALUES ('2651', '532622', '砚山县', '532600');
INSERT INTO `area` VALUES ('2652', '532623', '西畴县', '532600');
INSERT INTO `area` VALUES ('2653', '532624', '麻栗坡县', '532600');
INSERT INTO `area` VALUES ('2654', '532625', '马关县', '532600');
INSERT INTO `area` VALUES ('2655', '532626', '丘北县', '532600');
INSERT INTO `area` VALUES ('2656', '532627', '广南县', '532600');
INSERT INTO `area` VALUES ('2657', '532628', '富宁县', '532600');
INSERT INTO `area` VALUES ('2658', '532801', '景洪市', '532800');
INSERT INTO `area` VALUES ('2659', '532822', '勐海县', '532800');
INSERT INTO `area` VALUES ('2660', '532823', '勐腊县', '532800');
INSERT INTO `area` VALUES ('2661', '532901', '大理市', '532900');
INSERT INTO `area` VALUES ('2662', '532922', '漾濞彝族自治县', '532900');
INSERT INTO `area` VALUES ('2663', '532923', '祥云县', '532900');
INSERT INTO `area` VALUES ('2664', '532924', '宾川县', '532900');
INSERT INTO `area` VALUES ('2665', '532925', '弥渡县', '532900');
INSERT INTO `area` VALUES ('2666', '532926', '南涧彝族自治县', '532900');
INSERT INTO `area` VALUES ('2667', '532927', '巍山彝族回族自治县', '532900');
INSERT INTO `area` VALUES ('2668', '532928', '永平县', '532900');
INSERT INTO `area` VALUES ('2669', '532929', '云龙县', '532900');
INSERT INTO `area` VALUES ('2670', '532930', '洱源县', '532900');
INSERT INTO `area` VALUES ('2671', '532931', '剑川县', '532900');
INSERT INTO `area` VALUES ('2672', '532932', '鹤庆县', '532900');
INSERT INTO `area` VALUES ('2673', '533102', '瑞丽市', '533100');
INSERT INTO `area` VALUES ('2674', '533103', '潞西市', '533100');
INSERT INTO `area` VALUES ('2675', '533122', '梁河县', '533100');
INSERT INTO `area` VALUES ('2676', '533123', '盈江县', '533100');
INSERT INTO `area` VALUES ('2677', '533124', '陇川县', '533100');
INSERT INTO `area` VALUES ('2678', '533321', '泸水县', '533300');
INSERT INTO `area` VALUES ('2679', '533323', '福贡县', '533300');
INSERT INTO `area` VALUES ('2680', '533324', '贡山独龙族怒族自治县', '533300');
INSERT INTO `area` VALUES ('2681', '533325', '兰坪白族普米族自治县', '533300');
INSERT INTO `area` VALUES ('2682', '533421', '香格里拉县', '533400');
INSERT INTO `area` VALUES ('2683', '533422', '德钦县', '533400');
INSERT INTO `area` VALUES ('2684', '533423', '维西傈僳族自治县', '533400');
INSERT INTO `area` VALUES ('2686', '540102', '城关区', '540100');
INSERT INTO `area` VALUES ('2687', '540121', '林周县', '540100');
INSERT INTO `area` VALUES ('2688', '540122', '当雄县', '540100');
INSERT INTO `area` VALUES ('2689', '540123', '尼木县', '540100');
INSERT INTO `area` VALUES ('2690', '540124', '曲水县', '540100');
INSERT INTO `area` VALUES ('2691', '540125', '堆龙德庆县', '540100');
INSERT INTO `area` VALUES ('2692', '540126', '达孜县', '540100');
INSERT INTO `area` VALUES ('2693', '540127', '墨竹工卡县', '540100');
INSERT INTO `area` VALUES ('2694', '542121', '昌都县', '542100');
INSERT INTO `area` VALUES ('2695', '542122', '江达县', '542100');
INSERT INTO `area` VALUES ('2696', '542123', '贡觉县', '542100');
INSERT INTO `area` VALUES ('2697', '542124', '类乌齐县', '542100');
INSERT INTO `area` VALUES ('2698', '542125', '丁青县', '542100');
INSERT INTO `area` VALUES ('2699', '542126', '察雅县', '542100');
INSERT INTO `area` VALUES ('2700', '542127', '八宿县', '542100');
INSERT INTO `area` VALUES ('2701', '542128', '左贡县', '542100');
INSERT INTO `area` VALUES ('2702', '542129', '芒康县', '542100');
INSERT INTO `area` VALUES ('2703', '542132', '洛隆县', '542100');
INSERT INTO `area` VALUES ('2704', '542133', '边坝县', '542100');
INSERT INTO `area` VALUES ('2705', '542221', '乃东县', '542200');
INSERT INTO `area` VALUES ('2706', '542222', '扎囊县', '542200');
INSERT INTO `area` VALUES ('2707', '542223', '贡嘎县', '542200');
INSERT INTO `area` VALUES ('2708', '542224', '桑日县', '542200');
INSERT INTO `area` VALUES ('2709', '542225', '琼结县', '542200');
INSERT INTO `area` VALUES ('2710', '542226', '曲松县', '542200');
INSERT INTO `area` VALUES ('2711', '542227', '措美县', '542200');
INSERT INTO `area` VALUES ('2712', '542228', '洛扎县', '542200');
INSERT INTO `area` VALUES ('2713', '542229', '加查县', '542200');
INSERT INTO `area` VALUES ('2714', '542231', '隆子县', '542200');
INSERT INTO `area` VALUES ('2715', '542232', '错那县', '542200');
INSERT INTO `area` VALUES ('2716', '542233', '浪卡子县', '542200');
INSERT INTO `area` VALUES ('2717', '542301', '日喀则市', '542300');
INSERT INTO `area` VALUES ('2718', '542322', '南木林县', '542300');
INSERT INTO `area` VALUES ('2719', '542323', '江孜县', '542300');
INSERT INTO `area` VALUES ('2720', '542324', '定日县', '542300');
INSERT INTO `area` VALUES ('2721', '542325', '萨迦县', '542300');
INSERT INTO `area` VALUES ('2722', '542326', '拉孜县', '542300');
INSERT INTO `area` VALUES ('2723', '542327', '昂仁县', '542300');
INSERT INTO `area` VALUES ('2724', '542328', '谢通门县', '542300');
INSERT INTO `area` VALUES ('2725', '542329', '白朗县', '542300');
INSERT INTO `area` VALUES ('2726', '542330', '仁布县', '542300');
INSERT INTO `area` VALUES ('2727', '542331', '康马县', '542300');
INSERT INTO `area` VALUES ('2728', '542332', '定结县', '542300');
INSERT INTO `area` VALUES ('2729', '542333', '仲巴县', '542300');
INSERT INTO `area` VALUES ('2730', '542334', '亚东县', '542300');
INSERT INTO `area` VALUES ('2731', '542335', '吉隆县', '542300');
INSERT INTO `area` VALUES ('2732', '542336', '聂拉木县', '542300');
INSERT INTO `area` VALUES ('2733', '542337', '萨嘎县', '542300');
INSERT INTO `area` VALUES ('2734', '542338', '岗巴县', '542300');
INSERT INTO `area` VALUES ('2735', '542421', '那曲县', '542400');
INSERT INTO `area` VALUES ('2736', '542422', '嘉黎县', '542400');
INSERT INTO `area` VALUES ('2737', '542423', '比如县', '542400');
INSERT INTO `area` VALUES ('2738', '542424', '聂荣县', '542400');
INSERT INTO `area` VALUES ('2739', '542425', '安多县', '542400');
INSERT INTO `area` VALUES ('2740', '542426', '申扎县', '542400');
INSERT INTO `area` VALUES ('2741', '542427', '索　县', '542400');
INSERT INTO `area` VALUES ('2742', '542428', '班戈县', '542400');
INSERT INTO `area` VALUES ('2743', '542429', '巴青县', '542400');
INSERT INTO `area` VALUES ('2744', '542430', '尼玛县', '542400');
INSERT INTO `area` VALUES ('2745', '542521', '普兰县', '542500');
INSERT INTO `area` VALUES ('2746', '542522', '札达县', '542500');
INSERT INTO `area` VALUES ('2747', '542523', '噶尔县', '542500');
INSERT INTO `area` VALUES ('2748', '542524', '日土县', '542500');
INSERT INTO `area` VALUES ('2749', '542525', '革吉县', '542500');
INSERT INTO `area` VALUES ('2750', '542526', '改则县', '542500');
INSERT INTO `area` VALUES ('2751', '542527', '措勤县', '542500');
INSERT INTO `area` VALUES ('2752', '542621', '林芝县', '542600');
INSERT INTO `area` VALUES ('2753', '542622', '工布江达县', '542600');
INSERT INTO `area` VALUES ('2754', '542623', '米林县', '542600');
INSERT INTO `area` VALUES ('2755', '542624', '墨脱县', '542600');
INSERT INTO `area` VALUES ('2756', '542625', '波密县', '542600');
INSERT INTO `area` VALUES ('2757', '542626', '察隅县', '542600');
INSERT INTO `area` VALUES ('2758', '542627', '朗　县', '542600');
INSERT INTO `area` VALUES ('2760', '610102', '新城区', '610100');
INSERT INTO `area` VALUES ('2761', '610103', '碑林区', '610100');
INSERT INTO `area` VALUES ('2762', '610104', '莲湖区', '610100');
INSERT INTO `area` VALUES ('2763', '610111', '灞桥区', '610100');
INSERT INTO `area` VALUES ('2764', '610112', '未央区', '610100');
INSERT INTO `area` VALUES ('2765', '610113', '雁塔区', '610100');
INSERT INTO `area` VALUES ('2766', '610114', '阎良区', '610100');
INSERT INTO `area` VALUES ('2767', '610115', '临潼区', '610100');
INSERT INTO `area` VALUES ('2768', '610116', '长安区', '610100');
INSERT INTO `area` VALUES ('2769', '610122', '蓝田县', '610100');
INSERT INTO `area` VALUES ('2770', '610124', '周至县', '610100');
INSERT INTO `area` VALUES ('2771', '610125', '户　县', '610100');
INSERT INTO `area` VALUES ('2772', '610126', '高陵县', '610100');
INSERT INTO `area` VALUES ('2774', '610202', '王益区', '610200');
INSERT INTO `area` VALUES ('2775', '610203', '印台区', '610200');
INSERT INTO `area` VALUES ('2776', '610204', '耀州区', '610200');
INSERT INTO `area` VALUES ('2777', '610222', '宜君县', '610200');
INSERT INTO `area` VALUES ('2779', '610302', '渭滨区', '610300');
INSERT INTO `area` VALUES ('2780', '610303', '金台区', '610300');
INSERT INTO `area` VALUES ('2781', '610304', '陈仓区', '610300');
INSERT INTO `area` VALUES ('2782', '610322', '凤翔县', '610300');
INSERT INTO `area` VALUES ('2783', '610323', '岐山县', '610300');
INSERT INTO `area` VALUES ('2784', '610324', '扶风县', '610300');
INSERT INTO `area` VALUES ('2785', '610326', '眉　县', '610300');
INSERT INTO `area` VALUES ('2786', '610327', '陇　县', '610300');
INSERT INTO `area` VALUES ('2787', '610328', '千阳县', '610300');
INSERT INTO `area` VALUES ('2788', '610329', '麟游县', '610300');
INSERT INTO `area` VALUES ('2789', '610330', '凤　县', '610300');
INSERT INTO `area` VALUES ('2790', '610331', '太白县', '610300');
INSERT INTO `area` VALUES ('2792', '610402', '秦都区', '610400');
INSERT INTO `area` VALUES ('2793', '610403', '杨凌区', '610400');
INSERT INTO `area` VALUES ('2794', '610404', '渭城区', '610400');
INSERT INTO `area` VALUES ('2795', '610422', '三原县', '610400');
INSERT INTO `area` VALUES ('2796', '610423', '泾阳县', '610400');
INSERT INTO `area` VALUES ('2797', '610424', '乾　县', '610400');
INSERT INTO `area` VALUES ('2798', '610425', '礼泉县', '610400');
INSERT INTO `area` VALUES ('2799', '610426', '永寿县', '610400');
INSERT INTO `area` VALUES ('2800', '610427', '彬　县', '610400');
INSERT INTO `area` VALUES ('2801', '610428', '长武县', '610400');
INSERT INTO `area` VALUES ('2802', '610429', '旬邑县', '610400');
INSERT INTO `area` VALUES ('2803', '610430', '淳化县', '610400');
INSERT INTO `area` VALUES ('2804', '610431', '武功县', '610400');
INSERT INTO `area` VALUES ('2805', '610481', '兴平市', '610400');
INSERT INTO `area` VALUES ('2807', '610502', '临渭区', '610500');
INSERT INTO `area` VALUES ('2808', '610521', '华　县', '610500');
INSERT INTO `area` VALUES ('2809', '610522', '潼关县', '610500');
INSERT INTO `area` VALUES ('2810', '610523', '大荔县', '610500');
INSERT INTO `area` VALUES ('2811', '610524', '合阳县', '610500');
INSERT INTO `area` VALUES ('2812', '610525', '澄城县', '610500');
INSERT INTO `area` VALUES ('2813', '610526', '蒲城县', '610500');
INSERT INTO `area` VALUES ('2814', '610527', '白水县', '610500');
INSERT INTO `area` VALUES ('2815', '610528', '富平县', '610500');
INSERT INTO `area` VALUES ('2816', '610581', '韩城市', '610500');
INSERT INTO `area` VALUES ('2817', '610582', '华阴市', '610500');
INSERT INTO `area` VALUES ('2819', '610602', '宝塔区', '610600');
INSERT INTO `area` VALUES ('2820', '610621', '延长县', '610600');
INSERT INTO `area` VALUES ('2821', '610622', '延川县', '610600');
INSERT INTO `area` VALUES ('2822', '610623', '子长县', '610600');
INSERT INTO `area` VALUES ('2823', '610624', '安塞县', '610600');
INSERT INTO `area` VALUES ('2824', '610625', '志丹县', '610600');
INSERT INTO `area` VALUES ('2825', '610626', '吴旗县', '610600');
INSERT INTO `area` VALUES ('2826', '610627', '甘泉县', '610600');
INSERT INTO `area` VALUES ('2827', '610628', '富　县', '610600');
INSERT INTO `area` VALUES ('2828', '610629', '洛川县', '610600');
INSERT INTO `area` VALUES ('2829', '610630', '宜川县', '610600');
INSERT INTO `area` VALUES ('2830', '610631', '黄龙县', '610600');
INSERT INTO `area` VALUES ('2831', '610632', '黄陵县', '610600');
INSERT INTO `area` VALUES ('2833', '610702', '汉台区', '610700');
INSERT INTO `area` VALUES ('2834', '610721', '南郑县', '610700');
INSERT INTO `area` VALUES ('2835', '610722', '城固县', '610700');
INSERT INTO `area` VALUES ('2836', '610723', '洋　县', '610700');
INSERT INTO `area` VALUES ('2837', '610724', '西乡县', '610700');
INSERT INTO `area` VALUES ('2838', '610725', '勉　县', '610700');
INSERT INTO `area` VALUES ('2839', '610726', '宁强县', '610700');
INSERT INTO `area` VALUES ('2840', '610727', '略阳县', '610700');
INSERT INTO `area` VALUES ('2841', '610728', '镇巴县', '610700');
INSERT INTO `area` VALUES ('2842', '610729', '留坝县', '610700');
INSERT INTO `area` VALUES ('2843', '610730', '佛坪县', '610700');
INSERT INTO `area` VALUES ('2845', '610802', '榆阳区', '610800');
INSERT INTO `area` VALUES ('2846', '610821', '神木县', '610800');
INSERT INTO `area` VALUES ('2847', '610822', '府谷县', '610800');
INSERT INTO `area` VALUES ('2848', '610823', '横山县', '610800');
INSERT INTO `area` VALUES ('2849', '610824', '靖边县', '610800');
INSERT INTO `area` VALUES ('2850', '610825', '定边县', '610800');
INSERT INTO `area` VALUES ('2851', '610826', '绥德县', '610800');
INSERT INTO `area` VALUES ('2852', '610827', '米脂县', '610800');
INSERT INTO `area` VALUES ('2853', '610828', '佳　县', '610800');
INSERT INTO `area` VALUES ('2854', '610829', '吴堡县', '610800');
INSERT INTO `area` VALUES ('2855', '610830', '清涧县', '610800');
INSERT INTO `area` VALUES ('2856', '610831', '子洲县', '610800');
INSERT INTO `area` VALUES ('2858', '610902', '汉滨区', '610900');
INSERT INTO `area` VALUES ('2859', '610921', '汉阴县', '610900');
INSERT INTO `area` VALUES ('2860', '610922', '石泉县', '610900');
INSERT INTO `area` VALUES ('2861', '610923', '宁陕县', '610900');
INSERT INTO `area` VALUES ('2862', '610924', '紫阳县', '610900');
INSERT INTO `area` VALUES ('2863', '610925', '岚皋县', '610900');
INSERT INTO `area` VALUES ('2864', '610926', '平利县', '610900');
INSERT INTO `area` VALUES ('2865', '610927', '镇坪县', '610900');
INSERT INTO `area` VALUES ('2866', '610928', '旬阳县', '610900');
INSERT INTO `area` VALUES ('2867', '610929', '白河县', '610900');
INSERT INTO `area` VALUES ('2869', '611002', '商州区', '611000');
INSERT INTO `area` VALUES ('2870', '611021', '洛南县', '611000');
INSERT INTO `area` VALUES ('2871', '611022', '丹凤县', '611000');
INSERT INTO `area` VALUES ('2872', '611023', '商南县', '611000');
INSERT INTO `area` VALUES ('2873', '611024', '山阳县', '611000');
INSERT INTO `area` VALUES ('2874', '611025', '镇安县', '611000');
INSERT INTO `area` VALUES ('2875', '611026', '柞水县', '611000');
INSERT INTO `area` VALUES ('2877', '620102', '城关区', '620100');
INSERT INTO `area` VALUES ('2878', '620103', '七里河区', '620100');
INSERT INTO `area` VALUES ('2879', '620104', '西固区', '620100');
INSERT INTO `area` VALUES ('2880', '620105', '安宁区', '620100');
INSERT INTO `area` VALUES ('2881', '620111', '红古区', '620100');
INSERT INTO `area` VALUES ('2882', '620121', '永登县', '620100');
INSERT INTO `area` VALUES ('2883', '620122', '皋兰县', '620100');
INSERT INTO `area` VALUES ('2884', '620123', '榆中县', '620100');
INSERT INTO `area` VALUES ('2887', '620302', '金川区', '620300');
INSERT INTO `area` VALUES ('2888', '620321', '永昌县', '620300');
INSERT INTO `area` VALUES ('2890', '620402', '白银区', '620400');
INSERT INTO `area` VALUES ('2891', '620403', '平川区', '620400');
INSERT INTO `area` VALUES ('2892', '620421', '靖远县', '620400');
INSERT INTO `area` VALUES ('2893', '620422', '会宁县', '620400');
INSERT INTO `area` VALUES ('2894', '620423', '景泰县', '620400');
INSERT INTO `area` VALUES ('2896', '620502', '秦城区', '620500');
INSERT INTO `area` VALUES ('2897', '620503', '北道区', '620500');
INSERT INTO `area` VALUES ('2898', '620521', '清水县', '620500');
INSERT INTO `area` VALUES ('2899', '620522', '秦安县', '620500');
INSERT INTO `area` VALUES ('2900', '620523', '甘谷县', '620500');
INSERT INTO `area` VALUES ('2901', '620524', '武山县', '620500');
INSERT INTO `area` VALUES ('2902', '620525', '张家川回族自治县', '620500');
INSERT INTO `area` VALUES ('2904', '620602', '凉州区', '620600');
INSERT INTO `area` VALUES ('2905', '620621', '民勤县', '620600');
INSERT INTO `area` VALUES ('2906', '620622', '古浪县', '620600');
INSERT INTO `area` VALUES ('2907', '620623', '天祝藏族自治县', '620600');
INSERT INTO `area` VALUES ('2909', '620702', '甘州区', '620700');
INSERT INTO `area` VALUES ('2910', '620721', '肃南裕固族自治县', '620700');
INSERT INTO `area` VALUES ('2911', '620722', '民乐县', '620700');
INSERT INTO `area` VALUES ('2912', '620723', '临泽县', '620700');
INSERT INTO `area` VALUES ('2913', '620724', '高台县', '620700');
INSERT INTO `area` VALUES ('2914', '620725', '山丹县', '620700');
INSERT INTO `area` VALUES ('2916', '620802', '崆峒区', '620800');
INSERT INTO `area` VALUES ('2917', '620821', '泾川县', '620800');
INSERT INTO `area` VALUES ('2918', '620822', '灵台县', '620800');
INSERT INTO `area` VALUES ('2919', '620823', '崇信县', '620800');
INSERT INTO `area` VALUES ('2920', '620824', '华亭县', '620800');
INSERT INTO `area` VALUES ('2921', '620825', '庄浪县', '620800');
INSERT INTO `area` VALUES ('2922', '620826', '静宁县', '620800');
INSERT INTO `area` VALUES ('2924', '620902', '肃州区', '620900');
INSERT INTO `area` VALUES ('2925', '620921', '金塔县', '620900');
INSERT INTO `area` VALUES ('2926', '620922', '安西县', '620900');
INSERT INTO `area` VALUES ('2927', '620923', '肃北蒙古族自治县', '620900');
INSERT INTO `area` VALUES ('2928', '620924', '阿克塞哈萨克族自治县', '620900');
INSERT INTO `area` VALUES ('2929', '620981', '玉门市', '620900');
INSERT INTO `area` VALUES ('2930', '620982', '敦煌市', '620900');
INSERT INTO `area` VALUES ('2932', '621002', '西峰区', '621000');
INSERT INTO `area` VALUES ('2933', '621021', '庆城县', '621000');
INSERT INTO `area` VALUES ('2934', '621022', '环　县', '621000');
INSERT INTO `area` VALUES ('2935', '621023', '华池县', '621000');
INSERT INTO `area` VALUES ('2936', '621024', '合水县', '621000');
INSERT INTO `area` VALUES ('2937', '621025', '正宁县', '621000');
INSERT INTO `area` VALUES ('2938', '621026', '宁　县', '621000');
INSERT INTO `area` VALUES ('2939', '621027', '镇原县', '621000');
INSERT INTO `area` VALUES ('2941', '621102', '安定区', '621100');
INSERT INTO `area` VALUES ('2942', '621121', '通渭县', '621100');
INSERT INTO `area` VALUES ('2943', '621122', '陇西县', '621100');
INSERT INTO `area` VALUES ('2944', '621123', '渭源县', '621100');
INSERT INTO `area` VALUES ('2945', '621124', '临洮县', '621100');
INSERT INTO `area` VALUES ('2946', '621125', '漳　县', '621100');
INSERT INTO `area` VALUES ('2947', '621126', '岷　县', '621100');
INSERT INTO `area` VALUES ('2949', '621202', '武都区', '621200');
INSERT INTO `area` VALUES ('2950', '621221', '成　县', '621200');
INSERT INTO `area` VALUES ('2951', '621222', '文　县', '621200');
INSERT INTO `area` VALUES ('2952', '621223', '宕昌县', '621200');
INSERT INTO `area` VALUES ('2953', '621224', '康　县', '621200');
INSERT INTO `area` VALUES ('2954', '621225', '西和县', '621200');
INSERT INTO `area` VALUES ('2955', '621226', '礼　县', '621200');
INSERT INTO `area` VALUES ('2956', '621227', '徽　县', '621200');
INSERT INTO `area` VALUES ('2957', '621228', '两当县', '621200');
INSERT INTO `area` VALUES ('2958', '622901', '临夏市', '622900');
INSERT INTO `area` VALUES ('2959', '622921', '临夏县', '622900');
INSERT INTO `area` VALUES ('2960', '622922', '康乐县', '622900');
INSERT INTO `area` VALUES ('2961', '622923', '永靖县', '622900');
INSERT INTO `area` VALUES ('2962', '622924', '广河县', '622900');
INSERT INTO `area` VALUES ('2963', '622925', '和政县', '622900');
INSERT INTO `area` VALUES ('2964', '622926', '东乡族自治县', '622900');
INSERT INTO `area` VALUES ('2965', '622927', '积石山保安族东乡族撒拉族自治县', '622900');
INSERT INTO `area` VALUES ('2966', '623001', '合作市', '623000');
INSERT INTO `area` VALUES ('2967', '623021', '临潭县', '623000');
INSERT INTO `area` VALUES ('2968', '623022', '卓尼县', '623000');
INSERT INTO `area` VALUES ('2969', '623023', '舟曲县', '623000');
INSERT INTO `area` VALUES ('2970', '623024', '迭部县', '623000');
INSERT INTO `area` VALUES ('2971', '623025', '玛曲县', '623000');
INSERT INTO `area` VALUES ('2972', '623026', '碌曲县', '623000');
INSERT INTO `area` VALUES ('2973', '623027', '夏河县', '623000');
INSERT INTO `area` VALUES ('2975', '630102', '城东区', '630100');
INSERT INTO `area` VALUES ('2976', '630103', '城中区', '630100');
INSERT INTO `area` VALUES ('2977', '630104', '城西区', '630100');
INSERT INTO `area` VALUES ('2978', '630105', '城北区', '630100');
INSERT INTO `area` VALUES ('2979', '630121', '大通回族土族自治县', '630100');
INSERT INTO `area` VALUES ('2980', '630122', '湟中县', '630100');
INSERT INTO `area` VALUES ('2981', '630123', '湟源县', '630100');
INSERT INTO `area` VALUES ('2982', '632121', '平安县', '632100');
INSERT INTO `area` VALUES ('2983', '632122', '民和回族土族自治县', '632100');
INSERT INTO `area` VALUES ('2984', '632123', '乐都县', '632100');
INSERT INTO `area` VALUES ('2985', '632126', '互助土族自治县', '632100');
INSERT INTO `area` VALUES ('2986', '632127', '化隆回族自治县', '632100');
INSERT INTO `area` VALUES ('2987', '632128', '循化撒拉族自治县', '632100');
INSERT INTO `area` VALUES ('2988', '632221', '门源回族自治县', '632200');
INSERT INTO `area` VALUES ('2989', '632222', '祁连县', '632200');
INSERT INTO `area` VALUES ('2990', '632223', '海晏县', '632200');
INSERT INTO `area` VALUES ('2991', '632224', '刚察县', '632200');
INSERT INTO `area` VALUES ('2992', '632321', '同仁县', '632300');
INSERT INTO `area` VALUES ('2993', '632322', '尖扎县', '632300');
INSERT INTO `area` VALUES ('2994', '632323', '泽库县', '632300');
INSERT INTO `area` VALUES ('2995', '632324', '河南蒙古族自治县', '632300');
INSERT INTO `area` VALUES ('2996', '632521', '共和县', '632500');
INSERT INTO `area` VALUES ('2997', '632522', '同德县', '632500');
INSERT INTO `area` VALUES ('2998', '632523', '贵德县', '632500');
INSERT INTO `area` VALUES ('2999', '632524', '兴海县', '632500');
INSERT INTO `area` VALUES ('3000', '632525', '贵南县', '632500');
INSERT INTO `area` VALUES ('3001', '632621', '玛沁县', '632600');
INSERT INTO `area` VALUES ('3002', '632622', '班玛县', '632600');
INSERT INTO `area` VALUES ('3003', '632623', '甘德县', '632600');
INSERT INTO `area` VALUES ('3004', '632624', '达日县', '632600');
INSERT INTO `area` VALUES ('3005', '632625', '久治县', '632600');
INSERT INTO `area` VALUES ('3006', '632626', '玛多县', '632600');
INSERT INTO `area` VALUES ('3007', '632721', '玉树县', '632700');
INSERT INTO `area` VALUES ('3008', '632722', '杂多县', '632700');
INSERT INTO `area` VALUES ('3009', '632723', '称多县', '632700');
INSERT INTO `area` VALUES ('3010', '632724', '治多县', '632700');
INSERT INTO `area` VALUES ('3011', '632725', '囊谦县', '632700');
INSERT INTO `area` VALUES ('3012', '632726', '曲麻莱县', '632700');
INSERT INTO `area` VALUES ('3013', '632801', '格尔木市', '632800');
INSERT INTO `area` VALUES ('3014', '632802', '德令哈市', '632800');
INSERT INTO `area` VALUES ('3015', '632821', '乌兰县', '632800');
INSERT INTO `area` VALUES ('3016', '632822', '都兰县', '632800');
INSERT INTO `area` VALUES ('3017', '632823', '天峻县', '632800');
INSERT INTO `area` VALUES ('3019', '640104', '兴庆区', '640100');
INSERT INTO `area` VALUES ('3020', '640105', '西夏区', '640100');
INSERT INTO `area` VALUES ('3021', '640106', '金凤区', '640100');
INSERT INTO `area` VALUES ('3022', '640121', '永宁县', '640100');
INSERT INTO `area` VALUES ('3023', '640122', '贺兰县', '640100');
INSERT INTO `area` VALUES ('3024', '640181', '灵武市', '640100');
INSERT INTO `area` VALUES ('3026', '640202', '大武口区', '640200');
INSERT INTO `area` VALUES ('3027', '640205', '惠农区', '640200');
INSERT INTO `area` VALUES ('3028', '640221', '平罗县', '640200');
INSERT INTO `area` VALUES ('3030', '640302', '利通区', '640300');
INSERT INTO `area` VALUES ('3031', '640323', '盐池县', '640300');
INSERT INTO `area` VALUES ('3032', '640324', '同心县', '640300');
INSERT INTO `area` VALUES ('3033', '640381', '青铜峡市', '640300');
INSERT INTO `area` VALUES ('3035', '640402', '原州区', '640400');
INSERT INTO `area` VALUES ('3036', '640422', '西吉县', '640400');
INSERT INTO `area` VALUES ('3037', '640423', '隆德县', '640400');
INSERT INTO `area` VALUES ('3038', '640424', '泾源县', '640400');
INSERT INTO `area` VALUES ('3039', '640425', '彭阳县', '640400');
INSERT INTO `area` VALUES ('3041', '640502', '沙坡头区', '640500');
INSERT INTO `area` VALUES ('3042', '640521', '中宁县', '640500');
INSERT INTO `area` VALUES ('3043', '640522', '海原县', '640500');
INSERT INTO `area` VALUES ('3045', '650102', '天山区', '650100');
INSERT INTO `area` VALUES ('3046', '650103', '沙依巴克区', '650100');
INSERT INTO `area` VALUES ('3047', '650104', '新市区', '650100');
INSERT INTO `area` VALUES ('3048', '650105', '水磨沟区', '650100');
INSERT INTO `area` VALUES ('3049', '650106', '头屯河区', '650100');
INSERT INTO `area` VALUES ('3050', '650107', '达坂城区', '650100');
INSERT INTO `area` VALUES ('3051', '650108', '东山区', '650100');
INSERT INTO `area` VALUES ('3052', '650121', '乌鲁木齐县', '650100');
INSERT INTO `area` VALUES ('3054', '650202', '独山子区', '650200');
INSERT INTO `area` VALUES ('3055', '650203', '克拉玛依区', '650200');
INSERT INTO `area` VALUES ('3056', '650204', '白碱滩区', '650200');
INSERT INTO `area` VALUES ('3057', '650205', '乌尔禾区', '650200');
INSERT INTO `area` VALUES ('3058', '652101', '吐鲁番市', '652100');
INSERT INTO `area` VALUES ('3059', '652122', '鄯善县', '652100');
INSERT INTO `area` VALUES ('3060', '652123', '托克逊县', '652100');
INSERT INTO `area` VALUES ('3061', '652201', '哈密市', '652200');
INSERT INTO `area` VALUES ('3062', '652222', '巴里坤哈萨克自治县', '652200');
INSERT INTO `area` VALUES ('3063', '652223', '伊吾县', '652200');
INSERT INTO `area` VALUES ('3064', '652301', '昌吉市', '652300');
INSERT INTO `area` VALUES ('3065', '652302', '阜康市', '652300');
INSERT INTO `area` VALUES ('3066', '652303', '米泉市', '652300');
INSERT INTO `area` VALUES ('3067', '652323', '呼图壁县', '652300');
INSERT INTO `area` VALUES ('3068', '652324', '玛纳斯县', '652300');
INSERT INTO `area` VALUES ('3069', '652325', '奇台县', '652300');
INSERT INTO `area` VALUES ('3070', '652327', '吉木萨尔县', '652300');
INSERT INTO `area` VALUES ('3071', '652328', '木垒哈萨克自治县', '652300');
INSERT INTO `area` VALUES ('3072', '652701', '博乐市', '652700');
INSERT INTO `area` VALUES ('3073', '652722', '精河县', '652700');
INSERT INTO `area` VALUES ('3074', '652723', '温泉县', '652700');
INSERT INTO `area` VALUES ('3075', '652801', '库尔勒市', '652800');
INSERT INTO `area` VALUES ('3076', '652822', '轮台县', '652800');
INSERT INTO `area` VALUES ('3077', '652823', '尉犁县', '652800');
INSERT INTO `area` VALUES ('3078', '652824', '若羌县', '652800');
INSERT INTO `area` VALUES ('3079', '652825', '且末县', '652800');
INSERT INTO `area` VALUES ('3080', '652826', '焉耆回族自治县', '652800');
INSERT INTO `area` VALUES ('3081', '652827', '和静县', '652800');
INSERT INTO `area` VALUES ('3082', '652828', '和硕县', '652800');
INSERT INTO `area` VALUES ('3083', '652829', '博湖县', '652800');
INSERT INTO `area` VALUES ('3084', '652901', '阿克苏市', '652900');
INSERT INTO `area` VALUES ('3085', '652922', '温宿县', '652900');
INSERT INTO `area` VALUES ('3086', '652923', '库车县', '652900');
INSERT INTO `area` VALUES ('3087', '652924', '沙雅县', '652900');
INSERT INTO `area` VALUES ('3088', '652925', '新和县', '652900');
INSERT INTO `area` VALUES ('3089', '652926', '拜城县', '652900');
INSERT INTO `area` VALUES ('3090', '652927', '乌什县', '652900');
INSERT INTO `area` VALUES ('3091', '652928', '阿瓦提县', '652900');
INSERT INTO `area` VALUES ('3092', '652929', '柯坪县', '652900');
INSERT INTO `area` VALUES ('3093', '653001', '阿图什市', '653000');
INSERT INTO `area` VALUES ('3094', '653022', '阿克陶县', '653000');
INSERT INTO `area` VALUES ('3095', '653023', '阿合奇县', '653000');
INSERT INTO `area` VALUES ('3096', '653024', '乌恰县', '653000');
INSERT INTO `area` VALUES ('3097', '653101', '喀什市', '653100');
INSERT INTO `area` VALUES ('3098', '653121', '疏附县', '653100');
INSERT INTO `area` VALUES ('3099', '653122', '疏勒县', '653100');
INSERT INTO `area` VALUES ('3100', '653123', '英吉沙县', '653100');
INSERT INTO `area` VALUES ('3101', '653124', '泽普县', '653100');
INSERT INTO `area` VALUES ('3102', '653125', '莎车县', '653100');
INSERT INTO `area` VALUES ('3103', '653126', '叶城县', '653100');
INSERT INTO `area` VALUES ('3104', '653127', '麦盖提县', '653100');
INSERT INTO `area` VALUES ('3105', '653128', '岳普湖县', '653100');
INSERT INTO `area` VALUES ('3106', '653129', '伽师县', '653100');
INSERT INTO `area` VALUES ('3107', '653130', '巴楚县', '653100');
INSERT INTO `area` VALUES ('3108', '653131', '塔什库尔干塔吉克自治县', '653100');
INSERT INTO `area` VALUES ('3109', '653201', '和田市', '653200');
INSERT INTO `area` VALUES ('3110', '653221', '和田县', '653200');
INSERT INTO `area` VALUES ('3111', '653222', '墨玉县', '653200');
INSERT INTO `area` VALUES ('3112', '653223', '皮山县', '653200');
INSERT INTO `area` VALUES ('3113', '653224', '洛浦县', '653200');
INSERT INTO `area` VALUES ('3114', '653225', '策勒县', '653200');
INSERT INTO `area` VALUES ('3115', '653226', '于田县', '653200');
INSERT INTO `area` VALUES ('3116', '653227', '民丰县', '653200');
INSERT INTO `area` VALUES ('3117', '654002', '伊宁市', '654000');
INSERT INTO `area` VALUES ('3118', '654003', '奎屯市', '654000');
INSERT INTO `area` VALUES ('3119', '654021', '伊宁县', '654000');
INSERT INTO `area` VALUES ('3120', '654022', '察布查尔锡伯自治县', '654000');
INSERT INTO `area` VALUES ('3121', '654023', '霍城县', '654000');
INSERT INTO `area` VALUES ('3122', '654024', '巩留县', '654000');
INSERT INTO `area` VALUES ('3123', '654025', '新源县', '654000');
INSERT INTO `area` VALUES ('3124', '654026', '昭苏县', '654000');
INSERT INTO `area` VALUES ('3125', '654027', '特克斯县', '654000');
INSERT INTO `area` VALUES ('3126', '654028', '尼勒克县', '654000');
INSERT INTO `area` VALUES ('3127', '654201', '塔城市', '654200');
INSERT INTO `area` VALUES ('3128', '654202', '乌苏市', '654200');
INSERT INTO `area` VALUES ('3129', '654221', '额敏县', '654200');
INSERT INTO `area` VALUES ('3130', '654223', '沙湾县', '654200');
INSERT INTO `area` VALUES ('3131', '654224', '托里县', '654200');
INSERT INTO `area` VALUES ('3132', '654225', '裕民县', '654200');
INSERT INTO `area` VALUES ('3133', '654226', '和布克赛尔蒙古自治县', '654200');
INSERT INTO `area` VALUES ('3134', '654301', '阿勒泰市', '654300');
INSERT INTO `area` VALUES ('3135', '654321', '布尔津县', '654300');
INSERT INTO `area` VALUES ('3136', '654322', '富蕴县', '654300');
INSERT INTO `area` VALUES ('3137', '654323', '福海县', '654300');
INSERT INTO `area` VALUES ('3138', '654324', '哈巴河县', '654300');
INSERT INTO `area` VALUES ('3139', '654325', '青河县', '654300');
INSERT INTO `area` VALUES ('3140', '654326', '吉木乃县', '654300');
INSERT INTO `area` VALUES ('3141', '659001', '石河子市', '659000');
INSERT INTO `area` VALUES ('3142', '659002', '阿拉尔市', '659000');
INSERT INTO `area` VALUES ('3143', '659003', '图木舒克市', '659000');
INSERT INTO `area` VALUES ('3144', '659004', '五家渠市', '659000');

-- ----------------------------
-- Table structure for `bdrecord`
-- ----------------------------
DROP TABLE IF EXISTS `bdrecord`;
CREATE TABLE `bdrecord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '激活的会员编号',
  `nickname` varchar(11) DEFAULT NULL COMMENT '激活的会员名称',
  `bdid` int(11) DEFAULT NULL COMMENT '报单中心编号',
  `bdname` varchar(11) DEFAULT NULL COMMENT '报单中心名称',
  `lsk` decimal(11,0) DEFAULT NULL,
  `bddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bdrecord
-- ----------------------------

-- ----------------------------
-- Table structure for `bonus`
-- ----------------------------
DROP TABLE IF EXISTS `bonus`;
CREATE TABLE `bonus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `bdate` datetime DEFAULT NULL,
  `isff` int(11) DEFAULT NULL COMMENT '是否发放',
  `b0` decimal(11,2) DEFAULT '0.00',
  `b1` decimal(11,2) DEFAULT '0.00',
  `b2` decimal(11,2) DEFAULT '0.00',
  `b3` decimal(11,2) DEFAULT '0.00',
  `b4` decimal(11,2) DEFAULT '0.00',
  `b5` decimal(11,2) DEFAULT '0.00',
  `b6` decimal(11,2) DEFAULT '0.00',
  `b7` decimal(11,2) DEFAULT '0.00',
  `b8` decimal(11,2) DEFAULT '0.00',
  `b9` decimal(11,2) DEFAULT '0.00',
  `b10` decimal(11,2) DEFAULT '0.00',
  `b11` decimal(11,2) DEFAULT '0.00',
  `b12` decimal(11,2) DEFAULT '0.00',
  `b13` decimal(11,2) DEFAULT '0.00',
  `b14` decimal(11,2) DEFAULT '0.00',
  `b15` decimal(11,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=279 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bonus
-- ----------------------------

-- ----------------------------
-- Table structure for `bonuslaiyuan`
-- ----------------------------
DROP TABLE IF EXISTS `bonuslaiyuan`;
CREATE TABLE `bonuslaiyuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL COMMENT '激活的会员编号',
  `nickname` varchar(11) DEFAULT NULL COMMENT '激活的会员名称',
  `yid` int(11) DEFAULT NULL COMMENT '报单中心编号',
  `ynickname` varchar(50) DEFAULT NULL COMMENT '报单中心名称',
  `lx` int(11) DEFAULT NULL,
  `jine` decimal(11,2) DEFAULT NULL,
  `bdate` datetime DEFAULT NULL,
  `beizhu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13902 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bonuslaiyuan
-- ----------------------------
INSERT INTO `bonuslaiyuan` VALUES ('13895', '1', 'admin', '1329', 'QD868809', '7', '20.00', '2017-06-28 08:56:17', '报单费');
INSERT INTO `bonuslaiyuan` VALUES ('13896', '1', 'admin', '1330', 'QD260304', '7', '20.00', '2017-06-28 08:56:20', '报单费');
INSERT INTO `bonuslaiyuan` VALUES ('13897', '1', 'admin', '0', '1层:QD260304&QD868809', '3', '1000.00', '2017-06-28 08:56:20', '层奖');
INSERT INTO `bonuslaiyuan` VALUES ('13898', '1', 'admin', '0', '-', '4', '100.00', '2017-06-28 08:56:20', '平衡奖');
INSERT INTO `bonuslaiyuan` VALUES ('13899', '1', 'admin', '1331', 'QD422846', '7', '20.00', '2017-06-28 08:58:02', '报单费');
INSERT INTO `bonuslaiyuan` VALUES ('13900', '1329', 'QD868809', '1331', 'QD422846', '2', '2.00', '2017-06-28 08:58:02', '1见点奖');
INSERT INTO `bonuslaiyuan` VALUES ('13901', '1', 'admin', '1331', 'QD422846', '2', '5.00', '2017-06-28 08:58:02', '2见点奖');

-- ----------------------------
-- Table structure for `bonustime`
-- ----------------------------
DROP TABLE IF EXISTS `bonustime`;
CREATE TABLE `bonustime` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jsdate` datetime DEFAULT NULL COMMENT '结算时间',
  `ffdate` datetime DEFAULT NULL COMMENT '发放时间',
  `jslx` int(11) DEFAULT NULL COMMENT '结算类型',
  `isff` int(11) DEFAULT '0' COMMENT '是否发放',
  `shouru` decimal(11,0) DEFAULT '0' COMMENT '期本收入',
  `fafang` decimal(11,0) DEFAULT '0' COMMENT '本期发放',
  `jsbdid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bonustime
-- ----------------------------

-- ----------------------------
-- Table structure for `buycar`
-- ----------------------------
DROP TABLE IF EXISTS `buycar`;
CREATE TABLE `buycar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nickname` varchar(50) COLLATE latin1_german1_ci DEFAULT NULL,
  `goodid` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- ----------------------------
-- Records of buycar
-- ----------------------------

-- ----------------------------
-- Table structure for `bwmember`
-- ----------------------------
DROP TABLE IF EXISTS `bwmember`;
CREATE TABLE `bwmember` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT '',
  `ulevel` int(9) DEFAULT '0',
  `rname` varchar(255) DEFAULT '',
  `treeplace` int(11) DEFAULT '0',
  `fatherid` int(11) DEFAULT '0',
  `fathername` varchar(255) DEFAULT NULL,
  `plevel` int(11) DEFAULT '0',
  `ppath` varchar(255) DEFAULT NULL,
  `pdt` datetime DEFAULT NULL,
  `isb` int(11) NOT NULL DEFAULT '0',
  `chl` int(10) DEFAULT '0',
  `chr` int(10) DEFAULT '0',
  `chx` int(10) DEFAULT '0',
  `chz` int(10) DEFAULT '0',
  `chy` int(10) DEFAULT '0',
  `bw` decimal(10,2) DEFAULT '0.00' COMMENT 'b网见点扣除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=111 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of bwmember
-- ----------------------------

-- ----------------------------
-- Table structure for `chongzhi`
-- ----------------------------
DROP TABLE IF EXISTS `chongzhi`;
CREATE TABLE `chongzhi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `lx` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `isgrant` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of chongzhi
-- ----------------------------

-- ----------------------------
-- Table structure for `city`
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cityid` int(11) NOT NULL,
  `city` varchar(20) NOT NULL,
  `fatherid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=346 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('1', '110100', '北京市', '110000');
INSERT INTO `city` VALUES ('3', '120100', '天津市', '120000');
INSERT INTO `city` VALUES ('5', '130100', '石家庄市', '130000');
INSERT INTO `city` VALUES ('6', '130200', '唐山市', '130000');
INSERT INTO `city` VALUES ('7', '130300', '秦皇岛市', '130000');
INSERT INTO `city` VALUES ('8', '130400', '邯郸市', '130000');
INSERT INTO `city` VALUES ('9', '130500', '邢台市', '130000');
INSERT INTO `city` VALUES ('10', '130600', '保定市', '130000');
INSERT INTO `city` VALUES ('11', '130700', '张家口市', '130000');
INSERT INTO `city` VALUES ('12', '130800', '承德市', '130000');
INSERT INTO `city` VALUES ('13', '130900', '沧州市', '130000');
INSERT INTO `city` VALUES ('14', '131000', '廊坊市', '130000');
INSERT INTO `city` VALUES ('15', '131100', '衡水市', '130000');
INSERT INTO `city` VALUES ('16', '140100', '太原市', '140000');
INSERT INTO `city` VALUES ('17', '140200', '大同市', '140000');
INSERT INTO `city` VALUES ('18', '140300', '阳泉市', '140000');
INSERT INTO `city` VALUES ('19', '140400', '长治市', '140000');
INSERT INTO `city` VALUES ('20', '140500', '晋城市', '140000');
INSERT INTO `city` VALUES ('21', '140600', '朔州市', '140000');
INSERT INTO `city` VALUES ('22', '140700', '晋中市', '140000');
INSERT INTO `city` VALUES ('23', '140800', '运城市', '140000');
INSERT INTO `city` VALUES ('24', '140900', '忻州市', '140000');
INSERT INTO `city` VALUES ('25', '141000', '临汾市', '140000');
INSERT INTO `city` VALUES ('26', '141100', '吕梁市', '140000');
INSERT INTO `city` VALUES ('27', '150100', '呼和浩特市', '150000');
INSERT INTO `city` VALUES ('28', '150200', '包头市', '150000');
INSERT INTO `city` VALUES ('29', '150300', '乌海市', '150000');
INSERT INTO `city` VALUES ('30', '150400', '赤峰市', '150000');
INSERT INTO `city` VALUES ('31', '150500', '通辽市', '150000');
INSERT INTO `city` VALUES ('32', '150600', '鄂尔多斯市', '150000');
INSERT INTO `city` VALUES ('33', '150700', '呼伦贝尔市', '150000');
INSERT INTO `city` VALUES ('34', '150800', '巴彦淖尔市', '150000');
INSERT INTO `city` VALUES ('35', '150900', '乌兰察布市', '150000');
INSERT INTO `city` VALUES ('36', '152200', '兴安盟', '150000');
INSERT INTO `city` VALUES ('37', '152500', '锡林郭勒盟', '150000');
INSERT INTO `city` VALUES ('38', '152900', '阿拉善盟', '150000');
INSERT INTO `city` VALUES ('39', '210100', '沈阳市', '210000');
INSERT INTO `city` VALUES ('40', '210200', '大连市', '210000');
INSERT INTO `city` VALUES ('41', '210300', '鞍山市', '210000');
INSERT INTO `city` VALUES ('42', '210400', '抚顺市', '210000');
INSERT INTO `city` VALUES ('43', '210500', '本溪市', '210000');
INSERT INTO `city` VALUES ('44', '210600', '丹东市', '210000');
INSERT INTO `city` VALUES ('45', '210700', '锦州市', '210000');
INSERT INTO `city` VALUES ('46', '210800', '营口市', '210000');
INSERT INTO `city` VALUES ('47', '210900', '阜新市', '210000');
INSERT INTO `city` VALUES ('48', '211000', '辽阳市', '210000');
INSERT INTO `city` VALUES ('49', '211100', '盘锦市', '210000');
INSERT INTO `city` VALUES ('50', '211200', '铁岭市', '210000');
INSERT INTO `city` VALUES ('51', '211300', '朝阳市', '210000');
INSERT INTO `city` VALUES ('52', '211400', '葫芦岛市', '210000');
INSERT INTO `city` VALUES ('53', '220100', '长春市', '220000');
INSERT INTO `city` VALUES ('54', '220200', '吉林市', '220000');
INSERT INTO `city` VALUES ('55', '220300', '四平市', '220000');
INSERT INTO `city` VALUES ('56', '220400', '辽源市', '220000');
INSERT INTO `city` VALUES ('57', '220500', '通化市', '220000');
INSERT INTO `city` VALUES ('58', '220600', '白山市', '220000');
INSERT INTO `city` VALUES ('59', '220700', '松原市', '220000');
INSERT INTO `city` VALUES ('60', '220800', '白城市', '220000');
INSERT INTO `city` VALUES ('61', '222400', '延边朝鲜族自治州', '220000');
INSERT INTO `city` VALUES ('62', '230100', '哈尔滨市', '230000');
INSERT INTO `city` VALUES ('63', '230200', '齐齐哈尔市', '230000');
INSERT INTO `city` VALUES ('64', '230300', '鸡西市', '230000');
INSERT INTO `city` VALUES ('65', '230400', '鹤岗市', '230000');
INSERT INTO `city` VALUES ('66', '230500', '双鸭山市', '230000');
INSERT INTO `city` VALUES ('67', '230600', '大庆市', '230000');
INSERT INTO `city` VALUES ('68', '230700', '伊春市', '230000');
INSERT INTO `city` VALUES ('69', '230800', '佳木斯市', '230000');
INSERT INTO `city` VALUES ('70', '230900', '七台河市', '230000');
INSERT INTO `city` VALUES ('71', '231000', '牡丹江市', '230000');
INSERT INTO `city` VALUES ('72', '231100', '黑河市', '230000');
INSERT INTO `city` VALUES ('73', '231200', '绥化市', '230000');
INSERT INTO `city` VALUES ('74', '232700', '大兴安岭地区', '230000');
INSERT INTO `city` VALUES ('75', '310100', '上海市', '310000');
INSERT INTO `city` VALUES ('77', '320100', '南京市', '320000');
INSERT INTO `city` VALUES ('78', '320200', '无锡市', '320000');
INSERT INTO `city` VALUES ('79', '320300', '徐州市', '320000');
INSERT INTO `city` VALUES ('80', '320400', '常州市', '320000');
INSERT INTO `city` VALUES ('81', '320500', '苏州市', '320000');
INSERT INTO `city` VALUES ('82', '320600', '南通市', '320000');
INSERT INTO `city` VALUES ('83', '320700', '连云港市', '320000');
INSERT INTO `city` VALUES ('84', '320800', '淮安市', '320000');
INSERT INTO `city` VALUES ('85', '320900', '盐城市', '320000');
INSERT INTO `city` VALUES ('86', '321000', '扬州市', '320000');
INSERT INTO `city` VALUES ('87', '321100', '镇江市', '320000');
INSERT INTO `city` VALUES ('88', '321200', '泰州市', '320000');
INSERT INTO `city` VALUES ('89', '321300', '宿迁市', '320000');
INSERT INTO `city` VALUES ('90', '330100', '杭州市', '330000');
INSERT INTO `city` VALUES ('91', '330200', '宁波市', '330000');
INSERT INTO `city` VALUES ('92', '330300', '温州市', '330000');
INSERT INTO `city` VALUES ('93', '330400', '嘉兴市', '330000');
INSERT INTO `city` VALUES ('94', '330500', '湖州市', '330000');
INSERT INTO `city` VALUES ('95', '330600', '绍兴市', '330000');
INSERT INTO `city` VALUES ('96', '330700', '金华市', '330000');
INSERT INTO `city` VALUES ('97', '330800', '衢州市', '330000');
INSERT INTO `city` VALUES ('98', '330900', '舟山市', '330000');
INSERT INTO `city` VALUES ('99', '331000', '台州市', '330000');
INSERT INTO `city` VALUES ('100', '331100', '丽水市', '330000');
INSERT INTO `city` VALUES ('101', '340100', '合肥市', '340000');
INSERT INTO `city` VALUES ('102', '340200', '芜湖市', '340000');
INSERT INTO `city` VALUES ('103', '340300', '蚌埠市', '340000');
INSERT INTO `city` VALUES ('104', '340400', '淮南市', '340000');
INSERT INTO `city` VALUES ('105', '340500', '马鞍山市', '340000');
INSERT INTO `city` VALUES ('106', '340600', '淮北市', '340000');
INSERT INTO `city` VALUES ('107', '340700', '铜陵市', '340000');
INSERT INTO `city` VALUES ('108', '340800', '安庆市', '340000');
INSERT INTO `city` VALUES ('109', '341000', '黄山市', '340000');
INSERT INTO `city` VALUES ('110', '341100', '滁州市', '340000');
INSERT INTO `city` VALUES ('111', '341200', '阜阳市', '340000');
INSERT INTO `city` VALUES ('112', '341300', '宿州市', '340000');
INSERT INTO `city` VALUES ('113', '341400', '巢湖市', '340000');
INSERT INTO `city` VALUES ('114', '341500', '六安市', '340000');
INSERT INTO `city` VALUES ('115', '341600', '亳州市', '340000');
INSERT INTO `city` VALUES ('116', '341700', '池州市', '340000');
INSERT INTO `city` VALUES ('117', '341800', '宣城市', '340000');
INSERT INTO `city` VALUES ('118', '350100', '福州市', '350000');
INSERT INTO `city` VALUES ('119', '350200', '厦门市', '350000');
INSERT INTO `city` VALUES ('120', '350300', '莆田市', '350000');
INSERT INTO `city` VALUES ('121', '350400', '三明市', '350000');
INSERT INTO `city` VALUES ('122', '350500', '泉州市', '350000');
INSERT INTO `city` VALUES ('123', '350600', '漳州市', '350000');
INSERT INTO `city` VALUES ('124', '350700', '南平市', '350000');
INSERT INTO `city` VALUES ('125', '350800', '龙岩市', '350000');
INSERT INTO `city` VALUES ('126', '350900', '宁德市', '350000');
INSERT INTO `city` VALUES ('127', '360100', '南昌市', '360000');
INSERT INTO `city` VALUES ('128', '360200', '景德镇市', '360000');
INSERT INTO `city` VALUES ('129', '360300', '萍乡市', '360000');
INSERT INTO `city` VALUES ('130', '360400', '九江市', '360000');
INSERT INTO `city` VALUES ('131', '360500', '新余市', '360000');
INSERT INTO `city` VALUES ('132', '360600', '鹰潭市', '360000');
INSERT INTO `city` VALUES ('133', '360700', '赣州市', '360000');
INSERT INTO `city` VALUES ('134', '360800', '吉安市', '360000');
INSERT INTO `city` VALUES ('135', '360900', '宜春市', '360000');
INSERT INTO `city` VALUES ('136', '361000', '抚州市', '360000');
INSERT INTO `city` VALUES ('137', '361100', '上饶市', '360000');
INSERT INTO `city` VALUES ('138', '370100', '济南市', '370000');
INSERT INTO `city` VALUES ('139', '370200', '青岛市', '370000');
INSERT INTO `city` VALUES ('140', '370300', '淄博市', '370000');
INSERT INTO `city` VALUES ('141', '370400', '枣庄市', '370000');
INSERT INTO `city` VALUES ('142', '370500', '东营市', '370000');
INSERT INTO `city` VALUES ('143', '370600', '烟台市', '370000');
INSERT INTO `city` VALUES ('144', '370700', '潍坊市', '370000');
INSERT INTO `city` VALUES ('145', '370800', '济宁市', '370000');
INSERT INTO `city` VALUES ('146', '370900', '泰安市', '370000');
INSERT INTO `city` VALUES ('147', '371000', '威海市', '370000');
INSERT INTO `city` VALUES ('148', '371100', '日照市', '370000');
INSERT INTO `city` VALUES ('149', '371200', '莱芜市', '370000');
INSERT INTO `city` VALUES ('150', '371300', '临沂市', '370000');
INSERT INTO `city` VALUES ('151', '371400', '德州市', '370000');
INSERT INTO `city` VALUES ('152', '371500', '聊城市', '370000');
INSERT INTO `city` VALUES ('153', '371600', '滨州市', '370000');
INSERT INTO `city` VALUES ('154', '371700', '荷泽市', '370000');
INSERT INTO `city` VALUES ('155', '410100', '郑州市', '410000');
INSERT INTO `city` VALUES ('156', '410200', '开封市', '410000');
INSERT INTO `city` VALUES ('157', '410300', '洛阳市', '410000');
INSERT INTO `city` VALUES ('158', '410400', '平顶山市', '410000');
INSERT INTO `city` VALUES ('159', '410500', '安阳市', '410000');
INSERT INTO `city` VALUES ('160', '410600', '鹤壁市', '410000');
INSERT INTO `city` VALUES ('161', '410700', '新乡市', '410000');
INSERT INTO `city` VALUES ('162', '410800', '焦作市', '410000');
INSERT INTO `city` VALUES ('163', '410900', '濮阳市', '410000');
INSERT INTO `city` VALUES ('164', '411000', '许昌市', '410000');
INSERT INTO `city` VALUES ('165', '411100', '漯河市', '410000');
INSERT INTO `city` VALUES ('166', '411200', '三门峡市', '410000');
INSERT INTO `city` VALUES ('167', '411300', '南阳市', '410000');
INSERT INTO `city` VALUES ('168', '411400', '商丘市', '410000');
INSERT INTO `city` VALUES ('169', '411500', '信阳市', '410000');
INSERT INTO `city` VALUES ('170', '411600', '周口市', '410000');
INSERT INTO `city` VALUES ('171', '411700', '驻马店市', '410000');
INSERT INTO `city` VALUES ('172', '420100', '武汉市', '420000');
INSERT INTO `city` VALUES ('173', '420200', '黄石市', '420000');
INSERT INTO `city` VALUES ('174', '420300', '十堰市', '420000');
INSERT INTO `city` VALUES ('175', '420500', '宜昌市', '420000');
INSERT INTO `city` VALUES ('176', '420600', '襄樊市', '420000');
INSERT INTO `city` VALUES ('177', '420700', '鄂州市', '420000');
INSERT INTO `city` VALUES ('178', '420800', '荆门市', '420000');
INSERT INTO `city` VALUES ('179', '420900', '孝感市', '420000');
INSERT INTO `city` VALUES ('180', '421000', '荆州市', '420000');
INSERT INTO `city` VALUES ('181', '421100', '黄冈市', '420000');
INSERT INTO `city` VALUES ('182', '421200', '咸宁市', '420000');
INSERT INTO `city` VALUES ('183', '421300', '随州市', '420000');
INSERT INTO `city` VALUES ('184', '422800', '恩施土家族苗族自治州', '420000');
INSERT INTO `city` VALUES ('185', '429000', '省直辖行政单位', '420000');
INSERT INTO `city` VALUES ('186', '430100', '长沙市', '430000');
INSERT INTO `city` VALUES ('187', '430200', '株洲市', '430000');
INSERT INTO `city` VALUES ('188', '430300', '湘潭市', '430000');
INSERT INTO `city` VALUES ('189', '430400', '衡阳市', '430000');
INSERT INTO `city` VALUES ('190', '430500', '邵阳市', '430000');
INSERT INTO `city` VALUES ('191', '430600', '岳阳市', '430000');
INSERT INTO `city` VALUES ('192', '430700', '常德市', '430000');
INSERT INTO `city` VALUES ('193', '430800', '张家界市', '430000');
INSERT INTO `city` VALUES ('194', '430900', '益阳市', '430000');
INSERT INTO `city` VALUES ('195', '431000', '郴州市', '430000');
INSERT INTO `city` VALUES ('196', '431100', '永州市', '430000');
INSERT INTO `city` VALUES ('197', '431200', '怀化市', '430000');
INSERT INTO `city` VALUES ('198', '431300', '娄底市', '430000');
INSERT INTO `city` VALUES ('199', '433100', '湘西土家族苗族自治州', '430000');
INSERT INTO `city` VALUES ('200', '440100', '广州市', '440000');
INSERT INTO `city` VALUES ('201', '440200', '韶关市', '440000');
INSERT INTO `city` VALUES ('202', '440300', '深圳市', '440000');
INSERT INTO `city` VALUES ('203', '440400', '珠海市', '440000');
INSERT INTO `city` VALUES ('204', '440500', '汕头市', '440000');
INSERT INTO `city` VALUES ('205', '440600', '佛山市', '440000');
INSERT INTO `city` VALUES ('206', '440700', '江门市', '440000');
INSERT INTO `city` VALUES ('207', '440800', '湛江市', '440000');
INSERT INTO `city` VALUES ('208', '440900', '茂名市', '440000');
INSERT INTO `city` VALUES ('209', '441200', '肇庆市', '440000');
INSERT INTO `city` VALUES ('210', '441300', '惠州市', '440000');
INSERT INTO `city` VALUES ('211', '441400', '梅州市', '440000');
INSERT INTO `city` VALUES ('212', '441500', '汕尾市', '440000');
INSERT INTO `city` VALUES ('213', '441600', '河源市', '440000');
INSERT INTO `city` VALUES ('214', '441700', '阳江市', '440000');
INSERT INTO `city` VALUES ('215', '441800', '清远市', '440000');
INSERT INTO `city` VALUES ('216', '441900', '东莞市', '440000');
INSERT INTO `city` VALUES ('217', '442000', '中山市', '440000');
INSERT INTO `city` VALUES ('218', '445100', '潮州市', '440000');
INSERT INTO `city` VALUES ('219', '445200', '揭阳市', '440000');
INSERT INTO `city` VALUES ('220', '445300', '云浮市', '440000');
INSERT INTO `city` VALUES ('221', '450100', '南宁市', '450000');
INSERT INTO `city` VALUES ('222', '450200', '柳州市', '450000');
INSERT INTO `city` VALUES ('223', '450300', '桂林市', '450000');
INSERT INTO `city` VALUES ('224', '450400', '梧州市', '450000');
INSERT INTO `city` VALUES ('225', '450500', '北海市', '450000');
INSERT INTO `city` VALUES ('226', '450600', '防城港市', '450000');
INSERT INTO `city` VALUES ('227', '450700', '钦州市', '450000');
INSERT INTO `city` VALUES ('228', '450800', '贵港市', '450000');
INSERT INTO `city` VALUES ('229', '450900', '玉林市', '450000');
INSERT INTO `city` VALUES ('230', '451000', '百色市', '450000');
INSERT INTO `city` VALUES ('231', '451100', '贺州市', '450000');
INSERT INTO `city` VALUES ('232', '451200', '河池市', '450000');
INSERT INTO `city` VALUES ('233', '451300', '来宾市', '450000');
INSERT INTO `city` VALUES ('234', '451400', '崇左市', '450000');
INSERT INTO `city` VALUES ('235', '460100', '海口市', '460000');
INSERT INTO `city` VALUES ('236', '460200', '三亚市', '460000');
INSERT INTO `city` VALUES ('237', '469000', '省直辖县级行政单位', '460000');
INSERT INTO `city` VALUES ('238', '500100', '重庆市', '500000');
INSERT INTO `city` VALUES ('241', '510100', '成都市', '510000');
INSERT INTO `city` VALUES ('242', '510300', '自贡市', '510000');
INSERT INTO `city` VALUES ('243', '510400', '攀枝花市', '510000');
INSERT INTO `city` VALUES ('244', '510500', '泸州市', '510000');
INSERT INTO `city` VALUES ('245', '510600', '德阳市', '510000');
INSERT INTO `city` VALUES ('246', '510700', '绵阳市', '510000');
INSERT INTO `city` VALUES ('247', '510800', '广元市', '510000');
INSERT INTO `city` VALUES ('248', '510900', '遂宁市', '510000');
INSERT INTO `city` VALUES ('249', '511000', '内江市', '510000');
INSERT INTO `city` VALUES ('250', '511100', '乐山市', '510000');
INSERT INTO `city` VALUES ('251', '511300', '南充市', '510000');
INSERT INTO `city` VALUES ('252', '511400', '眉山市', '510000');
INSERT INTO `city` VALUES ('253', '511500', '宜宾市', '510000');
INSERT INTO `city` VALUES ('254', '511600', '广安市', '510000');
INSERT INTO `city` VALUES ('255', '511700', '达州市', '510000');
INSERT INTO `city` VALUES ('256', '511800', '雅安市', '510000');
INSERT INTO `city` VALUES ('257', '511900', '巴中市', '510000');
INSERT INTO `city` VALUES ('258', '512000', '资阳市', '510000');
INSERT INTO `city` VALUES ('259', '513200', '阿坝藏族羌族自治州', '510000');
INSERT INTO `city` VALUES ('260', '513300', '甘孜藏族自治州', '510000');
INSERT INTO `city` VALUES ('261', '513400', '凉山彝族自治州', '510000');
INSERT INTO `city` VALUES ('262', '520100', '贵阳市', '520000');
INSERT INTO `city` VALUES ('263', '520200', '六盘水市', '520000');
INSERT INTO `city` VALUES ('264', '520300', '遵义市', '520000');
INSERT INTO `city` VALUES ('265', '520400', '安顺市', '520000');
INSERT INTO `city` VALUES ('266', '522200', '铜仁地区', '520000');
INSERT INTO `city` VALUES ('267', '522300', '黔西南布依族苗族自治州', '520000');
INSERT INTO `city` VALUES ('268', '522400', '毕节地区', '520000');
INSERT INTO `city` VALUES ('269', '522600', '黔东南苗族侗族自治州', '520000');
INSERT INTO `city` VALUES ('270', '522700', '黔南布依族苗族自治州', '520000');
INSERT INTO `city` VALUES ('271', '530100', '昆明市', '530000');
INSERT INTO `city` VALUES ('272', '530300', '曲靖市', '530000');
INSERT INTO `city` VALUES ('273', '530400', '玉溪市', '530000');
INSERT INTO `city` VALUES ('274', '530500', '保山市', '530000');
INSERT INTO `city` VALUES ('275', '530600', '昭通市', '530000');
INSERT INTO `city` VALUES ('276', '530700', '丽江市', '530000');
INSERT INTO `city` VALUES ('277', '530800', '思茅市', '530000');
INSERT INTO `city` VALUES ('278', '530900', '临沧市', '530000');
INSERT INTO `city` VALUES ('279', '532300', '楚雄彝族自治州', '530000');
INSERT INTO `city` VALUES ('280', '532500', '红河哈尼族彝族自治州', '530000');
INSERT INTO `city` VALUES ('281', '532600', '文山壮族苗族自治州', '530000');
INSERT INTO `city` VALUES ('282', '532800', '西双版纳傣族自治州', '530000');
INSERT INTO `city` VALUES ('283', '532900', '大理白族自治州', '530000');
INSERT INTO `city` VALUES ('284', '533100', '德宏傣族景颇族自治州', '530000');
INSERT INTO `city` VALUES ('285', '533300', '怒江傈僳族自治州', '530000');
INSERT INTO `city` VALUES ('286', '533400', '迪庆藏族自治州', '530000');
INSERT INTO `city` VALUES ('287', '540100', '拉萨市', '540000');
INSERT INTO `city` VALUES ('288', '542100', '昌都地区', '540000');
INSERT INTO `city` VALUES ('289', '542200', '山南地区', '540000');
INSERT INTO `city` VALUES ('290', '542300', '日喀则地区', '540000');
INSERT INTO `city` VALUES ('291', '542400', '那曲地区', '540000');
INSERT INTO `city` VALUES ('292', '542500', '阿里地区', '540000');
INSERT INTO `city` VALUES ('293', '542600', '林芝地区', '540000');
INSERT INTO `city` VALUES ('294', '610100', '西安市', '610000');
INSERT INTO `city` VALUES ('295', '610200', '铜川市', '610000');
INSERT INTO `city` VALUES ('296', '610300', '宝鸡市', '610000');
INSERT INTO `city` VALUES ('297', '610400', '咸阳市', '610000');
INSERT INTO `city` VALUES ('298', '610500', '渭南市', '610000');
INSERT INTO `city` VALUES ('299', '610600', '延安市', '610000');
INSERT INTO `city` VALUES ('300', '610700', '汉中市', '610000');
INSERT INTO `city` VALUES ('301', '610800', '榆林市', '610000');
INSERT INTO `city` VALUES ('302', '610900', '安康市', '610000');
INSERT INTO `city` VALUES ('303', '611000', '商洛市', '610000');
INSERT INTO `city` VALUES ('304', '620100', '兰州市', '620000');
INSERT INTO `city` VALUES ('305', '620200', '嘉峪关市', '620000');
INSERT INTO `city` VALUES ('306', '620300', '金昌市', '620000');
INSERT INTO `city` VALUES ('307', '620400', '白银市', '620000');
INSERT INTO `city` VALUES ('308', '620500', '天水市', '620000');
INSERT INTO `city` VALUES ('309', '620600', '武威市', '620000');
INSERT INTO `city` VALUES ('310', '620700', '张掖市', '620000');
INSERT INTO `city` VALUES ('311', '620800', '平凉市', '620000');
INSERT INTO `city` VALUES ('312', '620900', '酒泉市', '620000');
INSERT INTO `city` VALUES ('313', '621000', '庆阳市', '620000');
INSERT INTO `city` VALUES ('314', '621100', '定西市', '620000');
INSERT INTO `city` VALUES ('315', '621200', '陇南市', '620000');
INSERT INTO `city` VALUES ('316', '622900', '临夏回族自治州', '620000');
INSERT INTO `city` VALUES ('317', '623000', '甘南藏族自治州', '620000');
INSERT INTO `city` VALUES ('318', '630100', '西宁市', '630000');
INSERT INTO `city` VALUES ('319', '632100', '海东地区', '630000');
INSERT INTO `city` VALUES ('320', '632200', '海北藏族自治州', '630000');
INSERT INTO `city` VALUES ('321', '632300', '黄南藏族自治州', '630000');
INSERT INTO `city` VALUES ('322', '632500', '海南藏族自治州', '630000');
INSERT INTO `city` VALUES ('323', '632600', '果洛藏族自治州', '630000');
INSERT INTO `city` VALUES ('324', '632700', '玉树藏族自治州', '630000');
INSERT INTO `city` VALUES ('325', '632800', '海西蒙古族藏族自治州', '630000');
INSERT INTO `city` VALUES ('326', '640100', '银川市', '640000');
INSERT INTO `city` VALUES ('327', '640200', '石嘴山市', '640000');
INSERT INTO `city` VALUES ('328', '640300', '吴忠市', '640000');
INSERT INTO `city` VALUES ('329', '640400', '固原市', '640000');
INSERT INTO `city` VALUES ('330', '640500', '中卫市', '640000');
INSERT INTO `city` VALUES ('331', '650100', '乌鲁木齐市', '650000');
INSERT INTO `city` VALUES ('332', '650200', '克拉玛依市', '650000');
INSERT INTO `city` VALUES ('333', '652100', '吐鲁番地区', '650000');
INSERT INTO `city` VALUES ('334', '652200', '哈密地区', '650000');
INSERT INTO `city` VALUES ('335', '652300', '昌吉回族自治州', '650000');
INSERT INTO `city` VALUES ('336', '652700', '博尔塔拉蒙古自治州', '650000');
INSERT INTO `city` VALUES ('337', '652800', '巴音郭楞蒙古自治州', '650000');
INSERT INTO `city` VALUES ('338', '652900', '阿克苏地区', '650000');
INSERT INTO `city` VALUES ('339', '653000', '克孜勒苏柯尔克孜自治州', '650000');
INSERT INTO `city` VALUES ('340', '653100', '喀什地区', '650000');
INSERT INTO `city` VALUES ('341', '653200', '和田地区', '650000');
INSERT INTO `city` VALUES ('342', '654000', '伊犁哈萨克自治州', '650000');
INSERT INTO `city` VALUES ('343', '654200', '塔城地区', '650000');
INSERT INTO `city` VALUES ('344', '654300', '阿勒泰地区', '650000');
INSERT INTO `city` VALUES ('345', '659000', '省直辖行政单位', '650000');

-- ----------------------------
-- Table structure for `cwmember`
-- ----------------------------
DROP TABLE IF EXISTS `cwmember`;
CREATE TABLE `cwmember` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT '',
  `ulevel` int(9) DEFAULT '0',
  `rname` varchar(255) DEFAULT '',
  `treeplace` int(11) DEFAULT '0',
  `fatherid` int(11) DEFAULT '0',
  `fathername` varchar(255) DEFAULT NULL,
  `plevel` int(11) DEFAULT '0',
  `ppath` varchar(255) DEFAULT NULL,
  `pdt` datetime DEFAULT NULL,
  `isb` int(11) NOT NULL DEFAULT '0',
  `chl` int(10) DEFAULT '0',
  `chr` int(10) DEFAULT '0',
  `chx` int(10) DEFAULT '0',
  `chz` int(10) DEFAULT '0',
  `chy` int(10) DEFAULT '0',
  `cw` decimal(10,2) DEFAULT '0.00' COMMENT 'c网见点扣除',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2894 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cwmember
-- ----------------------------

-- ----------------------------
-- Table structure for `email`
-- ----------------------------
DROP TABLE IF EXISTS `email`;
CREATE TABLE `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isstart` int(11) DEFAULT NULL COMMENT '否是开启Email功能',
  `zchy` int(11) DEFAULT NULL COMMENT '是否开启注册欢迎',
  `hytitle` text COMMENT '欢迎标题',
  `hycontent` text COMMENT '欢迎内容',
  `txtzhy` int(11) DEFAULT NULL COMMENT '提现通知会员',
  `txtzadmin` int(11) DEFAULT NULL COMMENT '提现通知管理员',
  `cztzadmin` int(11) DEFAULT NULL,
  `hktzadmin` int(11) DEFAULT NULL,
  `ddtzadmin` int(11) DEFAULT NULL COMMENT '订单通知管理员',
  `emailuser` varchar(255) DEFAULT NULL,
  `emailpass` varchar(255) DEFAULT NULL,
  `emailname` varchar(255) DEFAULT NULL,
  `emailsmtp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of email
-- ----------------------------
INSERT INTO `email` VALUES ('1', '0', '1', '欢迎使用直销软件', '欢迎您注册直销软件会员管理系统.\r\n', '1', '1', '1', '1', '1', '', '', '管理员', 'smtp.qq.com');

-- ----------------------------
-- Table structure for `goods`
-- ----------------------------
DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `goodsname` varchar(30) DEFAULT '',
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `price2` decimal(9,2) DEFAULT '0.00',
  `pv` decimal(9,2) NOT NULL DEFAULT '0.00',
  `lx` int(11) NOT NULL DEFAULT '0',
  `goodsimg` varchar(50) DEFAULT '',
  `goodscontent` text,
  `gdate` datetime DEFAULT NULL,
  `isdisplay` int(11) NOT NULL DEFAULT '1',
  `kucun` int(11) DEFAULT '0' COMMENT '存库',
  `sales` int(11) DEFAULT '0' COMMENT '销量',
  `shunxu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods
-- ----------------------------
INSERT INTO `goods` VALUES ('86', '1', 'admin', '购物商场', '1000.00', '0.00', '0.00', '2', '', 'dsdsd', '2016-12-07 09:52:53', '1', '9992', '8', '10000');

-- ----------------------------
-- Table structure for `goods2`
-- ----------------------------
DROP TABLE IF EXISTS `goods2`;
CREATE TABLE `goods2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `goodsname` varchar(30) DEFAULT '',
  `price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `price2` decimal(9,2) DEFAULT '0.00',
  `pv` decimal(9,2) NOT NULL DEFAULT '0.00',
  `lx` int(11) NOT NULL DEFAULT '0',
  `goodsimg` varchar(50) DEFAULT '',
  `goodscontent` text,
  `gdate` datetime DEFAULT NULL,
  `isdisplay` int(11) NOT NULL DEFAULT '1',
  `kucun` int(11) DEFAULT '0' COMMENT '存库',
  `sales` int(11) DEFAULT '0' COMMENT '销量',
  `shunxu` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of goods2
-- ----------------------------
INSERT INTO `goods2` VALUES ('89', '0', '', '金酒', '2.00', '0.00', '0.00', '2', '', null, '2017-02-22 16:22:31', '1', '999999999', '0', null);
INSERT INTO `goods2` VALUES ('88', '0', '', '十 年俦酒', '3.00', '0.00', '0.00', '2', '', null, '2017-02-22 16:22:19', '1', '999999999', '0', null);
INSERT INTO `goods2` VALUES ('87', '0', '', '二十年俦酒', '4.00', '0.00', '0.00', '2', '', null, '2017-02-22 16:22:05', '1', '999999999', '0', null);
INSERT INTO `goods2` VALUES ('90', '0', '', '银酒', '1.00', '0.00', '0.00', '2', '', null, '2017-02-22 16:22:53', '1', '999999999', '0', null);

-- ----------------------------
-- Table structure for `huikuan`
-- ----------------------------
DROP TABLE IF EXISTS `huikuan`;
CREATE TABLE `huikuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(255) DEFAULT NULL,
  `bankcard` varchar(30) DEFAULT '',
  `bankusername` varchar(30) DEFAULT '',
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `sdate` datetime DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `snickname` varchar(30) DEFAULT '',
  `hdate` datetime DEFAULT NULL,
  `qdate` datetime DEFAULT NULL,
  `shuoming` varchar(50) DEFAULT '',
  `isgrant` int(11) NOT NULL DEFAULT '0',
  `rusername` varchar(50) DEFAULT '',
  `rid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of huikuan
-- ----------------------------

-- ----------------------------
-- Table structure for `information`
-- ----------------------------
DROP TABLE IF EXISTS `information`;
CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `introduced` text COMMENT '公司简介',
  `rules` text COMMENT '奖金制度',
  `company` text COMMENT '公司账户',
  `hkzh` text COMMENT '汇款账户',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of information
-- ----------------------------
INSERT INTO `information` VALUES ('1', '                     <p><strong><span style=\"\\\'\\\\\\\'BACKGROUND-COLOR:\\\'\" 3366ff=\"\\\'\\\'\"><span style=\"\\\'\\\\\\\'color:#3333ff;BACKGROUND-COLOR:\\\'\" ffffcc=\"\\\'\\\'\">这里是公司简介</span></span></strong></p>					', '             <p><strong><span style=\"\\\'color:#ff0000;\\\'\">这里是奖金制度</span></strong></p>			', '<p>\r\n	<strong><span style=\"color:#ffcc00;\"><b>\r\n	<p>\r\n		<font 宋体;=\"\" font-size:=\"\" 13px\"=\"\">尊敬的会员大家好：</span>\r\n	</p>\r\n	<p>\r\n		<font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"></span></span></span></span></span></span></span></span></span></span>\r\n	</p>\r\n	<p class=\"MsoNormal\">\r\n		<font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\"><font 宋体;=\"\" font-size:=\"\" 13px\"=\"\">为了能给大家广泛的空间发展，公司系统采用最新技术电脑端+手机端一体化来运作系统，这也就是电脑上显示的系统和手机上显示的不一样的原因，因为手机打开是手机端口，方便操作，不会想电脑版一样拖拽，可以直接适应任何手机屏幕，可以给会员提供更好的便利。目前国内市场，能用手机端正常操作的系统少之又少，本系统便属于其中，很多系统都是直接电脑版本，由此可见公司对市场的看重和关注，同时希望大家在这个平台得到良好的发展。</span></span></span></span></span></span></span></span></span>\r\n	</p>\r\n</b></span></strong>\r\n</p>', 'dsds');

-- ----------------------------
-- Table structure for `jiesuan`
-- ----------------------------
DROP TABLE IF EXISTS `jiesuan`;
CREATE TABLE `jiesuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` datetime NOT NULL,
  `operation` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jiesuan
-- ----------------------------

-- ----------------------------
-- Table structure for `jingtai`
-- ----------------------------
DROP TABLE IF EXISTS `jingtai`;
CREATE TABLE `jingtai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT '0',
  `nickname` varchar(50) COLLATE latin1_german1_ci DEFAULT NULL,
  `jine` decimal(11,2) DEFAULT '0.00',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- ----------------------------
-- Records of jingtai
-- ----------------------------

-- ----------------------------
-- Table structure for `jingtaimx`
-- ----------------------------
DROP TABLE IF EXISTS `jingtaimx`;
CREATE TABLE `jingtaimx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jine` decimal(11,2) DEFAULT '0.00',
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

-- ----------------------------
-- Records of jingtaimx
-- ----------------------------

-- ----------------------------
-- Table structure for `lsbd`
-- ----------------------------
DROP TABLE IF EXISTS `lsbd`;
CREATE TABLE `lsbd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `snickname` varchar(255) DEFAULT NULL,
  `susername` varchar(255) DEFAULT NULL,
  `lsk` decimal(10,0) DEFAULT NULL,
  `bdate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lsbd
-- ----------------------------

-- ----------------------------
-- Table structure for `mail`
-- ----------------------------
DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `sid` int(11) NOT NULL DEFAULT '0',
  `snickname` varchar(30) DEFAULT '',
  `fdate` datetime DEFAULT NULL,
  `title` varchar(50) DEFAULT '',
  `isread` int(11) NOT NULL DEFAULT '0',
  `mailcontent` text,
  `isdelete` int(11) NOT NULL DEFAULT '0',
  `issdelete` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mail
-- ----------------------------

-- ----------------------------
-- Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userid` varchar(30) NOT NULL DEFAULT '' COMMENT '会员编号',
  `nickname` varchar(30) NOT NULL DEFAULT '' COMMENT '会员昵称',
  `password1` varchar(50) NOT NULL DEFAULT '' COMMENT '一级密码',
  `pass1` varchar(50) NOT NULL DEFAULT '',
  `password2` varchar(50) NOT NULL DEFAULT '' COMMENT '二级密码',
  `pass2` varchar(50) NOT NULL DEFAULT '',
  `password3` varchar(50) NOT NULL DEFAULT '' COMMENT '三级密码',
  `passquestion` text COMMENT '密码安全问题',
  `passanswer` text COMMENT '密码安全答案',
  `username` varchar(30) DEFAULT '' COMMENT '会员名字',
  `usercard` varchar(30) DEFAULT '' COMMENT '身份证',
  `usertel` varchar(30) DEFAULT '' COMMENT '联系电话',
  `sheng` varchar(30) DEFAULT '0' COMMENT '省份编号',
  `shi` varchar(30) DEFAULT '0' COMMENT '城市编号',
  `xian` varchar(30) DEFAULT NULL,
  `useraddress` varchar(50) DEFAULT '' COMMENT '联系地址',
  `userqq` varchar(30) DEFAULT '' COMMENT '会员QQ',
  `useremail` varchar(50) DEFAULT NULL COMMENT '电子邮箱',
  `sex` int(11) DEFAULT NULL,
  `nian` int(11) DEFAULT NULL,
  `yue` int(11) DEFAULT NULL,
  `ri` int(11) DEFAULT NULL,
  `xueli` varchar(30) DEFAULT NULL,
  `bankname` varchar(30) DEFAULT '' COMMENT '账户名称',
  `bankcard` varchar(30) DEFAULT '' COMMENT '账户卡号',
  `bankusername` varchar(30) DEFAULT '' COMMENT '账户姓名',
  `bankaddress` varchar(30) DEFAULT '' COMMENT '开户地址',
  `zhifubao` varchar(50) DEFAULT NULL,
  `caifutong` varchar(30) DEFAULT NULL,
  `rdt` datetime DEFAULT NULL COMMENT '注册时间',
  `pdt` datetime DEFAULT NULL COMMENT '激活时间',
  `ulevel` int(11) NOT NULL DEFAULT '0' COMMENT '会员等级',
  `dan` int(11) NOT NULL DEFAULT '0' COMMENT '会员单数',
  `lsk` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '注册金额',
  `pv` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '注册PV',
  `sgb` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '首购币',
  `gwb` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '重购币',
  `zsq` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '报单币',
  `mey` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '奖金',
  `maxmey` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '奖金累计',
  `wlf` decimal(9,2) NOT NULL DEFAULT '0.00' COMMENT '网络费',
  `reid` int(11) NOT NULL DEFAULT '0' COMMENT '推荐人编号',
  `rname` varchar(30) DEFAULT '' COMMENT '推荐人昵称',
  `relevel` int(11) NOT NULL DEFAULT '0' COMMENT '推荐关系级别',
  `repath` text COMMENT '推荐路径',
  `treeplace` int(11) NOT NULL DEFAULT '0' COMMENT '区域编号',
  `fatherid` int(11) NOT NULL DEFAULT '0' COMMENT '安置人编号',
  `fathername` varchar(30) DEFAULT '' COMMENT '安置人名称',
  `plevel` int(11) NOT NULL DEFAULT '0' COMMENT '安置层数',
  `ppath` text COMMENT '安置路径',
  `bdid` int(11) NOT NULL DEFAULT '0' COMMENT '服务中心编号',
  `bdname` varchar(30) DEFAULT '' COMMENT '服务中心名称',
  `ispay` int(11) NOT NULL DEFAULT '0' COMMENT '是否激活0没激活1激活2空单',
  `islock` int(11) NOT NULL DEFAULT '0' COMMENT '是否锁定',
  `isbd` int(11) NOT NULL DEFAULT '0' COMMENT '是否服务中心',
  `bdnickname` varchar(30) DEFAULT NULL,
  `bddiqu` varchar(50) DEFAULT NULL,
  `bdbeizhu` text,
  `bdlevel` int(11) DEFAULT '0',
  `sqbdje` int(11) DEFAULT '0' COMMENT '首次申请金额',
  `recount` int(11) NOT NULL DEFAULT '0' COMMENT '推荐数量',
  `recount2` int(11) NOT NULL DEFAULT '0',
  `reyeji` decimal(20,2) NOT NULL DEFAULT '0.00' COMMENT '荐推业绩',
  `area1` decimal(20,0) NOT NULL DEFAULT '0' COMMENT '总业绩',
  `area2` decimal(20,0) NOT NULL DEFAULT '0',
  `area3` decimal(20,0) NOT NULL DEFAULT '0',
  `area4` decimal(20,0) NOT NULL DEFAULT '0',
  `area5` decimal(20,0) NOT NULL DEFAULT '0',
  `narea1` decimal(20,0) NOT NULL DEFAULT '0' COMMENT '新增业绩',
  `narea2` decimal(20,0) NOT NULL DEFAULT '0',
  `narea3` decimal(20,0) NOT NULL DEFAULT '0',
  `yarea1` decimal(20,0) NOT NULL DEFAULT '0' COMMENT '剩余业绩',
  `yarea2` decimal(20,0) NOT NULL DEFAULT '0',
  `yarea3` decimal(20,0) NOT NULL DEFAULT '0',
  `sclogin` datetime DEFAULT NULL COMMENT '上次登录时间',
  `b0` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b1` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b2` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b3` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b4` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b5` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b6` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b7` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b8` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b9` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b10` decimal(9,2) NOT NULL DEFAULT '0.00',
  `b11` decimal(9,2) DEFAULT '0.00',
  `b12` decimal(9,2) DEFAULT '0.00',
  `cfxf` decimal(9,2) DEFAULT '0.00',
  `zb1` decimal(9,2) DEFAULT '0.00',
  `zb4` decimal(10,2) DEFAULT '0.00',
  `isfh` int(11) DEFAULT '0',
  `zjulevel` int(11) DEFAULT '0',
  `pai` int(11) DEFAULT '0',
  `ip` varchar(20) DEFAULT NULL,
  `jijin` decimal(11,2) DEFAULT '0.00',
  `meys` decimal(11,2) DEFAULT '0.00',
  `meys2` decimal(11,2) DEFAULT '0.00',
  `date` varchar(50) DEFAULT NULL,
  `cy` int(6) DEFAULT '0' COMMENT '购物次数',
  `date2` datetime DEFAULT NULL,
  `num` int(5) DEFAULT '0',
  `jine` decimal(11,2) DEFAULT '0.00',
  `zuo` int(11) DEFAULT '0',
  `you` int(11) DEFAULT '0',
  `htjine` decimal(11,2) DEFAULT '0.00' COMMENT '回填金额',
  `lid` int(11) DEFAULT NULL,
  `lnickname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `b` (`b1`,`b2`,`b3`,`b4`,`b5`,`b6`),
  KEY `area` (`yarea1`,`yarea2`),
  KEY `ceng` (`pdt`,`plevel`,`ispay`),
  KEY `fh` (`ulevel`,`isfh`,`num`),
  KEY `jine` (`jine`)
) ENGINE=MyISAM AUTO_INCREMENT=1332 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of member
-- ----------------------------
INSERT INTO `member` VALUES ('1', 'admin', 'admin', '96e79218965eb72c92a549dd5a330112', '111111', 'e3ceb5881a0a1fdaad01296d7554868d', '222222', '21232f297a57a5a743894a0e4a801fc3', '您的出生地是？', 'sss', '99991', '456', '12345671', '340000', '341500', '341522', '默认数据', '111', '默认数据', '1', '1960', '1', '1', '小学', '8989', 'kjkk', 'kjkj', 'kjkjk', '支付宝账号1', '1164', '2016-01-13 20:54:02', '2016-01-13 20:54:02', '2', '10000', '10000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '顶层会员', '0', ',', '0', '0', '顶层会员', '0', ',', '1', 'admin', '1', '0', '2', '一二三四五六七八九十', '420300', '', '2', '100000', '3', '0', '3000.00', '2000', '1000', '0', '4000', '3000', '2', '1', '0', '1000', '0', '0', '2016-01-11 14:30:41', '0.00', '0.00', '5.00', '1000.00', '100.00', '0.00', '0.00', '60.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1.00', '0.00', '0', '0', '0', '127.0.0.1', '0.00', '5.00', '1100.00', '2017-06', '0', '0000-00-00 00:00:00', '0', '0.00', '0', '0', '0.00', '0', '');
INSERT INTO `member` VALUES ('1330', 'QD260304', 'QD260304', '96e79218965eb72c92a549dd5a330112', '111111', 'e3ceb5881a0a1fdaad01296d7554868d', '222222', '1a100d2c0dab19c4430e7d73762b3423', '您母亲的姓名是？', '168', '168', '168', '168', '110000', '', '', '168', '', '168', '1', '1930', '1', '1', '小学', '中国农业银行', '168', '168', '168', '168', '168', '2017-06-28 08:56:14', '2017-06-28 08:56:20', '1', '1000', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1', 'admin', '1', ',1,', '2', '1', 'admin', '1', ',1,', '1', 'admin', '1', '0', '0', null, null, null, '0', '0', '0', '0', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', null, '0.00', '0.00', '0.00', null, '0', null, '0', '0.00', '0', '0', '0.00', null, null);
INSERT INTO `member` VALUES ('1331', 'QD422846', 'QD422846', '96e79218965eb72c92a549dd5a330112', '111111', 'e3ceb5881a0a1fdaad01296d7554868d', '222222', '1a100d2c0dab19c4430e7d73762b3423', '您母亲的姓名是？', '168', '168', '168', '168', '110000', '', '', '168', '', '168', '1', '1930', '1', '1', '小学', '中国农业银行', '168', '168', '168', '168', '168', '2017-06-28 08:57:59', '2017-06-28 08:58:02', '1', '1000', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1', 'admin', '1', ',1,', '1', '1329', 'QD868809', '2', ',1,1329,', '1', 'admin', '1', '0', '0', null, null, null, '0', '0', '0', '0', '0.00', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', null, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', null, '0.00', '0.00', '0.00', null, '0', null, '0', '0.00', '0', '0', '0.00', null, null);
INSERT INTO `member` VALUES ('1329', 'QD868809', 'QD868809', '96e79218965eb72c92a549dd5a330112', '111111', 'e3ceb5881a0a1fdaad01296d7554868d', '222222', '1a100d2c0dab19c4430e7d73762b3423', '您母亲的姓名是？', '168', '168', '168', '168', '110000', '', '', '168', '', '168', '1', '1930', '1', '1', '小学', '中国农业银行', '168', '168', '168', '168', '168', '2017-06-28 08:56:09', '2017-06-28 08:56:17', '1', '1000', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '1', 'admin', '1', ',1,', '1', '1', 'admin', '1', ',1,', '1', 'admin', '1', '0', '0', null, null, null, '0', '0', '0', '0', '0.00', '1000', '0', '0', '1000', '0', '1', '0', '0', '1000', '0', '0', null, '0.00', '0.00', '2.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0', '0', '0', null, '0.00', '2.00', '0.00', null, '0', null, '0', '0.00', '0', '0', '0.00', null, null);

-- ----------------------------
-- Table structure for `news`
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `newstitle` varchar(50) NOT NULL DEFAULT '',
  `newscontent` text,
  `nickname` varchar(30) DEFAULT '',
  `newstime` datetime DEFAULT NULL,
  `clickcount` int(11) NOT NULL DEFAULT '0',
  `isedit` int(11) NOT NULL DEFAULT '1',
  `lx` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '112', '122222222222222222222222222222222222222222222', 'admin', '2016-01-13 15:26:46', '0', '1', '0');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ordersnumber` varchar(30) DEFAULT '' COMMENT '订单编号',
  `logistics` varchar(30) DEFAULT NULL,
  `logisticsno` varchar(30) DEFAULT '' COMMENT '快递编号',
  `uid` int(11) NOT NULL DEFAULT '0',
  `userid` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `usertel` varchar(30) DEFAULT NULL,
  `useraddress` varchar(50) DEFAULT '',
  `goods` text,
  `sgb` decimal(9,2) NOT NULL DEFAULT '0.00',
  `gwb` decimal(9,2) NOT NULL DEFAULT '0.00',
  `cdate` datetime DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `lx` int(6) DEFAULT '0' COMMENT '商品类型',
  `issend` int(11) DEFAULT '0',
  `isqr` int(6) DEFAULT '0',
  `bid` int(11) DEFAULT NULL,
  `bnickname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=173 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for `orders1`
-- ----------------------------
DROP TABLE IF EXISTS `orders1`;
CREATE TABLE `orders1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ordersnumber` varchar(30) DEFAULT '' COMMENT '订单编号',
  `logistics` varchar(30) DEFAULT NULL,
  `logisticsno` varchar(30) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `userid` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `usertel` varchar(30) DEFAULT NULL,
  `useraddress` varchar(30) DEFAULT NULL,
  `goodid` int(11) DEFAULT NULL,
  `goodname` varchar(30) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT '0.00',
  `num` int(6) DEFAULT '0',
  `jine` decimal(9,2) DEFAULT '0.00',
  `date` datetime DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `issend` int(6) DEFAULT '0',
  `bid` int(11) DEFAULT '0',
  `bnickname` varchar(50) DEFAULT NULL,
  `isqr` int(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cx` (`ordersnumber`),
  KEY `cx2` (`date`,`sdate`,`issend`,`isqr`)
) ENGINE=MyISAM AUTO_INCREMENT=183 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders1
-- ----------------------------

-- ----------------------------
-- Table structure for `orders2`
-- ----------------------------
DROP TABLE IF EXISTS `orders2`;
CREATE TABLE `orders2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ordersnumber` varchar(30) DEFAULT '' COMMENT '订单编号',
  `logistics` varchar(30) DEFAULT NULL,
  `logisticsno` varchar(30) DEFAULT NULL,
  `uid` int(11) DEFAULT '0',
  `userid` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `usertel` varchar(30) DEFAULT NULL,
  `useraddress` varchar(30) DEFAULT NULL,
  `goodid` int(11) DEFAULT NULL,
  `goodname` varchar(30) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT '0.00',
  `num` int(6) DEFAULT '0',
  `jine` decimal(9,2) DEFAULT '0.00',
  `date` datetime DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `issend` int(6) DEFAULT '0',
  `bid` int(11) DEFAULT '0',
  `bnickname` varchar(50) DEFAULT NULL,
  `isqr` int(6) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cx` (`ordersnumber`),
  KEY `cx2` (`date`,`sdate`,`issend`,`isqr`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders2
-- ----------------------------
INSERT INTO `orders2` VALUES ('38', '11217151759846', null, null, '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '1', '1000.00', '2016-12-17 15:17:59', '2016-12-17 15:41:28', '2', '1', 'admin', '1');
INSERT INTO `orders2` VALUES ('39', '11217151812453', null, null, '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '1', '1000.00', '2016-12-17 15:18:12', '2016-12-17 15:39:51', '2', '1', 'admin', '1');
INSERT INTO `orders2` VALUES ('40', '11217151828203', 'eee', 'eee', '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '1', '1000.00', '2016-12-17 15:18:28', '2016-12-17 15:39:14', '3', '1', 'admin', '1');
INSERT INTO `orders2` VALUES ('41', '11217154142932', '', '', '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '2', '2000.00', '2016-12-17 15:41:42', '2016-12-17 15:42:54', '3', '1', 'admin', '1');
INSERT INTO `orders2` VALUES ('42', '11217154156157', '', '', '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '2', '2000.00', '2016-12-17 15:41:56', '2016-12-17 15:42:46', '2', '1', 'admin', '1');
INSERT INTO `orders2` VALUES ('43', '11217154525218', '', '', '1272', 'CN00490567', '168', '168', '168', '86', '购物商场', '1000.00', '1', '1000.00', '2016-12-17 15:45:25', '2016-12-17 15:45:58', '3', '1', 'admin', '1');

-- ----------------------------
-- Table structure for `province`
-- ----------------------------
DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provinceid` int(11) NOT NULL,
  `province` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of province
-- ----------------------------
INSERT INTO `province` VALUES ('1', '110000', '北京市');
INSERT INTO `province` VALUES ('2', '120000', '天津市');
INSERT INTO `province` VALUES ('3', '130000', '河北省');
INSERT INTO `province` VALUES ('4', '140000', '山西省');
INSERT INTO `province` VALUES ('5', '150000', '内蒙古自治区');
INSERT INTO `province` VALUES ('6', '210000', '辽宁省');
INSERT INTO `province` VALUES ('7', '220000', '吉林省');
INSERT INTO `province` VALUES ('8', '230000', '黑龙江省');
INSERT INTO `province` VALUES ('9', '310000', '上海市');
INSERT INTO `province` VALUES ('10', '320000', '江苏省');
INSERT INTO `province` VALUES ('11', '330000', '浙江省');
INSERT INTO `province` VALUES ('12', '340000', '安徽省');
INSERT INTO `province` VALUES ('13', '350000', '福建省');
INSERT INTO `province` VALUES ('14', '360000', '江西省');
INSERT INTO `province` VALUES ('15', '370000', '山东省');
INSERT INTO `province` VALUES ('16', '410000', '河南省');
INSERT INTO `province` VALUES ('17', '420000', '湖北省');
INSERT INTO `province` VALUES ('18', '430000', '湖南省');
INSERT INTO `province` VALUES ('19', '440000', '广东省');
INSERT INTO `province` VALUES ('20', '450000', '广西壮族自治区');
INSERT INTO `province` VALUES ('21', '460000', '海南省');
INSERT INTO `province` VALUES ('22', '500000', '重庆市');
INSERT INTO `province` VALUES ('23', '510000', '四川省');
INSERT INTO `province` VALUES ('24', '520000', '贵州省');
INSERT INTO `province` VALUES ('25', '530000', '云南省');
INSERT INTO `province` VALUES ('26', '540000', '西藏自治区');
INSERT INTO `province` VALUES ('27', '610000', '陕西省');
INSERT INTO `province` VALUES ('28', '620000', '甘肃省');
INSERT INTO `province` VALUES ('29', '630000', '青海省');
INSERT INTO `province` VALUES ('30', '640000', '宁夏回族自治区');
INSERT INTO `province` VALUES ('31', '650000', '新疆维吾尔自治区');
INSERT INTO `province` VALUES ('32', '710000', '台湾省');
INSERT INTO `province` VALUES ('33', '810000', '香港特别行政区');
INSERT INTO `province` VALUES ('34', '820000', '澳门特别行政区');

-- ----------------------------
-- Table structure for `systemparameters`
-- ----------------------------
DROP TABLE IF EXISTS `systemparameters`;
CREATE TABLE `systemparameters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `txbs` int(9) DEFAULT NULL COMMENT '提现倍数',
  `txtime` varchar(255) DEFAULT NULL,
  `txmix` decimal(11,0) DEFAULT NULL COMMENT '提现最小金额',
  `txsl` decimal(10,0) DEFAULT NULL COMMENT '提现手续费',
  `sl` decimal(10,0) DEFAULT NULL COMMENT '奖金税收',
  `wlf` decimal(10,0) DEFAULT NULL COMMENT '网络维护费',
  `xtkg` int(11) DEFAULT NULL COMMENT '统系开关',
  `azkg` int(11) DEFAULT NULL COMMENT '安置开关',
  `tjkg` int(11) DEFAULT NULL COMMENT '推荐关系图开关',
  `bdbonus` int(11) DEFAULT NULL COMMENT '服务中心查看奖金',
  `qq1` varchar(255) DEFAULT NULL,
  `qq2` varchar(255) DEFAULT NULL,
  `qq3` varchar(255) DEFAULT NULL,
  `qq4` varchar(255) DEFAULT NULL,
  `isb2` int(11) DEFAULT NULL,
  `isb3` int(11) DEFAULT NULL,
  `yeji` decimal(11,0) DEFAULT NULL COMMENT '系统业绩',
  `jmf1` decimal(11,0) DEFAULT NULL,
  `jmf2` decimal(11,0) DEFAULT NULL,
  `ff` int(11) DEFAULT NULL,
  `ms` int(11) DEFAULT NULL,
  `d1` decimal(11,0) DEFAULT NULL,
  `d2` decimal(10,0) DEFAULT NULL,
  `d3` decimal(10,0) DEFAULT NULL,
  `d4` decimal(10,0) DEFAULT NULL,
  `d5` decimal(10,0) DEFAULT NULL,
  `d6` decimal(10,0) DEFAULT NULL,
  `d7` decimal(10,0) DEFAULT NULL,
  `d8` decimal(10,0) DEFAULT NULL,
  `d9` decimal(10,0) DEFAULT NULL,
  `d10` decimal(10,0) DEFAULT NULL,
  `ds1` decimal(10,0) DEFAULT NULL,
  `ds2` decimal(10,0) DEFAULT NULL,
  `ds3` decimal(10,0) DEFAULT NULL,
  `ds4` decimal(10,0) DEFAULT NULL,
  `ds5` decimal(10,0) DEFAULT NULL,
  `ds6` decimal(10,0) DEFAULT NULL,
  `ds7` decimal(10,0) DEFAULT NULL,
  `ds8` decimal(10,0) DEFAULT NULL,
  `ds9` decimal(10,0) DEFAULT NULL,
  `ds10` decimal(10,0) DEFAULT NULL,
  `dbl1` decimal(10,0) DEFAULT NULL,
  `dbl2` decimal(10,0) DEFAULT NULL,
  `dbl3` decimal(10,0) DEFAULT NULL,
  `dbl4` decimal(10,0) DEFAULT NULL,
  `dbl5` decimal(10,0) DEFAULT NULL,
  `dbl6` decimal(10,0) DEFAULT NULL,
  `dbl7` decimal(10,0) DEFAULT NULL,
  `dbl8` decimal(10,0) DEFAULT NULL,
  `dbl9` decimal(10,0) DEFAULT NULL,
  `dbl10` decimal(10,0) DEFAULT NULL,
  `lsbl` decimal(10,0) DEFAULT NULL,
  `fxkc` decimal(10,0) DEFAULT NULL,
  `fxlj` decimal(10,0) DEFAULT NULL,
  `fxtzbl` decimal(10,0) DEFAULT NULL,
  `jybl` decimal(10,0) DEFAULT NULL,
  `password1` varchar(255) DEFAULT NULL,
  `password2` varchar(255) DEFAULT NULL,
  `ziliao` int(11) DEFAULT NULL,
  `duanxinzhanghao` varchar(255) DEFAULT NULL COMMENT '短信接口帐号',
  `duanxinmima` varchar(255) DEFAULT NULL COMMENT '短信接口密码',
  `aixinjijin` decimal(11,2) DEFAULT '0.00' COMMENT '爱心基金',
  `chongfuxiaofei` int(11) DEFAULT '0' COMMENT '重复消费',
  `koushui` int(11) DEFAULT '0' COMMENT '扣税',
  `fanli` int(11) DEFAULT '0' COMMENT '店铺返利',
  `dianbaodan` int(11) DEFAULT '0' COMMENT '店报单费',
  `dx` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of systemparameters
-- ----------------------------
INSERT INTO `systemparameters` VALUES ('1', '100', '8', '100', '5', '0', '40', '1', '1', '1', '1', '123456', '123456', '123456', '123456', '0', '0', '3000', '0', '0', '1', '1', '5', '10', '15', '20', '25', '30', '35', '40', '45', '50', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '10', '9', '8', '7', '6', '5', '4', '3', '2', '1', '50', '10', '1000', '25', '80', '111111', '222222', '1', 'wld', 'wld888', '0.00', '10', '5', '3000', '2', '0');

-- ----------------------------
-- Table structure for `systemyeji`
-- ----------------------------
DROP TABLE IF EXISTS `systemyeji`;
CREATE TABLE `systemyeji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ydate` datetime DEFAULT NULL,
  `xzhy` int(11) DEFAULT '0' COMMENT '新增会员数量',
  `zhy` int(11) DEFAULT '0' COMMENT '总会员数量',
  `xzdan` int(11) DEFAULT '0' COMMENT '新增单数',
  `zdan` int(11) DEFAULT '0' COMMENT '总单数',
  `xzyj` decimal(10,0) DEFAULT '0' COMMENT '新增业绩',
  `zyj` decimal(10,0) DEFAULT '0' COMMENT '总业绩',
  `ff` decimal(10,0) DEFAULT '0' COMMENT '发放',
  `zff` decimal(10,0) DEFAULT '0' COMMENT '总发放',
  `tx` decimal(10,0) DEFAULT '0' COMMENT '会员提现',
  `cz` decimal(10,0) DEFAULT '0' COMMENT '充值收入',
  `dd` decimal(10,0) DEFAULT '0' COMMENT '订单收入',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=235 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of systemyeji
-- ----------------------------
INSERT INTO `systemyeji` VALUES ('234', '2017-06-28 08:56:17', '3', '3', '0', '0', '3000', '3000', '0', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for `tixian`
-- ----------------------------
DROP TABLE IF EXISTS `tixian`;
CREATE TABLE `tixian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `usertel` varchar(30) DEFAULT '',
  `bankname` varchar(30) DEFAULT '',
  `bankcard` varchar(30) DEFAULT '',
  `bankusername` varchar(30) DEFAULT '',
  `bankaddress` varchar(30) DEFAULT '',
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `shouxu` decimal(9,2) NOT NULL DEFAULT '0.00',
  `tdate` datetime DEFAULT NULL,
  `fdate` datetime DEFAULT NULL,
  `isgrant` int(11) NOT NULL DEFAULT '0',
  `bdid` int(11) DEFAULT NULL,
  `bdname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tixian
-- ----------------------------

-- ----------------------------
-- Table structure for `to_admin`
-- ----------------------------
DROP TABLE IF EXISTS `to_admin`;
CREATE TABLE `to_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginname` varchar(50) NOT NULL,
  `loginpass` varchar(50) NOT NULL,
  `group` int(5) DEFAULT NULL,
  `logindate` datetime DEFAULT NULL COMMENT '登录时间',
  `zq1` int(11) DEFAULT '0' COMMENT '总权限1',
  `zq2` int(11) DEFAULT '0' COMMENT '总权限2',
  `zq3` int(11) DEFAULT '0' COMMENT '总权限3',
  `zq4` int(11) DEFAULT '0',
  `zq5` int(11) DEFAULT '0',
  `zq6` int(11) DEFAULT '0',
  `zq7` int(11) DEFAULT '0',
  `zq8` int(11) DEFAULT '0',
  `zq9` int(11) DEFAULT '0',
  `zq10` int(11) DEFAULT '0',
  `q1` int(11) DEFAULT '0' COMMENT '子权限',
  `q2` int(11) DEFAULT '0',
  `q3` int(11) DEFAULT '0',
  `q4` int(11) DEFAULT '0',
  `q5` int(11) DEFAULT '0',
  `q6` int(11) DEFAULT '0',
  `q7` int(11) DEFAULT '0',
  `q8` int(11) DEFAULT '0',
  `q9` int(11) DEFAULT '0',
  `q10` int(11) DEFAULT '0',
  `q11` int(11) DEFAULT '0',
  `q12` int(11) DEFAULT '0',
  `q13` int(11) DEFAULT '0',
  `q14` int(11) DEFAULT '0',
  `q15` int(11) DEFAULT '0',
  `q16` int(11) DEFAULT '0',
  `q17` int(11) DEFAULT '0',
  `q18` int(11) DEFAULT '0',
  `q19` int(11) DEFAULT '0',
  `q20` int(11) DEFAULT '0',
  `q21` int(11) DEFAULT '0',
  `q22` int(11) DEFAULT '0',
  `q23` int(11) DEFAULT '0',
  `q24` int(11) DEFAULT '0',
  `q25` int(11) DEFAULT '0',
  `q26` int(11) DEFAULT '0',
  `q27` int(11) DEFAULT '0',
  `q28` int(11) DEFAULT '0',
  `q29` int(11) DEFAULT '0',
  `q30` int(11) DEFAULT '0',
  `q31` int(11) DEFAULT '0',
  `q32` int(11) DEFAULT '0',
  `q33` int(11) DEFAULT '0',
  `q34` int(11) DEFAULT '0',
  `q35` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of to_admin
-- ----------------------------
INSERT INTO `to_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '2017-06-28 08:43:33', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');
INSERT INTO `to_admin` VALUES ('2', '111', '698d51a19d8a121ce581499d7b701668', null, '2016-06-02 16:43:36', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '1', '1', '1', '1', '0', '0', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0');

-- ----------------------------
-- Table structure for `tuidan`
-- ----------------------------
DROP TABLE IF EXISTS `tuidan`;
CREATE TABLE `tuidan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(30) DEFAULT NULL,
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `lx` int(11) NOT NULL DEFAULT '0',
  `cdate` datetime DEFAULT NULL,
  `sdate` datetime DEFAULT NULL,
  `isgrant` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tuidan
-- ----------------------------

-- ----------------------------
-- Table structure for `ulevel`
-- ----------------------------
DROP TABLE IF EXISTS `ulevel`;
CREATE TABLE `ulevel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ulevel` int(11) DEFAULT NULL COMMENT '级别',
  `lvname` varchar(30) DEFAULT NULL COMMENT '级别名称',
  `dan` int(11) DEFAULT NULL COMMENT '单数',
  `lsk` decimal(9,0) DEFAULT NULL COMMENT '投资金额',
  `isbd` int(11) DEFAULT NULL COMMENT '申请报单中心资格',
  `yl1` decimal(9,0) DEFAULT NULL COMMENT '奖金预留位置1',
  `yl2` decimal(9,2) DEFAULT NULL,
  `yl3` decimal(9,2) DEFAULT NULL,
  `yl4` decimal(9,2) DEFAULT NULL,
  `yl5` decimal(9,2) DEFAULT NULL,
  `yl6` decimal(9,0) DEFAULT NULL,
  `yl7` decimal(9,0) DEFAULT NULL,
  `yl8` decimal(9,0) DEFAULT NULL,
  `yl9` decimal(9,2) DEFAULT NULL,
  `yl10` decimal(9,2) DEFAULT NULL,
  `yl11` decimal(9,2) DEFAULT NULL,
  `yl12` decimal(9,2) DEFAULT NULL,
  `yl13` decimal(9,2) DEFAULT NULL,
  `yl14` decimal(9,2) DEFAULT NULL,
  `yl15` decimal(9,2) DEFAULT NULL,
  `yl16` decimal(9,2) DEFAULT NULL,
  `yl17` decimal(9,2) DEFAULT NULL,
  `yl18` decimal(9,2) DEFAULT NULL,
  `yl19` decimal(9,2) DEFAULT NULL,
  `yl20` decimal(9,2) DEFAULT '0.00',
  `yl21` decimal(9,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ulevel
-- ----------------------------
INSERT INTO `ulevel` VALUES ('1', '1', '普卡会员', '0', '1000', '0', '10', '0.20', '100.00', '50.00', '5.00', '3000', '2000', '5000', '2.00', '10.00', '5.00', '10.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0');
INSERT INTO `ulevel` VALUES ('2', '2', '银卡会员', '0', '3000', '0', '10', '0.50', '100.00', '50.00', '10.00', '9000', '6000', '15000', '2.00', '10.00', '5.00', '10.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0');
INSERT INTO `ulevel` VALUES ('3', '3', '金卡会员', '0', '9000', '0', '10', '1.20', '100.00', '50.00', '15.00', '27000', '18000', '45000', '2.00', '10.00', '5.00', '10.00', '5.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0');

-- ----------------------------
-- Table structure for `ulevelup`
-- ----------------------------
DROP TABLE IF EXISTS `ulevelup`;
CREATE TABLE `ulevelup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `ylevel` int(11) DEFAULT NULL,
  `uplevel` int(11) DEFAULT NULL,
  `bdid` int(11) DEFAULT NULL,
  `bdname` varchar(30) DEFAULT NULL,
  `udate` datetime DEFAULT NULL,
  `issh` int(11) DEFAULT '0',
  `issh2` int(11) DEFAULT '0',
  `cha` decimal(10,0) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `snickname` varchar(30) DEFAULT NULL,
  `susername` varchar(30) DEFAULT NULL,
  `rdate` datetime DEFAULT NULL,
  `tel` varchar(30) DEFAULT '',
  `weixin` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ulevelup
-- ----------------------------

-- ----------------------------
-- Table structure for `ulevelup2`
-- ----------------------------
DROP TABLE IF EXISTS `ulevelup2`;
CREATE TABLE `ulevelup2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `nickname` varchar(30) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `ylevel` int(11) DEFAULT NULL,
  `uplevel` int(11) DEFAULT NULL,
  `bdid` int(11) DEFAULT NULL,
  `bdname` varchar(30) DEFAULT NULL,
  `udate` datetime DEFAULT NULL,
  `issh` int(11) DEFAULT '0',
  `issh2` int(11) DEFAULT '0',
  `cha` decimal(10,0) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `snickname` varchar(30) DEFAULT NULL,
  `susername` varchar(30) DEFAULT NULL,
  `rdate` datetime DEFAULT NULL,
  `tel` varchar(30) DEFAULT '',
  `weixin` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ulevelup2
-- ----------------------------

-- ----------------------------
-- Table structure for `xingji`
-- ----------------------------
DROP TABLE IF EXISTS `xingji`;
CREATE TABLE `xingji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) DEFAULT NULL,
  `yeji` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of xingji
-- ----------------------------
INSERT INTO `xingji` VALUES ('1', '1', '50000');
INSERT INTO `xingji` VALUES ('2', '10', '100000');
INSERT INTO `xingji` VALUES ('3', '15', '250000');
INSERT INTO `xingji` VALUES ('4', '20', '500000');
INSERT INTO `xingji` VALUES ('5', '25', '1000000');
INSERT INTO `xingji` VALUES ('6', '30', '2000000');
INSERT INTO `xingji` VALUES ('7', '35', '5000000');
INSERT INTO `xingji` VALUES ('8', '40', '10000000');
INSERT INTO `xingji` VALUES ('9', '45', '20000000');
INSERT INTO `xingji` VALUES ('10', '50', '50000000');

-- ----------------------------
-- Table structure for `zhuanhuan`
-- ----------------------------
DROP TABLE IF EXISTS `zhuanhuan`;
CREATE TABLE `zhuanhuan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(255) DEFAULT NULL,
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `zdate` datetime DEFAULT NULL,
  `lx` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zhuanhuan
-- ----------------------------

-- ----------------------------
-- Table structure for `zhuanzhang`
-- ----------------------------
DROP TABLE IF EXISTS `zhuanzhang`;
CREATE TABLE `zhuanzhang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `nickname` varchar(30) DEFAULT '',
  `username` varchar(255) DEFAULT NULL,
  `sid` int(11) NOT NULL DEFAULT '0',
  `snickname` varchar(30) DEFAULT '',
  `susername` varchar(255) DEFAULT NULL,
  `jine` decimal(9,2) NOT NULL DEFAULT '0.00',
  `zdate` datetime DEFAULT NULL,
  `lx` int(11) NOT NULL DEFAULT '0',
  `isqr` int(11) DEFAULT '0' COMMENT '是否确认标识',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zhuanzhang
-- ----------------------------

-- ----------------------------
-- Table structure for `zjulevel`
-- ----------------------------
DROP TABLE IF EXISTS `zjulevel`;
CREATE TABLE `zjulevel` (
  `id` int(11) NOT NULL,
  `uid` int(10) NOT NULL,
  `ulevel` int(20) NOT NULL,
  `zjname` varchar(40) NOT NULL,
  `zjarea` int(200) NOT NULL,
  `lsk` int(9) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zjulevel
-- ----------------------------
INSERT INTO `zjulevel` VALUES ('1', '0', '1', '主任', '10000', '1000');
INSERT INTO `zjulevel` VALUES ('2', '0', '2', '经理', '150000', '4000');
INSERT INTO `zjulevel` VALUES ('3', '0', '3', '总监', '300000', '10000');
INSERT INTO `zjulevel` VALUES ('4', '0', '4', '总裁', '500000', '0');
