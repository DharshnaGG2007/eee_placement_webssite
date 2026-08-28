# How to Run Locally
 
## Step 1 — Clone the Repo
 
```bash
git clone https://github.com/Ashaf2801/eee_placement_webssite.git
cd eee_placement_webssite
```
 
## Step 2 — Set Up the Database
 
- Install [XAMPP](https://www.apachefriends.org/) (or WAMP)
- Start **Apache** and **MySQL** from the XAMPP Control Panel
- Copy the project folder to `C:/xampp/htdocs/`
- Import the SQL database via `http://localhost/phpmyadmin`
 
## Step 3 — Configure `.env` / `config.php`
 
- Open `config.php` and set your database credentials:
  - host
  - username
  - password
  - database name
 
## Step 4 — Run the PHP Site
 
Open your browser and go to:
 
```
http://localhost/eee_placement_webssite/
```
 
## Step 5 — Run the Python Part (Chatbot)
 
```bash
pip install -r requirements.txt   # if a requirements.txt exists
python app.py
```
 
## Prerequisites
 
- XAMPP (for PHP + MySQL)
- Python 3.x
- pip
 


File access was denied.
