<!-- Hero Slider -->
    <section id="home" class="hero">
      <div class="hero-slider">
        <div class="slide active" style="background-image: url('<?= asset('assets/Home/2.png') ?>')">
          <div class="hero-content container">
            <h1>Protecting Lives with Trusted <strong>Fire & Life Safety</strong> Solutions</h1>
            <p>BESA LIFE SAFETY PRIVATE LIMITED — We are specialists in **Fire Detection, Fire Fighting, Gas Leak Detection, Public Address (PA) and Life Safety Systems**, delivering reliable products and end-to-end solutions across **India**. Our services include **Design, Supply, Installation, Testing & Commissioning, and Annual Maintenance Services (AMC)** for industrial, commercial and residential projects, helping protect people, property and business continuity.
</p>
            <!-- <a class="btn-primary" href="#services">Explore Our Solutions</a> -->
          </div>
        </div>
         <div class="slide" style="background-image: url('<?= asset('assets/Home/3.png') ?>')">
          <div class="hero-content container">
            <!-- <h1>Industrial Grade <strong>Fire Safety</strong></h1>
            <p>Trusted systems for factories, warehouses, and commercial buildings.</p>
            <a class="btn-primary" href="#projects">View Projects</a> -->
          </div>
        </div>
      
        
    <div class="slide" style="background-image: url('<?= asset('assets/Home/1.png') ?>')">
          <div class="hero-content container">
            <!-- <h1>Industrial Grade <strong>Fire Safety</strong></h1>
            <p>Trusted systems for factories, warehouses, and commercial buildings.</p>
            <a class="btn-primary" href="#projects">View Projects</a> -->
          </div>
        </div>
      </div>
      <button class="hero-prev" aria-label="Previous slide">‹</button>
      <button class="hero-next" aria-label="Next slide">›</button>
      <div class="hero-indicators container"></div>
    </section>

    <!-- Stats -->
  

    <!-- About -->
    <section id="about" class="about-page">
      <div class="container">
        <div class="page-header">
          <div class="page-headline">ABOUT BESA LIFE SAFETY</div>
          <h2>Protecting Lives. <span>Securing Every Space.</span></h2>
          <p class="page-intro">BESA Life Safety Private Limited is a Pune-based company specializing in Fire Detection, Fire Fighting, Gas Leak Detection, Public Address (PA) and Life Safety Solutions. We deliver reliable, high-quality products and services that help protect people, property and businesses.</p>
        </div>
        <div class="about-hero">
          <div class="about-copy">
            <p>BESA Life Safety Private Limited provides end-to-end solutions including Design, Supply, Installation, Testing & Commissioning (SITC) and comprehensive after-sales support for Fire Detection, Fire Fighting, Gas Leak Detection, Public Address and Life Safety systems.</p>
            <div class="about-stats">
              <div class="about-stat-card"><strong>5+</strong><span>Years of Experience</span></div>
              <div class="about-stat-card"><strong>124+</strong><span>Projects Completed</span></div>
              <div class="about-stat-card"><strong>120+</strong><span>Happy Clients</span></div>
              <div class="about-stat-card"><strong>100%</strong><span>Quality & Safety</span></div>
            </div>
            <div class="about-actions">
              <a class="btn-secondary"  target="_blank" href="<?= asset('assets/profile/besa_profile.pdf') ?>">Download Company Profile</a>
              <a class="btn-outline" href="#contact">Our Certifications</a>
            </div>
          </div>
        
        </div>
      </div>
    </section>

    <!-- Authorized Suppliers & Products -->
    <section id="catalog" class="container">
      <h2 class="section-title">Authorized <span>Suppliers & Our Products</span></h2>
      <div class="supplier-grid">
        <div class="supplier-card">
          <a href="<?= url('eaton-products') ?>">
            <img src="<?= asset('assets/eaton-logo-small.png') ?>" alt="EATON Cooper">
            <h4>Eaton Cooper</h4>
            <p>Authorized supplier of Eaton Cooper fire alarm, detection, and public address systems, providing reliable fire alarm panels, detectors, modules, emergency communication, and life safety solutions for commercial, industrial, and residential applications.
