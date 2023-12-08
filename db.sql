CREATE database ujianpweb;

use ujianpweb;

CREATE TABLE data_mahasiswa(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    kelas VARCHAR(255) NOT NULL,
    npm VARCHAR(255) NOT NULL
);


INSERT INTO data_mahasiswa VALUES ('1', 'Kevin Oktavian', '3IA15', '50421726');