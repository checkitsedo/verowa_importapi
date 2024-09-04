#
# Table structure for table 'tx_verowaimportapi_domain_model_event'
#
CREATE TABLE tx_verowaimportapi_domain_model_event (
	event_id int(11) unsigned NOT NULL,
	date_from int(11) unsigned NOT NULL,
	date_to int(11) unsigned NOT NULL,
	date_text varchar(255) NOT NULL DEFAULT '',
	hide_time tinyint(1) unsigned NOT NULL DEFAULT 0,
	title varchar(255) NOT NULL DEFAULT '',
	topic varchar(255) NOT NULL DEFAULT '',
	short_desc varchar(1024) NOT NULL DEFAULT '',
	long_desc mediumtext,
	organizer int(11) unsigned COMMENT '1:n => person.id',
	organizer_name varchar(255) NOT NULL DEFAULT '',
	organizer_firstname varchar(255) NOT NULL DEFAULT '',
	organizer_lastname varchar(255) NOT NULL DEFAULT '',
	organizer_person_id int(11) unsigned NOT NULL DEFAULT 0,
	organizer_email varchar(255) NOT NULL DEFAULT '',
	coorganizers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'coorganizers (persons) count',
	further_coorganizer varchar(1024) NOT NULL DEFAULT '',
	service1 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service1_label varchar(255) NOT NULL DEFAULT '',
	service2 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service2_label varchar(255) NOT NULL DEFAULT '',
	service3 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service3_label varchar(255) NOT NULL DEFAULT '',
	service4 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service4_label varchar(255) NOT NULL DEFAULT '',
	service5 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service5_label varchar(255) NOT NULL DEFAULT '',
	service6 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service6_label varchar(255) NOT NULL DEFAULT '',
	service7 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service7_label varchar(255) NOT NULL DEFAULT '',
	service8 int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'service1 (persons) count',
	service8_label varchar(255) NOT NULL DEFAULT '',
	lectors int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'lectors (persons) count',
	lectors_label varchar(255) NOT NULL DEFAULT '',
	organists int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'organists (persons) count',
	organists_label varchar(255) NOT NULL DEFAULT '',
	vergers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'vergers (persons) count',
	vergers_label varchar(255) NOT NULL DEFAULT '',
	catering varchar(255) NOT NULL DEFAULT '',
	with_sacrament tinyint(1) unsigned NOT NULL DEFAULT 0,
	childcare_id tinyint(1) unsigned NOT NULL DEFAULT 0,
	childcare_text varchar(255) NOT NULL DEFAULT '',
	childcare_person int(11) unsigned COMMENT '1:n => person.id',
	additional_text1 varchar(255) NOT NULL DEFAULT '',
	additional_text1_label varchar(255) NOT NULL DEFAULT '',
	additional_text2 varchar(255) NOT NULL DEFAULT '',
	additional_text2_label varchar(255) NOT NULL DEFAULT '',
	additional_text4 varchar(255) NOT NULL DEFAULT '',
	additional_text4_label varchar(255) NOT NULL DEFAULT '',
	subs_module_active tinyint(1) unsigned NOT NULL DEFAULT 0,
	subs_date int(11) unsigned NOT NULL,
	subs_text varchar(255) NOT NULL DEFAULT '',
	subs_person_id int(11) unsigned COMMENT '1:n => person.id',
	datetime_text varchar(255) NOT NULL DEFAULT '',
	url_event_details varchar(1024) NOT NULL DEFAULT '',
	baptism_offer_id tinyint(1) unsigned NOT NULL DEFAULT 0,
	baptism_offer_text varchar(255) NOT NULL DEFAULT '',
	collection int(11) unsigned COMMENT '1:n => collection.id',
	target_groups int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'target_groups (target_groups) count',
	layers int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'layers (layers) count',
	rooms int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'rooms (rooms) count',
	room_name varchar(255) NOT NULL DEFAULT '',
	files int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'files (files) count',
	file_name varchar(255) NOT NULL DEFAULT '',
	file_desc varchar(255) NOT NULL DEFAULT '',
	file_url varchar(255) NOT NULL DEFAULT '',
	file_filesize_kb int(11) unsigned NOT NULL DEFAULT 0,
	file_filetype varchar(255) NOT NULL DEFAULT '',
	image_url varchar(1024) NOT NULL DEFAULT '',
	image_width int(11) unsigned NOT NULL DEFAULT 0,
	image_height int(11) unsigned NOT NULL DEFAULT 0,
	list_image_url varchar(1024) NOT NULL DEFAULT '',

	UNIQUE event_id (event_id),
);

