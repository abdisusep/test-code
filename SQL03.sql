SELECT 
	DISTINCT a.NamaMahasiswa
FROM tmahasiswa a
JOIN tnilai b ON a.NIRM = b.NIRM
JOIN tmatakuliah c ON b.KodeMK = c.KodeMK
WHERE c.NamaMataKuliah IN ('Matematika', 'Aljabar');
