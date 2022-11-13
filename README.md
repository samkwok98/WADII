# G1T5 WADII Project

<h2>AGTT Traditional Chinese Medicine Clinic</h2>

<a name="readme-top"></a>
<h3>Table of Contents</h3>
<ol>
  <li>
    <a href="#getting-started">Getting Started</a>
    <ul>
      <li><a href="#prerequisites">Prerequisites</a></li>
      <li><a href="#installation">Installation</a></li>
    </ul>
  </li>
  <li>
    <a href="#credits">Built With</a>
  </li>
</ol>

## Getting Started
### Prerequisites

This is the list of software you require to download.
1. Download and Install [Python 3.11.0](https://www.python.org/downloads/)
2. MySQL Database and Apache Web Server according to your Operating Systems <br/>
Windows - [WAMPP 3.2.6](https://www.wampserver.com/en/download-wampserver-32bits/)<br/>
MAC/LINUX - [XAMPP 7.4.30](https://www.apachefriends.org/download.html)

### Installation

Install and set up the app with the following instructions
1. Clone or Download the repo to Apache Web Server directory
  ```sh
    1. Clone or Download the repository
    2. Shift the repo to the Apache Web Server directory
    The default WAMP Web Server directory for x64 bit will likely be C:\wamp64\www    
    The default XAMPP Web Server directory for both x32 and x64 will likely be C:\xampp\htdocs
  ```
2. Import SQL Scripts
  ```sh
    1. Start your XAMPP or WAMP server
    2. Start Apache Service
    3. Start MySQL Service
    3. Launch PhpMyAdmin
    2. Click on Import
    3. Navigate to /database folder and import the file agtt.sql
  ```
3. Installation of Chatbot Modules
  ```sh
    1. Open Command Prompt
    2. Navigate to the root directory of the project (i.e. cd c:\wamp64\www\)
    3. Update your pip version, type 'python -m pip install --upgrade pip'
    4. Install flask-cors type 'pip install torch Flask torchvision nltk' 
    5. Install virtualenv, type 'pip install virtualenv'
    6. Create virtualenv, type 'virtualenv env'
    7. Activate virtualenv virtualenv, type 'Your path\env\Scripts\activate'
    8. Go into python env, type 'python'
    9. Import the nltk lib, type 'import nltk'
    10. Download punkt, type 'nltk.download('punkt')'
  ```
4. Running the Application
  ```sh
    1. For chatbot function
    1.1. Open Command prompt in chatbot folder, type 'app.py'
    2. For the application
    2.1. Go into agtt folder, the home page index.php will be automatically loaded
  ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>

### Demo Accounts
1. Admin Account 
   Name: admin
   Password: admin1234

2. Patient
   Name: Sam
   Password: 12345678

3. PayPal Sandbox Account (for use in Store Page PayPal payment)
    Username: sb-rh0ga22168566@personal.example.com
    Password: test12345


<p align="right">(<a href="#readme-top">back to top</a>)</p>

## Credits
[![Vue][Vue.js]][Vue-url][![Bootstrap][Bootstrap.com]][Bootstrap-url][![Python][Python.org]][Python-url][![PHP][php.net]][php-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- MARKDOWN LINKS & IMAGES -->
[product-screenshot]: images/screenshot.png
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[Python.org]: https://img.shields.io/badge/-Python-blue?style=for-the-badge
[Python-url]: https://www.python.org/ 