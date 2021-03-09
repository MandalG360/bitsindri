<?php include_once('header.php'); ?>
  <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry">

              <div class="entry-img">
                <img src="assets/img/dept/chemical1.jpg" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">Chemical Engineering</a>
              </h2>

              <div class="entry-content">
                <p>
                  The Department of Chemical Engineering,
                  established in 1956, is one of the oldest disciplines
                  at Bit Sindri. It is considered as a premier center for
                  Chemical Engineering in India by industries as well
                  as academia. The department offers four-year B.
                  Tech. degree course and postgraduate program of
                  M. Tech. with specialization in Chemical Plant
                  Design in Engineering. It has experienced and
                  qualified faculties, associated with numerous
                  industrial projects to promote research and
                  development. The department has several wellequipped laboratories such as Unit Operations
                  Lab, Process Control Lab, Petroleum Refinery
                  Engineering Lab, Plastic Technology Lab, Process
                  Engineering Lab, Chemical Engineering
                  Thermodynamics Lab etc. With talented and wellplaced students, Department of Chemical
                  Engineering holds a good association of its alumni
                  all over the world.
                </p>
              </div>
               <h2 class="entry-title">
                <a href="blog-single.html">Mission</a>
              </h2>
               <div class="entry-content">
                
                <ul>
                  <li>To impart a quality technical education in UG and PG courses.</li>
                  <li>To activate and pursue research in Thrust/Emerging Areas of Technology.</li>
                  <li>To provide consultancy services to Industries and Entrepreneurs.</li>
                  <li>To create qualified human resources to cater the needs of sound national economy through developmental activities.</li>
                  <li>To make the department a center of excellence for research and development in Chemical Engineering and related fields.</li>
                  </ul>

                <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Educational Objectives (PEOs)</strong></span></p>
                <p><strong>PEO1:</strong> To generate high quality human with fundamental knowledge resources in our core areas of chemical engineering competence and in the emerging fields of research, as well.</p>
                <p><strong>PEO2:<em> </em></strong> To make valuable contribution in technology with problem solving skills, laboratory skills, and design skills for technical careers in solving critical problems for social and economic development of the nation.</p>
                <p><strong>PEO3: </strong>To exert focused efforts to generate graduate students, competent for finding their place in the leading companies and work as an effective team member with communication and teamwork skills as well as an appreciation for ethical behavior necessary to thrive in their careers</p>
                <p><strong>PEO4: </strong> Graduates will be practiced to persist their professional development through education and personal development established on their awareness of library resources and professional societies, workshops, industrial visits, expert talks, industry interactions, etc.</p>
               </div>
            </article><!-- End blog entry -->


          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <h3 class="sidebar-title">Lab Facilities</h3>
              <div class="sidebar-item categories">
                <ul>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Fluid Mechanics Lab </a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Fluidization Engineering</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Thermodynamics Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Process Control Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Petroleum Refinery Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15"> Fluidization Engineering
Lab</a></li>
                  <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Process Engineering Lab</a></li>
                   <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Unit Operations Lab</a></li>
                    <li class="fa fa-hand-o-right text-success d-full"><a class="ml-15">Computer Lab</a></li>
                </ul>
              </div><!-- End sidebar categories-->
            </div><!-- End sidebar recent posts-->
            <div class="sidebar">

              <p><span style="color: #66a33e; font-size: 12pt;"><strong>Program Specific Objectives (PSOs)</strong></span></p>
              <div class="sidebar-item categories">
                <p><strong>PSO1:</strong>  Apply the knowledge of mathematics, science and chemical engineering basics and to solve complicated problems, critical issues in chemical Engineering and to design equipments in core chemical and allied industries.</p>
                <p><strong>PSO2:</strong> Development of new process plant with study of basic requirements and feasibility studies with knowledge in instrumentation, process dynamics and control, process design perform modelling and simulation using modern chemical tools such as CHEMCAD, MATLAB and etc.</p>
                <p><strong>PSO3:</strong>  Be prepared to work in Chemical Industries and able to identify the health, safety, legal, environmental and cultural issues and to excel in careers in the chemical, petroleum, petrochemical, pharmaceutical, food, biotechnology, energy, materials processing or other related industries and organizations.</p>
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
                      $query = mysqli_query($conn, "SELECT teacher_contact.name as 'name', teacher_contact.mob as 'mob', teacher_contact.email as 'email', designation.type as 'desn', department.name as 'dept' FROM teacher_contact LEFT JOIN (designation, department) ON (designation.desn_id=teacher_contact.desn_fk AND department.dept_id=teacher_contact.dept_fk) WHERE teacher_contact.dept_fk=1 ORDER BY teacher_contact.desn_fk DESC");
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