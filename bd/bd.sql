#Base de données : VTC 

create database if not exists sisas_erp;
use sisas_erp;

DROP TABLE IF EXISTS AT_profile;
CREATE TABLE AT_profile(
        profile_id     Varchar (25),
        profile_name     Varchar (32),
        profile_description     Varchar (255),
        PRIMARY KEY (profile_id)
);

DROP TABLE IF EXISTS AT_role;
CREATE TABLE AT_role(
        role_id     Varchar (25),
        role_name     Varchar (32),
        role_description     Varchar (25),
        PRIMARY KEY (role_id)
);

DROP TABLE IF EXISTS user_profile;
CREATE TABLE AT_user_profile(
        profile_id_AT_profile     Varchar (25),
        employee     Varchar (25),
        PRIMARY KEY (profile_id_AT_profile,employee)
);

DROP TABLE IF EXISTS AT_user_role;
CREATE TABLE AT_user_role(
        employee     Varchar (25),
        role_id_AT_role     Varchar (25),
        PRIMARY KEY (employee,role_id_AT_role)
);

DROP TABLE IF EXISTS AT_employee;
CREATE TABLE AT_employee(
        matricule     Varchar (25),
        noms     Varchar (255),
        prenoms     Varchar (255),
        num_cni     Varchar (25),
        date_naissance     Date,
        email     Varchar (255),
        PRIMARY KEY (matricule)
);


DROP TABLE IF EXISTS AT_job_post;
CREATE TABLE AT_job_post(
        jpost_id     Varchar (25),
        jpost_name     Varchar (255),
        jpost_description     Varchar (255),
        PRIMARY KEY (jpost_id)
);


DROP TABLE IF EXISTS AT_user_password;
CREATE TABLE AT_user_password(
        password_id     integer auto_increment,
        create_date     Date,
        hash     Varchar (255),
        status     Varchar (25),
        employee     Varchar (25),
        PRIMARY KEY (password_id)
);


DROP TABLE IF EXISTS AT_profile_role;
CREATE TABLE AT_profile_role(
        description     Varchar (255),
        profile_id_AT_profile     Varchar (25),
        role_id_AT_role     Varchar (25),
        PRIMARY KEY (profile_id_AT_profile,role_id_AT_role)
);


DROP TABLE IF EXISTS AT_employee_jpost;
CREATE TABLE AT_employee_jpost(
        employee     Varchar (25),
        job_post     Varchar (25),
        description     Varchar (255),
        PRIMARY KEY (employee,job_post)
);




ALTER TABLE AT_user_password ADD CONSTRAINT FK_user_password_employee FOREIGN KEY (employee) REFERENCES AT_employee(matricule);
ALTER TABLE AT_profile_role ADD CONSTRAINT FK_AT_profile_role_profile_id_AT_profile FOREIGN KEY (profile_id_AT_profile) REFERENCES AT_profile(profile_id);
ALTER TABLE AT_profile_role ADD CONSTRAINT FK_AT_profile_role_role_id_AT_role FOREIGN KEY (role_id_AT_role) REFERENCES AT_role(role_id);
ALTER TABLE AT_employee_jpost ADD CONSTRAINT FK_AT_employee_jpost_employee FOREIGN KEY (employee) REFERENCES AT_employee(matricule);
ALTER TABLE AT_employee_jpost ADD CONSTRAINT FK_AT_employee_jpost_job_post FOREIGN KEY (job_post) REFERENCES AT_job_post(jpost_id);

ALTER TABLE AT_user_profile ADD CONSTRAINT FK_AT_user_profile_profile_id_AT_profile FOREIGN KEY (profile_id_AT_profile) REFERENCES AT_profile(profile_id);
ALTER TABLE AT_user_profile ADD CONSTRAINT FK_AT_user_profile_employee FOREIGN KEY (employee) REFERENCES AT_employee(matricule);
ALTER TABLE AT_user_role ADD CONSTRAINT FK_AT_user_role_employee FOREIGN KEY (employee) REFERENCES AT_employee(matricule);
ALTER TABLE AT_user_role ADD CONSTRAINT FK_AT_user_role_role_id_AT_role FOREIGN KEY (role_id_AT_role) REFERENCES AT_role(role_id);
