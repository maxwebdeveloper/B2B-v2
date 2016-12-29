-- cargar regiones
SELECT id, region FROM tb_region

-- cargar provincia
SELECT id, provincia FROM tb_provincia WHERE tb_region_id = 1

-- cargar comuna
select id, comuna FROM tb_comuna WHERE tb_provincia_id = 1