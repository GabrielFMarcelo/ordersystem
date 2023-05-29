<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/ordersystem/resource/php/class/core/init.php';

  class view extends config{
    public function collegeSP2(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `collegeschool`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->college_school.'." value="'.$row->college_school.'">'.$row->college_school.'</option>';
                  echo 'success';
                }
        }

          public function viewTableData(){
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_order`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data->fetchAll(PDO::FETCH_ASSOC);
            echo "<h3 class='mb-4 mt-5'> User </h3>";
            echo "<table class='table table-dark table-striped table-sm'>";
            echo "<thead>
                    <tr>
                      <th>Name</th>
                      <th>Type</th>
                      <th></th>
                    </tr>
                  </thead><tbody>";
                  foreach ($result as $data) {
                    echo "</tr>";
                      echo "<td><a class='' href='show.php' target='_blank'>$data[name]</a></td>";
                        echo "<td>$data[type]</td>";
                    echo "</tr>";
                  }
            echo "</tbody></table>";
          }

          public function showDetails($id){
            $con = $this->con();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = "SELECT * FROM `tbl_order` WHERE id = $id";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;
            // Output the data for the specified ID
            foreach ($result as $data) {

                    echo $data['f_name'];
                    echo $data['u_name'];
                    echo $data['price'];
            }
          }

          public function totalPrice(){
            $user = new User();
            $nameMe = $user->data()->name;
            $con = $this->con();
            $sql = "SELECT SUM(price) AS sum FROM tbl_order WHERE name = '$nameMe'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;

            while ($row = $result->fetch()) {
              echo $row['sum'];
            }
          }

          public function showFood(){
            $user = new User();
            $nameMe = $user->data()->name;
            $con = $this->con();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = "SELECT `id`, `name`, `f_name`, `price` FROM `tbl_order` WHERE name = '$nameMe'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;

            echo "<div class='container mt-5 pt-5 mb-5'>";
            echo "<div class='card col-md-10 border border-dark rounded w-75 mx-auto text-center'>";
            echo "<h2 class='text-uppercase mt-4'>DIGITAL Receipt</h2>";
            echo "<h6 class='text-uppercase mb-5 text-muted'>Bill to</h6>";
            while ($row = $result->fetch()) {
              echo "<table class='pt-5 table table-hover table-bordered border-black border col-md-10 mx-auto text-center'>";
              echo "<thead class=''>
                      <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Price</th>
                        <th>Action</th>
                      </tr>
                    </thead><tbody>";

              echo "<tr>";

              echo "<td>";
              echo $row['name'];
              echo "</td>";

              echo "<td>";
              echo $row['f_name'];
              echo "</td>";

              echo "<td>";
              echo "₱" . $row['price'];
              echo "</td>";

              echo "<td>
                      <a class='btn btn-danger btn-sm' name='delete' href='cart.php?delete=$row[id]'> Delete Order </a>
                    </td>";

                    if (isset($_GET['delete'])) {
                      header("Location: cart.php");
                    }

              echo "</tr>";

              echo "</tbody></table>";
            }
            echo "</div>";
          }

          public function showTable(){
            $user = new User();
            $nameMe = $user->data()->name;
            $con = $this->con();
            $sql = "SELECT * FROM `tbl_tn` WHERE name = '$nameMe'";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;

            echo "<div class='container mt-5 pt-5 mb-5'>";
            echo "<div class='card col-md-10 border border-dark rounded w-75 mx-auto text-center'>";
            echo "<h2 class='text-uppercase mt-4'>Checkout Information</h2>";
            echo "<h6 class='text-uppercase mb-5 text-muted'>Your order has been processed successfully</h6>";
            while ($row = $result->fetch()) {
              echo "<table class='pt-5 table table-hover table-bordered border-black border col-md-10 mx-auto text-center'>";
              echo "<thead class=''>
                      <tr>
                        <th>Name</th>
                        <th>Table No.</th>
                      </tr>
                    </thead><tbody>";

              echo "<tr>";

              echo "<td>";
              echo $row['name'];
              echo "</td>";

              echo "<td>";
              echo $row['table'];
              echo "</td>";

              echo "</tr>";

              echo "</tbody></table>";
            }
            echo "</div>";
          }


}
