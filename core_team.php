<!DOCTYPE html>
<html lang="zxx" class="theme-light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A4R INFRA :: Team</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <?php include('inc/css.php') ?>
    <style>
        .direactor p {
            margin-bottom: 6px;
        }

        .direactor ul li {
            margin-bottom: 7px;
            list-style: disc;
        }



        .row.back_ground {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
        }

        .team_c_rad {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px auto;
            padding: 15px;
            position: relative;
            width: 100%;
            max-width: 100%;
            overflow: hidden;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .team_c_rad img {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 491px;
            display: block;
            margin: 0 auto 15px auto;
            border-radius: 10px;
            object-fit: cover;
            object-position: top;
        }

        .team-info {
            text-align: center;
        }

        .team-info p.name {
            font-weight: 600;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .team-info p.pro {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }

        .team-desc {
            font-size: 14px;
            line-height: 1.5;
            text-align: justify;
        }

        .team_c_rad {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            gap: 15px;
            padding: 0px 20px;
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }

        .team_c_rad .uder_img {
            width: 100%;
            text-align: center;
        }

        .expect_item {
            width: 100%;
        }

        .widget_text img {
            width: 150px;
            height: 743px;
            object-fit: cover;
            border-radius: 50%;
            margin: 0 auto;
            display: block;
        }

        p.mb-0.det_ail {
            font-size: 15px;
        }

        .expect_item p.name b {
            font-weight: 600;
        }

        .team_c_rad img {
            width: 100%;
            display: block;
            border-radius: 10px;
            transition: transform 0.5s ease;
        }

        .team_c_rad:hover img {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            opacity: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: justify;
            padding: 20px;
            transition: opacity 0.4s ease;
            border-radius: 10px;
            overflow-y: auto;
        }

        .team_c_rad:hover .overlay {
            opacity: 1;
        }

        .overlay p {
            margin-bottom: 10px;
            font-size: 14px;
            line-height: 1.6;
        }

        .overlay p.name b {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
        }

        .overlay p.pro {
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>

<body data-spy="scroll" data-offset="70">
    <?php include('inc/header.php') ?>
    <div class="braeamcode" style="background-image:url('./assets/img/banner/team.jpg')">
        <div class="overlay">
            <div class="container">


                <!-- Heading + Subheading -->
                <h1 class="head text-light">
                    <strong>Core Team</strong>
                </h1>

            </div>
        </div>
    </div>


    <div id="service" class="four-expect-area py-5  " style="    background-color: #f0f0f0;">
        <div class="container">

            <div class="row back_ground">
                <div class="row back_ground">
                    <div class="col-12">
                        <div class="team_c_rad">
                            <img src="./assets/img/team/alok.jpg" alt="Alok Kumar Aggarwal">
                            <div class="overlay">
                                <div>
                                    <p class="name"><b>Alok Kumar Aggarwal</b></p>
                                    <p class="mb-0 pro"><b>Chairman & Managing Director – A4R Infra Pvt. Ltd.</b></p>
                                    <p class="mb-0 det_ail" style="text-align:justify">Mr. Alok Kumar Aggarwal is a
                                        B.Tech Civil Engineering and M.Tech in Highway and Traffic Engineering. With a
                                        professional journey spanning over 28 years, he has worked extensively in
                                        India’s road and highway sector, managing major infrastructure projects across
                                        the country.</p>
                                    <p class="mb-0  det_ail" style="text-align:justify">Over the years, he has
                                        successfully delivered projects worth more than ₹15,000 crores, covering
                                        expressways, national highways, railway overbridges, and performance-based
                                        maintenance contracts under NHAI, MoRTH, and various State PWDs. He has held
                                        senior leadership positions in well-known infrastructure companies, leading
                                        teams and delivering high-quality results with a focus on efficiency, safety,
                                        and compliance.</p>
                                    <p class="mb-0  det_ail" style="text-align:justify">With a deep understanding of
                                        both construction and maintenance challenges, Mr. Aggarwal established A4R Infra
                                        Pvt. Ltd. to focus on highway maintenance and asset management—a field he
                                        believes is key to preserving national infrastructure. Under his leadership, the
                                        company has quickly gained recognition for its dedicated approach to road
                                        upkeep, performance-based solutions, and operational excellence.</p>
                                    <p class="mb-0  det_ail" style="text-align:justify">He continues to guide A4R Infra
                                        with a strong emphasis on timely delivery, quality work, and long-term value for
                                        public infrastructure.</p>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="service" class="four-expect-area py-5" style="background-color: #f0f0f0;">
                <div class="container">
                    <div class="row back_ground">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/ku.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Kusum Choudhary</b></p>
                                        <p class="mb-0 pro"><b>Head-Contracts and legal, A4R Infra</b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Kusum Choudhary is a
                                            Certified Sustainability Coach & Contract specialist with over 20 years of
                                            experience in infrastructure development, project budgeting, legal drafting,
                                            regulatory compliance, contracts, arbitration, and strategic advisory. She
                                            has worked with leading infrastructure organizations across India, handling
                                            project planning, execution, legal compliance, and dispute resolution.</p>
                                        <p class="mb-0  det_ail" style="text-align:justify">As an independent
                                            consultant, she has advised on contracts, arbitration, documentation, and
                                            risk management, while also contributing to business strategy, tendering,
                                            and cost control. Beyond consultancy, she has led entrepreneurial ventures
                                            in real estate, skill development (NSDC), and infrastructure services</p>

                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/Amresh.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Amresh Kumar Singh </b></p>
                                        <p class="mb-0 pro"><b>Project Coordinator, A4R Infra</b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Amresh Kumar Singh is
                                            a highway construction expert with 17+ years of experience in
                                            National Highways and other infrastructure projects. As a Civil
                                            Engineer (B.Tech), he has independently led large-scale projects
                                            from planning to completion, specializing in construction
                                            supervision, material management, quality control, and stakeholder
                                            coordination</p>
                                        <p class="mb-0  det_ail" style="text-align:justify">Renowned for his
                                            execution-driven approach, he delivers projects on time while
                                            ensuring safety and quality, with strong knowledge of IRC, MORTH,
                                            and IS codes. At A4R Infra, he drives the mission of delivering
                                            safe, durable, and sustainable road assets through disciplined
                                            execution and on-ground expertise.</p>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/vikash.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Vikas Mishra </b></p>
                                        <p class="mb-0 pro"><b>Sr. Project manager, A4R Infra</b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Vikas Mishra is a Civil
                                            Engineer with 24+ years of experience in highways and expressways across
                                            India and abroad. He has managed large-scale projects including six-laning,
                                            greenfield expressways, and BOT-based developments, serving in senior roles
                                            such as Project Manager, Authority Engineer, and AGM.</p>
                                        <p class="mb-0  det_ail" style="text-align:justify">With strong expertise in
                                            construction supervision, quality control, pavement engineering, and road
                                            safety, he has contributed to major NHAI works and projects for global
                                            clients like ADNOC. Known for his ability to handle end-to-end site
                                            operations, he ensures timely delivery, compliance with MORTH/IRC/ISO
                                            standards, and high-quality execution in multi-crore infrastructure
                                            projects.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/nitin.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Nitin Tyagi</b></p>
                                        <p class="mb-0 pro"><b>Project Manager, A4R Infra</b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Nitin Tyagi is B.Tech in
                                            Civil Engineering with 25 years of hands-on experience across highways,
                                            expressways, airports, and high-rise buildings. He has led key packages of
                                            the Delhi–Amritsar–Katra Expressway in Punjab (EPC under Bharatmala) and
                                            Haryana (HAM), delivered balance works on the Haridwar–Dehradun corridor
                                            (NH-58/NH-72), and earlier worked on the Yamuna Expressway and the IGI
                                            Airport expansion. </p>
                                        <p class="mb-0 det_ail" style="text-align:justify">He is strong in site
                                            execution, quality control, safety, and contractor coordination. He manages
                                            drawings and document control, plans daily/weekly work, monitors manpower
                                            and equipment, checks measurements and bills, and closes snags on time. </p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/Avnish.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Avneesh Sharma</b></p>
                                        <p class="mb-0 pro"><b>Head - Human Resources and Administration, A4R Infra</b>
                                        </p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Having 12+ years in HR &
                                            Administration, Avneesh manages the complete employee lifecycle—from
                                            workforce planning, hiring, onboarding, KRAs/KPIs, performance, training,
                                            engagement, to exits—with accurate MIS and regular audits. He designs salary
                                            structures, oversees compliance with PF, ESIC, and PT & ensures payroll
                                            accuracy for multi-location teams.</p>
                                        <p class="mb-0 det_ail" style="text-align:justify">On the admin side, he handles
                                            insurance, security, fleet, vendor contracts, travel, office management, and
                                            CSR activities, while driving engagement through recognition programs and
                                            cultural events. Known for a people-first and process-driven style, he
                                            builds simple, transparent systems that ensure compliance, efficiency, and
                                            timely delivery.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/niranja.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Niranjan Kumar </b></p>
                                        <p class="mb-0 pro"><b>Project Manager -Operations & Maintenance, A4R Infra </b>
                                        </p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Having Experience more than
                                            14 years in highway asset management, Niranjan currently leads the PBMC O&M
                                            for Hyderabad–Dindi (NH-765) and has earlier managed projects like
                                            Varanasi–Shaktinagar (SH-05A) and Bharatmala corridors with GR
                                            Infraprojects. His expertise spans maintenance execution, billing, planning,
                                            MIS reporting, budgeting, and cost control.</p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Known for being organized and
                                            detail-focused, calm under pressure, able to deliver quality results, he
                                            prepares work programs, manages quick repair estimates, and coordinates
                                            teams and resources to keep roads safe, serviceable, and compliant with NHAI
                                            standards. </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/gouri.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Gouri Shankar </b></p>
                                        <p class="mb-0 pro"><b> Senior Consultant- Procurement, A4R Infra </b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify"> He is a senior procurement
                                            professional with extensive experience in roads, highways, engineering, and
                                            industrial projects. He has led vendor development and end-to-end purchasing
                                            for World Bank–funded national highway works and has set up reliable supply
                                            chains for large EPC contractors. </p>
                                        <p class="mb-0 det_ail" style="text-align:justify">His core expertise includes
                                            Strategic sourcing & vendor development for road materials and Plant &
                                            machinery procurement for highway jobs (crushers, HMP, Batching, WMM plant).
                                            Also involved in customs clearance and documentation for machines sourced
                                            from Germany, Singapore, Canada, USA, and Australia. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="team_c_rad">
                                <img src="./assets/img/team/vikasvaid.jpg" alt="">
                                <div class="overlay">
                                    <div>
                                        <p class="name"><b>Vikas Vaid</b></p>
                                        <p class="mb-0 pro"><b> Head - Accounts & Finance, A4R Infra </b></p>
                                        <p class="mb-0 det_ail" style="text-align:justify">Vikas Vaid is a seasoned
                                            finance professional with over 26 years of experience in accounting,
                                            taxation, EPC project billing, and vendor reconciliation. He has worked with
                                            leading infrastructure companies, managing multi-crore highway and power
                                            projects across India. Skilled in SAP, Tally ERP, Farvision, and Tally
                                            Prime, he brings expertise in cash flow management, statutory compliance,
                                            and internal audits. At A4R Infra, he oversees finance and accounts,
                                            ensuring strong financial discipline, operational efficiency, and smooth
                                            coordination with banks, subcontractors, and auditors. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!---end--->

        </div>
    </div>

    </div>
    </div>

    <?php include('inc/footer.php') ?>
</body>

</html>