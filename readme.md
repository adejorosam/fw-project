## About Fw-Project

A student management web app built as a capstone project at Findworka Academy.

## Features

1. Creation of assignments by tutor
2. Submission of assignments by students and real time grading by tutors.
3. Installmental payment of tution fee by students and if a student does not pay, they get locked out of their account until they pay!
4. Curriculum download by students.
5. Helpful resources up for download by students.
6. Tutor can set deadline for the assignment given and if student doesn't submit before the deadline, the opportunity for submission is closed

### Installation
```
git clone https://github.com/samson1998/fw-project.git

cd file

composer install

cp .env.example .env

php artisan key:generate

php -S 127.0.0.1:8080 -t public/
```
