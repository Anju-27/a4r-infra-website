<!DOCTYPE html>
<html lang="zxx" class="theme-light">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>A4R INFRA :: Incident Management</title>
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <?php include('inc/css.php') ?>
</head>

<body data-spy="scroll" data-offset="70">
  <?php include('inc/header.php') ?>
   <div class="braeamcode" style="background-image:url('./assets/img/banner/indeacate.png')">
        <div class="overlay">
            <div class="container">
                <!-- Heading + Subheading -->
                   <div class="explore-heading">
          <h1 class="text-white" style="font-weight: 900; margin-left:30px;">Incident Management</h1>
        </div>
            </div>
        </div>
    </div>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="advisor-img" data-aos="zoom-in" data-aos-duration="2000" data-aos-dealay=" 1000"
            data-aos-easing="ease-in-sine">
            <img src="assets/img/gallery/ind1.jpg" alt="Advisor" class="w100">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="advisor-content" data-aos="zoom-in" data-aos-duration="2000" data-aos-dealay=" 1500"
            data-aos-easing="ease-in-sine">
            <h2 class="pb-4 m_heading">Traffic Management — Swift & Safe</h2>

            <p class="pb-1" style="text-align: justify;">
              When something goes wrong on the highway—a crash, breakdown, fallen tree, oil spill—we act fast to spot
              it, secure the area, clear the scene, and get traffic moving again. It’s a planned, coordinated effort
              across many teams: our control room, highway patrols, towing and medical support, police, fire, and local
              authorities.
            </p>
            <p>Incidents slow traffic, raise the risk of secondary crashes, increase fuel use and emissions, and hurt
              the local economy through delays and detours. A tight incident management plan keeps people safe, shortens
              queues, and returns the corridor to normal quickly.</p>

          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-lg-6">
          <!-- card 1 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)"> Detect early</p>
            <div class="toggle-content">
              <p>24×7 control room, patrol vehicles, helpline integration, and quick alerts from field teams.</p>
            </div>
          </div>

          <!-- card 2 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)"> Respond safely</p>
            <div class="toggle-content">
              <p>On-site traffic control with cones, barricades, advance warning signs, and flagmen.</p>
            </div>
          </div>
          <!-- card 3 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)">Clear fast</p>
            <div class="toggle-content">
              <p>Tow trucks, cranes, breakdown vans, spill kits, and debris removal to reopen lanes.</p>
            </div>
          </div>
          <!-- card 4 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)">Coordinate smartly</p>
            <div class="toggle-content">
              <p>One point of contact with police, fire, ambulance, and hospitals for seamless action.</p>
            </div>
          </div>
          <!-- card 5 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)"> Restore & inform</p>
            <div class="toggle-content">

              <p>Reopen lanes step-by-step, share updates, and guide traffic with diversions where needed.</p>
            </div>
          </div>
          <!-- card 5 -->
          <div class="feature-card">
            <p class="toggle-title" onclick="toggleContent(this)"> Review & improve</p>
            <div class="toggle-content">

              <p>After-action notes, root-cause points, and simple reports to reduce future incidents.</p>
            </div>
          </div>
        </div>

        <!-- features end -->
        <div class="col-lg-6">
          <div class="advisor-img" data-aos="fade-left" data-aos-duration="1000" data-aos-easing="ease-in-sine">
            <img src="assets\img\edit\6.png" alt="Advisor" class="w100">
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    function toggleContent(element) {
      const content = element.nextElementSibling;
      if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "block";
      } else {
        content.style.display = "none";
      }
    }
  </script>

  <!-- end -->

<section class="construct-section text-center">
  <div class="container">
    <div class="row g-4">

      <div class="col-md-4">
        <div class="card-box">
          <h3>Safer roads</h3>
          <p>Avoid accidents</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <h3>Avoid accidents</h3>
          <p>Faster scene clearance and shorter delays</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <h3>Lower costs</h3>
          <p>Less fuel wastage and reduced disruption</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <h3>Cleaner outcomes</h3>
          <p>Controlled spills and proper waste disposal</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card-box">
          <h3>Continuous improvement</h3>
          <p>Lessons captured and acted on</p>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- end -->

  <?php include('inc/footer.php') ?>
</body>

</html>