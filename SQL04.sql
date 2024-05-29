SELECT
  a.NamaMataKuliah,
  AVG(b.Grade) AS RataRata
FROM tmatakuliah a
JOIN tnilai b ON a.KodeMK = b.KodeMK
GROUP BY a.NamaMataKuliah;