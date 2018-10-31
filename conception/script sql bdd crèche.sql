#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: children
#------------------------------------------------------------

CREATE TABLE children(
        children_id              Int  Auto_increment  NOT NULL ,
        children_firstname       Varchar (50) NOT NULL ,
        children_lastname        Varchar (50) NOT NULL ,
        children_birthday        Date NOT NULL ,
        children_adress          Varchar (250) NOT NULL ,
        children_parents_contact Varchar (250) NOT NULL ,
        children_remarks         Varchar (250) NOT NULL
	,CONSTRAINT children_PK PRIMARY KEY (children_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table:  childcare_history 
#------------------------------------------------------------

CREATE TABLE childcare_history(
        ch_id         Int  Auto_increment  NOT NULL ,
        ch_start_date Datetime NOT NULL ,
        ch_end_date   Datetime NOT NULL ,
        ch_room       Int NOT NULL ,
        ch_bed        Int NOT NULL ,
        children_id   Int NOT NULL
	,CONSTRAINT childcare_history_PK PRIMARY KEY (ch_id)

	,CONSTRAINT childcare_history_children_FK FOREIGN KEY (children_id) REFERENCES children(children_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: activity
#------------------------------------------------------------

CREATE TABLE activity(
        activity_id               Int  Auto_increment  NOT NULL ,
        activity_name             Varchar (50) NOT NULL ,
        activity_type             Varchar (50) NOT NULL ,
        activity_number_max_child Int NOT NULL
	,CONSTRAINT activity_PK PRIMARY KEY (activity_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: participate
#------------------------------------------------------------

CREATE TABLE participate(
        activity_id Int NOT NULL ,
        children_id Int NOT NULL
	,CONSTRAINT participate_PK PRIMARY KEY (activity_id,children_id)

	,CONSTRAINT participate_activity_FK FOREIGN KEY (activity_id) REFERENCES activity(activity_id)
	,CONSTRAINT participate_children0_FK FOREIGN KEY (children_id) REFERENCES children(children_id)
)ENGINE=InnoDB;

