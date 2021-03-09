<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/mining1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Mining Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The Department of Mining Engineering, BIT Sindri was started in the
                  year 1975 by the Government of Bihar, keeping in view the vast and
                  a large variety of mineral reserves in the state of Bihar (now
                  Jharkhand). There was also an urgency to cater the need for a large
                  number of trained and skilled mining engineers in the 1970s as
                  natural consequences of nationalization of the mineral industries.
                  The department was started with an initial intake of 25 students in
                  four years’ degree course which was subsequently approved off late
                  enhancing to 49 students per year by AICTE, New Delhi
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>Provide outstanding technical education for analysis, design and operation of mining and materials systems.</li>
                  <li>Keep abreast with rapid strides of technology and improve academic standers through innovative teaching and learning processes.</li>
                  <li>Engage in quality research in Mining, materials and allied engineering areas.</li>
                  <li>Develop academic linkage with leading industries for mutual benefit.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> On successful completion of under graduation in Mining Engineering, the graduates are excepted to attain the following program educational objectives.</p>
                <p><strong>PEO2:<em> </em></strong>Apply knowledge of basic sciences and Mining Engineering to extract minerals with due safety, conservation and economy.</p>
                <p><strong>PEO3: </strong>Design and specify suitable work plans for efficient and clean mining system under varying geo - mining conditions through a deep understanding of core and allied of mining engineering.</p>
                <p><strong>PEO4: </strong>Work effectively as individual’s capacity and also and as team members or team  leader in multidisciplinary projects.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Mine Environment</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Mine Surveying</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Mine Ventilation</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Mining Machinery</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Rock Mechanics</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> System Laboratory</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Able to clearly understand the concepts and applications in the field of mining engineering, and allied areas.</p>
                <p><strong>PSO2:</strong> Able to associate the learning from the courses related to underground and opencast mine, mining method used in coal and metal mining project, mine surveying, mine environment and ventilation, rock mechanics and its application, mine safety engineering and management, planning and design of greenfield and brownfield project.</p>
                <p><strong>PSO3:</strong> Able to have capability to comprehend the technological advancements in the usage of modern design tools to analyze and design mining projects for a variety of applications.</p>
                <p><strong>PSO4:</strong> Able to possess the skills to communicate in both oral and written forms, the work already done and the future plans with necessary road maps, demonstrating the practice of professional ethics and the concerns for societal and environmental wellbeing.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=9 ORDER BY teacher_contact.desn_fk DESC");
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