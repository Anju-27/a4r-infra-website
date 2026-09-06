<!DOCTYPE html>
<html lang="zxx" class="theme-light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A4R INFRA :: Team</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <?php include('inc/css.php') ?>
    <style>
        .team-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .team-title {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
            color: #333;
        }

        .team-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
        }

        .team-content {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .team-content h3 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
            color: #222;
        }

        .team-content h5 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #666;
        }

        .team-content p {
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 15px;
            color: #444;
            text-align: justify;
        }
        .profile-wrapper {
            margin-right: 30px;
            position: relative;
            display: inline-block;
            z-index: 1;
        }

        .profile-wrapper::after {
            content: "";
            position: absolute;
            top: 30px;
            left: 30px;
            right: -30px;
            bottom: -30px;
            background: #748398;
            border-radius: 6px;
            z-index: 0;
        }

        .profile-wrapper img {
            width: 100%;
            height: 500px;
            position: relative;
            z-index: 1;
            border-radius: 4px;
            display: block;
        }
    </style>
</head>

<body data-spy="scroll" data-offset="70">
    <?php include('inc/header.php') ?>
<div class="braeamcode" style="background-image:url('./assets/img/banner/team.jpg')">
        <div class="overlay">
            <div class="container">


                <!-- Heading + Subheading -->
                  <div class="explore-heading">
          <h1 class="text-white" style="font-weight: 900; margin-left:30px;">Chairman's Message</h1>
        </div>
            </div>
        </div>
    </div>
    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            
            <div class="row g-4 align-items-stretch">
                <!-- Left: Image -->
                <div class="col-md-5 team-img">
                    <div class="profile-wrapper">
                        <img src="./assets/img/team/alok.png" alt="Alok Kumar Aggarwal">
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="col-md-7">
                    <div class="team-content">
                        <h3>Alok Kumar Aggarwal</h3>
                        <h5>Chairman & Managing Director – A4R Infra Pvt. Ltd</h5>
                        <p>With nearly three decades of leadership in India’s infrastructure sector, I’ve come
                            to realize that the true strength of a nation’s highways lies not just in how they
                            are built, but in how well they are maintained.</p>
                        <p>A4R Infra was born out of this belief, that construction and maintenance go hand in
                            hand. Quality construction sets the foundation; disciplined maintenance protects that
                            investment.</p>
                        <p>Our leadership brings decades of experience in national expressways, state highways,
                            and major corridor upkeep. From routine repairs to large-scale Performance-Based
                            Maintenance Contracts (PBMC), and from strengthening and widening to structure and
                            drainage works, our work is guided by deep field knowledge, strong planning, and an
                            unwavering commitment to safety and quality.</p>
                        <p>At A4R Infra, we don’t just maintain roads—we build them well and keep them better.
                            We enhance asset life, optimize their performance, and protect public investment.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('inc/footer.php') ?>
</body>

</html>