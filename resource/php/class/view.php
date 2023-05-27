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

          public function userInfo(){
            $con = $this->con();
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = "SELECT `id`,`u_name`,`f_name`, `price` FROM `tbl_order`";
            $data = $con->prepare($sql);
            $data->execute();
            $result = $data;

            while ($row = $result->fetch()) {
              echo "<h6 class='text-center font-weight-light pt-0 mt-0' style='letter-spacing: ; font-size: 20px;'>click name to view information</h6>";
              echo "<table class='table table-dark table-hover table-striped col-md-6 mx-auto text-center'>";
              echo "<thead>
                      <tr>
                        <th>Name</th>
                        <th>Type</th>
                      </tr>
                    </thead><tbody>";

              echo "<tr>";

              echo "<td>";
              echo "<a class='name-link' style='color:white' href='show.php?id={$row['id']}'>";
              echo $row['u_name'];
              echo "</a>";
              echo "</td>";

              echo "<td>";
              echo "<a class='name-link' style='color:white' href='show.php?id={$row['id']}'>";
              echo $row['f_name'];
              echo "</a>";
              echo "</td>";

              echo "<td>";
              echo $row['price'];
              echo "</td>";

              echo "</tr>";

              echo "</tbody></table>";
            }
          }
        }
?>
