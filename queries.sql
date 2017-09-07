
/*SQL Queries - Reporting*/
/*Query 1*/
SELECT a.NAME   AS association_name, 
       c.NAME   AS company_name, 
       d.domain AS domain_name 
FROM   sites s 
       JOIN companies c 
         ON s.company = c.id 
       JOIN domains d 
         ON s.id = d.site 
       JOIN associations a 
         ON s.association = a.id 
WHERE  s.is_supercharged = 1 
       AND s.is_deleted = 0 
       AND a.NAME = 'Basement Systems, Inc.' 

/*Query 2*/
SELECT a.NAME AS association_name, 
       c.NAME AS company_name, 
       s.NAME AS site_name 
FROM   sites s 
       JOIN companies c 
         ON s.company = c.id 
       JOIN domains d 
         ON s.id = d.site 
       JOIN associations a 
         ON s.association = a.id 
WHERE  s.is_deleted = 0 
       AND d.is_deleted = 1 

	   
/*Query 3*/	   
SELECT DISTINCT s.id, 
                s.NAME AS site_name 
FROM   sites s 
       JOIN domains d 
         ON s.id = d.site 
WHERE  s.is_deleted = 0 
       AND d.is_deleted = 1 