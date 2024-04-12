-- Database Population --

-- Costumer Population --
-- 100 Users --
INSERT INTO "user" (id, name, email, password, address, city, country)
VALUES 
  (1,'Joao Silva', 'jsilva@gmail.com', 'abcd123', 'Rua Costa Cabral', 'Porto', 'Portugal'),
  (2,'Jose Bacelar', 'josebacelar@gmail.com', 'password', 'Avenida Fernão Magalhães', 'Porto', 'Portugal'),
  (3,'Benedita Bacelar', 'bbacelar@gmail.com', 'queroentrar', 'Rua Visconde de Setubal', 'Porto', 'Portugal'),
  (4,'Ricardo Pinto', 'ricpinto@gmail.com', 'ricmurder', 'Rua 57', 'Porto', 'Portugal'),
  (5,'Julio Lopes', 'jlopes@gmail.com', 'art2000', 'Rua 34', 'Espinho', 'Portugal'),
  (6,'Rui Rio', 'rrio@gmail.com', 'ABC00', 'Rua da Alegria', 'Porto', 'Portugal'),
  (7,'Rui Rio', 'ruirio@gmail.com', 'ABC00', 'Rua do Prado', 'Viseu', 'Portugal');

INSERT INTO "user" (id, name, email, password, phone_number, nif, address, city, country)
VALUES 
  (8, 'Aurelia Pennington', 'vivamus@google.net', 'FFS72ULP0TC', '(03) 8895 6794', '102401758', 'Ap #579-9253 Metus Av.', 'Worthing', 'Poland'), 
  (9, 'Delilah Blankenship', 'eros@google.org', 'DGJ87TLU7QS', '(08) 9286 2111', '141916741', '472-4232 Per St.', 'Tarma', 'China'), 
  (10, 'Aristotle Baird', 'velit.in@outlook.org', 'HTT12LDB6RS', '(04) 1496 4612', '145271851', 'Ap #303-7367 Eu Ave', 'Hattiesburg', 'Vietnam'), 
  (11, 'Jackson Ward', 'lacus.etiam@protonmail.edu', 'LGA38ITH2UJ', '(03) 8380 4685', '293568635', '385-2497 In Rd.', 'Ninh Bình', 'Vietnam'), 
  (12, 'Candace Phillips', 'condimentum@outlook.ca', 'ZCZ66CRP3TU', '(06) 7357 7416', '119843956', '5299 Tempor Rd.', 'Culiacán', 'Austria'), 
  (13, 'Harrison Lewis', 'et@yahoo.org', 'CNC97VHP2PV', '(05) 6362 4653', '122540449', 'Ap #496-3036 Montes,  Rd.', 'Christchurch', 'China'), 
  (14, 'Caesar Cardenas', 'egestas.lacinia@aol.org', 'LIN15QFO1BU', '(05) 2310 4640', '147617894', '116-2500 Lacus. Rd.', 'Chiniot', 'India'), 
  (15, 'Merritt Dickerson', 'nisi.mauris.nulla@google.couk', 'XLV49NUC0LZ', '(07) 2885 8355', '244846239', '3466 Arcu. Av.', 'Tasikmalaya', 'Russian Federation'), 
  (16, 'Dahlia Hancock', 'auctor.mauris@aol.com', 'LBT31WJC5NI', '(05) 4728 1745', '200855327', 'Ap #391-9446 Etiam Rd.', 'Konya', 'United States'), 
  (17, 'Xander Hopkins', 'quis.accumsan.convallis@google.org', 'CCP42MOI1UF', '(06) 8010 6441', '260446047', '992-1682 Non,  Rd.', 'Cascavel', 'Chile'),

  (18, 'John Barnes', 'turpis@google.net', 'ITX74DOR7NI', '(03) 7366 2631', '139175260', '374-432 Felis St.', 'Tver', 'Russian Federation'), 
  (19, 'Ivy Osborn', 'in.ornare@hotmail.com', 'SJG62GJJ6RR', '(08) 4588 8581', '204418003', '688-6427 Aliquet. Street', 'Casciana Terme', 'Costa Rica'), 
  (20, 'Kareem Hawkins', 'ac.libero@outlook.net', 'MPB35THG4LW', '(06) 0715 2144', '263943419', 'P.O. Box 600,  4448 Aliquam Av.', 'Chongqing', 'Nigeria'), 
  (21, 'Quentin Vaughan', 'sed@aol.com', 'UBM27ODW5OE', '(09) 1571 6776', '102579793', '9700 Elementum St.', 'Paradise', 'Mexico'), 
  (22, 'Willow Taylor', 'eu.lacus@protonmail.org', 'FWU55PIY2FI', '(03) 5887 4134', '109712049', 'P.O. Box 405,  5038 Tincidunt Rd.', 'Darwin', 'United States'), 
  (23, 'Ciaran Clay', 'ornare.facilisis@yahoo.edu', 'ULK73FYC5XQ', '(05) 5694 2817', '190107762', '921-8646 Maecenas Av.', 'Lakeland County', 'Costa Rica'), 
  (24, 'Lane Ewing', 'nibh@icloud.couk', 'CJE33CID7SW', '(06) 7436 3249', '289011325', '9448 Interdum. Rd.', 'Abeokuta', 'Colombia'), 
  (25, 'Leigh Wilson', 'tellus.aenean@google.org', 'IEN02WSI9UT', '(02) 9265 1864', '119627824', '721-9020 Orci. St.', 'Hainan', 'Colombia'), 
  (26, 'Nell Benson', 'nisi.cum.sociis@icloud.ca', 'VXS52IVI4SU', '(02) 6722 6627', '148907109', 'P.O. Box 825,  8510 Dolor. Rd.', 'Recife', 'Indonesia'), 
  (27, 'Ivan Lyons', 'convallis@yahoo.com', 'HDW78MOP9VI', '(06) 5493 0643', '163998901', '5201 Montes,  Road', 'Ponta Grossa', 'Netherlands'),

  (28, 'Glenna Woodward', 'turpis.vitae.purus@outlook.edu', 'LTY58QDS4VZ', '(08) 6638 2345', '118329870', 'Ap #695-1227 Eu Rd.', 'San Luis Potosí', 'Australia'), 
  (29, 'Laura Sharpe', 'ipsum.curabitur@outlook.net', 'IHH55TFG8DA', '(08) 9177 0130', '203983564', 'P.O. Box 342,  4432 Turpis Av.', 'Kon Tum', 'New Zealand'), 
  (30, 'Constance Cash', 'et.pede@hotmail.net', 'UGB50QDN5KG', '(06) 8694 1695', '225281076', '186-8925 Diam. St.', 'Tlaquepaque', 'China'), 
  (31, 'Hadley Perkins', 'quam@google.org', 'RLS24FEF5DL', '(03) 8873 7923', '180953557', '3012 Tincidunt. St.', 'Maastricht', 'Nigeria'), 
  (32, 'Ulric Guthrie', 'turpis.nec@aol.ca', 'JUI84TFM3KE', '(04) 4587 8230', '171322384', '547-3189 Varius. St.', 'Galway', 'Brazil'), 
  (33, 'Brenna Short', 'sagittis.felis@icloud.net', 'VPR50KDY2TD', '(01) 8674 6199', '204123824', '4187 Dolor St.', 'Greenlaw', 'Sweden'), 
  (34, 'Lucas Mcclain', 'rutrum.magna@icloud.org', 'CWQ54QFP9VX', '(06) 1490 4752', '129985260', '123-5688 Lacinia Road', 'Tumba', 'Sweden'), 
  (35, 'Daquan Ray', 'lorem@outlook.com', 'MAU30KTN4KL', '(02) 1673 2631', '102951089', 'Ap #139-1932 At Rd.', 'Ödemiş', 'Germany'), 
  (36, 'Lani Horn', 'consectetuer.adipiscing.elit@google.couk', 'JRL56BBD5KO', '(04) 8532 8411', '118335514', 'Ap #742-2009 Sociosqu St.', 'Cerreto di Spoleto', 'Nigeria'), 
  (37, 'Isabelle Poole', 'felis.nulla.tempor@outlook.com', 'LYD61RDK5DR', '(03) 9444 4170', '228496878', 'Ap #778-9024 Nonummy. Rd.', 'Winnipeg', 'India'),

  (38, 'Lucian Munoz', 'vitae.aliquet@aol.com', 'EPT98UQO4WT', '(05) 4318 9157', '275491889', '564-105 Justo Ave', 'Palma de Mallorca', 'Chile'), 
  (39, 'Jin Clark', 'ac.sem@icloud.edu', 'ZQE23GNQ3BS', '(05) 7151 6340', '147288238', '5520 Cras St.', 'Asan', 'Austria'), 
  (40, 'Bert Ashley', 'augue@yahoo.com', 'NVW97COS8JW', '(06) 2125 1367', '246864066', 'P.O. Box 512,  2092 Rhoncus. Rd.', 'Aubagne', 'South Korea'), 
  (41, 'Zachery Miles', 'fames.ac@outlook.com', 'RLS22NOE1PS', '(08) 7465 8679', '203159643', '953-1572 Eu St.', 'Paraíso', 'France'), 
  (42, 'Kirestin Andrews', 'libero@aol.edu', 'NBD19ZHK1WK', '(05) 7031 3818', '294634551', '789-8830 Sit St.', 'Olmen', 'Vietnam'), 
  (43, 'Ann Bates', 'pharetra.quisque@hotmail.edu', 'SYG74GJH7YF', '(07) 1905 4831', '278779259', '195-7000 Non,  Rd.', 'Tomohon', 'India'), 
  (44, 'Shay Blanchard', 'sed.molestie@aol.net', 'MYN39HOX8JC', '(07) 7816 2906', '250818822', 'Ap #462-5332 Iaculis,  St.', 'Mjölby', 'France'), 
  (45, 'Magee Livingston', 'nisi@icloud.ca', 'NNJ40ILI0NE', '(03) 8836 3445', '291275878', 'Ap #912-620 Donec St.', 'Falun', 'Costa Rica'), 
  (46, 'Norman Houston', 'bibendum@hotmail.net', 'FPB86DVO3HQ', '(08) 5286 7484', '194104130', '640-9390 Dolor. St.', 'Thái Nguyên', 'United States'), 
  (47, 'Amber Hobbs', 'accumsan.convallis.ante@hotmail.ca', 'BCY52HTX7LI', '(06) 9778 4654', '243225747', '8042 Ut,  Avenue', 'Heppignies', 'Costa Rica'),

  (48, 'Raven Kirkland', 'sed.malesuada@protonmail.com', 'CUG01WAI6AM', '(07) 5482 2813', '201159437', 'Ap #518-745 Leo. St.', 'Kaliningrad', 'Canada'), 
  (49, 'Devin Tyler', 'fusce.dolor@yahoo.edu', 'IGX41TWB1HJ', '(03) 4275 8474', '283647939', '8939 Lectus Road', 'Nelson', 'Peru'), 
  (50, 'Medge Ayers', 'a@google.com', 'OBQ42BVW5UG', '(06) 6611 6240', '212980246', '466-7258 Amet St.', 'Mérignac', 'Belgium'), 
  (51, 'Dustin Mccarty', 'id.ante@aol.net', 'VML72IFY2IO', '(08) 5441 5470', '115408001', 'Ap #145-5251 Lobortis,  Ave', 'Rzeszów', 'Mexico'), 
  (52, 'Blake Francis', 'nulla.vulputate@yahoo.net', 'HSX50YQK4VK', '(04) 1775 0191', '242057138', 'Ap #737-3635 Vulputate Ave', 'Zellik', 'India'), 
  (53, 'Chiquita Thompson', 'eleifend.non@protonmail.com', 'FNO33CRF7GD', '(09) 2151 0613', '276670200', 'Ap #486-573 Sed Rd.', 'Fuenlabrada', 'New Zealand'), 
  (54, 'Rafael Snyder', 'quam.pellentesque.habitant@yahoo.org', 'BQX68DSP4NK', '(08) 7351 4778', '156601098', '766-8268 Scelerisque Av.', 'Cairns', 'China'), 
  (55, 'Wynter Hansen', 'fusce@outlook.edu', 'GGG55SIS5JF', '(03) 9367 3043', '103610246', '672-608 Dui. Road', 'Zwettl-Niederösterreich', 'Chile'), 
  (56, 'Ruby Pate', 'felis.nulla.tempor@protonmail.org', 'VIC81UUV5LE', '(08) 5504 3358', '203007431', '238-9985 Volutpat Rd.', 'Kędzierzyn-Koźle', 'Turkey'), 
  (57, 'Odessa Raymond', 'aliquam@outlook.couk', 'WRR23VMG4JE', '(02) 0967 8800', '213014271', '677-4324 Pede Ave', 'Muradiye', 'Russian Federation'),

  (58, 'Chandler English', 'sed@outlook.ca', 'YKR24DNY7XY', '(06) 3473 3097', '120132471', 'P.O. Box 819,  6222 Cursus Rd.', 'Rostov', 'Costa Rica'), 
  (59, 'Naomi Pitts', 'arcu@aol.edu', 'DBA57III6KX', '(06) 6669 3523', '101848711', '410-1490 Orci,  St.', 'Alexandra', 'Germany'), 
  (60, 'Acton Wallace', 'sed.molestie@hotmail.net', 'PEP92TDT4QC', '(06) 2724 3165', '250465986', 'Ap #357-2502 Eu,  St.', 'Hubei', 'United Kingdom'), 
  (61, 'Rachel Small', 'sodales@hotmail.edu', 'CEO52PBR4KZ', '(07) 8712 6761', '108866305', '1345 Vitae,  Rd.', 'West Valley City', 'France'), 
  (62, 'Akeem Strong', 'vitae.semper.egestas@protonmail.com', 'FVC46ULI8DU', '(08) 8595 2890', '244611775', '880-3869 Nunc Rd.', 'Bunbury', 'Belgium'), 
  (63, 'John Austin', 'diam.dictum@aol.com', 'IQF85QBG0JD', '(04) 4876 8067', '137053790', '561-2947 Est Av.', 'Rạch Giá', 'Italy'), 
  (64, 'Linus Hull', 'mauris.suspendisse@hotmail.ca', 'XOR78TIZ6PP', '(03) 0398 0855', '245990447', '2216 Pede Road', 'Götzis', 'Italy'), 
  (65, 'Justina Mack', 'nibh.donec.est@google.com', 'QUY23MXN7WW', '(08) 3214 8739', '160729214', 'Ap #699-2716 Ante. Av.', 'Vĩnh Long', 'Australia'), 
  (66, 'Chelsea Daugherty', 'sed.dictum.eleifend@aol.org', 'TUG87TLG9DV', '(02) 3912 9538', '196046008', '856-5241 Commodo Rd.', 'Tumba', 'Spain'), 
  (67, 'Jacqueline Shaffer', 'sem.vitae@hotmail.com', 'VNO61WVY1AY', '(04) 8856 8832', '245386733', '4698 Nulla St.', 'Essex', 'Nigeria'),

  (68, 'Dorothy Mccarty', 'pede.suspendisse.dui@google.net', 'RQA94LPW2VE', '(06) 0412 7221', '118393346', 'Ap #205-7752 Nulla Rd.', 'Renca', 'Russian Federation'), 
  (69, 'Brady Todd', 'dis.parturient@icloud.net', 'OYW38ION1YD', '(08) 6647 9744', '192784830', '200-7868 Elit,  Avenue', 'Nushki', 'Australia'), 
  (70, 'Louis Mcintosh', 'sit.amet.nulla@icloud.net', 'MAH44DEL4QS', '(08) 4736 8465', '230485958', '314-4303 Posuere Street', 'Hubei', 'Australia'), 
  (71, 'Phillip Cole', 'pulvinar.arcu.et@protonmail.org', 'IOQ69KQL5YC', '(06) 5116 4547', '294523410', '486-4280 Nam St.', 'Jeju', 'Austria'), 
  (72, 'Keane Hunt', 'sed.molestie@google.couk', 'IVI26IVN3QR', '(06) 7375 0816', '281412029', 'Ap #430-5198 Duis Avenue', 'Adelaide', 'Spain'), 
  (73, 'Bertha Giles', 'egestas.a@hotmail.com', 'YXA84XGA1ZP', '(07) 5155 1597', '179249768', '4285 Nulla. Av.', 'Delft', 'Belgium'), 
  (74, 'Hyatt Wolfe', 'nullam.ut@yahoo.net', 'RCI64TMD7US', '(07) 9411 2734', '122739567', '453-6580 Neque St.', 'Cork', 'Netherlands'), 
  (75, 'Drew Neal', 'id.ante@aol.ca', 'JGD68LDL3DI', '(09) 1566 5894', '258583038', '250 Pharetra St.', 'Forchtenstein', 'Sweden'), 
  (76, 'Venus Wood', 'risus.duis.a@yahoo.com', 'QDJ34KBQ1SC', '(08) 0266 0312', '169193710', '8938 Sed Road', 'Sullana', 'Australia'), 
  (77, 'Jarrod Holder', 'elementum.sem.vitae@hotmail.edu', 'LRQ17HGG5KZ', '(06) 8472 0521', '173960228', 'Ap #438-6079 Dapibus Street', 'Vienna', 'Canada'),

  (78, 'Dorothy Lambert', 'duis@hotmail.couk', 'CTR48RDT1SH', '(04) 6227 6465', '261476941', 'Ap #870-2306 Enim. Rd.', 'Rutten', 'Brazil'), 
  (79, 'Leonard Frederick', 'auctor.nunc@protonmail.edu', 'HXS91EBP8JD', '(07) 1931 3136', '106241264', 'Ap #414-1288 Sed St.', 'Juliaca', 'New Zealand'), 
  (80, 'Karina Stephenson', 'pede@icloud.net', 'PPH15RMC7KV', '(08) 5374 3005', '157034051', '765-8122 Adipiscing Road', 'Goes', 'Italy'), 
  (81, 'Vielka Mcintyre', 'integer.sem@hotmail.org', 'PGB85URF5BJ', '(05) 1379 2777', '127464829', 'Ap #579-3625 A Road', 'Lille', 'Nigeria'), 
  (82, 'Cara Cross', 'diam@yahoo.org', 'HEW26ZYX1WR', '(06) 4572 3111', '210146663', 'Ap #344-8247 Non Avenue', 'Wörgl', 'New Zealand'), 
  (83, 'Dominique Baird', 'enim.nec@yahoo.couk', 'NDN28QDV5FB', '(02) 1967 2436', '125076760', '171-4201 Ipsum Road', 'Sullana', 'Turkey'), 
  (84, 'Meredith Neal', 'tempus.non@aol.net', 'QSN86XHP9SY', '(05) 6913 0474', '287516150', '319-8850 Dolor Street', 'Terme', 'Costa Rica'), 
  (85, 'Alexa Gutierrez', 'augue@icloud.com', 'DSS54IQW5TN', '(03) 3873 5583', '264396453', 'P.O. Box 184,  3461 Duis Av.', 'Stintino', 'Netherlands'), 
  (86, 'Jonah Barnett', 'sed.pharetra@icloud.com', 'WUJ38NNB0MM', '(03) 1532 7538', '181566579', 'P.O. Box 586,  7044 Mauris Rd.', 'Łódź', 'Canada'), 
  (87, 'Stuart Cameron', 'dictum.mi@aol.ca', 'ROU38JRD5XB', '(06) 1133 7475', '122203747', 'Ap #763-8673 Non,  St.', 'Baasrode', 'Vietnam'),
  (88, 'Danielle Lucas', 'et.magnis@aol.net', 'IGD32VSQ6QI', '(03) 4503 6736', '251799028', '5660 Ut,  Road', 'San Rafael', 'Turkey'), 
  (89, 'Kylie Dickson', 'scelerisque@hotmail.couk', 'SRE10PHW4WM', '(06) 6523 2884', '110308643', '162-5365 Vitae St.', 'Agustín Codazzi', 'Sweden'), 
  (90, 'Cleo Compton', 'nulla.cras.eu@yahoo.couk', 'SRF35QRH5MZ', '(07) 0623 6941', '195470994', '154-668 Molestie Avenue', 'Abbeville', 'Russian Federation'), 
  (91, 'Lance Pennington', 'blandit.mattis@protonmail.net', 'KOV38PHH1IC', '(07) 8772 2148', '112744293', 'P.O. Box 236,  8545 Sed Rd.', 'Vöcklabruck', 'China'), 
  (92, 'Chadwick Arnold', 'justo.proin@outlook.couk', 'DVN42IHB8QH', '(06) 1625 9388', '117607534', '655-6037 Quam Avenue', 'Caruaru', 'Sweden'), 
  (93, 'Prescott Romero', 'arcu@hotmail.couk', 'NHO66LCG7KO', '(06) 4472 9538', '246887367', '550-9973 Mus. Street', 'Seydişehir', 'Costa Rica'), 
  (94, 'Dominique Small', 'facilisis@outlook.org', 'HRM66VUA4MK', '(09) 7786 1528', '222421532', 'P.O. Box 784,  3533 Vitae Avenue', 'Wedel', 'Spain'), 
  (95, 'Stacy Washington', 'non@yahoo.couk', 'ROF19IDS5VD', '(08) 3494 7270', '106306414', 'Ap #738-2149 Risus Street', 'Cusco', 'Poland'), 
  (96, 'Hunter Mosley', 'dui.augue.eu@aol.ca', 'DIX14GTD8LK', '(02) 3421 2996', '160114094', 'P.O. Box 242,  8812 Mi. Rd.', 'Tarma', 'Canada'), 
  (97, 'Melanie Hampton', 'duis.elementum.dui@google.com', 'YLB06NFQ2MM', '(02) 4984 4132', '167265083', 'Ap #852-7025 Molestie Ave', 'Bogotá', 'Belgium'),

  (98, 'Bruce Berg', 'pellentesque.tincidunt.tempus@hotmail.edu', 'BCJ53WMH1WB', '(01) 3786 0494', '137993769', '9889 Luctus Rd.', 'Zierikzee', 'Turkey'), 
  (99, 'Catherine Chandler', 'ultricies.ornare.elit@icloud.com', 'JVW51UUT3XK', '(02) 8838 5146', '213148474', 'P.O. Box 263,  8647 Sodales St.', 'Fortune', 'Brazil'), 
  (100, 'Scott Whitfield', 'at.egestas.a@outlook.edu', 'JNR16EWE5DH', '(03) 9615 9868', '158404301', 'Ap #848-3558 Convallis St.', 'San Marcos', 'United Kingdom');


