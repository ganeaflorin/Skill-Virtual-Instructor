# TW_SkiVI_Ganea-Florin_Iosub-Ovidiu-Marian
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1>Ski-VI</h1>
        <h2>Your personal trainer</h2>
        <h3><a href="http://skivi.great-site.net/skivi/landing/landing.php">Check it here!</a></h3>
        <dl>
            <dt>Authors</dt>
            <dd><a href="https://github.com/ganeaflorin">Ganea Florin</a> 2A5 & <a href="https://github.com/MarianIosub">Iosub Ovidiu-Marian</a> 2B4</dd>
            <dt>Coordinator</dt>
            <dd><a href="https://iampava.com/">Alexandru Pavaloi</a></dd>
            <dt>Faculty of Computer Science Iasi</dt>
            <dt>Web Tehnologies Course</dt>
                </dl>
    <div role="contentinfo">
        <ol role="directory">
            <li><a href="#1-abstract">Abstract</a> </li>
            <li><a href="#2-introduction">Introduction</a> </li>
            <li><a href="#3-user-interface">User Interface</a>
                <ol role="structure-directory">
                    <li><a href="#31-landing-page">Landing</a></li>
                    <li><a href="#32-about">About</a></li>
                    <li><a href="#33-all-paths">All paths</a></li>
                    <li><a href="#34-login-register">Login, Register</a></li>
                    <li><a href="#35-skill-path">Skill path</a></li>
                    <li><a href="#37-modify-page">Admin-page</a></li>
                </ol>
            </li>
            <li><a href="#4-use-cases">Use-cases</a>
            <ol>
                <li><a href="#41-unregistered-user">Unregistered user case</a></li>
                <li><a href="#42-unlogged-user">Unlogged user case</a></li>
                <li><a href="#43-logged-user">Logged User case</a></li>
                <li><a href="#43-admin">Admin</a></li>
            </ol>
            </li>
            <li><a href="#5-features">Functionalities</a>
            <ol>
                <li><a href="#51-overview">Register</a></li> 
                <li><a href="#52-database">Logine</a></li> 
                <li><a href="#53-microservice">Admin</a></li>
                <li><a href="#53-microservice">Page-restriction</a></li>
                <li><a href="#53-microservice">Microservices</a></li>
                <li><a href="#53-microservice">Communication with the Microservices</a></li>
                <li><a href="#53-microservice">Database</a></li>
                <li><a href="#53-microservice">AJAX</a></li>
                <li><a href="#53-microservice">SQL-injection</a></li>
            </ol> </li>
        </ol>
    </div>
    <section id="abstract" role="doc-abstract">
        <h2>1. Abstract</h2>
        <p>Sa se conceapa o aplicatie Web modulara cu rol de instructor virtual care sa ofere seturi de activitati<br> si resurse de instruire vizand invatarea/aprofundarea unor deprinderi precum dansul pe sarma,<br> limbi moarte (e.g., latina, aramaica), stiluri de auto-aparare, cantat la un instrument muzical<br> (clavecin, Teremin, tuba), supravietuire (in jungla, in camin, vehicol cosmic, cartier poluat,...),<br> proceduri de resuscitare, confectionare de origami si altele.
            <br>Fiecare deprindere va fi implementata de un microserviciu Web independent ce va fi actualizat<br> automat sau la cerere. <br>Ca studii de caz vor fi dezvoltate minim 3 astfel de microservicii.
            <br>Functionalitatile de baza ale sistemului (gestiunea instructajelor, utilizatorii interesati de invatarea<br> unor deprinderi etc.) vor fi oferite via un API adoptand paradigma REST sau GraphQL.</p>
    </section>
    <section id="introduction" role="doc-introduction">
        <h2>2. Introduction</h2>
        <p>SkiVI was created by two students enrolled in the 2nd year of Faculty of Computer Science Iasi.<br> At its base, it is a project which has to implement microservices for teaching different types of skills<br> (origami, tie knotting and preparing fast meals) proposed by the coordinator Alexandru Pavaloi<br> for the Web Technologies course.</p>
    </section>
    <section id="structure" role="doc-structure">
        <h2>3. User-Interface</h2>
        <p>The project has at its base a landing page, a page for each skill, a about one, a full paths description,<br> one for profile user interface and each one for login, sign-up, recover-password, etc.,<br> all having the same header and footer for an easy navigation experience.</p>
    </section>
    <section id="structure__landing" role="doc-structure">
        <h3>3.1. Landing page</h3>
        <p>This page's purpose is for client's landing on our web-site. It's presenting the trainer, SkiVI at its top, and then describes each skill lesson.</p>
    </section>
    <section id="structure__about" role="doc-structure">
        <h3>3.2. About</h3>
        <p>This page is an informative one, which has to present how SkiVI was created, and its creators' contact pages.</p>
    </section>
    <section id="structure__paths" role="doc-structure">
        <h3>3.3. All paths</h3>
        <p>This page is a descriptive one which presents the trainer and its history in the top, and each path in the next of it.<br> Also, this page has the role for a simple navigation over the paths.</p>
    </section>
    <section id="structure__log/reg" role="doc-structure">
        <h3>3.4. Login, Register</h3>
        <p>All of these pages have the same structure, composed by some nice-animated input labels, with its useful buttons, all arranjed in a box. </p>
    </section>
    <section id="structure__skill-path" role="doc-structure">
        <h3>3.5. Skill-path</h3>
        <p>All of out 3 skills pages has this structure, composed by a title at its top, and the all the lessons with nice animated type of teach. When a lesson is clicked, a java-script carousel is dropped-down contaning the lesson's steps.</p>
    </section>
    <section id="structure__profile" role="doc-structure">
        <h3>3.6. Admin page</h3>
        <p>This page is restricted, so it can be accesed only by admins. in this page, an admin can modify the lessons of the application, to add new lessons for different paths, etc.</p>
    </section>
    <section id="use-cases" role="doc-structure">
        <h2>4. Use-cases</h2>
        <p>Knowing that it's a web app, and each user have to take some skill-lessons and administrate them and his progress, he will need to have an account, so there are minimum 3 use-cases.</p>
    </section>
    <section id="use-cases__unregisteres" role="doc-structure">
        <h3>4.1. Unregistered user</h3>
        <p>An new user just landed on our website and its lessons sounds attractive to him. In this case, to can start them, he will need to sign-up to can see the lessons-steps.</p>
    </section>
    <section id="use-cases__unlogged" role="doc-structure">
        <h3>4.2. Unlogged user</h3>
        <p>A user who already has an account comes back on our application to learn something new. To can see our lessons, he will need to log in his account.</p>
    </section>
    <section id="use-cases__logged" role="doc-structure">
        <h3>4.3. Logged user</h3>
        <p>If a user log in his account, he will get acces to see lessons for every path.</p>
    </section>
        <section id="use-cases__admin" role="doc-structure">
        <h3>4.3. Admin</h3>
        <p>If an admin log-in in his admin account he will can modify the lessons which already exist, to add a new lesson, or to delete an existing one.</p>
    </section>
    <section id="objectives" role="doc-structure">
        <h2>5. Features</h2>
        <p>Knowing that the front-end is done, we can now focus on the back-end of our web-application. </p>
    </section>
    <section id="objectives__overview" role="doc-structure">
        <h3>5.1. Register</h3>
        <p>When an user want to create an account in our website, he will need to create an account. In the regsiter page, he have to complete username, email, password, all of these being verified in the moment when he inputs a field, so he should can create an account only if the email has an email form, the password have a minimul length etc. </p>
    </section>
    <section id="objectives__db" role="doc-structure">
        <h3>5.2. Login</h3>
        <p>If a user already have an account on our website, he will can get into it in the Login page, so there he will can to input his credentials, being verified first of all if the username exists, after that if the password corresponds to username's password.</p>
    </section>
    <section id="objectives__microservice" role="doc-structure">
        <h3>5.3. Admin</h3>
        <p>Knowing that the lessons shoul be modified or updated, whe have an admin account, who can acces the modify page to get control over the lessons.</p>
    </section>
        <section id="objectives__microservice" role="doc-structure">
        <h3>5.4. Page restrictions</h3>
        <p>We also implemented page restrictions, so an user who is not logged in the account, he will not acces the lessons and the steps for them. Also, a normal user will can not acces the admin page for the modify lessons, etc.</p>
    </section>
        <section id="objectives__microservice" role="doc-structure">
        <h3>5.5. Microservices</h3>
        <p>For every lesson from our application, we implemented a microservice which it's another server. For example the tie-microservice administrate the lessons for tie and sends it to the application. When the microservice receives a get request, it sends the items to the application, and in the application we only display them in the correct pages. When the microservice receives a post request, it will parse the post request and modify in the database the request sends by admin. </p>
    </section>
          <section id="objectives__microservice" role="doc-structure">
        <h3>5.6. Communication with the microservices</h3>
        <p>the communication with the microservices is done with Curl. So, via curl we send request to microservies, and it, depends on the request method, make what is necesarly.</p>
    </section>
        <section id="objectives__microservice" role="doc-structure">
        <h3>5.7. Database</h3>
        <p>For database we used Maria-Db. So the central application have the table for users and their credentials, and every microservice has their tables with lessons and their steps(article, image, etc.).</p>
    </section>
         <section id="objectives__microservice" role="doc-structure">
        <h3>5.8. AJAX</h3>
        <p>We used AJAX in our javascript code, so when an admin wants to modify a path, the lessons for it, and also the steps for lessons will load live, without making requests for server, so the admin will can handle the lessons easily.</p>
    </section>
        <section id="objectives__microservice" role="doc-structure">
        <h3>5.9. SQL-injection</h3>
        <p>Knowing that, every table or query that we execute in our program is parametrized, and nothing is hard-coded, out database is hard to can be accesed from outside the application.</p>
    </section>
    </header>
</body>
</html>
