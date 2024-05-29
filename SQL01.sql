SELECT
	a.NamaMahasiswa,
	c.NamaMataKuliah,
	b.Grade
FROM tmahasiswa a
JOIN tnilai b ON a.NIRM = b.NIRM
JOIN tmatakuliah c ON b.KodeMK = c.KodeMK
WHERE YEAR(CURDATE()) - YEAR(a.TglLahir) > 25 AND b.Grade < 60;