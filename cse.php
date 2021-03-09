<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/cse1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Computer Science and Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The department of Computer Science &
                  Engineering was started in year 1987. The first
                  undergraduate batch rolled out in the year 1991.
                  Currently the department has nearly 167
                  undergraduate students including first to final
                  year. Graduates from the department are
                  recruited by both academia and industries. All over
                  the world, ex-students of department occupy top
                  positions in both academia and industries.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>To offer the state of the art of UG, PG and Doctoral programs.</li>
                  <li>To take up creative and innovative research in collaboration with various agencies to make the nation as knowledge power.</li>
                  <li>To provide an environment for students and faculties to innovate, apply and transfer knowledge as continuous teaching-learning process.</li>
                  <li>To meet the needs of ever changing society and industry through efficient and innovative technologies.</li>
                  <li>To produce valuable human resources with commitment to lifelong learning.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> The Graduate will apply fundamental knowledge of mathematics, science to identify, formulate and solve wide range of multifaceted and complex IT problems in order to cater the needs of industry and society.</p>
                <p><strong>PEO2:<em> </em></strong>To exhibit reasoning, analytical decision making and problem solving skills by applying innovative ideas, knowledge and research principles for handling dynamic real time challenges.</p>
                <p><strong>PEO3: </strong>To be able to adapt evolving technical challenges and changing career opportunities.</p>
                <p><strong>PEO4: </strong>Learn to effectively communicate ideas in oral, written and graphical form to promote collaboration with government, industries and other engineering teams in accordance with social standards and ethical practices.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>

                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Computer Architecture Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Computer Networks Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> DBMS Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Software Engineering Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Operating System Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Java Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> DAA Lab</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Apply appropriate knowledge of information technologies and employ methodologies to help an individual or organization to achieve its goals and objectives.</p>
                <p><strong>PSO2:</strong> To be ready for software industry with the ability of proper resource management and software development.</p>
                <p><strong>PSO3:</strong> Capable to evaluate and communicate the new changes in the field of information technology for an individual or organization.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=3 ORDER BY teacher_contact.desn_fk DESC");
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