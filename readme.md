Excursion System

University PHP Frameworks - Laravel project

Controllers:
ExcursionsController
HomeController
ImageController
OrganisatorsController
Search Controller
TransportsController
Models:
Excursion
fields to fill in:
name
conDate
duration
typeTransport
organisator

Organisator
fields to fill in:
firstName
lastName
age

Transport
fields to fill in:
transportType
description

Images
fields to fill in:
fileName
imageDescription


User
fields to fill in:
name
email
password
hidden fields:
password
remember_token


Views:
auth -password - email - reset -login -register -verify

excurisons

create Create new excursion filling the fields name, conDate, duration, typeTransport and add the new excursion in the list of organisator
index Show the list of all excursions
edit Change some information for the current excursion
show Show only the information about the current excursion
search Searching excursion by name of all excursions We've got the opportunity to delete a choosen excursion and the information about it

images

create Add new image and give it a name
index Show the list of all images

organisator

create Create new organisator filling the field firstName, lastName and age and add the new organisator in the list of all locations
index Show the list of all organisators
edit Change some information for the current organisator
show Show only the information about the current organisator We've got the opportunity to delete a choosen organisator and the information about it

transport

create Create new transport type filling the field transportType, description and add the new transport in the list of all transports
index Show the list of all transports
edit Change some information for the current transport
show Show only the information about the current transport We've got the opportunity to delete a choosen transport and the information about it

The start up page where we've got a menu whith EXCURSIONS, ORGANISATORS, TRANSPORTS, IMAGES buttons
