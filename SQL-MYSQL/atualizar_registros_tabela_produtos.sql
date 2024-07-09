USE produtos
UPDATE produtos
SET preco = 6.10, peso = 3.0, updated_at = NOW()
WHERE sku = 'A1'

UPDATE registros
SET quantidade_estoque = 100, updated_at = NOW()
WHERE sku = 'A3'

UPDATE registros
SET unidade_medida = 'g', peso = 80, updated_at = NOW()
WHERE sku = 'A8'

