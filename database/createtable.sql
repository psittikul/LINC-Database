USE LINC_DB;
CREATE TABLE client_services (
	client_id int NOT NULL,
    PRIMARY KEY(client_id),
    service_type varchar(30) NOT NULL,
    inv_date date,
    inv_num int,
    ref_date date NOT NULL,
    intake_date date,
    status varchar(15) NOT NULL,
    coordinator varchar(4),
    units int NOT NULL);