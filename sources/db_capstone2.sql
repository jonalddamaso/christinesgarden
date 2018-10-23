CREATE TABLE users (
	id INT NOT NULL AUTO_INCREMENT,
	firstName varchar(255) NOT NULL,
	lastName varchar(255) NOT NULL,
	gender varchar(25) NOT NULL,
	username varchar(255) NOT NULL,
	password varchar(255) NOT NULL,
	confirm_password varchar(255) NOT NULL,
	phone_number varchar(25) NOT NULL,
	email varchar(255) NOT NULL,
	address varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE orders (
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	transaction_code varchar(255) NOT NULL,
	purchase_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	status_id INT NOT NULL,
	payment_mod_id INT NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE categories (
	id INT NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE items (
	id INT NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	description varchar(255) NOT NULL,
	image_path varchar(255) NOT NULL,
	price varchar(255) NOT NULL,
	category_id INT NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE payment_modes (
	id INT NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE orders_item (
	id INT NOT NULL AUTO_INCREMENT,
	order_id INT NOT NULL,
	item_id INT NOT NULL,
	quantity INT NOT NULL,
	price DECIMAL(18,2) NOT NULL,
	PRIMARY KEY (id)
);

CREATE TABLE statuses (
	id INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (id)
);

ALTER TABLE orders ADD CONSTRAINT orders_fk0 FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE orders ADD CONSTRAINT orders_fk1 FOREIGN KEY (status_id) REFERENCES statuses(id);

ALTER TABLE orders ADD CONSTRAINT orders_fk2 FOREIGN KEY (payment_mod_id) REFERENCES payment_modes(id);

ALTER TABLE items ADD CONSTRAINT items_fk0 FOREIGN KEY (category_id) REFERENCES categories(id);

ALTER TABLE orders_item ADD CONSTRAINT orders_item_fk0 FOREIGN KEY (order_id) REFERENCES orders(id);

ALTER TABLE orders_item ADD CONSTRAINT orders_item_fk1 FOREIGN KEY (item_id) REFERENCES items(id);

