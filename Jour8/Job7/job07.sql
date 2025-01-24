SELECT * 
FROM étudiant1
WHERE DATEDIFF(CURDATE(), naissance) / 365 > 18;