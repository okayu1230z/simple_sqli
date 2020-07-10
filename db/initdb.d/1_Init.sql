DROP SCHEMA IF EXISTS sqlidb;
CREATE SCHEMA sqlidb;
USE sqlidb;

DROP TABLE IF EXISTS touhou;

CREATE TABLE touhou
(
    id           INT(10) NOT NULL,
    series       DOUBLE NOT NULL,
    title VARCHAR(60) BINARY NOT NULL
)DEFAULT CHARACTER SET=utf8mb4;

INSERT INTO touhou (id, series, title) VALUES (0, 0, "FALG{simple_sqli}");
INSERT INTO touhou (id, series, title) VALUES (1, 1, "東方靈異伝 〜 The Highly Responsive to Prayers.");
INSERT INTO touhou (id, series, title) VALUES (2, 2, "東方封魔録 〜 the Story of Eastern Wonderland.");
INSERT INTO touhou (id, series, title) VALUES (3, 3, "東方夢時空 〜 The Phantasmagoria of Dim.Dream.");
INSERT INTO touhou (id, series, title) VALUES (4, 4, "東方幻想郷 〜 Lotus Land Story.");
INSERT INTO touhou (id, series, title) VALUES (5, 5, "東方怪綺談 〜 Mystic Square.");
INSERT INTO touhou (id, series, title) VALUES (6, 6, "東方紅魔郷 〜 the Embodiment of Scarlet Devil.");
INSERT INTO touhou (id, series, title) VALUES (7, 7, "東方妖々夢 〜 Perfect Cherry Blossom.");
INSERT INTO touhou (id, series, title) VALUES (8, 8, "東方永夜抄 〜 Imperishable Night.");
INSERT INTO touhou (id, series, title) VALUES (9, 9, "東方花映塚 〜 Phantasmagoria of Flower View.");
INSERT INTO touhou (id, series, title) VALUES (10, 9.5, "東方文花帖 〜 Shoot the Bullet.");
INSERT INTO touhou (id, series, title) VALUES (11, 10, "東方風神録 〜 Mountain of Faith.");
INSERT INTO touhou (id, series, title) VALUES (12, 11, "東方地霊殿 〜 Subterranean Animism.");
INSERT INTO touhou (id, series, title) VALUES (13, 12, "東方星蓮船 〜 Undefined Fantastic Object.");
INSERT INTO touhou (id, series, title) VALUES (14, 12.5, "ダブルスポイラー 〜 東方文花帖");
INSERT INTO touhou (id, series, title) VALUES (15, 12.8, "妖精大戦争 〜 東方三月精");
INSERT INTO touhou (id, series, title) VALUES (16, 13, "東方神霊廟 〜 Ten Desires.");
INSERT INTO touhou (id, series, title) VALUES (17, 14, "東方輝針城 〜 Double Dealing Character.");
INSERT INTO touhou (id, series, title) VALUES (18, 14.3, "弾幕アマノジャク 〜 Impossible Spell Card.");
INSERT INTO touhou (id, series, title) VALUES (19, 15, "東方紺珠伝 〜 Legacy of Lunatic Kingdom.");
INSERT INTO touhou (id, series, title) VALUES (20, 16, "東方天空璋 〜 Hidden Star in Four Seasons.");
INSERT INTO touhou (id, series, title) VALUES (21, 16.5, "秘封ナイトメアダイアリー 〜 Violet Detector.");
INSERT INTO touhou (id, series, title) VALUES (22, 17, "東方鬼形獣 〜 Wily Beast and Weakest Creature.");
