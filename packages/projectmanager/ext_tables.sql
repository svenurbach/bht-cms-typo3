CREATE TABLE tx_projectmanager_domain_model_project (
	name varchar(255) NOT NULL DEFAULT '',
	teammember varchar(255) NOT NULL DEFAULT '',
	client varchar(255) NOT NULL DEFAULT '',
	has int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_projectmanager_domain_model_tech (
	project int(11) unsigned DEFAULT '0' NOT NULL,
	name varchar(255) NOT NULL DEFAULT '',
	version varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_projectmanager_domain_model_person (
	name varchar(255) NOT NULL DEFAULT '',
	role varchar(255) NOT NULL DEFAULT '',
	works_at int(11) unsigned DEFAULT '0'
);
