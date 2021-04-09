CREATE TABLE contacts
(
	id integer not null
		constraint contacts_pk
			primary key autoincrement,
	name varchar not null,
	email varchar not null,
	message varchar not null
)


