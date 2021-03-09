<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/civil1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Civil Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The Department of Civil Engineering was started in
                  the year 1957.The department offers UG & PG
                  courses with Soil mechanics, Foundation
                  Engineering and Structural engineering as
                  specialization. The department also offers
                  adequate facilities for R&D work and thus provides
                  a vital impetus in growth of the state. Both
                  undergraduate and postgraduate are trained in
                  computer applications of Civil Engineering and the
                  latest software. The students of the department
                  actively pursue R&D under the guidance of faculty
                  members funded by state government.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>By inculcating the advance knowledge and modern technology.</li>
                  <li>By promoting quality educations, research, and consultancy for industrial and societal needs.</li>
                  <li>By developing leadership qualities By providing human values, ethical and moral responsibility.</li>
                  <li>By providing human values, ethical and moral responsibility.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> To provide technically efficient graduates with leadership quality.</p>
                <p><strong>PEO2:<em> </em></strong>To pursue advance knowledge in research and consultancy.</p>
                <p><strong>PEO3: </strong>To make the competent and successful engineer by applying principles of science and mathematics and modern tools.</p>
                <p><strong>PEO4: </strong>To accept the new challenges to solve the multidisciplinary projects in professional worlds with ethical and moral responsibilities.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Adv. Structural & M.O.S Lab
                  </a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Building Material Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Concrete Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Geodesy and Surveying Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Geology Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Hydraulics & W.R.E. Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Soil Mechanics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Environmental Engg. Lab</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Able to plan, analyze, design & execute and maintain cost effectiveness in civil engineering projects.</p>
                <p><strong>PSO2:</strong> Ability to conduct experiments and inculcate innovative ideas.</p>
                <p><strong>PSO3:</strong> Ability to use the existing and modern techniques, skills and modern engineering tools necessary for civil engineering practice.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=2 ORDER BY teacher_contact.desn_fk DESC");
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