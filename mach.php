<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/mach1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Mechanical Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The department of Mechanical Engineering was
                  started in the year 1949 when the institute was
                  born. The department offers four years B.Tech
                  degree course with an annual intake of 105
                  students. The two year postgraduate program is
                  also offered leading to M.Tech degree course with
                  specialization in Heat Power Engineering, machine
                  Design and Production Technology. The annual
                  intake in the postgraduate program is 75.
                </p>
                <p>
                  The department has well equipped laboratories
                  required for undergraduate & post graduate
                  programs. The important laboratories include:
                  Strength of Materials, Applied Mechanics, Heat
                  Engine, Hydraulics, Aerodynamics, Heat and Mass
                  Transfer, Solar Energy, Tribology, Industrial
                  Engineering Lab etc. The department has a huge
                  workshop consisting of various units like
                  Carpentry, Smithy, foundry, Machine Shop etc.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>To offer state-of-the-art undergraduate, post graduate and doctoral programs in mechanical engineering</li>
                  <li>To generate new knowledge by engaging in cutting edge research and development in mechanical engineering of new technology.</li>
                  <li>To provide conducive environment for collaborative projects with academia and industries.</li>
                  <li>To Promote innovation and entrepreneurship.</li>
                  <li>To develop professional skills with ethical values.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> Mechanical engineering graduates will have strong fundamental technical knowledge and will be capable to develop core competency in diversified areas such as thermal engineering, design, production, industrial engineering and allied fields with the use of various software tools like flow and thermal analysis etc. to expand their knowledge horizon and inculcate lifelong learning.</p>
                <p><strong>PEO2:<em> </em></strong>Mechanical engineering graduates will have effective communication, leadership, team building, problem solving, decision making skills, and software and creative
                skills by understanding contemporary issues there by contributing to their overall personality and career development.</p>
                <p><strong>PEO3: </strong>Mechanical engineering graduates will practice ethical responsibilities and service towards their peers, employers, society and follow these precepts in their daily life.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Aerodynamic Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Applied Mechanics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Automobile Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Heat Engine Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Heat & Mass Transfer Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Hydraulics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Solar Energy Lab</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Graduates will demonstrate the knowledge of applied mathematics and advanced software tools for thermal, design specification, development such as fabrication, analysis such as testing and operation of the physical systems, components and processes involved in mechanical engineering.</p>
                <p><strong>PSO2:</strong> Graduates will demonstrate the knowledge, skill and attitude to analyse the cause and effects on machine elements, processes and systems.</p>
                <p><strong>PSO3:</strong> Able to pursue a career in mechanical and interdisciplinary fields.</p>
              </div><!-- End sidebar categories-->
            </div>
            </div><!-- End sidebar -->
            <!-- End sidebar recent posts-->

            </div>
          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="section-title">
              <h2>Faculties</h2>
            </div>
            <table class="dept-fact">
              <thead>
                  <tr>
                      <th>SN.</th>
                      <th>Name</th>
                      <th>Designation</th>
                      <th>Department</th>
                      <th>Mobile</th>
                      <th>Email</th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                      $i = 1;
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=7 ORDER BY teacher_contact.desn_fk DESC");
                      while(@$row = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['desn']; ?></td>
                      <td><?php echo $row['dept']; ?></td>
                      <td><?php echo $row['mob']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                  </tr>
                  <?php } ?>
              </tbody>
            </table>
        </div>
      </div>
    </section>

  <?php include_once('footer.php'); ?>