-- Admin Population --
-- 4 Admins
INSERT INTO adminuser (id, name, email, password, admin_level)
VALUES 
(1,'Benedita Bacelar', 'bbacelar@smart.pt', 'admin', 1),
(2,'Ricardo Pinto', 'rpinto@smart.pt', 'admin', 2),
(3,'Afonso Carvalho', 'acarvas@smart.pt', 'admin', 3),
(4,'Filipe Pinto', 'fpinto@smart.pt', 'admin', 3);

-- Artist Population --
-- 11 Artists --
INSERT INTO "Artist"(id, name, bio)
VALUES 
(1,'Banksy', 'Banksy is a pseudonymous England-based street artist, political activist and film director whose real name and identity remain unconfirmed and the subject of speculation.[2] Active since the 1990s, his satirical street art and subversive epigrams combine dark humour with graffiti executed in a distinctive stenciling technique. His works of political and social commentary have appeared on streets, walls and bridges throughout the world.[3] Banksy s work grew out of the Bristol underground scene, which involved collaborations between artists and musicians.[4] Banksy says that he was inspired by 3D, a graffiti artist and founding member of the musical group Massive Attack. Banksy displays his art on publicly visible surfaces such as walls and self-built physical prop pieces. Banksy no longer sells photographs or reproductions of his street graffiti, but his public "installations" are regularly resold, often even by removing the wall they were painted on. A small number of Banksys works are officially, non-publicly, sold through an agency created by Banksy named Pest Control. Banksys documentary film Exit Through the Gift Shop (2010) made its debut at the 2010 Sundance Film Festival. In January 2011, he was nominated for the Academy Award for Best Documentary Feature for the film. In 2014, he was awarded Person of the Year at the 2014 Webby Awards.'),
(2,'Takashi Murakami', 'Takashi Murakami (村上 隆, Murakami Takashi, born February 1, 1962) is a Japanese contemporary artist. He works in fine arts media (such as painting and sculpture) as well as commercial (such as fashion, merchandise, and animation) and is known for blurring the line between high and low arts. He coined the term "superflat," which describes both the aesthetic characteristics of the Japanese artistic tradition and the nature of postwar Japanese culture and society, and is also used for Murakami s artistic style and other Japanese artists he has influenced. Murakami is the founder and President of Kaikai Kiki Co., Ltd., through which he manages several younger artists. He was the founder and organizer of the biannual art fair Geisai.'),
(3, 'Yayoi Kusama', 'Yayoi Kusama (草間 彌生, Kusama Yayoi, born 22 March 1929) is a Japanese contemporary artist who works primarily in sculpture and installation, but is also active in painting, performance, film, fashion, poetry, fiction, and other arts. Her work is based in conceptual art and shows some attributes of feminism, minimalism, surrealism, Art Brut, pop art, and abstract expressionism, and is infused with autobiographical, psychological, and sexual content. She has been acknowledged as one of the most important living artists to come out of Japan.Kusama was raised in Matsumoto, and trained at the Kyoto City University of Arts in a traditional Japanese painting style called nihonga. Kusama was inspired, however, by American Abstract impressionism. She moved to New York City in 1958 and was a part of the New York avant-garde scene throughout the 1960s, especially in the pop-art movement. Embracing the rise of the hippie counterculture of the late 1960s, she came to public attention when she organized a series of happenings in which naked participants were painted with brightly coloured polka dots. Since the 1970s, Kusama has continued to create art, most notably installations in various museums around the world.Kusama has been open about her mental health. She says that art has become her way to express her mental problems. She reported in the interview she did with Infinity Net "I fight pain, anxiety, and fear every day, and the only method I have found that relieved my illness is to keep creating art. I followed the thread of art and somehow discovered a path that would allow me to live."'),
(4, 'Kerry James Marshall', 'Kerry James Marshall is an American artist and professor, known for his paintings of Black figures. He previously taught painting at the School of Art and Design at the University of Illinois at Chicago. In 2017, Marshall was included on the annual Time 100 list of the most influential people in the world. He was born and raised in Birmingham, Alabama, and moved in childhood to South Central Los Angeles. He now lives in Chicago, Illinois. A retrospective exhibition of his work, Kerry James Marshall: Mastry, was assembled by the Museum of Contemporary Art, Chicago in 2016.'),
(5, 'Kith Haring', 'Keith Allen Haring (May 4, 1958 – February 16, 1990) was an American artist whose pop art emerged from the New York City graffiti subculture of the 1980s. His animated imagery has "become a widely recognized visual language". Much of his work includes sexual allusions that turned into social activism by using the images to advocate for safe sex and AIDS awareness. In addition to solo gallery exhibitions, Haring participated in renowned national and international group shows such as documenta in Kassel, the Whitney Biennial in New York, the São Paulo Biennial, and the Venice Biennale. The Whitney Museum held a retrospective of his art in 1997. Haring s popularity grew from his spontaneous drawings in New York City subways—chalk outlines of figures, dogs, and other stylized images on blank black advertising spaces.[4] After gaining public recognition, he created colorful larger scale murals, many commissioned. He produced more than 50 public artworks between 1982 and 1989, many were created voluntarily for hospitals, day care centers, and schools. In 1986, Haring opened the Pop Shop as an extension of his work. His later work often conveyed political and societal themes— anti-crack, anti-apartheid, safe sex, homosexuality and AIDS—through his own iconography.'),
(6, 'Andy Warhol', 'Andy Warhol was an American artist, film director, and producer who was a leading figure in the visual art movement known as pop art. His works explore the relationship between artistic expression, advertising, and celebrity culture that flourished by the 1960s, and span a variety of media, including painting, silkscreening, photography, film, and sculpture.'),
(7, 'Damien Herst', 'Damien Steven Hirst is an English artist, entrepreneur, and art collector. He is one of the Young British Artists who dominated the art scene in the UK during the 1990s. He is reportedly the United Kingdom s richest living artist, with his wealth estimated at $384 million in the 2020 Sunday Times Rich List.'),
(8, 'Paula Rego', 'Maria Paula Figueiroa Rego (born 26 January 1935) is a Portuguese-British visual artist who is particularly known for her paintings and prints based on storybooks. Rego’s style has evolved from abstract towards representational, and she has favoured pastels over oils for much of her career. Her work often reflects feminism, coloured by folk-themes from her native Portugal. Rego studied at the Slade School of Fine Art, University College London and was an exhibiting member of the London Group, along with David Hockney and Frank Auerbach. She was the first artist-in-residence at the National Gallery in London. She lives and works in London.'),
(9, 'Mary Frank','Mary Frank (born 4 February 1933) is an English visual artist who works as a sculptor, painter, printmaker, draftswoman, and illustrator.'),
(10, 'Morten Løbner Espersen', 'Morten Løbner Espersen was born in 1965. He currently lives and works in Copenhagen. The ceramicist loves clay, and displays total mastery of the medium, but his passion for glazes comes from the impossibility of exercising full control over them. Every firing produces unexpected results, from surprising new insights to sudden disappointments.'),
(11, 'Joan Miró', 'Joan Miró i Ferrà (20 April 1893 – 25 December 1983) was a Spanish painter, sculptor and ceramicist born in Barcelona. Earning international acclaim, his work has been interpreted as Surrealism but with a personal style, sometimes also veering into Fauvism and Expressionism. He was notable for his interest in the unconscious or the subconscious mind, reflected in his re-creation of the childlike. His difficult to classify works also had a manifestation of Catalan pride. In numerous interviews dating from the 1930s onwards, Miró expressed contempt for conventional painting methods as a way of supporting bourgeois society, and declared an "assassination of painting" in favour of upsetting the visual elements of established painting.'),
(12, 'Larva Labs', 'Larva Labs is the home for our professional and experimental projects. Were creative technologists that have worked on almost every kind of software. Examples include large scale web infrastructure, genomics analysis software (John has a Ph.D.), 8-bit roleplaying games, an art project on the blockchain covered by the New York Times that Mashable said “could change how we think about digital art,” the largest open source repository of legal documents that we started at an overnight hackathon, an endless driving game that ends badly (theres a VR version too), an app for Android called AppChat that makes a chat room for every app installed on your phone, two different versions of a completely new Android homescreen experience: Slide Screen (2009!) and Flow Home (2014), a motion tracking dance booth on a beach in France, and an app with Google called Androidify that ended up becoming the worldwide face of the Android brand. As a result of our work weve spoken at a wide range of venues including the MIT Media Lab, Harvard Business School, Stanford Law School, Art|Basel Miami, The Berkman Center for Internet and Society at Harvard, The NY Tech Meetup, and Christies Auction House in London. Weve also been lucky enough to have long lasting client relationships with some of the best companies in the world like Google and Microsoft. Were very proud of the work weve done with them, some of which may even be on your phone right now.');


