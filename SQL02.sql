SELECT
  a.KodeMK,
  a.NamaMataKuliah,
  a.Pengajar
FROM tmatakuliah a
LEFT JOIN
  (
    SELECT DISTINCT n.KodeMK
    FROM tnilai n
  ) AS b
ON a.KodeMK = b.KodeMK
WHERE b.KodeMK IS NULL;