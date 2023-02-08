CREATE OR REPLACE VIEW allobjects AS
select proprietaire.id as idProp,proprietaire.nom as propri,objects.nom as obj,category.nom as cate,objects.price,objects.description
from objects inner join proprietaire on proprietaire.id=objects.idP 
inner join category on category.id=objects.idC;

CREATE OR REPLACE VIEW allproposition AS
select pro.id,pr1.id as idD,pr1.nom as PropD,obj1.nom as object1,pr2.id as idR,pr2.nom as PropR,obj2.nom as object2,pro.dateprops,pro.valide
from proposition as pro 
join proprietaire as pr1 on pr1.id = pro.idD
join proprietaire as pr2 on pr2.id = pro.idR 
join objects as obj1 on obj1.id = pro.idO1 
join objects as obj2 on obj2.id = pro.idO2;