
---------------------------------------------------------------
--------------------------MES ANTERIOR-------------------------
SELECT month(concat(mes,'-01'))-1 as mes FROM contagems WHERE 1



---------------------------------------------------------------
----------------------VIEW SALDO INICIAL-----------------------
drop view saldo_inicial;
create view saldo_inicial as
select
 concat(
    YEAR(date_add(concat(mes,'-01'), INTERVAL 1 MONTH )),
    '-',
    MONTH(date_add(concat(mes,'-01'), INTERVAL 1 MONTH ))) as mes,
 franquia_id,
 f.nome as franquia,
  sum(quantidade) as saldo_inicial,
 codigo,
 p.nome as produto,
 p.status,
 p.id as produto_id
from (contagems c join produtos p on p.id=produto_id) join franquias f ON c.franquia_id=f.id
WHERE p.status=1
GROUP BY mes, produto_id, franquia_id;


---------------------------------------------------------------
--------------------------VIEW CONTROL-------------------------
---------------------------------------------------------------
drop view control_p;
create view control_p as
 select
  f.id as franquia_id,
  f.nome as franquia,
  e.mes as mes,
   sum(c.quantidade) as contagem_fisica,
  sum(e.quantidade) as qtd_entrada,
  sum(e.quantidade-c.quantidade +s.saldo_inicial) as consumo,
  p.codigo as codigo, p.nome as produto
 from
  (((entradas e JOIN
   contagems c on e.produto_id=c.produto_id AND  e.mes=c.mes AND e.franquia_id=c.franquia_id) JOIN
   franquias f ON e.franquia_id=f.id) JOIN
  produtos p on  e.produto_id=p.id) join saldo_inicial s on e.franquia_id=s.franquia_id AND s.produto_id=e.produto_id AND s.mes=e.mes
 WHERE p.status=1
 GROUP BY e.mes, e.produto_id, f.id, f.nome,p.codigo,p.nome;

------------------------------------------------------------------
----------------------------join entre view----------------------------
SELECT * FROM control_p c RIGHT JOIN
saldo_inicial s on c.franquia_id=s.franquia_id AND s.codigo=c.codigo AND s.mes=c.mes
WHERE 1

SELECT c.franquia, c.mes, s.saldo_inicial, c.codigo, c.produto, c.qtd_entrada, c.contagem_fisica, c.consumo FROM control_p c RIGHT JOIN
saldo_inicial s on c.franquia_id=s.franquia_id AND s.codigo=c.codigo AND s.mes=c.mes
WHERE 1

SELECT c.franquia, c.mes, s.saldo_inicial, c.codigo, c.produto, c.qtd_entrada, c.contagem_fisica, c.consumo FROM control_p c,
saldo_inicial s 
WHERE  c.franquia_id=s.franquia_id AND s.codigo=c.codigo
