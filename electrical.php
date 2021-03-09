<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/electrical1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Electrical Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The department of Electrical Engineering was
                  started in the year 1949 when the institute was
                  born. The department offers four years B.Tech.
                  degree course with an annual intake of 100
                  students. Eighteen months’ postgraduate program
                  is also offered leading to M.Tech. degree with
                  specialization in Control System and Power
                  System. The annual intake in the postgraduate
                  program is 10. The department is also looking after
                  an electrical sub-station and is maintaining a 14 Km
                  distribution line of BIT campus. The department
                  has well equipped laboratories required for
                  undergraduate and postgraduate programs. The
                  important laboratories include: Computer Lab,
                  Control System Lab, Microprocessor Lab, Electrical
                  Machines Lab, Instrumentation Lab, Circuit Lab,
                  High Voltage Lab and Electrical Workshop. The
                  prestigious million volt Atkinson High Tension
                  Laboratory of the department is considered as first
                  of its kind in India in the yesteryears.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>To offer state-of-the-art undergraduate, post graduate and doctorate programmes by providing a conducive environment towards outcome-based teaching learning process with knowledge and skill creation,suitable for contemporary and future needs of industry.</li>
                  <li>To promote creative ambience in order to generate new knowledge by conducting quality research in collaboration with Electrical, Electronics and allied industries.</li>
                  <li>To bridge the gap between industry and academia by framing curriculum and syllabi based on industrial and societal needs so that competency of the students matches the upcoming challenges in education,profession and life</li>
                  <li>To instil moral and ethical values among the students through holistic personality development so as to ensure human intellectual capacity to its full potential.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> To inculcate the attitude to solve real life engineering problems with the implication of the fundamental knowledge based on science and electrical engineering.</p>
                <p><strong>PEO2:<em> </em></strong>To impart quality technical education to students, which enables them to face challenges in industry, society and pursuing higher studies.</p>
                <p><strong>PEO3: </strong>To envisage expertise in career enhancement with industrial training and to promote leadership skills</p>
                <p><strong>PEO4: </strong>To foster values and ethics with strong foundation to undertake team work with effective communication skills.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Analog Lab
</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">  Communication Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Control Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Digital Lab High tension Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Instrumentation Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Machine Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Microprocessor Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Modeling & Simulation
Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Microcontroller Lab
Computer Aided Power
System Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Electrical Workshop</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Power Electronics Lab
PPAS Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Computation Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Basic Electrical Lab</a></li>
                  
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong> Ability to utilize the knowledge acquired from basic sciences, basic computing and electrical engineering courses to work in multi-disciplinary environment and to cater the diversified needs of industry and academia.</p>
                <p><strong>PSO2:</strong>  Ability to identify and solve different technical issues related with electrical engineering by integrating the knowledge acquired from the curriculum and industry- academia interactions.</p>
                <p><strong>PSO3:</strong> Able to demonstrate effective communication and inter-personal skills with management principles for career and professional advancement.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=4 ORDER BY teacher_contact.desn_fk DESC");
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