--Product Population --
-- 42 Products
INSERT INTO product(id, title, type, price, description, artist_id) --Syntax error ?????
VALUES

--Banksy
(1,'Love is in the Air', 'Painting', 6000000.0, 'Tagged on the turnover edge. Signed by Banksy. Dated May 2006 and numbered out of 15. Oil and spray paint on canvas. 90 by 90 cm',1),

(2,'Pulp Fiction', 'Painting', 65000.0, 'Screenprint in colours, 2004, numbered out of 600, published by Pictures on Walls, London, on wove paper, unframed. 48.5 by 69.8 cm',1),
(3,'I Fought The Law', 'Painting', 32280.0, 'Screenprint in colours, 2005, numbered out of 500, with the publisher s blindstamp, Pictures on Walls, London, on wove paper. 66.1 by 66.2 cm',1),
(4,'Jack and Jill', 'Painting', 63500.0, 'Screenprint in colours, 2004, signed in pencil, dated, numbered out of 350, with the publisher s blindstamp, Pictures on Walls, London, on wove paper. 45 by 65 cm',1),
(5,'Toxic Mary', 'Painting', 30240.0, 'Screenprint in colours, 2004, numbered out of600, published by Pictures on Walls, London, on wove paper. 69.6 by 49.6 cm',1),

