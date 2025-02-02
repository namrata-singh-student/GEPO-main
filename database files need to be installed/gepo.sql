-- Create the Database
CREATE DATABASE gepo;

-- Use the Database
USE gepo;

-- Table for Vision, Mission, Objectives
CREATE TABLE vmo (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Table for Leadership Team
CREATE TABLE leadership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    position VARCHAR(255) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

-- Insert Example Data for VMO
INSERT INTO vmo (title, description) VALUES
('Vision', 'To connect globally, creating impactful collaborations and enriching opportunities for students, faculty, and partners.'),
('Mission', 'To foster international relationships and cultural exchanges that benefit educational and research excellence.'),
('Objectives', 'To develop global partnerships, promote diversity, and provide a platform for innovation and cultural integration.');

-- Insert Example Data for Leadership Team
INSERT INTO leadership (name, position, image_url) VALUES
('John Doe', 'Director of GEPO', '/aboutus/images/leader1.jpg'),
('Jane Smith', 'Associate Director', '/aboutus/images/leader2.jpg'),
('Michael Lee', 'Program Manager', '/aboutus/images/leader3.jpg');




CREATE TABLE organizational_structure (
    id INT AUTO_INCREMENT PRIMARY KEY,
    position VARCHAR(255) NOT NULL,
    parent_position VARCHAR(255) DEFAULT NULL
);

CREATE TABLE faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer TEXT NOT NULL
);




INSERT INTO organizational_structure (position, parent_position) VALUES
('Director', NULL),
('Associate Director', 'Director'),
('Administrative Head', 'Director'),
('Program Manager', 'Associate Director'),
('Research Coordinator', 'Administrative Head');

INSERT INTO faqs (question, answer) VALUES
('What does GEPO do?', 'We facilitate international collaborations, study abroad programs, and cultural exchange initiatives.'),
('How can I join a program?', 'Visit our programs section and submit an application through the provided forms.');
