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
rank TINYINT UNSIGNED NOT NULL,
PRIMARY KEY (food_id)
);


INSERT INTO food (name, street, secondary_street, city, state_abbrv, state, zip, bio, yelp_link, rank) VALUES 
('One Taco', '12200 Research Blvd', '#400', 'Austin', 'TX', 'Texas', '78759', 'An urban taqueria - which I believe has their steak game on point. If you go for breakfast get the Jefe, if you go for lunch/dinner I\'d go for the Original Steak Taco. All are good are good and reasonably priced!','https://www.yelp.com/biz/onetaco-an-urban-taqueria-austin-2'),
('Fresa\'s Chicken Al Carbon', '915 N Lamar Blvd', '', 'Austin', 'TX', 'Texas', '78703', 'Nothing says tasty like wood grilled chicken complete with homemade tortillas, authentic salsas and traditional rice and beans. My goto location is right downtown in the heart of Austin and is easily accessible. Yuciatan Spice all the way (#2). Dont overlook the street corn its worth the buy!','https://www.yelp.com/biz/fresas-austin'),
('Saigon Le Vendeur', '2404 E 7th St', '', 'Austin', 'TX', 'Texas', '78702', 'Vietnamese Street Food -  Small food truck located next to the railroads - sip jasmine tea as the trains pass by. The spicy chicken banh mi with egg and avoacado on top is unforgettable.','https://www.yelp.com/biz/saigon-le-vendeur-austin'),
('O\'Daku', '2501 W Parmer Ln', '#500', 'Austin', 'TX', 'Texas', '78727', 'A number of Korean dishes & excellent sushi - one of my favorites in Austin. It is a hidden gem with an amazing happy hour!','https://www.yelp.com/biz/o-daku-sushi-austin'),
('Noble Sandwich Company', '4805 Burnet Rd', '', 'Austin', 'TX', 'Texas', '78756', 'A farm-to-table slant applies to big breakfast & lunch in casual, counter-service digs with a patio. My top is the Turkey Chop House with of course an egg on top. But don\'t doubt the Beef tongue it is very good as well!','https://www.yelp.com/biz/noble-sandwich-austin-2');
('Pho Please', '1920 E Riverside Dr', '', 'Austin', 'TX', 'Texas', '78741', 'Looking for a quick bite of pho? This place is your stop! With fast service and a tasty rice/egg plate its always a safe stop on Riverside.','https://www.yelp.com/biz/pho-please-austin-3');
('Ramen Tatsu-Ya', '1234 South Lamar', '', 'Austin', 'TX', 'Texas', '78704', 'Nothing beats a big bowl of broth with noodles in it. Dive right into that bowl with my favorite dish Mi So Not - make sure to get a chili bomb on the side.','https://www.yelp.com/biz/ramen-tatsu-ya-austin-2');
('Cabo Bobs', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('Velvet Taco', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('LA Barbecue', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('Desano', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('East Side Kings', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('Luckys Puccias', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');
('Fuego', '2828 Rio Grande St', '', 'Austin', 'TX', 'Texas', '78705', 'Check out one of my first Austin favorites. Nothing compares to the choice of your tortilla made right in front of you. Don\'t forget the queso!','https://www.yelp.com/biz/cabo-bobs-burritos-austin-2');