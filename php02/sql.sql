INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES('増田','test1@gmail.co.jp','無いよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES('斉藤','test3@gmail.co.jp','無いよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES('柴田','test4@gmail.co.jp','無いよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES('後藤','test03@gmail.co.jp','無いよ',sysdate());
INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES('川辺','test30@gmail.co.jp','無いよ',sysdate());
--idはautoなので入れても入れなくても機能する



--*は全ての項目を選択するという意味
--SELECT * FROM gs_an_table
SELECT name,indate,email FROM gs_an_table
--or検索
SELECT * FROM gs_an_table WHERE id = 1 or id = 2
--曖昧検索
SELECT * FROM gs_an_table WHERE email LIKE '%test3%'
--ソート表示
SELECT * FROM gs_an_table ORDER BY id DESC
SELECT * FROM gs_an_table ORDER BY id DESC LIMIT 3


INSERT INTO gs_an_table(name,email,naiyou,indate) VALUES(:name,:email,:naiyou,sysdate());