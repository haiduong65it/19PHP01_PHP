-- 1
SELECT * FROM `products` 
INNER JOIN categories ON categories.categoryID = products.categoryID 
WHERE categories.categoryName = "Guitars" and products.listPrice > 500
-- 2
SELECT * FROM `products` 
WHERE dateAdded LIKE "2014-07%" and listPrice > 300 
ORDER BY listPrice DESC
-- 3
SELECT * FROM `products` 
INNER JOIN categories ON categories.categoryID = products.categoryID 
WHERE categories.categoryName = "Basses" and products.productName LIKE "%o%"
-- 4
SELECT * FROM `products`
INNER JOIN orderitems ON orderitems.productID = products.productID
INNER JOIN orders ON orders.orderID = orderitems.orderID
INNER JOIN customers ON customers.customerID = orders.customerID
WHERE customers.emailAddress LIKE "%gmail%"
-- 5
SELECT * FROM `products` 
WHERE (listPrice > 300 AND dateAdded LIKE "2014%")  ORDER BY listPrice DESC LIMIT 4

-- 6
SELECT city FROM `addresses` 
INNER JOIN customers ON addresses.customerID = customers.customerID
INNER JOIN orders ON orders.customerID = customers.customerID
INNER JOIN orderitems ON orderitems.orderID = orders.orderID
INNER JOIN products ON products.productID = orderitems.productID
WHERE products.productName = "Yamaha FG700S"