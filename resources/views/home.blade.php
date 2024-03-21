<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
/* Styles for the header */
header {
    background-color: #490648; /* Change the background color of the header */
    padding: 10px 0; /* Add padding to the top and bottom of the header */
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    margin-right: 20px; /* Adjust the margin between the logo and the navigation */
}

/* Styles for the dropdown menu */
.dropdown-menu {
    background-color: #f8f9fa; /* Change the background color of the dropdown menu */
}

.dropdown-item {
    color: #212529; /* Change the text color of dropdown items */
}

.dropdown-item:hover, .dropdown-item:focus {
    background-color: C9CDE8; /* Change the background color of dropdown items on hover or focus */
}


.hero {
    background-image: url('HOME BG 2.jpg'); /* Replace 'your-background-image.jpg' with the path to your background image */
    background-size: cover;
    background-position: center;
    background-attachment:fixed;
    color: #007ba7; /* Text color for the hero content */
    padding: 450px 0; /* Adjust padding as needed */
    text-align: center;
}

.hero-content {
    max-width: 80px; /* Limit the width of the content */
    margin: 0 auto; /* Center the content horizontally */
}

.hero h1 {
    font-size: 3rem; /* Adjust the font size of the headline */
    margin-bottom: 20px; /* Add some space between the headline and subheadline */
}

.hero p {
    font-size: 1.2rem; /* Adjust the font size of the subheadline */
    margin-bottom: 30px; /* Add some space between the subheadline and the button */
}

.cta-button {
    display: inline-block;
    background-color: #007bff; /* Button background color */
    color: #fff; /* Button text color */
    padding: 10px 20px; /* Adjust padding as needed */
    border-radius: 5px; /* Add some border radius to the button */
    text-decoration: none; /* Remove underline from the button */
    transition: background-color 0.3s ease; /* Add a smooth transition for hover effect */
}

.cta-button:hover {
    background-color: #0056b3; /* Change button background color on hover */
}


/* Existing styles as provided in the previous answers */

.features {
    background-color: #429E9D;
    padding: 80px 0;
    text-align: center;
}

.features h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.feature {
    max-width: 300px;
    margin: 0 auto 40px;
}

.feature img {
    width: 80px; /* Adjust the width as needed */
    margin-bottom: 20px;
}

.feature h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.feature p {
    font-size: 16px;
    color: #666;
}

/* Existing styles as provided in the previous answers */

.about-us {
    background-color: #E91E63;
    padding: 80px 0;
    text-align: center;
    color:white;
}

.about-us h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.about-content {
    max-width: 600px;
    margin: 0 auto 40px;
}

.team {
    display: flex;
    justify-content: space-around;
}

.team-member {
    max-width: 200px;
    margin-bottom: 20px;
}

.team-member img {
    width: 100%;
    border-radius: 50%;
    margin-bottom: 10px;
}

.team-member h3 {
    font-size: 20px;
    margin-bottom: 5px;
}

.team-member p {
    font-size: 16px;
    color: white;
}

/* Existing styles as provided in the previous answers */

.how-it-works {
    background-color: #f4f4f4;
    padding: 80px 0;
    text-align: center;
}

.how-it-works h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.step {
    max-width: 300px;
    margin: 0 auto 40px;
}

.step img {
    width: 80px; /* Adjust the width as needed */
    margin-bottom: 20px;
}

.step h3 {
    font-size: 24px;
    margin-bottom: 10px;
}

.step p {
    font-size: 16px;
    color: #666;
}

/* Existing styles as provided in the previous answers */

.testimonials {
    background-color: #fff;
    padding: 80px 0;
    text-align: center;
}