--Takashi
(6,'Panda with Panda Cubs', 'Painting', 1386.0, 'Offset lithograph printed in colours, 2019, signed in black ink, numbered 45/300, published by Kaikai Kiki Co., Ltd., Tokyo, on smooth wove paper, unframed diameter: 71cm',2),
(7,'Teleportation', 'Painting', 100000.0, 'signed and dated 2016 on the overlap. Platinum sheet on canvas mounted on aluminum frame. 41.9 by 33.5 cm.',2),
(8,'Contemplating Dark Matter', 'Painting', 403200.0, 'signed and dated 2014 on the overlap. Acrylic, gold and platinum leaf on canvas. 100.3 by 100.3 cm.',2),

--Yayoi Kusama
(9,'Endless Life of People','Painting', 1260.0,'Offset lithograph printed in colours, 2010, from an open edition, on wove paper, unframed
sheet: 400 by 399mm',3),
(10,'Infinity Nets','Painting',7500.0, 'dated 1989 and variously inscribed in Japanese on the reverse acrylic on canvas. 31.8 by 41 cm. 12½ by 16⅛ in. Framed: 51.2 by 60.5 cm.',3),

-- Kerry James Marshall
(11,'The Wonderfull One','Painting', 1774500.0,' signed and dated 1986. Charcoal on paper. 127 by 96.5 cm. framed: 130.8 by 70.8 cm. Executed in 1986.',4),
(13,'Kerry James Marshall','Painting', 541000.0 ,'Vignette acrylic on fiberglass, in artists frame',4),

--Kith Haring
(14,'Untitled (Totem)','Sculpture', 200000.0 ,'Enamel on carved wood. 403.9 by 127 by 127 cm. Executed in 1983.',5),
(15,'Fight AIDS Worldwide','Painting', 3528.0,'Lithograph printed in black and orange, 1990, numbered out of 1000. Has the Keith Haring Estate inkstamp verso signed by the executor Julia Gruen, with the publishers blindstamp. World Federation of United Nations Associations, New York. On wove paper. Unframed',5),

-- Andy Warhol
(16,'Committee 2000 (Feldman & Schellmann II.289)','Painting', 5000.0, 'Screenprint in colours, 1982, signed in pencil, numbered out of 2000 (total edition includes 200 artists proofs), printed by Rupert Jasen Smith, New York, with their blindstamp, published by Committee 2000, Munich, on Lenox Museum Board, framed
sheet: 762 by 509mm',6),
(17,'Dollar Sign','Painting', 927500.0 ,'acrylic and silkscreen ink on canvas. 50.8 by 40.6 cm. Executed in 1981. This work is stamped by the Estate of Andy Warhol and The Andy Warhol Foundation for the Visual Arts, Inc. and numbered PA30.050 on the reverse. This work is also numbered PA30.050 on the stretcher.',6),

--Damian Herst
(18,'For the Love of God, Laugh', 'Painting', 10250.0, 'Silkscreen print with glazes and diamond dust on paper. Signed. Numbered out of 250 on the reverse. Executed in 2007. 100 by 74.5 cm',7),
(19,'Lysergic Acid Diethylamide (LSD)', 'Painting', 22680.0, 'Lambda inkjet print in colors, 2000, signed in black felt-tip pen and numbered 111/300 in pencil on the verso, on gloss Fujicolor professional paper, published by Eyestorm, London, framed. 114.2 by 134.8 cm',7),
(20,'Enter the Infinite (The Visions), Ecstasy', 'Painting', 151200.0, 'Signed and numbered out od 20 on a label affixed to the reverse. Jacquard-woven tapestry. Executed in 2016. 252.5 by 254 cm.',7),
(21,'Fruitful (Small)', 'Painting', 1500.0, 'Diasec-mounted giclée print on aluminium panel, 2020, digitally signed on a label affixed to the reverse, numbered out of 3308, published by Heni Editions, London, contained in the original packaging.
panel: 39 by 39cm.',7),
(22,'Untitled (Skull Spin Painting), 2009', 'Painting', 5470.0, 'Acrylic and metallic painting on paper. Signed, stamped with the artist s copyright and marked with the studio s blind stamp on the reverse. 71 x 51 cm (unframed).',7),
(23,'Valium', 'Painting', 27720.0, 'Lambda print in colours. 2000. Signed in black felt-tip pen. Numbered out of 500 in verso, on gloss Fuji archive paper. Sheet: 120 by 120cm.',7),

-- Paula Rego
(24,'After Zurbarán','Painting', 157500.0 ,'Charcoal and pastel on paper. 136 by 101 cm. Executed in 2007.',8),
(25,'Island of the Lights from Pinocchio','Painting', 180000.0,'Painting by Paula Rego',8),

--Mary Frank
(26,'Head of a Woman','Sculpture', 2042.0, 'Made from terracota in 1975. Height: 34.92 cm, Width: 30.61 cm, Depth: 20.32 cm',9),
(27,'Lovers Kissing','Sculpture', 1779.0 ,' Made from terracota in 1975. Height: 22.53 cm, width: 29.84 cm, depth: 10.5 inches / 26.67 cm',9),

--Morten Løbner Espersen
(28,'Green and Black Horror','Sculpture', 12486.0,'Created in 2013 made from glazed stoneware. Height: 44.96 cm, width: 32 cm, depth: 32 cm',10),
(29,'Red Horror','Sculpture', 16050.0,'Created in 2013 made from glazed stoneware. Height: 53.09 cm, width: 41.91 cm, depth: 41.91 cm',10),
(30,'Horror Vacui (blue/matte black)','Sculpture', 15159.0 ,'Created in 2014 made from glazed stoneware. Height: 54.99 cm, width: 38.99 cm, depth: 38.99 cm',10),
(31,'Dry Whisper','Sculpture', 53487.0,'Created in 2012 made from glazed stoneware. Diameter: 88.9 cm',10),
(32,'Blood Moon #1','Sculpture', 19617.0 ,'Created in 2015 made from glazed stoneware. Height: 51.99 cm, diameter: 50.01 cm',10),
(33,'Horror Vacui Yellow','Sculpture', 16044.0 ,'Created in 2020 made from glazed stoneware.Height: 69.01 cm, diameter: 57.99 cm.',10),
(34,'Pale Green Horror Vacui Tilt','Sculpture', 15248.0 ,'Created in 2020 made from glazed stoneware.Height: 53.01 cm, diameter: 38.73 cm.',10),
(35,'Glazed Pearl','Sculpture', 3387.0 ,'Created in 2019 made from glazed stoneware. Marked on underside. Height: 16.99 cm, diameter: 18.01 cm.',10),

--Joan Miró
(36,'Tête au soleil couchant (Dupin 437)','Painting', 1080 ,'Etching printed in colors with aquatint and carborundum, 1967, signed in pencil and numbered out od 75, on Arches wove paper, printed and published by Maeght, Paris, framed. Dimensions: 665 by 744 mm.',11),
(37,'La Fronde (Dupin 501)','Painting', 18900,'Etching and aquatint printed in colors with carborundum, 1969, signed in white pencil and numbered out of 75, on Arches wove paper, published by Maeght, Paris. Framed. Dimensions: 1196 by 836 mm',11),
(38,'La femme Angora (Dupin 499)','Painting', 16380.0 ,'Etching and aquatint printed in colors with carborundum, 1969, signed in pencil and numbered out of 75, on Arches wove paper, published by Maeght, Paris, framed. Dimensions: 1295 by 940 mm.',11),
(39,'Untitled','Painting', 2300.0,'This piece was created for the opening of the Fundació Joan Miró. Lithograph printed in colours, 1976, signed in pencil. Numbered out of 99. Done on wove paper. Unframed. Dimensions 697 by 498mm',11),
(40,'Maquette de lArc de la Fondation Maeght','Sculpture', 252000.0 ,'Signed Miró and stamped with the foundry mark Susse Fondeur Paris. Height: 41,8 cm. Conceived in 1962 and cast in bronze in 1979 in an edition of 8.',11),
(41,'Tête et oiseau','Sculpture', 210000.0,'Signed Miró abdstamped with the foundry mark Scuderi Cire Perdue. Height: 48.3cm. Conceived and cast in 1971 in a edition of 3, numbered 0/2 - 2/2, plus one nominative version cast in 1973.',11),

-- NFTs
(12,'Crypto Punks','NFT', 350000.0 ,'10,000 unique CryptoPunks available in the Ethereum Blockchain.',12),
(42, 'Bored Apes', 'NFT', 100000.0, '10,000 unique Bored Apes, which unsuccessfully attempt to reach CryptoPunk status, but are still very rare and valuable.',12);


-- Stock --
INSERT INTO stock(id) VALUES
(1);

-- Available_quantity --
INSERT INTO available_quantity(id,quantity, product_id, stock_id) 
VALUES

  (1, 10, 1, 1),
  (2, 1, 2, 1),
  (3, 1, 3, 1),
  (4, 10, 4, 1),
  (5, 1, 5, 1),
  (6, 10, 6, 1),
  (7, 1, 7, 1),
  (8, 1, 8, 1),
  (9, 12, 9, 1),
  (10, 1, 10, 1),
  (11, 10, 11, 1),
  (12, 10000, 12, 1),
  (13, 1, 13, 1),
  (14, 5, 14, 1),
  (15, 25, 15, 1),
  (16, 1, 16, 1),
  (17, 3, 17, 1),
  (18, 4, 18, 1),
  (19, 2, 19, 1),
  (20, 1, 20, 1),
  (21, 55, 21, 1),
  (22, 2, 22, 1),
  (23, 50, 23, 1),
  (24, 10, 24, 1),
  (25, 1, 25, 1),
  (26, 1, 26, 1),
  (27, 1, 27, 1),
  (28, 1, 28, 1),
  (29, 1, 29, 1),
  (30, 1, 30, 1),
  (31, 1, 31, 1),
  (32, 1, 32, 1),
  (33, 1, 33, 1),
  (34, 1, 34, 1),
  (35, 1, 35, 1),
  (36, 1, 36, 1),
  (37, 1, 37, 1),
  (38, 29, 38, 1),
  (39, 1, 39, 1),
  (40, 1, 40, 1),
  (41, 1, 41, 1),
  (42, 10000, 41, 1);
  


-- Delivery_Type --
INSERT INTO delivery_type(id, type, cost) VALUES
(1,'Store Pickup',0.0),
(2,'Normal Shipping',10.0),
(3,'Express Shipping',25.0);

-- Orderlist --
INSERT INTO orderlist(id, date, total, state, delivery_type_id, user_id) VALUES
(1,'2021-12-16',560700,1,2,7),
(2,'2021-04-17',83160,1,2,39),
(3,'2021-06-25',16380,0,2,16),
(4,'2021-08-13',252000,0,2,42),
(5,'2021-01-11',32100,1,2,3),
(6,'2021-05-20',72537,1,2,52),
(7,'2021-03-23',252000,0,3,13),
(8,'2021-07-16',19617,2,2,95),
(9,'2021-01-12',53487,2,2,19),
(10,'2021-01-18',53487,2,3,21),
(11,'2021-06-18',6000000,2,2,34),
(12,'2021-11-23',252000,2,3,66),
(13,'2021-02-03',157500,1,2,16),
(14,'2021-04-25',3528,1,1,51),
(15,'2021-06-15',403200,1,2,59),
(16,'2021-03-25',63500,2,2,31),
(17,'2021-08-13',148974,0,2,82),
(18,'2021-12-28',15159,1,1,7),
(19,'2021-08-23',22680,0,2,82),
(20,'2021-07-16',19617,0,2,49),
(21,'2021-12-26',65000,1,2,27),
(22,'2021-09-18',2042,2,2,63),
(23,'2021-01-19',63500,2,2,1),
(24,'2021-05-14',100000,2,2,18),
(25,'2021-02-03',252000,0,2,29),
(26,'2021-04-02',2300,2,2,43),
(27,'2021-12-25',16044,2,1,22),
(28,'2021-02-18',1779,2,1,58),
(29,'2021-12-07',16050,0,2,78),
(30,'2021-07-15',252000,1,2,69),
(31,'2021-10-13',2042,0,2,27),
(32,'2021-11-18',100000,2,2,24),
(33,'2021-12-22',22500,2,1,84),
(34,'2021-12-22',5000,1,2,29),
(35,'2021-12-02',15248,1,2,28),
(36,'2021-09-25',30318,2,2,20),
(37,'2021-02-02',63500,1,2,40),
(38,'2021-01-15',16050,1,3,60),
(39,'2021-10-12',16044,0,2,91),
(40,'2021-06-28',12486,1,1,54),
(41,'2021-02-04',7500,0,2,80),
(42,'2021-08-11',19617,2,2,55),
(43,'2021-01-04',15000,1,2,4),
(44,'2021-11-20',63500,0,2,33),
(45,'2021-05-16',16380,0,2,26),
(46,'2021-03-04',1779,0,2,40),
(47,'2021-12-26',927500,2,3,42),
(48,'2021-03-23',100000,0,2,77),
(49,'2021-05-20',18900,0,2,73),
(50,'2021-01-26',53487,2,2,75),
(51,'2021-11-28',1260,0,2,73),
(52,'2021-10-18',16380,2,2,31),
(53,'2021-10-25',18900,0,2,7),
(54,'2021-01-12',100000,1,2,85),
(55,'2021-01-03',7500,0,2,40),
(56,'2021-01-19',63500,1,2,79),
(57,'2021-07-08',32280,2,2,2),
(58,'2021-02-11',151200,1,2,38),
(59,'2021-06-24',3528,1,2,16),
(60,'2021-04-02',15248,2,1,41),
(61,'2021-02-06',200000,0,2,12),
(62,'2021-08-23',403200,1,1,95),
(63,'2021-09-20',157500,0,2,35),
(64,'2021-05-20',12486,2,1,18),
(65,'2021-01-27',5000,1,2,47),
(66,'2021-11-08',2042,2,2,51),
(67,'2021-03-17',32280,2,2,64),
(68,'2021-10-09',1260,0,1,91),
(69,'2021-07-27',10250,0,2,35),
(70,'2021-03-17',53487,2,1,99),
(71,'2021-10-10',151200,2,3,11),
(72,'2021-02-25',16050,2,2,82),
(73,'2021-05-01',65000,1,2,70),
(74,'2021-10-19',157500,1,2,8),
(75,'2021-01-26',350000,2,2,7),
(76,'2021-06-09',200000,1,2,92),
(77,'2021-07-23',63500,0,3,5),
(78,'2021-07-25',1774500,2,1,5),
(79,'2021-11-09',100000,2,2,38),
(80,'2021-08-16',183480,1,3,83),
(81,'2021-03-23',32280,1,2,89),
(82,'2021-05-15',2300,0,2,29),
(83,'2021-06-05',16380,2,2,21),
(84,'2021-07-10',16044,0,3,87),
(85,'2021-02-23',151200,0,1,77),
(86,'2021-01-07',1080,1,2,65),
(87,'2021-06-19',2300,0,2,41),
(88,'2021-05-20',15159,0,2,34),
(89,'2021-04-22',32280,2,3,76),
(90,'2021-09-09',157500,0,2,52),
(91,'2021-04-28',22680,1,2,56),
(92,'2021-08-13',30240,1,2,93),
(93,'2021-10-27',19617,1,2,67),
(94,'2021-01-24',1774500,1,2,42),
(95,'2021-06-19',10250,1,2,50),
(96,'2021-06-07',210000,2,2,52),
(97,'2021-02-05',1080,2,2,14),
(98,'2021-05-22',30240,2,2,5),
(99,'2021-12-16',63500,0,2,78),
(100,'2021-06-27',53487,1,2,19);


-- Purchase --
INSERT INTO purchase(product_id, orderlist_id, quantity) VALUES
--Order #1
(24,1,1),
(8,1,1),
--Order #2
(23,2,3),
--Order #3
(38,3,1),
--Order #4
(40,4,1),
--Order #5
(29,5,2),
--Order #6
(19,6,1),
(5,6,1),
(32,6,1),
--Order #7
(40,7,1),
--Order #8
(32,8,1),
--Order #9
(31,9,1),
--Order #10
(31,10,1),
--Order #11
(1,11,1),
--Order #12
(40,12,1),
--Order #13
(24,13,1),
--Order #14
(15,14,1),
--Order #15
(8,15,1),
--Order #16
(4,16,1),
--Order #17
(33,17,1),
(18,17,1),
(7,17,1),
(19,17,1),
--Order #18
(30,18,1),
--Order #19
(19,19,1),
--Order #20
(32,20,1),
--Order #21
(2,21,1),
--Order #22
(26,22,1),
--Order #23
(4,23,1),
--Order #24
(7,24,1),
--Order #25
(40,25,1),
--Order #26
(39,26,1),
--Order #27
(33,27,1),
--Order #28
(27,28,1),
--Order #29
(29,29,1),
--Order #30
(40,30,1),
--Order #31
(26,31,1),
--Order #32
(7,32,1),
--Order #33
(10,33,3),
--Order #34
(16,34,1),
--Order #35
(34,35,1),
--Order #36
(30,36,2),
--Order #37
(4,37,1),
--Order #38
(29,38,1),
--Order #39
(33,39,1),
--Order #40
(28,40,1),
--Order #41
(10,41,1),
--Order #42
(32,42,1),
--Order #43
(10,43,2),
--Order #44
(4,44,1),
--Order #45
(38,45,1),
--Order #46
(27,46,1),
--Order #47
(17,47,1),
--Order #48
(7,48,1),
--Order #49
(37,49,1),
--Order #50
(31,50,1),
--Order #51
(9,51,1),
--Order #52
(38,52,1),
--Order #53
(37,53,1),
--Order #54
(42,54,1),
--Order #55
(10,55,1),
--Order #56
(4,56,1),
--Order #57
(3,57,1),
--Order #58
(20,58,1),
--Order #59
(15,59,1),
--Order #60
(34,60,1),
--Order #61
(14,61,1),
--Order #62
(8,62,1),
--Order #63
(24,63,1),
--Order #64
(28,64,1),
--Order #65
(16,65,1),
--Order #66
(26,66,1),
--Order #67
(3,67,1),
--Order #68
(9,68,1),
--Order #69
(18,69,1),
--Order #70
(31,70,1),
--Order #71
(20,71,1),
--Order #72
(29,72,1),
--Order #73
(2,73,1),
--Order #74
(24,74,1),
--Order #75
(12,75,1),
--Order #76
(14,76,1),
--Order #77
(4,77,1),
--Order #78
(11,78,1),
--Order #79
(42,79,1),
--Order #80
(20,80,1),
(3,80,1),
--Order #81
(3,81,1),
--Order #82
(39,82,1),
--Order #83
(38,83,1),
--Order #84
(33,84,1),
--Order #85
(20,85,1),
--Order #86
(36,86,1),
--Order #87
(39,87,1),
--Order #88
(30,88,1),
--Order #89
(3,89,1),
--Order #90
(24,90,1),
--Order #91
(19,91,1),
--Order #92
(5,92,1),
--Order #93
(32,93,1),
--Order #94
(11,94,1),
--Order #95
(18,95,1),
--Order #96
(41,96,1),
--Order #97
(36,97,1),
--Order #98
(5,98,1),
--Order #99
(4,99,1),
--Order #100
(31,100,1);


-- Review --
INSERT INTO review(id, title, content, score, product_id, user_id) VALUES
(1,'Island of the Lights from Pinocchio','Its a very good painting',4,25,1),
(2,'After Zurbarán','Its a very good painting',5,24,2),
(3,'Pinocchio','It could be better',3,25,3),
(4,'Pinocchio','It could be worse',2,25,4),
(5,'Island of the Lights from Pinocchio','Best Painting from Paula Rego',3,25,6);

-- Wish --
INSERT INTO wish(id, user_id, product_id)
VALUES 
  (1,  1, 11),
  (2,  1, 17),
  (3,  2, 1 ),
  (4,  2, 7 ),
  (5,  2, 33),
  (6,  2, 34),
  (7,  4, 4 ),
  (8,  4, 21),
  (9,  4, 24),
  (10, 5, 40),
  (11, 6, 2 ),
  (12, 6, 5 ),
  (13, 6, 31),
  (14, 6, 35),
  (15, 6, 37),
  (16, 6, 39),
  (17, 7, 7 );

SELECT setval(pg_get_serial_sequence('user', 'id'), max(id)) FROM "user";