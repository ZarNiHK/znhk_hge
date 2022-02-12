<?php include('header.php');?>
  <img src="images/gymequipment.jpg" class="img-fluid" alt="responsive design">
  <div class="container py-3">
  <div class="row">
    <div class="col-md-7">
      <h3>
        How Can We Help You?
      </h3>
      <p>
        We are willingly to help you If you want to know something about fitness.
      </p>
    </div>
  </div>
</div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
           include('dbconfig.php');

           $sql = "SELECT * FROM faq";
           $sql = "SELECT faq.*,users.firstname,users.surname FROM `faq` INNER JOIN users ON faq.user_id = users.id";

           $result = $conn->query($sql);
        ?>
        <?php
                    if($result->num_rows > 0)
                    {
                ?>
                        <?php
                            while($row = $result->fetch_assoc())
                            {
                        ?>
                          <div class="card">
                            <div class="card-header">
                            <?php echo $row['firstname'].'-'.$row['surname'];?>
                            </div>
                            <div class="card-body">
                            <blockquote class="blockquote mb-0">
                            <p><?php echo $row['question'];?></p>
                             <footer class="blockquote-footer">
                            <?php echo $row['answer'];?>
                             </footer>
                            </blockquote>
                            </div>
                          </div>

                        <?php
                            }
                        ?>
                    <?php
                    }else{
                        echo "There is no records.";
                    }
                ?>
      </div>
    </div>
  </div>
<div class="container py-4">
  <div class="row">
    
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15244.027331800353!2d23.9665945946289!3d61.47178148318915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x468f1f22420c88ad%3A0xc5b29bdb47861e4e!2sKuntosali%20Fressi%2024h%20Lentola!5e0!3m2!1sen!2smm!4v1642577400817!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
</div>
<?php include('footer.php');?>