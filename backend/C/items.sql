SELECT AVG(items.price), genres.name FROM genres 
INNER JOIN items ON genres.id = items.genre_id GROUP BY genres.name;
-- 内部結合を選択した理由はitemsテーブルのgenre_idとgenresテーブルのidが共通するデータで尚且つ両方のテーブルに存在するためです。

-- インデックス
-- itemsテーブルのgenre_idにインデックスを作成します。その理由はgenre_idにインデックスを作成することで結合対象のレコードを絞り込むことができ、高速にクエリを実行することができるためです。