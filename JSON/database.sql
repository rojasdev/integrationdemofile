CREATE TABLE `tbl_stocks` (
  `sto_id` int(6) unsigned NOT NULL auto_increment, 
  `sto_name` varchar(80) NOT NULL default '',
  `sto_description` varchar(200) NOT NULL default '',
  `sto_price` decimal(10,2) NOT NULL default '0.00',
  PRIMARY KEY  (`sto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=100001;

INSERT INTO tbl_stocks (sto_name, sto_description, sto_price)
VALUES ('Shoes', 'Sports Shoes', '2500');
INSERT INTO tbl_stocks (sto_name, sto_description, sto_price)
VALUES ('Dress', 'Formal Dress', '1000');
INSERT INTO tbl_stocks (sto_name, sto_description, sto_price)
VALUES ('Hat', 'Hat Men', '500');
INSERT INTO tbl_stocks (sto_name, sto_description, sto_price)
VALUES ('Hat', 'Hat Female', '500');
INSERT INTO tbl_stocks (sto_name, sto_description, sto_price)
VALUES ('Bag', 'Sports Bag', '1500');