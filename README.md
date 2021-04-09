# TW_SkiVI_Ganea-Florin_Iosub-Ovidiu-Marian
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation</title>
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
    </header>
    <div role="contentinfo">
        <ol role="directory">
            <li><a href="#abstract">Abstract</a> </li>
            <li><a href="#introduction">Introduction</a> </li>
            <li><a href="#structure">User Interface</a>
                <ol role="structure-directory">
                    <li><a href="#structure__landing">Landing</a></li>
                    <li><a href="#structure__about">About</a></li>
                    <li><a href="#structure__paths">All paths</a></li>
                    <li><a href="#structure__log/reg">Login, Register, Recover-password</a></li>
                    <li><a href="#structure__skill-path">Skill path</a></li>
                    <li><a href="#structure__profile">Profile</a></li>
                </ol>
            </li>
            <li><a href="#use-cases">Use-cases</a>
            <ol>
                <li><a href="#use-cases__unregistered">Unregistered user case</a></li>
                <li><a href="#use-cases__unlogged">Unlogged user case</a></li>
                <li><a href="#use-cases__logged">Logged User case</a></li>
            </ol>
            </li>
            <li><a href="#objectives">Future objectives</a>
            <ol>
                <li><a href="#objectives__overview">Overview</a></li> 
                <li><a href="#objectives__db">Create a database</a></li> 
                <li><a href="#objectives__microservice">Microservice for each lesson</a></li>
            </ol> </li>
            <li><a href="#conclusion">Conclusion</a> </li>
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
        <h2>3. Structure</h2>
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
        <h3>3.4. Login, Register, Recover-password</h3>
        <p>All of these pages have the same structure, composed by some nice-animated input labels, with its useful buttons, all arranjed in a box. </p>
    </section>
    <section id="structure__skill-path" role="doc-structure">
        <h3>3.5. Skill-path</h3>
        <p>All of out 3 skills pages has this structure, composed by a title at its top, and the all the lessons with nice animated type of teach. When a lesson is clicked, a java-script carousel is dropped-down contaning the lesson's steps.</p>
    </section>
    <section id="structure__profile" role="doc-structure">
        <h3>3.6. Profile page</h3>
        <p>This page is useful for an already registered user, who wants to see their credentials, or to change them. Also, athe the bottom of his profile card, he can see the pregress trough the lessons.</p>
    </section>
    <section id="use-cases" role="doc-structure">
        <h2>4. Use-cases</h2>
        <p>Knowing that it's a web app, and each user have to take some skill-lessons and administrate them and his progress, he will need to have an account, so there are minimum 3 use-cases.</p>
    </section>
    <section id="use-cases__unregisteres" role="doc-structure">
        <h3>4.1. Unregistered user</h3>
        <p>An new user just landed on our website and its lessons sounds attractive to him. In this case, to can start them, he will need to sign-up to can see the lessons-steps, and also administrate his progress.</p>
    </section>
    <section id="use-cases__unlogged" role="doc-structure">
        <h3>4.2. Unlogged user</h3>
        <p>A user who already has an account comes back on our application to learn something new. To access his lesson-progress and un-finished lessons from our web-app, he will need to log in.</p>
    </section>
    <section id="use-cases__logged" role="doc-structure">
        <h3>4.3. Logged user</h3>
        <p>User just logged in, so he will can start a new lesson, continue a started one, administrate his profile etc.</p>
    </section>
    <section id="objectives" role="doc-structure">
        <h2>5. Future objectives</h2>
        <p>Knowing that the front-end is done, we can now focus on the back-end of our web-application. </p>
    </section>
    <section id="objectives__overview" role="doc-structure">
        <h3>5.1. Overview</h3>
        <p>We will implement the back-end using PHP programming language, also we'll use the MVC as the arhitecture of the project. </p>
    </section>
    <section id="objectives__db" role="doc-structure">
        <h3>5.2. Database</h3>
        <p>Knowing that our application will have users, with lesson-progress and credentials, we'll use a database based on MySQL language.</p>
    </section>
    <section id="objectives__microservice" role="doc-structure">
        <h3>5.3. Microservice</h3>
        <p>Knowing that each two lessons don't have anything in common, for each one we'll implement a microservice which will can be updated or modified on its own.</p>
    </section>
    <section id="conclusion" role="doc-structure">
        <h2>6. Conclusion</h2>
        <p>//TODO</p>
    </section>
</body>
</html>
