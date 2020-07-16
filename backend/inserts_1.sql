/* INSERT INTO table_name (column1, column2, column3,...)
VALUES (value1, value2, value3,...) 
*/
drop table pricinglist
ALTER TABLE service add webpage varchar(255)
alter TABLE service ADD upgradable bool 
ALTER TABLE `service` ADD FOREIGN KEY (`p_typeID`) REFERENCES pricingtype (`p_typeID`)
ALTER TABLE servicetype drop serviceId
alter TABLE pricingtype DROP serviceID
insert INTO provider (providerName) VALUES ('Adobe');
INSERT INTO servicetype( typeName, typeDescription) VALUES ('Webinar', 'Offers services for online meetings, webinars, classrooms');
INSERT INTO pricingtype (p_typeName) VALUES ('/host')
INSERT INTO pricingtype (p_typeName) VALUES ('/attendee')
ALTER TABLE `features` DROP `serviceID`;
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
INSERT INTO `pricingtype` (`p_typeID`, `p_typeName`) VALUES (NULL, 'mixt');
UPDATE `service` SET `upgradable` = '0' WHERE `service`.`serviceID` = 1;
insert into service (serviceName, priceY, priceM, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable) values ('Adobe Connect Webinars', 1150, 120, 1, 1, 2, 100, 'false', 1)
insert into service (serviceName, priceY, priceM, typeID, providerID, p_typeID, attendees, multiple_pTypes, upgradable) values ('Adobe Connect Learning', 3220, 340, 1, 1, 2, 200, 'false', 1)
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (1,1 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (1,2 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (1,3 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (2,1 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (2,2 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (2,3 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (2,4 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (2,5 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,1 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,2 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,3 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,4 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,5 );
INSERT INTO `featureslist`(`serviceID`, `featureID`) VALUES (3,11 );
INSERT INTO `features` (`featureID`, `featureName`) VALUES (NULL, 'free trial');
INSERT INTO `featureslist` (`f_listID`, `serviceID`, `featureID`) VALUES (NULL, '1', '15'), (NULL, '2', '15');
INSERT INTO `featureslist` (`f_listID`, `serviceID`, `featureID`) VALUES (NULL, '3', '15');
UPDATE `service` SET `webpage` = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE `service`.`serviceID` = 1;
UPDATE `service` SET `webpage` = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE `service`.`serviceID` = 2; 
UPDATE `service` SET `webpage` = 'https://buyconnect.adobe.com/store/adbecnn/en_IE/Content/pbpage.LandingPage/currency.EUR' WHERE `service`.`serviceID` = 3; 
UPDATE `service` SET `upgradable` = '0' WHERE `service`.`serviceID` = 3; 

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