</p>
          </a>
        </div>
        <div class="supplier-card">
          <a href="<?= url('ekavis-products') ?>">
            <img src="<?= asset('assets/EKAVIS-logo.png') ?>" alt="Ekavis">
            <h4>Ekavis</h4>
            <p>Authorized distributor for Ekavis innovative fire alarm & life safety products, offering reliable solutions for fire detection, alarm systems, emergency communication, and comprehensive life safety applications for commercial, industrial, and residential projects.
</p>
          </a>
        </div>
        <div class="supplier-card">
          <a href="<?= url('gas-detector') ?>">
            <img src="<?= asset('assets/besa-logo.png') ?>" alt="BESA">
            <h4>BESA Gas Leak Detector</h4>
            <p>Manufacturer of BESA Gas Leak Detector — accurate LPG & PNG leak detection for commercial and residential applications. BESA also manufactures Talk-Back Systems designed for reliable two-way communication, enhancing safety and emergency response in residential, commercial and industrial environments.</p>
          </a>
        </div>
      </div>
     
    </section>

    <!-- Services -->
    <section id="services" class="services container">
      <h2 class="section-title">Our <span>Services</span></h2>
<div class="services-grid service-ion">

  <!-- 1. Design & Engineering -->
  <a class="service-card-link" href="<?= url('fire-fighting-system') ?>"><article class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/design.png') ?>" alt="Design & Engineering">
    </div>
    <h3>Design & Engineering</h3>
    <p>
      Customized fire safety system design and engineering as per NBC,
      applicable standards, project requirements, and safety norms.
    </p>
  </article></a>

  <!-- 2. Supply -->
  <a class="service-card-link" href="<?= url('fire-alarm-system') ?>"><article class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/supply.png') ?>" alt="Supply">
    </div>
    <h3>Supply</h3>
    <p>
      Supply of high-quality certified fire alarm, detection, public address,
      emergency communication, and life safety products from reputed brands.
    </p>
  </article></a>

  <!-- 3. Fire Detection & Alarm -->
  <a class="service-card-link" href="<?= url('fire-alarm-system') ?>"><article id="fire-alarm-system" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/fire_detection.png') ?>" alt="Fire Detection & Alarm System">
    </div>
    <h3>Fire Detection & Alarm</h3>
    <p>
      Complete fire detection and alarm solutions including addressable and
      conventional panels, smoke and heat detectors, MCPs, modules, sounders,
      hooters, and emergency notification systems.
    </p>
  </article></a>

  <!-- 4. Fire Hydrant System -->
  <a class="service-card-link" href="<?= url('fire-hydrant-system') ?>"><article id="fire-fighting-system" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/fire_hydrant.png') ?>" alt="Fire Hydrant System">
    </div>
    <h3>Fire Hydrant System</h3>
    <p>
      Design, supply, installation, testing, and commissioning of fire hydrant
      systems including pumps, piping, hydrant valves, landing valves, hose
      reels, fire brigade inlets, and associated equipment.
    </p>
  </article></a>

  <!-- 5. Fire Sprinkler System -->
  <a class="service-card-link" href="<?= url('fire-sprinkler-system') ?>"><article id="fire-sprinkler" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/fire_sprinkler.png') ?>" alt="Fire Sprinkler System">
    </div>
    <h3>Fire Sprinkler System</h3>
    <p>
      Complete automatic fire sprinkler solutions including system design,
      piping, sprinkler heads, control valves, alarm valves, flow switches,
      testing, and commissioning for effective fire suppression.
    </p>
  </article></a>

  <!-- 6. Public Address System -->
  <a class="service-card-link" href="<?= url('pa-system') ?>"><article id="pa-system" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/public_address.png') ?>" alt="Public Address System">
    </div>
    <h3>Public Address System</h3>
    <p>
      Reliable public address and emergency communication systems for clear
      voice announcements, emergency alerts, evacuation instructions, and
      effective communication during critical situations.
    </p>
  </article></a>

  <!-- 7. Installation -->
  <a class="service-card-link" href="<?= url('fire-alarm-system#installation') ?>"><article id="installation" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/installation.png') ?>" alt="Installation">
    </div>
    <h3>Installation</h3>
    <p>
      Professional installation of fire alarm, detection, hydrant, sprinkler,
      public address, emergency communication, and other life safety systems
      by trained technical professionals.
    </p>
  </article></a>

  <!-- 8. Testing & Commissioning -->
  <a class="service-card-link" href="<?= url('fire-alarm-system') ?>"><article class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/test_commissioning.png') ?>" alt="Testing & Commissioning">
    </div>
    <h3>Testing & Commissioning</h3>
    <p>
      Complete system testing, programming, functional verification, and
      commissioning to ensure reliable performance and seamless operation.
    </p>
  </article></a>

  <!-- 9. AMC & Maintenance -->
  <a class="service-card-link" href="<?= url('fire-alarm-amc') ?>"><article id="amc" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/amc_maintenance.png') ?>" alt="AMC & Maintenance">
    </div>
    <h3>AMC &amp; Maintenance Services</h3>
    <p>
      Comprehensive annual maintenance contracts for fire alarm, hydrant,
      sprinkler and PA systems, including scheduled inspection, testing,
      troubleshooting, corrective maintenance and service reports.
    </p>
  </article></a>

  <!-- 10. Fire Audit -->
  <a class="service-card-link" href="<?= url('fire-safety-audit') ?>"><article id="fire-safety-audit" class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/fire_audit.png') ?>" alt="Fire Audit">
    </div>
    <h3>Fire Safety Audit</h3>
    <p>
      Professional fire safety audits to identify risks, review existing
      systems, assess compliance and provide a priority-based corrective action plan.
    </p>
  </article></a>

  <!-- 11. Emergency Lighting -->
  <a class="service-card-link" href="<?= url('fire-safety-audit') ?>"><article class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/emergency_lighting.png') ?>" alt="Emergency Lighting System">
    </div>
    <h3>Emergency Lighting</h3>
    <p>
      Supply, installation, testing, and maintenance of emergency lighting and
      exit lighting systems to ensure safe visibility and evacuation during
      power failures and emergency situations.
    </p>
  </article></a>

  <!-- 12. Fire Safety Consultation -->
  <a class="service-card-link" href="<?= url('fire-safety-audit') ?>"><article class="service-card">
    <div class="icon">
      <img src="<?= asset('assets/images/fire_consultation.png') ?>" alt="Fire Safety Consultation">
    </div>
    <h3>Fire Safety Consultation</h3>
    <p>
      Professional fire safety consultancy covering system planning, risk
      assessment, compliance requirements, project coordination, and practical
      recommendations for comprehensive fire protection.
    </p>
  </article></a>

