-- SQL 
create schema if not exists lbaw2155;

DROP TABLE IF EXISTS "user" CASCADE;
DROP TABLE IF EXISTS adminuser CASCADE;
DROP TABLE IF EXISTS "Artist" CASCADE;
DROP TABLE IF EXISTS product CASCADE;
DROP TABLE IF EXISTS review CASCADE;
DROP TABLE IF EXISTS image CASCADE; 
DROP TABLE IF EXISTS delivery_type CASCADE;
DROP TABLE IF EXISTS orderList CASCADE;
DROP TABLE IF EXISTS purchase CASCADE;
DROP TABLE IF EXISTS stock CASCADE;
DROP TABLE IF EXISTS available_quantity CASCADE;
DROP TABLE IF EXISTS wish CASCADE;

DROP DOMAIN IF EXISTS "Today";


DROP FUNCTION IF EXISTS check_purchases_quantities() CASCADE;
DROP FUNCTION IF EXISTS add_review() CASCADE;
DROP FUNCTION IF EXISTS update_product_score() CASCADE;
DROP FUNCTION IF EXISTS update_available_quantity() CASCADE;
DROP FUNCTION IF EXISTS update_order_total() CASCADE;

DROP TRIGGER IF EXISTS check_purchase_quantities ON purchase;
DROP TRIGGER IF EXISTS add_review ON review;
DROP TRIGGER IF EXISTS product_score ON review;
DROP TRIGGER IF EXISTS update_available_quantity ON purchase;
DROP TRIGGER IF EXISTS update_order_total ON purchase;


CREATE DOMAIN "Today" AS DATE NOT NULL DEFAULT ('now'::text)::date;

CREATE TABLE "user" (
	id SERIAL PRIMARY KEY,
	name TEXT NOT NULL,
	email TEXT NOT NULL UNIQUE,
	password TEXT NOT NULL,
	phone_number TEXT,
	nif TEXT,
	address TEXT NOT NULL,
	city TEXT NOT NULL,
	country TEXT NOT NULL
);

CREATE TABLE adminuser (
	id SERIAL PRIMARY KEY,
	name TEXT NOT NULL,
	email TEXT NOT NULL UNIQUE,
	password TEXT NOT NULL,
	admin_level INTEGER NOT NULL DEFAULT 0 CHECK (admin_level > 0 AND admin_level <= 3)
);

