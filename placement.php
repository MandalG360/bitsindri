<?php include_once('header.php'); ?>

    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="section-title">
              <h2>Placement Record</h2>
            </div>
            <table class="dept-fact">
              <thead>
                  <tr>
                      <th>SN.</th>
                      <th>Name</th>
                      <th>Company Name</th>
                      <th>CTC</th>
                      <th>Branch</th>
                      <th>Batch</th>
                      <th>Photo</th>
                  </tr>
              </thead>
              <tbody>
                  <?php 
                      $i = 1;
                      $query = mysqli_query($conn, "SELECT * FROM placement ORDER BY placement_id DESC");
                      while(@$row = mysqli_fetch_array($query)){
                  ?>
                  <tr>
                      <td><?php echo $i; $i++; ?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['c_name']; ?></td>
                      <td><?php echo $row['ctc']; ?></td>
                      <td><?php echo $row['branch']; ?></td>
                      <td><?php echo $row['batch']; ?></td>
                      <td><img src="assets/placement/<?php echo $row['image']; ?>" style="width:85px; height: 100px;"></td>
                  </tr>
                  <?php } ?>
              </tbody>
            </table>
        </div>
      </div>
    </section>

  <?php include_once('footer.php'); ?>