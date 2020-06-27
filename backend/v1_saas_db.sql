CREATE DATABASE [IF NOT EXISTS] saas_db;
USE saas_db;
CREATE TABLE `serviceType` (
  `typeID` int PRIMARY KEY AUTO_INCREMENT,
  `typeName` varchar(255),
  `typeDescription` varchar(255),
  `serviceID` int
);

CREATE TABLE `service` (
  `serviceID` int PRIMARY KEY AUTO_INCREMENT,
  `serviceName` varchar(255),
  `priceY` int,
  `priceM` int,
  `typeID` int,
  `providerID` int,
  `serviceReviews` varchar(255),
  `p_typeID` int,
  `hosts` int,
  `attendees` int,
  `multiple_pTypes` boolean
);

CREATE TABLE `provider` (
  `providerID` int PRIMARY KEY AUTO_INCREMENT,
  `providerName` varchar(255),
  `serviceID` int
);

CREATE TABLE `pricingType` (
  `p_typeID` int PRIMARY KEY AUTO_INCREMENT,
  `p_typeName` varchar(255),
  `serviceID` int
);

CREATE TABLE `features` (
  `featureID` int PRIMARY KEY AUTO_INCREMENT,
  `featureName` varchar(255),
  `serviceID` int
);

CREATE TABLE `featuresList` (
  `f_listID` int PRIMARY KEY AUTO_INCREMENT,
  `serviceID` int,
  `featureID` int
);

CREATE TABLE `pricingList` (
  `p_listID` int PRIMARY KEY AUTO_INCREMENT,
  `p_typeID` int,
  `serviceID` int
);

ALTER TABLE `service` ADD FOREIGN KEY (`typeID`) REFERENCES `serviceType` (`typeID`);

ALTER TABLE `featuresList` ADD FOREIGN KEY (`serviceID`) REFERENCES `service` (`serviceID`);

ALTER TABLE `featuresList` ADD FOREIGN KEY (`featureID`) REFERENCES `features` (`featureID`);

ALTER TABLE `service` ADD FOREIGN KEY (`providerID`) REFERENCES `provider` (`providerID`);

ALTER TABLE `pricingList` ADD FOREIGN KEY (`serviceID`) REFERENCES `service` (`serviceID`);

ALTER TABLE `pricingList` ADD FOREIGN KEY (`p_typeID`) REFERENCES `pricingType` (`p_typeID`);