CREATE TABLE "Artist" (
	id SERIAL PRIMARY KEY,
	name TEXT NOT NULL,
	bio TEXT,
	verified BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE product (
	id SERIAL PRIMARY KEY,
	score FLOAT NOT NULL DEFAULT 0.0,
	title TEXT NOT NULL,
	type TEXT NOT NULL,
	price FLOAT NOT NULL,
	description TEXT NOT NULL,
  artist_id INTEGER REFERENCES "Artist"(id),
	CONSTRAINT price CHECK (price > 0)
);

CREATE TABLE review (
	id SERIAL PRIMARY KEY,
	title TEXT,
	content TEXT,
	score INTEGER NOT NULL,
	product_id INTEGER REFERENCES product(id) ON DELETE CASCADE,
	user_id INTEGER REFERENCES "user"(id) ON DELETE CASCADE,

	CONSTRAINT score CHECK (score <= 5 AND score >= 0)
);

CREATE TABLE image (
	id SERIAL PRIMARY KEY,
	image_path TEXT NOT NULL UNIQUE,
	product_id INTEGER REFERENCES product(id) ON DELETE CASCADE,
	main BOOLEAN NOT NULL DEFAULT FALSE
);

CREATE TABLE delivery_type (
	id SERIAL PRIMARY KEY,
	type TEXT NOT NULL,
	cost FLOAT NOT NULL CHECK (cost >= 0)
);

CREATE TABLE orderList (
	id SERIAL PRIMARY KEY,
	date TIMESTAMP WITH TIME zone DEFAULT now() NOT NULL,  -- Syntax Error (if not on Postgre)*/
	total FLOAT NOT NULL CHECK (total > 0),
  state INTEGER NOT NULL CHECK (state >= 0 AND state <= 2),
    -- state == 0 order in shopping cart; 1 order purchased; 2 order delivered
	delivery_type_id INTEGER REFERENCES delivery_type(id) ON DELETE CASCADE,
	user_id INTEGER REFERENCES "user"(id) ON DELETE CASCADE
);

CREATE TABLE purchase (
	product_id INTEGER REFERENCES product(id) ON DELETE CASCADE,
	orderList_id INTEGER REFERENCES orderList(id) ON DELETE CASCADE,
	quantity INTEGER NOT NULL CHECK (quantity > 0) 
);


CREATE TABLE stock (
	id SERIAL PRIMARY KEY
);

CREATE TABLE available_quantity (
	id SERIAL PRIMARY KEY,
	quantity INTEGER NOT NULL,
	product_id INTEGER REFERENCES product(id) ON DELETE CASCADE NOT NULL,
	stock_id INTEGER REFERENCES stock(id) ON DELETE CASCADE NOT NULL
);

CREATE TABLE wish (
	id SERIAL PRIMARY KEY, 
	user_id INTEGER REFERENCES "user"(id) ON DELETE CASCADE,
	product_id INTEGER REFERENCES product(id) ON DELETE CASCADE
);



-- Table Indexing --

-- User
CREATE INDEX idx_user_id 
ON "user" (id);

CREATE INDEX idx_user_name 
ON "user" (name);

CREATE INDEX idx_user_nif 
ON "user" (nif);

CREATE INDEX idx_user_location 
ON "user" (country, city, address);


-- Admin
CREATE INDEX idx_admin_id 
ON adminuser (id);

CREATE INDEX idx_admin_name 
ON adminuser (name);

CREATE INDEX idx_admin_admin_level 
ON adminuser (admin_level);


-- Artist
CREATE INDEX idx_artist_id 
ON "Artist" (id);

--Index4: Search by Artist Name
CREATE INDEX idx_artist_name 
ON "Artist" (name);

CREATE INDEX idx_artist_verified 
ON "Artist" (verified);


-- Review
CREATE INDEX idx_review_id 
ON review (id);

CREATE INDEX idx_review_score
ON review (score);

CREATE INDEX idx_review_product_id 
ON review (product_id);

CREATE INDEX idx_review_costumer_id 
ON review (id);


-- Product
CREATE INDEX idx_product_id 
ON product (id);

-- Index2: Filter by product type
CREATE INDEX idx_product_type 
ON product (type);

-- Index3: Filter by product price
CREATE INDEX idx_product_price 
ON product (price);


-- Image
CREATE INDEX idx_image_id 
ON image (id);

CREATE INDEX idx_image_product_id 
ON image (product_id);


-- Purchase
CREATE INDEX idx_purchase_product_id 
ON purchase (product_id);

CREATE INDEX idx_purchase_quantity 
ON purchase (quantity);


-- orderList
CREATE INDEX idx_orderList_id 
ON orderList (id);

CREATE INDEX idx_orderList_total
ON orderList (total);

CREATE INDEX idx_orderList_state
ON orderList (state);

CREATE INDEX idx_orderList_delivery_type_id 
ON orderList (delivery_type_id);

--INDX01: Saber todas as orders do cliente cm id 'X'
CREATE INDEX idx_orderList_user_id 
ON orderList (user_id);


-- Delivery Type
CREATE INDEX idx_delivery_type_id
ON delivery_type (id);

CREATE INDEX idx_delivery_type_type
ON delivery_type (type);

CREATE INDEX idx_delivery_type_cost
ON delivery_type (cost);


-- Stock
CREATE INDEX idx_stock_id
ON stock (id);


-- Available Quantity
CREATE INDEX idx_available_quantity_id
ON available_quantity (id);

CREATE INDEX idx_available_quantity_quantity 
ON available_quantity (quantity);

CREATE INDEX idx_available_quantity_product_id
ON available_quantity (product_id);

CREATE INDEX idx_available_quantity_stock_id
ON available_quantity (stock_id);


-- Wish
CREATE INDEX idx_wish_id
ON wish (id);

CREATE INDEX idx_wish_user_id
ON wish (user_id);

CREATE INDEX idx_wish_product_id
ON wish (product_id);


-- Functions and Triggers --
CREATE FUNCTION check_purchases_quantities() RETURNS TRIGGER AS
$BODY$
BEGIN
    IF NOT EXISTS (SELECT quantity 
                    FROM available_quantity
                    WHERE available_quantity.quantity >= New.quantity)
    THEN RAISE EXCEPTION 'You can’t buy % items of product %' , New.quantity, New.product_id; 
    END IF;
    RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER check_purchase_quantities BEFORE INSERT 
OR UPDATE ON purchase
FOR EACH ROW
EXECUTE PROCEDURE check_purchases_quantities();


CREATE FUNCTION add_review() RETURNS TRIGGER AS
$BODY$
BEGIN
    IF NOT EXISTS (SELECT product_id
                 FROM purchase,orderlist
                 WHERE purchase.orderlist_id = orderlist.id) 
				 THEN RAISE EXCEPTION 'You can not review a product you have not purchased.'; 
    END IF;
    RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER add_review
BEFORE INSERT ON review
FOR EACH ROW
EXECUTE PROCEDURE add_review();

CREATE FUNCTION update_product_score() RETURNS TRIGGER AS
$BODY$
BEGIN
	UPDATE product
	SET score = (Select AVG(score) FROM review WHERE product_id = New.product_id)
	WHERE product.id = New.product_id;
	RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER product_score AFTER INSERT OR UPDATE OR DELETE
ON review FOR EACH ROW
EXECUTE PROCEDURE update_product_score();

CREATE FUNCTION update_available_quantity() RETURNS TRIGGER AS
$BODY$
BEGIN
  UPDATE available_quantity
  SET quantity = quantity - New.quantity
  WHERE product_id = New.product_id;
  RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER update_available_quantity AFTER INSERT
ON purchase FOR EACH ROW
EXECUTE PROCEDURE update_available_quantity();

CREATE FUNCTION update_order_total() RETURNS TRIGGER AS
$BODY$
BEGIN
  UPDATE orderlist
  SET total = total + New.quantity * product.price
  FROM product
  WHERE New.product_id = product.id AND NEW.orderlist_id = orderlist.id;
  RETURN NEW;
END
$BODY$
LANGUAGE plpgsql;

CREATE TRIGGER update_order_total AFTER INSERT
ON purchase FOR EACH ROW
EXECUTE PROCEDURE update_order_total();

-----

SET TRANSACTION ISOLATION LEVEL SERIALIZABLE READ ONLY;

-- Number of orders currently in shopping carts
SELECT COUNT(*) FROM orderlist
	WHERE orderlist.state = 0
;

-- Products and respective quantities of orders in carts
SELECT purchase.quantity, product.title
FROM purchase 
  LEFT JOIN orderlist ON purchase.orderlist_id = orderlist.id
  LEFT JOIN product ON purchase.product_id = product.id

WHERE orderlist.state = 0;

END TRANSACTION;