.testimonials h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.testimonial {
    max-width: 600px;
    margin: 0 auto 40px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial img {
    width: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.testimonial p {
    font-size: 16px;
    color: #666;
}

.testimonial cite {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

/* Existing styles as provided in the previous answers */

.testimonials {
    background-color: #fff;
    padding: 80px 0;
    text-align: center;
}

.testimonials h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.testimonial {
    max-width: 600px;
    margin: 0 auto 40px;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial img {
    width: 80px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.testimonial p {
    font-size: 16px;
    color: #666;
}

.testimonial cite {
    display: block;
    font-weight: bold;
    margin-top: 10px;
}

/* Existing styles as provided in the previous answers */

.contact {
    background-color: #f4f4f4;
    padding: 80px 0;
    text-align: center;
}

.contact h2 {
    font-size: 28px;
    margin-bottom: 40px;
}

.contact p {
    font-size: 16px;
    color: #666;
    margin-bottom: 30px;
}

form {
    max-width: 600px;
    margin: 0 auto;
}

form label {
    display: block;
    margin-bottom: 8px;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

form button {
    background-color: #ff6600;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    background-color: #ff8533;
}

footer {
    background-color: #490648;
    color: white;
    padding: 20px 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-logo img {
    width: 80px;
}

.footer-links ul {
    list-style: none;
    display: flex;
}

.footer-links li {
    margin-right: 20px;
}

.footer-links a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

.footer-social a {
    margin-right: 15px;
}

.footer-social img {
    width: 20px;
}

.footer-social a:last-child {
    margin-right: 0;
}

/* Add some space between the content and the copyright text */
.footer-content p {
    margin-top: 20px;
    font-size: 14px;
}

{

}
/* Additional styles for the hero CTA button if needed */


    </style>
</head>
<body>

@section('header')
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">
                <img src=Marky.png alt="MarkHub Logo" class="logo" style="width:80px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="feature">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact">Contact</a>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Volleyball
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">BeachVolley</a>
                            <a class="dropdown-item" href="#">HardCourt</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Register Here!</a>
                        </div>
                    </li>
                    <!-- End Dropdown -->
                </ul>
            </div>
        </nav>
    </div>
</header>
    @show

    @section('hero')
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1></h1>
                <p></p>       
                <a href="login" class="cta-button">Get Started</a>
            </div>
            
        </div>
    </section>
    @show
    <!-- Rest of your webpage content goes here -->
    @section('feature')
    <section class="features">
        <div class="container">
            <h2>Key Features</h2>
            <div class="feature">
                <img src="19.jpg" alt="Beach Volley">
                <h3>Beach Volley</h3>
                <p>4 PERSONS IN 2 TEAMS.</p>
            </div>
            <div class="feature">
                <img src="20.jpg" alt="Hardcourt">
                <h3>Hard Court</h3>
                <p>7 PERSON IN 1 TEAM.</p>
            </div>
            <div class="feature">
                <img src="21.jpg" alt="Volleybal Sale">
                <h3>Volleybal Sale</h3>
                <p>WE SELL DIFFFERENT BALL WITH THE SAME QUALITY</p>
            </div>
        </div>
    </section>
    @show

    @section('about')
    <section class="about-us">
        <div class="container">
            <h2>About Us</h2>
            <div class="about-content">
                <p>Welcome to MarkHub, where innovation meets excellence. Our mission is to provide...</p>
                <p>Founded in [Year], MarkHub has been dedicated to [describe your mission and values]...</p>
            </div>
            <div class="team">
                <div class="team-member">
                    <img src="7.jpg" alt="Team Member 1">
                    <h3>Esteve Caya</h3>
                    <p>Co-Founder & CEO</p>
                </div>
                <div class="team-member">
                    <img src="8.jpg" alt="Team Member 2">
                    <h3>Mark Caya</h3>
                    <p>Co-Founder & CTO</p>
                </div>
            </div>
        </div>
    </section>
    @show

    @section('hiw')
    <section class="how-it-works">
        <div class="container">
            <h2>How It Works</h2>
            <div class="step">
                <img src="2.jpg" alt="Step 1 Icon">
                <h3>Step 1</h3>
                <p>Describe the first step in the process here. Use clear and concise language.</p>
            </div>
            <div class="step">
                <img src="3.jpg" alt="Step 2 Icon">
                <h3>Step 2</h3>
                <p>Explain the second step in the process. Provide any necessary details or instructions.</p>
            </div>
            <div class="step">
                <img src="4.jpg" alt="Step 3 Icon">
                <h3>Step 3</h3>
                <p>Detail the third step in the process. Make it easy for users to understand and follow.</p>
            </div>
        </div>
    </section>
    @show

    @section('testi')
    <section class="testimonials">
        <div class="container">
            <h2>What Our Users Say</h2>
            <div class="testimonial">
                <img src="14.jpg" alt="User 1 Avatar">
                <p>"I absolutely love MarkHub! It has made a significant impact on volleyball world."</p>
                <cite>- Allysa Valdez</cite>
            </div>
            <div class="testimonial">
                <img src="13.jpg" alt="User 2 Avatar">
                <p>"The features provided by MarkHub are unparalleled. It's a game-changer!"</p>
                <cite>- Jia Morado</cite>
            </div>
        </div>
    </section>
    @show 

    @section('contact')
    <section class="contact">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have questions or suggestions? Get in touch with us!</p>
            <form action="#" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Your Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit" class="cta-button">Send Message</button>
            </form>
        </div>
    </section>
    @show

    @section('footer')
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <img src="Marky.png" alt="MarkHub Footer Logo">
                </div>
                <div class="footer-links">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <a href="#" target="_blank" rel="noopener noreferrer"><img src="IC1.jpg" alt="Facebook"></a>
                    <a href="#" target="_blank" rel="noopener noreferrer"><img src="IC2.jpg" alt="Twitter"></a>
                    <a href="#" target="_blank" rel="noopener noreferrer"><img src="IC3.jpg" alt="Instagram"></a>
                </div>
            </div>
            <p>&copy; 2024 MarkHub. All rights reserved.</p>
        </div>
    </footer>
    @show

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>