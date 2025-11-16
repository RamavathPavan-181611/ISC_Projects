SQL Injection Demo: Vulnerable vs Secure PHP App

This project demonstrates how SQL Injection attacks happen in real-world PHP applications and how to prevent them using prepared statements.
It includes intentionally vulnerable pages along with secure, sanitized versions for comparison.
The vulnerable login, search, and product-detail pages show how attackers can inject queries like OR 1=1 to bypass authentication or extract database information.
The secure versions use prepared statements, parameter binding, and password hashing to eliminate injection risks.
This project helps beginners understand why SQL injection occurs, how attackers exploit it, and how to defend against it using industry-standard coding practices.
Ideal for students, cybersecurity learners, and developers who want to understand the difference between insecure and secure coding in PHP + MySQL.
Run the project on localhost using mysql server and compare the behavior of vulnerable vs secure scripts.
Includes real-life case studies such as Sony (2011) and TikTok (2020) to show the actual impact of SQL injection.


