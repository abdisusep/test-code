SELECT
  a.NamaMataKuliah,
  COUNT(DISTINCT b.NIRM) AS Jumlah
FROM tmatakuliah a
JOIN tnilai b ON a.KodeMK = b.KodeMK
GROUP BY a.NamaMataKuliah
ORDER BY Jumlah DESC
LIMIT 1;