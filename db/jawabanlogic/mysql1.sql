SELECT customer.id AS customer_id,customer.no_telpon,customer.produk,sales.nama_sales  FROM `customer`
JOIN sales on customer.id_sales = sales.id_sales;

