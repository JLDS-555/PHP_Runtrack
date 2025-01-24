SELECT etage.nom, salles.nom AS "biggest Room",
salles.capacite
FROM salles
JOIN etage ON salles.id = etage.id
WHERE salles.capacite = (SELECT MAX(capacite)
                         FROM salles);