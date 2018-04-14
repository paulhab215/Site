CREATE DATABASE paulsite;

USE paulsite;

CREATE TABLE food (
food_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(60) NOT NULL,
street VARCHAR(50) NOT NULL,
secondary_street VARCHAR(50),
city VARCHAR(30) NOT NULL,
state_abbrv VARCHAR(5) NOT NULL,
state VARCHAR(20) NOT NULL,
zip VARCHAR(10) NOT NULL,
bio TEXT NOT NULL,
yelp_link VARCHAR(150) NOT NULL,
type VARCHAR(20) NOT NULL,
rank TINYINT UNSIGNED NOT NULL,
PRIMARY KEY (food_id)
);


INSERT INTO food (name, street, secondary_street, city, state_abbrv, state, zip, bio, yelp_link, type,rank) VALUES 
('One Taco', '12200 Research Blvd', '#400', 'Austin', 'TX', 'Texas', '78759', 'An urban taqueria - which I believe has their steak game on point. If you go for breakfast get the Jefe, if you go for lunch/dinner I\'d go for the Original Steak Taco. All are good are good and reasonably priced!','https://www.yelp.com/biz/onetaco-an-urban-taqueria-austin-2', 'Mexican','1'),
('Fresa\'s', '915 N Lamar Blvd', '', 'Austin', 'TX', 'Texas', '78703', 'Nothing says tasty like wood grilled chicken complete with homemade tortillas, authentic salsas and traditional rice and beans. Yuciatan Spice all the way (#2). Dont overlook the street corn its worth the buy!','https://www.yelp.com/biz/fresas-austin', 'Chicken', '9'),
('Saigon Le Vendeur', '2404 E 7th St', '', 'Austin', 'TX', 'Texas', '78702', 'Vietnamese Street Food -  Small food truck located next to the railroads - sip jasmine tea as the trains pass by. The spicy chicken banh mi with egg and avoacado on top is unforgettable.','https://www.yelp.com/biz/saigon-le-vendeur-austin', 'Asian', '7'),
('O\'Daku', '2501 W Parmer Ln', '#500', 'Austin', 'TX', 'Texas', '78727', 'A number of Korean dishes & excellent sushi - one of my favorites in Austin. It is a hidden gem with an amazing happy hour!','https://www.yelp.com/biz/o-daku-sushi-austin', 'Asian', '5'),
('Noble Sandwich Company', '4805 Burnet Rd', '', 'Austin', 'TX', 'Texas', '78756', 'A farm-to-table slant applies to big breakfast & lunch in casual, counter-service digs with a patio. My top is the Turkey Chop House with of course an egg on top. But don\'t doubt the Beef tongue it is very good as well!','https://www.yelp.com/biz/noble-sandwich-austin-2', 'Sandwiches', '11'),
('Pho Please', '1920 E Riverside Dr', '', 'Austin', 'TX', 'Texas', '78741', 'Looking for a quick bite of pho? This place is your stop! With fast service and a tasty rice/egg plate its always a safe stop on Riverside.','https://www.yelp.com/biz/pho-please-austin-3', 'Asian', '13'),
('Ramen Tatsu-Ya', '1234 South Lamar', '', 'Austin', 'TX', 'Texas', '78704', 'Nothing beats a big bowl of broth with noodles in it. Dive right into that bowl with my favorite dish Mi So Not - make sure to get a chili bomb on the side.','https://www.yelp.com/biz/ramen-tatsu-ya-austin-2', 'Asian', '4'),
('Cabo Bobs', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2', 'Mexican', '14'),
('Velvet Taco', '11501 Rock Rose Ave', 'Suite 160', 'Austin', 'TX', 'Texas', '78758', 'A local favorite in the up incoming Domain Rock Rose! Bite into their Chicken Tikka Masala taco but watch out their tacos are pricey','https://www.yelp.com/biz/velvet-taco-austin', 'Mexican', '6'),
('LA Barbecue', '2027 E Cesar Chavez St', '', 'Austin', 'TX', 'Texas', '78704', 'Not a big fan of barbecue but LA does not mess around. All around good food while many barbecue stands only excel at brisket. Check out the sausage or short rib!','https://www.yelp.com/biz/la-barbecue-austin-3', 'Barbecue', '2'),
('Desano', '8000 Burnet Rd', '', 'Austin', 'TX', 'Texas', '78757', 'Pizza! Need I say more.. Desano\'s flavors are deep for pizza - not giving any idea of poor quality. Make sure to check out the delicious Vesuvio calazone.','https://www.yelp.com/biz/desano-pizzeria-napoletana-austin-3', 'Pizza', '12'),
('East Side Kings', '2310 S Lamar Blvd', '#101', 'Austin', 'TX', 'Texas', '78704', 'Close to work and packed with explosive Japanese flavors with an Austin soul. I love anything with rice and I\m sure you do too! Check out my favorite Tori Meshi.','https://www.yelp.com/biz/east-side-king-austin-13', 'Asian', '10'),
('Lucky\'s Puccias', '1611 W 5th St', '#175', 'Austin', 'TX', 'Texas', '78703', 'Italian wood fired sandwiches that are always fresh out of the oven. With a vast menu and all being good you can\'t go wrong, but if you don\'t want to take a chance get the Hot Pastrami, Lucky\'s or Contadina.','https://www.yelp.com/biz/luckys-puccias-and-pizzeria-austin', 'Sandwiches', '15'),
('Fuego Tortilla Grill', '913 N Interstate 35 Frontage Rd', '', 'San Marcos', 'TX', 'Texas', '78666', 'A college classic it is worth making it on the list - also helps sorting. But if you ever stop in get the Fuego Steak taco.','https://www.yelp.com/biz/fuego-tortilla-grill-san-marcos-3', 'Mexican', '8'),
('Dos Batos', '2525 W Anderson Ln', '#175', 'Austin', 'TX', 'Texas', '78757', 'Wood fired tacos with a great tasting salsa on the side make this place great. Make sure you try the chicken taco it wins by a landside.','https://www.yelp.com/biz/dos-batos-woodfired-tacos-austin', 'Mexican', '3');


CREATE TABLE contact (
contact_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
website VARCHAR(50),
comment VARCHAR(1000) NOT NULL,
PRIMARY KEY (contact_id)
);