#
# Table structure for table 'tx_verowaimportapi_domain_model_person'
#
CREATE TABLE tx_verowaimportapi_domain_model_person (
	person_id int(11) unsigned NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	firstname varchar(255) NOT NULL DEFAULT '',
	lastname varchar(255) NOT NULL DEFAULT '',
	phone varchar(255) NOT NULL DEFAULT '',
	profession varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
	url varchar(1024) NOT NULL DEFAULT '',
	url_type int(11) unsigned NOT NULL,
	events int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'events (events) count',
	
	UNIQUE person_id (person_id),
);

#
# Table structure for table 'tx_verowaimportapi_domain_model_targetgroup'
#
CREATE TABLE tx_verowaimportapi_domain_model_targetgroup (
	group_id int(11) unsigned NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	longname mediumtext,
	events int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'events (events) count',
);

#
# Table structure for table 'tx_verowaimportapi_domain_model_layer'
#
CREATE TABLE tx_verowaimportapi_domain_model_layer (
	layer_id int(11) unsigned NOT NULL,
	layer_name varchar(255) NOT NULL DEFAULT '',
	parent_id int(11) unsigned NOT NULL,
	events int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'events (events) count',

    UNIQUE layer_id (layer_id),
);

#
# Table structure for table 'tx_verowaimportapi_domain_model_room'
#
CREATE TABLE tx_verowaimportapi_domain_model_room (
	location_name varchar(255) NOT NULL DEFAULT '',
	location_id int(11) unsigned COMMENT '1:n => location.id',
	street varchar(255) NOT NULL DEFAULT '',
	postcode varchar(255) NOT NULL DEFAULT '',
	city varchar(255) NOT NULL DEFAULT '',
	location_url_is_external smallint(1) unsigned NOT NULL DEFAULT '0',
	room_name varchar(255) NOT NULL DEFAULT '',
	room_id int(11) unsigned NOT NULL,
	shortcut varchar(40) NOT NULL DEFAULT '',
	location_url varchar(1024),
	order int(11) unsigned NOT NULL,
	events int(11) unsigned NOT NULL DEFAULT 0 COMMENT 'events (events) count',

	UNIQUE room_id (room_id),
);

#
# Table structure for table 'tx_verowaimportapi_event_person_mm'
#
CREATE TABLE tx_verowaimportapi_event_person_mm (
    uid_local int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_event.uid',
    uid_foreign int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_person.uid',
    sorting int(11) DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

--    PRIMARY KEY (uid_local,uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_verowaimportapi_event_targetgroup_mm'
#
CREATE TABLE tx_verowaimportapi_event_targetgroup_mm (
    uid_local int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_event.uid',
    uid_foreign int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_targetgroup.uid',
    sorting int(11) DEFAULT '0' NOT NULL,

--    PRIMARY KEY (uid_local,uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_verowaimportapi_event_layer_mm'
#
CREATE TABLE tx_verowaimportapi_event_layer_mm (
    uid_local int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_event.uid',
    uid_foreign int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_layer.uid',
    sorting int(11) DEFAULT '0' NOT NULL,

--    PRIMARY KEY (uid_local,uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);

#
# Table structure for table 'tx_verowaimportapi_event_room_mm'
#
CREATE TABLE tx_verowaimportapi_event_room_mm (
    uid_local int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_event.uid',
    uid_foreign int(11) unsigned DEFAULT 0 NOT NULL COMMENT 'tx_verowaconnector_domain_model_room.uid',
    sorting int(11) DEFAULT '0' NOT NULL,
    sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

--    PRIMARY KEY (uid_local,uid_foreign),
    KEY uid_local (uid_local),
    KEY uid_foreign (uid_foreign)
);