</div>
      <div class="service-highlights">
        <div class="service-highlight"><i class="fa fa-user-check"></i><span>Experienced Engineers</span></div>
        <div class="service-highlight"><i class="fa fa-box-open"></i><span>Quality Products</span></div>
        <div class="service-highlight"><i class="fa fa-truck"></i><span>Timely Delivery</span></div>
        <div class="service-highlight"><i class="fa fa-headset"></i><span>24x7 Support</span></div>
        <div class="service-highlight"><i class="fa fa-globe"></i><span>PAN India Service</span></div>
        <div class="service-highlight"><i class="fa fa-smile"></i><span>Customer Satisfaction</span></div>
      </div>
    </section>

    <!-- Products -->
    <!-- <section id="products" class="products container">
      <h2 class="section-title">Our <span>Products</span></h2>
      <div class="carousel-wrap">
        <button class="carousel-prev" data-target="products" aria-label="Previous">‹</button>
        <div class="product-row carousel" data-carousel="products">
                 <div class="product-item"><img src="<?= asset('assets/products/talk_back.png') ?>" alt="Fire Alarm System"><h4>Fire Alarm Systems</h4></div>

        

        <button class="carousel-next" data-target="products" aria-label="Next">›</button>
      </div>
    </section> -->
    <section id="products" class=" products container">
      <h2 class="section-title"> Our <span>Products</span></h2>
      <div class="supplier-grid product-grid">
         <div class="supplier-card product-card">
          <a href="<?= url('gas-detector') ?>">
            <img src="<?= asset('assets/Products/GLD.png') ?>" alt="Ekavis">
            <h4>Gas Detector​</h4>
            <p>The Gas Detector Module is a reliable commercial-grade device designed for real-time detection of harmful and combustible gases. It uses advanced detection technology to provide efficient and dependable gas monitoring, with a robust alarm system that delivers clear alerts during gas leakage or hazardous conditions. The device can be integrated with external control and safety systems and features a compact, durable design suitable for various installation environments. Designed with applicable safety and regulatory requirements in mind, it is suitable for residential, commercial, and industrial applications, helping minimize risks associated with gas leakage and hazardous gases.

