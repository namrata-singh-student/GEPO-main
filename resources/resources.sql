CREATE DATABASE resources_support_db;


USE resources_support_db;

-- Table for resources
CREATE TABLE resources (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
);

-- Table for downloadable files
CREATE TABLE downloadable_files (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    file_url VARCHAR(255) NOT NULL
);




INSERT INTO resources (type, title, description) VALUES 
('Student Resources', 'Visa Guidance', 'Visa guidance to assist with international travel requirements.'),
('Student Resources', 'Financial Aid', 'Financial aid options to support educational expenses abroad.'),
('Faculty Resources', 'Grants and Funding', 'Grants and funding application guidance.'),
('International Guidelines', 'Travel Advisories', 'Travel advisories to ensure safe and informed journeys.');


INSERT INTO downloadable_files (name, file_url) VALUES
('Forms', '/resources/pdfs/forms.pdf'),
('Brochure', '/resources/pdfs/brochure.pdf'),
('Policy Documents', '/resources/pdfs/policy-documents.pdf');
