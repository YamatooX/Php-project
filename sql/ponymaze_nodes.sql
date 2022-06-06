create table nodes
(
    id          int auto_increment
        primary key,
    connections varchar(20) null,
    event       varchar(20) null
);

INSERT INTO ponymaze.nodes (id, connections, event) VALUES (1, '2 5', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (2, '1 3 6', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (3, '2 4 7', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (4, '3 8', 'drugs');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (5, '1 6 9', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (6, '2 5 7 10', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (7, '3 6 8 11', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (8, '4 7 12', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (9, '5 10 13', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (10, '6 9 11 14', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (11, '7 10 12 15', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (12, '8 11 16', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (13, '9 14', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (14, '10 13 15', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (15, '11 14 16', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (16, '12 15 17', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (17, '16 19', 'stairs');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (18, '19', 'drugs');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (19, '17 18 20 24', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (20, '19 21 25', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (21, '20 22 26', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (22, '21 27', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (23, '24 28', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (24, '19 23 25 29', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (25, '20 24 26 30', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (26, '21 25 27 31', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (27, '22 26 32', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (28, '23 29', 'backdoor');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (29, '24 28 30 34', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (30, '25 29 31 34', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (31, '26 30 32 36', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (32, '27 31 37', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (33, '34', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (34, '29 33 35 39', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (35, '30 34 36 40', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (36, '31 35 37 41', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (37, '32 36 42', 'door');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (38, '39', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (39, '34 38 40', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (40, '35 39 41 43', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (41, '36 40 42', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (42, '37 41', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (43, '40 44', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (44, '43 45 46', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (45, '44 46', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (46, '47', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (47, '', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (48, '', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (49, '', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (50, '', '');
INSERT INTO ponymaze.nodes (id, connections, event) VALUES (51, '13', 'taras');
