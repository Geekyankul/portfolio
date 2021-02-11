
CREATE TABLE personal_info (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    pname VARCHAR(100) NOT NULL,
    title VARCHAR(100) NOT NULL,
    img VARCHAR(200) NOT NULL,
    fb_link VARCHAR(100) NOT NULL,
    in_link VARCHAR(100) NOT NULL,
    tw_link VARCHAR(100) NOT NULL,
    git_link VARCHAR(100) NOT NULL

);

CREATE TABLE section (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    section_title VARCHAR(100) NOT NULL,
    section_description TEXT NOT NULL

);
 
CREATE TABLE about_me (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    about_title VARCHAR(100) NOT NULL,
    about_description TEXT NOT NULL,
    about_img VARCHAR(200) NOT NULL,
    button_link VARCHAR(100) NOT NULL,
    button_text VARCHAR(100) NOT NULL

);

CREATE TABLE skills (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    skill_title VARCHAR(100) NOT NULL,
    skill_description TEXT NOT NULL,
    skill_img VARCHAR(200) NOT NULL
);

CREATE TABLE works (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    work_title VARCHAR(100) NOT NULL,
    work_description TEXT NOT NULL,
    work_img VARCHAR(200) NOT NULL,
    work_category VARCHAR(100) NOT NULL

);

CREATE TABLE contact (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    c_name VARCHAR(100) NOT NULL,
    c_email VARCHAR(100) NOT NULL,
    c_subject VARCHAR(100) NOT NULL,
    c_msg VARCHAR(100) NOT NULL

);

CREATE TABLE settings (
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    s_author VARCHAR(100) NOT NULL,
    s_description VARCHAR(200) NOT NULL,
    s_keywords VARCHAR(100) NOT NULL,
    s_copytext VARCHAR(100) NOT NULL,
    s_siteemail VARCHAR(100) NOT NULL,
    s_sitepassword VARCHAR(100) NOT NULL,
    s_sitemailserver VARCHAR(100) NOT NULL,
    s_siteemailport VARCHAR(100) NOT NULL,
    s_sitesecurity VARCHAR(100) NOT NULL


);