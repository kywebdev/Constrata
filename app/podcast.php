<!doctype html>
<html lang="en">
    <head>
        <title>Constrata - Podcast</title>
        <?php include('includes/meta.php'); ?>
        <?php include('includes/favicon.php'); ?>
        <?php include('includes/styles.php'); ?>
    </head>
    <body class="insights post podcast-post dark-header">
        <?php include('includes/browserupgrade.php'); ?>
        <?php include('includes/header.php'); ?>
        <main>
            <section class="hero">
                <div class="hero__text">
                    <span class="hero__text__post-type">Podcast</span>
                    <h1>We keep our finger on the <br />pulse of the industry</h1>
                    <div class="hero__text__author">
                        <div class="hero__text__author__img">
                            <img src="img/toby-malbec.png" alt="" />
                        </div>
                        <div>
                            <span class="hero__text__author__name">Toby Malbec</span>
                            <span class="hero__text__author__date">4 months ago</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="audio">
                <div class="container">
                    <audio controls>
                        <source src="media/file_example_MP3_700KB.mp3" type="audio/mpeg">
                    </audio>
                </div>
            </section>
            <section class="article-body">
                <div class="container">
                    <article>
                        <div class="author-info">
                            <h2>Toby Malbec, Managing Director for Constrata Technology Consulting</h2>
                        </div>
                        <p>Toby manages the day-to-day operations for ConStrata and works personally with many of ConStrata’s top clients to help them leverage their technology investments and bring measurable results to the company’s business operations.</p>
                        <p>Toby Malbec is an “operational technologist” who brings over thirty years of technical and operational expertise to his clients. He began his career in the hotel industry coming up through the operations ranks before getting into the technology domain as hotels were first beginning to embrace the value of technology as a mainstream affordable operational tool. He was responsible for the design and development of some of the first PC-based Property Management Systems for small to mid-sized hotels as well as working on the design of early touchscreen-based POS systems.</p>
                        <div class="video" data-video-id="1">
                            <div class="video__container">
                                <div class="video__poster">
                                    <div class="content">
                                        <picture>
                                            <source srcset="img/video-poster-mobile.jpg" media="(max-width: 550px)">
                                            <img src="img/video-poster-desktop.jpg" alt="" />
                                        </picture>
                                        <div class="video__poster__play">
                                            <img src="img/play.svg" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="video__file">
                                    <video controls>
                                        <source src="media/16312117-preview.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                            <div class="video__caption">
                                <p>Automatic robotic hand moving and preparing tiny bits of chocolate at chocolate factory.</p>
                            </div>
                        </div>
                        <p>After ten years in hospitality, Toby was recruited into retail by Saks Fifth Avenue to head up their CRM initiatives and was responsible for designing and managing the development of several key applications including Saks Trak and their E-Client Book.</p>
                        <blockquote>In 2004, Toby assumed the role of Vice President of Business Development for Springer-Miller Systems, one of the premier hotel software companies in the world with applications designed for the resort and high-end luxury properties.</blockquote>
                        <p>In 2008, he joined the IPC (Independent Purchasing Co-Operative), the franchisee-owned arm for Subway restaurants, and was responsible for building and managing the team to build the in-house proprietary restaurant technology platform that would create a standard POS and technology platform for all restaurants worldwide. Subway is the world’s largest restaurant chain with over 35,000 units in over 100 countries.</p>
						<div class="image center">
							<img src="img/video-poster-mobile.jpg" alt="" />
							<div class="image__caption">
                                <p>Automatic robotic hand moving and preparing tiny bits of chocolate at chocolate factory.</p>
                            </div>
						</div>
                        <p>Malbec is a 1985 graduate of the University of Vermont and is completing his MBA at the Isenberg School of Business at the University of Massachusetts at Amherst.</p>
                    </article>
                    <div class="share">
                        <p>Share this</p>
                        <ul>
                            <li>
                                <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://localhost:3000/podcast.php" target="_blank" class="share-li">
                                    <img src="img/linkedin.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/sharer.php?u=http://localhost:3000/podcast.php" target="_blank" class="share-fb">
                                    <img src="img/facebook.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/share?url=http://localhost:3000/podcast.php&amp;text=We keep our finger on the pulse of the industry" target="_blank" class="share-tw">
                                    <img src="img/twitter.svg" alt="" />
                                </a>
                            </li>
                            <li>
                                <a href="mailto:?subject=Check out this podcast from Constrata.io&body=We keep our finger on the pulse of the industry: http://localhost:3000/podcast.php" class="share-em">
                                    <img src="img/email.svg" alt="" />
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="related-posts">
                <div class="container">
                    <h3>Related posts</h3>
                    <div class="related-posts__slider">
                        <div class="slide">
                            <a href="article.php">
                                <div class="related-posts__slider__img">
                                    <img src="img/pos-software-trends.jpg" alt="" />
                                </div>
                                <h2>Point-of-sale Software Trends</h2>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="article.php">
                                <div class="related-posts__slider__img">
                                    <img src="img/contactless-transactions.jpg" alt="" />
                                </div>
                                <h2>Contactless transactions in demand</h2>
                            </a>
                        </div>
                        <div class="slide">
                            <a href="article.php">
                                <div class="related-posts__slider__img">
                                    <img src="img/10-reasons.jpg" alt="" />
                                </div>
                                <h2>10 Reasons Execs Don’t Trust IT Managers</h2>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include('includes/modal.php'); ?>
        <?php include('includes/footer.php'); ?>
        <?php include('includes/scripts.php'); ?>
    </body>
</html>