</p>
          </a>
        </div>
        <div class="supplier-card product-card">
          <a href="<?= url('talk-back-system') ?>">
                 <div class="talk-back-display">
    
             <img class="talk_back"  src="<?= asset('assets/Products/talk_back_panel.png') ?>" alt="BESA Talk Back control panel">
            <img src="<?= asset('assets/Products/talk_back.png') ?>" alt="BESA Talk Back unit">
</div>
            <h4>Talk Back System </h4>
            <p>BESA Talk Back System is a reliable emergency communication solution for fire and life safety applications, enabling clear two-way communication between the control panel and up to 24 zones. It features digital microphone technology, simple controls, DIP-switch addressing, and cost-effective 2-core cabling. The Ground Floor functionality is integrated into the main control panel, with optional SIM-based emergency calls and SMS alerts. Suitable for residential, commercial, and industrial premises.

</p>
          </a>
        </div>
       
      
      </div>
     
    </section>
    <!-- Partners -->
 

    <!-- Projects -->
    <section id="projects" class="projects projects-home container">
      <h2 class="section-title">Our <span>Projects</span></h2>
      <div class="projects-home-heading">
        <p>Explore our Industrial, Commercial and Residential fire and life safety projects.</p>
        <a href="<?= url('projects') ?>">View project categories</a>
      </div>
      <div class="carousel-wrap projects-home-carousel">
        <button class="carousel-prev" data-target="home-projects" aria-label="Previous project">‹</button>
        <div class="projects-row carousel" data-carousel="home-projects">
<?php foreach (PROJECTS as $project): ?>
        <article class="project-card"><img src="<?= asset($project['image']) ?>" alt="<?= e($project['name']) ?> project"><h4><?= e($project['name']) ?><small><?= e($project['type']) ?> | <?= e($project['location']) ?></small></h4><?php if ($project['description'] !== ''): ?><p><?= e($project['description']) ?></p><?php endif; ?></article>
<?php endforeach; ?>
        </div>
        <button class="carousel-next" data-target="home-projects" aria-label="Next project">›</button>
      </div>
    </section>

    <!-- CTA -->
    <!-- <section class="cta container">
      <div class="cta-inner">
        <div>
          <h3>Need Help With Fire Safety Solutions?</h3>
          <p>Talk to our experts today for the best solutions for your requirement.</p>
        </div>
        <a class="btn-ghost" href="#contact">Get In Touch</a>
      </div>
    </section> -->
