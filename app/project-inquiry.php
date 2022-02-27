<!doctype html>
<html lang="en">
    <head>
        <title>Constrata - Project Inquiry</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="project-inquiry light-header">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <div class="curve-bg">
                <img src="img/curve-2.png" alt="" />
            </div>
            <section class="hero">
                <div class="container">
                    <div class="hero__img">
                        <picture>
                            <source srcset="img/project-inquiry-hero-mobile.jpg" media="(max-width: 550px)">
                            <img src="img/project-inquiry-hero-desktop.jpg" alt="" />
                        </picture>
                    </div>
                    <div class="hero__text">
                        <div class="row no-gutters">
                            <div class="col-lg-6 offset-lg-6">
                                <h1>Project Inquiry </h1>
                                <p>Got a project, operational and staffing challenge that you need support on? Reach out. Our team of industry experts have a proven track record of success throughout their many years of experience. They have the knowledge you need because they know the nuances of operations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="contact-form">
                <div class="container">
                    <h2>Let us help guide you along the way</h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fname">First Name *</label>
                                        <input type="text" id="fname" placeholder="First Name *" />
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="lname">Last Name *</label>
                                        <input type="text" id="lname" placeholder="Last Name *" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="emailAddr">Email Address *</label>
                                    <input type="email" id="emailAddr" placeholder="Email Address *" />
                                </div>
                                <div class="col-12">
                                    <label for="companyName">Company name *</label>
                                    <input type="text" id="companyName" placeholder="Company name *" />
                                </div>
                                <div class="col-12">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" placeholder="Title" />
                                </div>
                                <div class="col-12">
                                    <label for="service">Service *</label>
                                    <select id="service">
                                        <option selected disabled>Service *</option>
                                        <option>Consulting</option>
                                        <option>Services</option>
                                        <option>Digital</option>
                                        <option>General</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="message">How We Can Help? *</label>
                                    <textarea id="message" placeholder="How We Can Help? *"></textarea>
                                </div>
                                <div>
                                    <input type="submit" id="contact-submit" value="Send" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <?php include('includes/modal.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>