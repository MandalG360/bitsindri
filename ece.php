<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/it1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Electronics & Communication Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  B.I.T. SINDRI became a pioneering institution of
                  India heralding country towards rapid
                  development in Telecom, since 1957 (When this
                  Department was established). We have had
                  eminent personalities in the faculty. The name was
                  subsequently changed to E.C.E. Our alumni have
                  added feathers in the cap of BIT's rich history by
                  making a mark in the industrial sphere. The
                  students strive to keep the lamp burning and
                  follow the path to success.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>To prepare the students for a successful career by blending theoretical knowledge and practical skills with employability and entrepreneurial traits by offering UG, PG and Doctoral program in different domains of Electronics & Communication Engineering.</li>
                  <li>To establish state of art laboratory and research facilities for academic excellence and promotion of quality teaching as well as learning process.</li>
                  <li>To inculcate team spirit and leadership qualities and produce socially acceptable engineers with ethical and human values.</li>
                  <li>To contribute to the country and the society at large by enhancing the interaction between academia and industries for addressing the need of the mankind.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> Students will be able to apply knowledge of mathematics, science and engineering in the relevant field.</p>
                <p><strong>PEO2:<em> </em></strong>Students will be prepared to pursue career choices in Electronics engineering, allied and interdisciplinary fields of industries and renowned educational institutes for pursuing higher education that benefit from a strong background in applied sciences or engineering.</p>
                <p><strong>PEO3: </strong>Students will be able to attain the qualities of professional leadership to deliver effectively in research as well as multidisciplinary team and domains.</p>
                <p><strong>PEO4: </strong>Students who graduate should have ethical and moral behavior.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Basic Electronics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Analog Electronics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> TSSN Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Digital Electronics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> DSP Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Digital Communication Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Microprocessor Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Microwave Engineering Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> VLSI Design Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Communication System Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> CEDT/Project Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Simulation Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Internet of Things</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Analyze specific engineering problems relevant to Electronics & Communication Engineering by applying the knowledge of basic sciences, engineering mathematics and engineering fundamentals.</p>
                <p><strong>PSO2:</strong> Ability to develop design and commission electronics and communication systems and apply modern software tools.</p>
                <p><strong>PSO3:</strong> Develop necessary soft skills, aptitude and technical base to work in an existing electronics engineering industry or establish an entrepreneurial startup.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=5 ORDER BY teacher_contact.desn_fk DESC");
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