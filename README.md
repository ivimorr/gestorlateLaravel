<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>
            GestorLate    
            <img src="gestorLate/public/imagenes/logo/Logo-Letra-Morada2-removebg-preview.png"  width="5%" height="0%" margin-top="45px" alt="Gestorlate(Logo)"  style>
        </h1>
        <p> GestorLate is a web platform designed to simplify the daily management of small hospitality businesses.
        It allows owners to control key aspects — such as suppliers, products, and orders — from anywhere and at any time.<br>
        The system provides full CRUD (Create, Read, Update, Delete) functionality through an intuitive and responsive interface.
        GestorLate’s architecture is designed for maintainability and extensibility, making it easy to integrate new modules or adapt the platform to different business needs.
        <h2>✨ Technologies used </h2>
        <h3>Backend</h3>
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Logo.min.svg/176px-Logo.min.svg.png?20200603074624" width="15%" height="auto" alt="Blade">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src=" https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png?" width="10%" height="auto" alt="PHP">
        </div>
        <h3>Frontend</h3>
        <div> 
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" width="10%" height="auto" alt="JavaScript">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://www.svgrepo.com/show/303672/laravel-1-logo.svg" width="10%" height="auto" alt="Blade">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" width="10%" height="auto" alt="Bootstrap">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ab/Official_CSS_Logo.svg/960px-Official_CSS_Logo.svg.png?20250115194431" width="10%" height="auto" alt="CSS3">
        </div>
        <h3>Database</h3>
        <img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/mysql_original_wordmark_logo_icon_146417.png" width="20%" height="auto" alt="MySQL">
        <hr>
        <h3>Development Tools</h3>
        <div>
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/PhpStorm_Icon.png" width="12%" height="auto" alt="PHPStorm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="https://cdn.icon-icons.com/icons2/2429/PNG/512/github_logo_icon_147285.png" width="12%" height="auto" alt="GitHub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- <img src="https://cdn.worldvectorlogo.com/logos/postman.svg" alt="Postman" width="12%" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Docker_%28container_engine%29_logo.png" width="45%" height="auto" alt="Docker">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <h2>🚀 Features</h2>
        <ul>
            <li><strong>Management:</strong>Efficiently manage your business data with full CRUD (Create, Read, Update, Delete) operations 📊.</li>
            <li><strong>Remote Access:</strong>Add, edit, or review your products, suppliers, and orders from anywhere 🌐💼</li>
            <li><strong>Data Centralization:</strong> Keep all key business information in one place, accessible anytime 🗂️🔍</li>
            <li><strong>User-Friendly Interface:</strong> Clean, intuitive, and responsive design powered by Bootstrap and CSS 🖥️📱🎨.</li>
            <li><strong>Web Accessibility:</strong> Built with accessibility in mind to ensure a smooth experience for all users♿️🧩🌈.</li>
        </ul>
        <h2>📍 The process</h2>
        <p>I began by validating the business concept to ensure there was a real market need. Once the idea was justified, I defined the business model, analyzing differentiation, market segmentation, product type, and cost structure. </p>
        <p>With the business groundwork done, I moved on to development, starting with the E/R model to design the database structure. I then created migrations, models, and controllers, refining them progressively while building the frontend interface.</p>
        <p>To support testing during development, I used factories to generate sample data. The interface was built using Blade templates, partials (headers and footers), and reusable layouts, with routes defined in <strong>web.php.' </strong></p>
        <p>Finally, I implemented role-based access control with Middleware, ensured CSRF (Cross-Site Request Forgery) protection for secure form handling, and deployed the application on OVHcloud (currently offline).</p>
        <h2>🎬 Demo / Screenshot</h2>
        <div>
            <a href="https://youtu.be/Qm4JCvGqzxM" target="_blank">
                <img src="https://img.youtube.com/vi/Qm4JCvGqzxM/0.jpg"
                    alt="Watch the demo"
                    style="max-width:100%; height:auto; border: solid grey  2px; border-radius:3px;   ">
            </a>
        <h2>🚦 Instalation</h2>
        <ol>
            <li>Clone the repository:
            <pre><code>git clone https://github.com/ivimorr/gestorlateLaravel.git</code></pre>
            </li>
            <li>Navigate to the folder containing the docker-compose.yml file:
            <pre><code>cd gestorlateLaravel</code></pre>
            </li>
            <li>Run Docker commands and access the container console:
            <pre><code>docker-compose up --build</code></pre>
            <pre><code>docker-compose up -d</code></pre>
            <pre><code>docker-compose exec web bash</code></pre>
            </li>
            <li>Go to the root folder of the project:
            <pre><code>cd gestorLate</code></pre>
            </li>
            <li>Install backend dependencies with Composer:
            <pre><code>composer install</code></pre>
            </li>
            <li>Install frontend dependencies with npm:
            <pre><code>npm install</code></pre>
            </li>
            <li>Set up the .env file with your database credentials:
            <pre><code>
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=databaseName
            DB_USERNAME=username
            DB_PASSWORD=password
            </code></pre>
            </li>
            <li>Run migrations and seeders for the database:
            <pre><code>php artisan migrate --seed</code></pre>
            </li>
            <li>Compile assets with Vite:
            <pre><code>npm run dev</code></pre>
            </li>
            <li>Start the development server:
            <pre><code>php artisan serve</code></pre>
            </li>
        </ol>
        </div>
    </body>
</html>


