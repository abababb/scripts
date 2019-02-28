SELECT 
    *
FROM
    stock_change
WHERE
    material_id = 12 AND warehouse_id = 2


/* WAREHOUSE ONLY */
explain
'1','SIMPLE','stock_change',NULL,'ref','IDX_8A712CB65080ECDE','IDX_8A712CB65080ECDE','5','const','1691399','10.00','Using where'

result
15:52:48	select * from stock_change where material_id = 12 and warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	8.755 sec / 3.356 sec


/* NONE */
explain
'1','SIMPLE','stock_change',NULL,'ALL',NULL,NULL,NULL,NULL,'3382799','1.00','Using where'

result
15:54:39	SELECT      * FROM     stock_change WHERE     material_id = 12 AND warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	1.777 sec / 0.319 sec


/* BOTH */
explain
'1', 'SIMPLE', 'stock_change', NULL, 'index_merge', 'IDX_8A712CB6E308AC6F,IDX_8A712CB65080ECDE', 'IDX_8A712CB6E308AC6F,IDX_8A712CB65080ECDE', '5,5', NULL, '3356', '100.00', 'Using intersect(IDX_8A712CB6E308AC6F,IDX_8A712CB65080ECDE); Using where'

result
15:57:16	SELECT      * FROM     stock_change WHERE     material_id = 12 AND warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	0.317 sec / 0.089 sec

/* MATERIAL ONLY */
explain
'1','SIMPLE','stock_change',NULL,'ref','IDX_8A712CB6E308AC6F','IDX_8A712CB6E308AC6F','5','const','6714','10.00','Using where'

result
16:06:14	SELECT      * FROM     stock_change WHERE     material_id = 12 AND warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	0.020 sec / 0.0018 sec



/* COMBINED MATERIAL_WAREHOUSE */
explain
'1','SIMPLE','stock_change',NULL,'ref','IDX_8A712CB6E308AC6F,IDX_8A712CB65080ECDE,IDX_material_warehouse','IDX_material_warehouse','10','const,const','1947','100.00',NULL

result
16:01:25	SELECT      * FROM     stock_change WHERE     material_id = 12 AND warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	0.0071 sec / 0.00044 sec


/* COMBINED WAREHOUSE_MATERIAL */
explain
'1','SIMPLE','stock_change',NULL,'ref','IDX_8A712CB6E308AC6F,IDX_8A712CB65080ECDE,IDX_warehouse_material','IDX_warehouse_material','10','const,const','1947','100.00',NULL

result
16:03:37	SELECT      * FROM     stock_change WHERE     material_id = 12 AND warehouse_id = 2 LIMIT 0, 50000	1947 row(s) returned	0.0066 sec / 0.00035 sec

