USE produtos
INSERT INTO produtos 
    (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantidade_estoque, fabricante, fornecedor, created_at) 
VALUES 
    ("Arroz", "A1", "Arroz Integral", "alimentos", 4.50, "kg", 2.0, 150, "Sepé", "MegaG",NOW()),
    ("Feijão", "A2", "Feijão Preto", "alimentos", 5.80, "kg", 2.5, 120, "Feijó", "MegaG",NOW()),
    ("Macarrão", "A3", "Macarrão Parafuso", "alimentos", 5.20, "kg", 2.0, 80, "Sepé", "MegaG",NOW()),
    ("Maçã", "A4", "Maçã Verde", "alimentos", 1.50, "g", 2.0, 75, "Fazenda", "Feira-Central",NOW()),
    ("Tomate", "A5", "Tomate Vermelho", "alimentos", 1.80, "kg", 2.0, 40, "Fazenda", "Feira-Central",NOW()),
    ("Refrigerante", "A6", "Coca-Cola", "bebidas", 6.50, "L", 2.0, 155, "Coca Cola", "Coca Cola",NOW()),
    ("Água", "A7", "Água Mineral", "bebidas", 1.00, "kg", 2.0, 110, "Campinho", "Campinho Distribuidora",NOW()),
    ("Biscoito", "A8", "Biscoito Recheado Passatempo", "alimentos", 5.00, "kg", 2.0, 70, "Passa Tempo", "MegaG",NOW()),
    ("Café", "A9", "Café", "alimentos", 5.00, "kg", 2.0, 180, "3 Corações", "MegaG",NOW()),
    ("Leite", "A10", "Leite", "bebidas", 5.00, "L", 2.0, 100, "CAPEL", "MegaG", NOW());
