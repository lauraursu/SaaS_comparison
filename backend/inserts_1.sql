/* INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...) 
*/
drop table pricinglist
ALTER TABLE service add webpage varchar(255)
alter table service add img blob;
alter TABLE service ADD upgradable bool 
ALTER TABLE service ADD FOREIGN KEY (p_typeID) REFERENCES pricingtype (p_typeID)
ALTER TABLE servicetype drop serviceId
alter TABLE pricingtype DROP serviceID
insert INTO provider (providerName) VALUES ('Adobe');
INSERT INTO servicetype( typeName, typeDescription) VALUES ('Webinar', 'Offers services for online meetings, webinars, classrooms');
INSERT INTO pricingtype (p_typeName) VALUES ('/host')
INSERT INTO pricingtype (p_typeName) VALUES ('/attendee')
ALTER TABLE features DROP serviceID;
INSERT INTO features(featureName) VALUES ('video recording');
INSERT INTO features(featureName) VALUES ('security');
INSERT INTO features(featureName) VALUES ('storage');
INSERT INTO features(featureName) VALUES ('customizable events');
INSERT INTO features(featureName) VALUES ('analytics');
INSERT INTO features(featureName) VALUES ('desktop sharing');
INSERT INTO features(featureName) VALUES ('chat');
INSERT INTO features(featureName) VALUES ('whiteboard');
INSERT INTO features(featureName) VALUES ('Raise hand');
INSERT INTO features(featureName) VALUES ('SSL encryption');
INSERT INTO features(featureName) VALUES ('Free mobile app');
INSERT INTO features(featureName) VALUES ('Polling');
INSERT INTO features(featureName) VALUES ('File transfer');
INSERT INTO features(featureName) VALUES ('Email support');
insert into service (serviceName, priceY, priceM, typeID, providerID, p_typeID, attendees, multiple_pTypes) values ('Adobe Connect Meetings', 497, 46, 1, 1, 2, 25, 'false')
INSERT INTO pricingtype (p_typeID, p_typeName) VALUES (NULL, 'mixt');
UPDATE service SET upgradable = '0' WHERE service.serviceID = 1;
insert into service (serviceName, priceY, priceM, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable) values ('Adobe Connect Webinars', 1150, 120, 1, 1, 2, 100, 'false', 1)
insert into service (serviceName, priceY, priceM, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable) values ('Adobe Connect Learning', 3220, 340, 1, 1, 2, 200, 'false', 1)
INSERT INTO featureslist(serviceID, featureID) VALUES (1,1 );
INSERT INTO featureslist(serviceID, featureID) VALUES (1,2 );
INSERT INTO featureslist(serviceID, featureID) VALUES (1,3 );
INSERT INTO featureslist(serviceID, featureID) VALUES (2,1 );
INSERT INTO featureslist(serviceID, featureID) VALUES (2,2 );
INSERT INTO featureslist(serviceID, featureID) VALUES (2,3 );
INSERT INTO featureslist(serviceID, featureID) VALUES (2,4 );
INSERT INTO featureslist(serviceID, featureID) VALUES (2,5 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,1 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,2 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,3 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,4 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,5 );
INSERT INTO featureslist(serviceID, featureID) VALUES (3,11 );
INSERT INTO features (featureID, featureName) VALUES (NULL, 'free trial');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '1', '15'), (NULL, '2', '15');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '3', '15');
UPDATE service SET webpage = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE service.serviceID = 1;
UPDATE service SET webpage = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE service.serviceID = 2; 
UPDATE service SET webpage = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE service.serviceID = 3; 
UPDATE service SET upgradable = '0' WHERE service.serviceID = 3; 

INSERT INTO provider( providerName) VALUES ( "RingCentral")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Essentials 2-20", 19.99, 29.99, 1, 2, 1, 20, 20, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Standard 2-20", 24.99, 34.99, 1, 2, 1, 20, 100, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Premium 2-20", 34.99, 44.99, 1, 2, 1, 20, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Ultimate 2-20", 49.99, 59.99, 1, 2, 1, 20, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Standard 21-50", 24.99, 34.99, 1, 2, 1, 50, 100, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Premium 21-50", 34.99, 44.99, 1, 2, 1, 50, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Ultimate 21-50", 49.99, 59.99, 1, 2, 1, 50, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Standard 51-99", 24.99, 34.99, 1, 2, 1, 99, 100, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Premium 51-99", 34.99, 44.99, 1, 2, 1, 99, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Ultimate 51-99", 49.99, 59.99, 1, 2, 1, 99, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Standard 100-999+", 22.99, 32.99, 1, 2, 1, 999, 100, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Premium 100-999+", 32.99, 42.99, 1, 2, 1, 999, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
INSERT INTO service(serviceName, priceY, priceM, typeID, providerID, p_typeID, hosts, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "RigCentral Ultimate 100-999+", 42.99, 52.99, 1, 2, 1, 999, 200, true, false, "https://www.ringcentral.com/office/plansandpricing.html#office")
insert into provider ( providerName) VALUES ( "GoTo")
INSERT INTO service(serviceName, priceY, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "GoToMeeting Professional", 12, 1, 3, 1, 150, false, true, "https://www.goto.com/pricing/meeting")
INSERT INTO service(serviceName, priceY, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable, webpage) VALUES ( "GoToMeeting Business", 16, 1, 3, 1, 250, false, true, "https://www.goto.com/pricing/meeting")



INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '4', '5'), (NULL, '4', '7');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '4', '6');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '4', '14');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '5', '15'), (NULL, '5', '3');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '5', '2'), (NULL, '5', '8');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '6', '12'), (NULL, '6', '3');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '6', '1'), (NULL, '6', '9');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '6', '11'), (NULL, '6', '6');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '7', '12'), (NULL, '7', '5');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '7', '9'), (NULL, '7', '8');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '8', '10'), (NULL, '8', '8');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '8', '1'), (NULL, '8', '7'), (NULL, '8', '11');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '9', '2'), (NULL, '9', '7'), (NULL, '9', '9'), (NULL, '9', '3'), (NULL, '9', '11');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '10', '1'), (NULL, '10', '6'), (NULL, '10', '9'), (NULL, '10', '10'), (NULL, '10', '11');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '11', '13'), (NULL, '11', '6'), (NULL, '11', '12'), (NULL, '11', '1'), (NULL, '11', '11');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '12', '14'), (NULL, '12', '15'), (NULL, '12', '12'), (NULL, '12', '2'), (NULL, '12', '7');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '13', '8'), (NULL, '13', '14'), (NULL, '13', '12'), (NULL, '13', '1'), (NULL, '13', '7');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '14', '5'), (NULL, '14', '14'), (NULL, '14', '12'), (NULL, '14', '3'), (NULL, '14', '7');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '15', '5'), (NULL, '15', '14'), (NULL, '15', '12'), (NULL, '15', '13'), (NULL, '15', '11');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '16', '5'), (NULL, '16', '1'), (NULL, '16', '12'), (NULL, '16', '9'), (NULL, '16', '10');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '17', '1'), (NULL, '17', '2'), (NULL, '17', '3'), (NULL, '17', '4'), (NULL, '17', '5'),(NULL, '17', '6'), (NULL, '17', '7'), (NULL, '17', '8'), (NULL, '17', '10');
INSERT INTO featureslist (f_listID, serviceID, featureID) VALUES (NULL, '18', '13'), (NULL, '18', '2'), (NULL, '18', '3'), (NULL, '18', '4'), (NULL, '18', '5'),(NULL, '18', '6'), (NULL, '18', '7'), (NULL, '18', '8'), (NULL, '18', '12');



