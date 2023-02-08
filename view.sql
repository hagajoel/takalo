CREATE OR REPLACE VIEW allobjects AS
select proprietaire.id as idProp,proprietaire.nom as propri,objects.nom as obj,category.nom as cate,objects.price,objects.description
from objects inner join proprietaire on proprietaire.id=objects.idP 
inner join category on category.id=objects.idC;

CREATE OR REPLACE VIEW allproposition AS
select pr1.id as idD,pr1.nom as PropD,obj1.nom as object1,pr2.id as idR,pr2.nom as PropR,obj2.nom as object2,pro.dateprops 
from proposition as pro 
join proprietaire as pr1 on pr1.id = pro.idD
join proprietaire as pr2 on pr2.id = pro.idR 
join objects as obj1 on obj1.id = pro.idO1 
join objects as obj2 on obj2.id = pro.idO2;

CREATE OR REPLACE VIEW historique AS 
select pr1.nom as prop1,obj1.nom obj1,pr2.nom as prop2,obj2.nom obj2,demande.dateAccept
from demande join proposition as prop on prop.id=demande.idPr 
inner join proprietaire as pr1 on pr1.id = prop.idD 
inner join proprietaire as pr2 on pr2.id = prop.idR 
inner join objects as obj1 on obj1.id = prop.idO1
inner join objects as obj2 on obj2.id = prop.idO2;