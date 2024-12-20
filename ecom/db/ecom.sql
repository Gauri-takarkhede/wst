CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255),
    product_description TEXT,
    product_price DECIMAL(10,2)
);

INSERT INTO products (product_name, product_description, product_price)
VALUES
('Product 1', 'Description of Product 1', 231.00),
('Product 2', 'Description of Product 2', 232.00),
('Product 3', 'Description of Product 3', 233.00),
('Product 4', 'Description of Product 4', 234.00);
